<?php
// +----------------------------------------------------------------------
// | redis设置中心
// +----------------------------------------------------------------------
// | Copyright (c) 2019 http://www.jeoshi.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: kevin
// +----------------------------------------------------------------------

return [
    'cache' => [
        // redis连接， 名字不可改
        'redis' => [
            'type' => 'redis',
            'host' => '47.105.48.137',
            'port' => 6379,
            'password' => '123456',
            'select' => 0,
            'timeout' => 0,
            'expire' => 0,
            'persistent' => false,
            'prefix' => '',
        ],
    ]
];
