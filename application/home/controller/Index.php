<?php
namespace app\home\controller;

use app\common\controller\BaseController;
use app\v1\service\Workservice;
use think\Controller;
use app\v1\service\Protuctservice;
use app\v1\service\Infosservice;
use app\v1\service\Systems;
use app\v1\service\Caseservice;
use think\Cookie;
use think\Cache;
class Index extends BaseController
{

    public function index()
    {

        if ($this->request->isGet()) {
            //用户信息
            $this->assign('userinfo',$this->userinfo);
            return $this->fetch();
        }
        return false;
    }
}