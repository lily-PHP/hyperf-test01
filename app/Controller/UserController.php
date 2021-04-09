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
 * @Controller()
 * Class UserController
 * @package App\Controller
 */
class UserController extends Controller
{
    /**
     * @RequestMapping(path='getuser', methods='get, post')
     */
    public function getUser()
    {
        $userId = 666;
        $info = 'my name is 李特辣';
        return [
            'id' => $userId,
            'info' => $info
        ];

    }

}