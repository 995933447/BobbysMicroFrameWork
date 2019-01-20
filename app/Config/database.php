<?php
/**
 * @Author: Bobby
 * @Date:   2019-01-18 14:59:50
 * @Last Modified by:   Bobby
 * @Last Modified time: 2019-01-18 15:24:17
 */
return [
    //默认使用的数据库连接
    'default' => 'mysql',

    //数据库连接列表
    'connections' => [

        'mysql' => [

            'driver' => 'mysql',
            'host' => '127.0.0.1:6379',
            'user' => 'root',
            'password' => '',
            'database' => 'test',
            'charset' => 'utf8mb4',
            'prefix' => '',
            'timeout' => 1,

            'read' => [
                [
                    'host' => '127.0.0.2',
                ],
                [
                    'host' => '127.0.0.3',
                ],
            ],

            'write' => [

            ]

        ]

    ]

];