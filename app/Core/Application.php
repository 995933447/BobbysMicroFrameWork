<?php
namespace App\Core;

/**
 * 框架核心引擎
 */
class Application extends \Bobby\Component\Contanier\Contanier
{

	public $isDevelopment = false;	//标识是否为开发者模式

	public $services = [];	//已解析路由

	public $defferProvides = [];	//延迟加载的服务提供者

	public $isBooted = false;	//标识框架是否已启动完成

	/**
	 * [$bootstrappers 框架启动阶段启动组件]
	 * @var [type]
	 */
	private $bootstrappers = [
		'Bobby\\Component\\Bootstrap\\ConfigHandle',
		'Bobby\\Component\\Bootstrap\\LogHandle',
		'Bobby\\Component\\Bootstrap\\ExceptionHandle',
		'Bobby\\Component\\Bootstrap\\RegisterProviderHandle',
		'Bobby\\Component\\Bootstrap\\ProxyHandle',
		'Bobby\\Component\\Bootstrap\\BootProviderHandle'
	];

	private $configPath = __DIR__ . '/../Config';

	private $configCacheFile =   __DIR__ . '/../Cache/config.php';

	/**
	 * [bootstrap 框架启动]
	 * @return [type] [description]
	 */
	public function boot()
	{
		foreach ($this->bootstrappers as $bootstrapper) {
			$this->make($bootstrapper)->boot($this);
		}
	}

	/**
	 * [getConfigurations 加载配置文件]
	 * @return [type] [description]
	 */
	public function getConfigurations()
	{
		if(file_exists($this->configCacheFile)) {
			$configurations = require $this->configCacheFile;
		} else {

			foreach (scandir($this->configPath) as $path) {
				if(is_file($configuration = $this->configPath . '/' . $path)) {
					$configurations[basename($configuration, '.php')] = require $configuration;
				}
			}

			if(isset($configurations['app']['config_cache']['is_open']) && $configurations['app']['config_cache']['is_open']) {
				$cacheConfigurations = var_export($configurations, true);
				$cacheConfigurations = <<<str
<?php
	return {$cacheConfigurations};
str;
				is_dir($cachedir = dirname($this->configCacheFile)) || mkdir($cachedir, 0777, true);
				file_put_contents($this->configCacheFile, $cacheConfigurations);
			}

		}
		if(isset($configurations['app']['debug']) && $configurations['app']['debug']) $this->isDevelopment = true;

		return $configurations ?? [];
	}

	/**
	 * [config 获取配置项]
	 * @param  [type] $key [description]
	 * @return [type]      [description]
	 */
	public function config($key)
	{
		return $this->make('\\Bobby\\Contract\\Config\\Config')->get($key);
	}

	/**
	 * [register 从服务提供器中注册服务到应用中]
	 * @param  [type] $provider [description]
	 * @return [type]           [description]
	 */
	public function register($provider)
	{
		if(isset($this->services[$provider])) return;

		if(method_exists($provider, 'register'))
		{
			 ($instance = new $provider($this))->register();
		} else {
			return;
		}

		$this->services[$provider] = $instance;

		if($this->isBooted) $instance->boot();
	}

	/**
	 * [make 解析服务]
	 * @param  [type] $abstract [description]
	 * @param  [type] $parameters [description]
	 * @return [type]           [description]
	 */
	public function make($abstract, array $parameters = [])
	{
		if(isset($this->defferProvides[$abstract])) {
			$this->register($this->defferProvides[$abstract]);
			unset($this->defferProvides[$abstract]);
		}

	   return parent::make($abstract);
	}

	/**
	 * [responsePipeline 响应流水线]
	 * @param  [type] $request [description]
	 * @return [type]          [description]
	 */
	public function responsePipeline($request)
	{
		//绑定请求实例
		$this->instance('Request', $request);

		//根据请求进行路由寻址
		$route = $this->findRoute($request);

		//解析目标地址路由
		$destination = $this->runRoute($route);

		//包装响应结果
		return $this->throughWrappers($route['wrappers'] ?? null, $destination);

	}

	/**
	 * [findRoute 路由寻址]
	 * @param  [type] &$request [description]
	 * @return [type]           [description]
	 */
	private function findRoute(&$request)
	{
		$method = $request->server('request_method');

		$route = $this->make('\\Bobby\\Contract\\Route\\Route')->findRoute($method, $request->uri());

		$method = strtolower($method);

		if(isset($route['params'])) foreach($route['params'] as $name => $value) $request->$method([$name => $value]);

		return $route;
	}

	/**
	 * [runRoute 对目标路由进行解析]
	 * @param  [type] $route [description]
	 * @return [type]        [description]
	 */
	private function runRoute($route)
	{
		return \Bobby\Component\Route\Resolver::runRoute($route, '@', $this);
	}

	/**
	 * [throughWrappers 包装响应结果]
	 * @param  [type] $wrappers    [description]
	 * @param  [type] $destination [description]
	 * @return [type]              [description]
	 */
	private function throughWrappers($wrappers, $destination)
	{
		return \Bobby\Component\Wrapper\Wrapper::handle($wrappers, $destination, $this);
	}

}