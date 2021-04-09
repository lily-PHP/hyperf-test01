<?php
/**
 * Created by phper_lily.
 * User: lily <lily_phper@163.com>
 * Date: 2021/4/9
 * Time: 17:30
 */

namespace App\Controller;

use Dingo\Blueprint\Annotation\Request;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;

/**
 * Class UserController
 */
class UserController
{
    /**
     *
     */
    public function getUser()
    {
        $userId = 666;
        $info = 'my name is 李特辣-1';
        return [
            'id' => $userId,
            'info' => $info
        ];

    }

}