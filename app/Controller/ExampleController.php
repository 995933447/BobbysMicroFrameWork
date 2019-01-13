<?php 
namespace App\Controller;

/**
 * 控制器示例代码
 */
class ExampleController
{
	public function iocExample($name, $id, \StdClass $std, $default = 'ioc')
	{
	   	var_dump($name, $id, $std, $default);
	}
}