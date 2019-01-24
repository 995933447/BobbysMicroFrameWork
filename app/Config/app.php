<?php
return [
	//是否开启debug调试模式
	'debug' => true,
	//默认时区
	'timezone'  => 'Asia/Shanghai',
	//是否开启配置文件缓存
	'config_cache' => [
		'is_open' => false,
	],
	//框架日志配置
	'log' => [
		'isRecorded' => true,
		'path' => __DIR__ . '/../Log'
	],
	//路由控制器命名空间
	'route' => [
		'namespace' => '\\App\\Controller\\',
		'file' => __DIR__ . '/../Route/route.php'
	],
	//服务提供者缓存配置
	'providers_cache' => [
		'is_open' => false,
		'file' => __DIR__ . '/../Cache/providers.php'
	],
	//服务提供者
	'providers' => [
		'\\Bobby\\Component\\Provider\\RouteProvider',
		'\\App\\Provider\\EventProvider',
		'\\App\\Provider\\WrapperProvider'
	]
];