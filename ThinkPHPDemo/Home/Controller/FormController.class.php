<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/20
 * Time: 下午7:10
 */
namespace Home\Controller;
use Home\Model\HomeModel;
use Think\Controller;
class FormController extends Controller {
    public function insert() {
        $Form = D('Form');
        if ($Form->create()){
            $result = $Form->add();
            if ($result){
                $this->success('数据添加成功');
            }else {
                $this->error('数据添加失败');
            }
        }else {
            $this->error($Form->getError);
        }
    }
}


$model = new HomeModel();
$model->sayHello();

