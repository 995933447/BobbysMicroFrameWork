[2019-01-15 09:55:09]  ,error code: -1 error message:Class \Bobby\Contract\Contract\Route does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Contanier/Contanier.php line 194
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Contanier/Contanier.php(194): ReflectionClass->__construct('\\Bobby\\Contract...')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Contanier/Contanier.php(139): Bobby\Component\Contanier\Contanier->build('\\Bobby\\Contract...', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(122): Bobby\Component\Contanier\Contanier->make('\\Bobby\\Contract...')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Proxy/Proxy.php(25): App\Core\Application->make('\\Bobby\\Contract...')
#4 /var/www/frame/myframe/app/Route/route.php(14): Bobby\Component\Proxy\Proxy::__callStatic('get', Array)
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Provider/RouteProvider.php(21): require('/var/www/frame/...')
#6 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Bootstrap/BootProviderHandle.php(11): Bobby\Component\Provider\RouteProvider->boot()
#7 /var/www/frame/myframe/app/Core/Application.php(42): Bobby\Component\Bootstrap\BootProviderHandle->boot(Object(App\Core\Application))
#8 /var/www/frame/myframe/bootstrap/app.php(6): App\Core\Application->boot()
#9 /var/www/frame/myframe/public/index.php(3): require('/var/www/frame/...')
#10 {main}

[2019-01-15 10:33:24]  ,error code: 0 error message:Undefined index:  in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 153
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php(153): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined index...', '/var/www/frame/...', 153, Array)
#1 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Route\Base->findRoute(NULL, '/')
#2 /var/www/frame/myframe/app/Core/Application.php(136): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#3 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#4 {main}

[2019-01-15 10:33:33]  ,error code: 0 error message:Undefined index:  in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 153
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php(153): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined index...', '/var/www/frame/...', 153, Array)
#1 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Route\Base->findRoute(NULL, '/')
#2 /var/www/frame/myframe/app/Core/Application.php(136): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#3 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#4 {main}

[2019-01-15 10:36:01]  ,error code: 0 error message:Undefined index:  in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 153
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php(153): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined index...', '/var/www/frame/...', 153, Array)
#1 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Route\Base->findRoute(NULL, '/')
#2 /var/www/frame/myframe/app/Core/Application.php(136): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#3 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#4 {main}

[2019-01-15 10:36:23]  ,error code: 0 error message:The magic method __call() must have public visibility and cannot be static in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Http/Request.php line 120
#0 /var/www/frame/myframe/vendor/composer/ClassLoader.php(444): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(2, 'The magic metho...', '/var/www/frame/...', 120, Array)
#1 /var/www/frame/myframe/vendor/composer/ClassLoader.php(444): include()
#2 /var/www/frame/myframe/vendor/composer/ClassLoader.php(322): Composer\Autoload\includeFile('/var/www/frame/...')
#3 [internal function]: Composer\Autoload\ClassLoader->loadClass('Bobby\\Component...')
#4 /var/www/frame/myframe/public/index.php(5): spl_autoload_call('Bobby\\Component...')
#5 {main}

