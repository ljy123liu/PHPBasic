<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/27
 * Time: 下午2:12
 */

namespace Home\Controller;
use Think\Controller;

class FormController extends Controller {
    public function insert() {
//        echo 'form insert method';
         $Form   =   D('Form');
        /*
         * create方法会自动把表单提交的数据进行自动验证和自动完成（如果有定义的话）
//         */
         if($Form->create()) {
             $result =   $Form->add();
             if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
             }
        }else{
             $this->error($Form->getError());
        }

        //add写入
//        $Form   =   D('Form');
//        $data['title']  =   'ThinkPHP';
//        $data['content']    =   '表单内容';
//        $result = $Form->add($data);
//        if($result) {
//            $this->success('数据添加成功！');
//        }else{
//            $this->error('数据添加错误！');
//        }

        //对象操作
//        $Form   =   D('Form');
//        $Form->title  =   'balettoo';
//        $Form->content    =   '0000000000';
//        $result = $Form->add();
//        if($result) {
//            $this->success('数据添加成功！');
//        }else {
//            $this->error('数据添加错误！');
//        }
    }   
    
    public function read($id=4) {
        /*
         * 之所以用M方法而没有用D方法，是因为find方法是基础模型类Model中的方法，
         * 所以没有必要浪费开销去实例化FormModel类（即使已经定义了FormModel类）
         */
        $Form = M('Form');
        //读取数据
        $data = $Form->find($id);
        //getField查询某个字段
        $title = $Form->where('id=3')->getField('title');
        echo '输出ID=3title:'.$title;

        if ($data) {
            $this->assign('data',$data);
        }else {
            $this->error('数据读取失败');
        }
        $this->display();
    }

    public function edit($id=0){
        $Form   =   M('Form');
        $this->assign('vo',$Form->find($id));
        $this->display();
    }
    public function update(){
        $Form   =   D('Form');
        if($Form->create()) {
            $result =   $Form->save();
            if($result) {
                $this->success('操作成功！');
            }else{
                $this->error('写入错误！');
            }
        }else{
            $this->error($Form->getError());
        }
    }


}