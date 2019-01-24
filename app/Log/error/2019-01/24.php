[2019-01-24 09:21:04]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 167
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/favicon.ico')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-24 09:25:51]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:26:08]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 167
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/examle')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-24 09:26:12]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 167
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/example')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-24 09:26:39]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:27:58]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:29:05]  ,error code: 0 error message:Undefined variable: reflection in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 203
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(203): Bobby\Component\Bootstrap\ExceptionHandle->errorTrigger(8, 'Undefined varia...', '/var/www/frame/...', 203, Array)
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:30:15]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:30:35]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:30:36]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:30:38]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:30:41]  ,error code: 404 error message:Route 404 Not Found in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Route/Base.php line 167
#0 /var/www/frame/myframe/app/Core/Application.php(188): Bobby\Component\Route\Base->findRoute('GET', '/example/')
#1 /var/www/frame/myframe/app/Core/Application.php(169): App\Core\Application->findRoute(Object(Bobby\Component\Http\Request))
#2 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#3 {main}

[2019-01-24 09:31:34]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:32:32]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:32:33]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:51:29]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:53:13]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

[2019-01-24 09:54:46]  ,error code: -1 error message:Class before does not exist in /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php line 197
#0 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(197): ReflectionClass->__construct('before')
#1 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Container/Container.php(142): Bobby\Component\Container\Container->build('before', Array)
#2 /var/www/frame/myframe/app/Core/Application.php(155): Bobby\Component\Container\Container->make('before')
#3 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(40): App\Core\Application->make('before')
#4 [internal function]: Bobby\Component\Wrapper\Wrapper::Bobby\Component\Wrapper\{closure}()
#5 /var/www/frame/myframe/vendor/yangzhouhong/bobbys-oop/src/Component/Wrapper/Wrapper.php(16): call_user_func(Object(Closure))
#6 /var/www/frame/myframe/app/Core/Application.php(215): Bobby\Component\Wrapper\Wrapper::handle(Array, Object(Closure), Object(App\Core\Application))
#7 /var/www/frame/myframe/app/Core/Application.php(175): App\Core\Application->throughWrappers(Array, Object(Closure))
#8 /var/www/frame/myframe/public/index.php(7): App\Core\Application->responsePipeline(Object(Bobby\Component\Http\Request))
#9 {main}

