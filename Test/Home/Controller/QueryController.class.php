<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/28
 * Time: 上午11:45
 */
namespace Home\Controller;
//use Home\Model\FormQueryClass;
use Home\Model\FormQueryClass;
use Think\Controller;
require 'FormController.class.php';

class QueryController extends Controller {
    public function index() {
        echo 'queryController';
    }

    //普通查询,不安全
    public function selectNormal($id = 5) {
        $form = M('form');
        $data = $form->where('id=5')->select();
//        var_dump($data);

//        $dict = end($data);
        $dict = current($data);
        echo $dict['title'];

    }

    //数组查询
    public function selectArray() {
        $form = M('form');
        $arr['id'] = 6;
        $arr['title'] = 'balettoo';
        $arr['_logic'] = 'OR';
        $data = $form->where($arr)->select();
        $dict = current($data);
        var_dump($dict);
    }

    //对象查询
    public function selectObj() {
        $formObj = new FormQueryClass();
        $formObj->title = 'balettoo';
        $form = M('form');
        $data = $form->where($formObj)->select();
        var_dump($data);
    }

    //表达式查询
    public function selectExp(){
        //等于
        $form = M('form');
        $map['id'] = array('eq',8);
        $data = $form->where($map)->select();
        var_dump($data);
        echo '<p>';

        //不等于
        $neq['id'] = array('neq',8);
        $data2 = $form->where($neq)->select();
        var_dump($data2);

        echo '<p>';
        //大于
        $gt['id'] = array('gt',16);
        $data3 = $form->where($gt)->select();
        var_dump($data3);

        echo '<p>';
        //大于等于e
        $egt['id'] = array('egt',16);
        $data4 = $form->where($egt)->select();
        var_dump($data4);

        echo '<p>';
        //小于
        $lt['id'] = array('lt',4);
        $data5 = $form->where($lt)->select();
        var_dump($data5);

        echo '<p>';
        //小于等于
        $elt['id'] = array('elt',4);
        $data6 = $form->where($elt)->select();
        var_dump($data6);

        echo '<p>';
        //模糊查询
        $like['title'] = array('like','王%');
        $data7 = $form->where($like)->select();
        var_dump($data7);

        echo '<p>';
        //区间
        $between['id'] = array('between','16,17');
        $data8 = $form->where($between)->select();
        var_dump($data8);

        echo '<p>';
        //不再区间
        $not['id'] = array('not in','16,17');
        $data9 = $form->where($not)->select();
        var_dump($data9);
    }

    //快捷查询
    public function selectQuick() {
        //不同字段相同条件
        $form = M('form');
        $map['title|content'] = '足球';
        $data = $form->where($map)->select();
        var_dump($data);
        echo '<p>';

        //不同字段不同条件
        $map2['title&content'] = array('足球','有足球','_multi'=>true);
        $data2 = $form->where($map2)->select();
        var_dump($data2);
        echo '<p>';
    }

    //区间
    public function selectBetween() {
        $form = M('form');
        $map['id'] = array(array('lt','17'),array('gt','14'));
        $data = $form->where($map)->select();
        var_dump($data);
    }

    //组合查询zu
    public function selectCombined() {
        $form = M('form');

        //字符串模式查询（采用_string 作为查询条件）
        $map['id'] = array('gt','16');
        $map['title'] = '足球';
        $data = $form->where($map)->select();
        var_dump($data);
        echo '<p>';

        //请求字符串查询
        $map2['id'] = array('gt','12');
        $map2['_query'] = 'title=ThinkPHP&content=0000000000&_logic=or';
        $data2 = $form->where($map2)->select();
        var_dump($data2);
        echo '<p>';

        //复合查询
        $where['title'] = array('like','%balettoo%');
        $where['content'] = array('like','%0%');
        $where['_logic'] = 'or';
        $map3['_complex'] = $where;
        $map3['id'] = array('gt',10);
        $data3 = $form->where($map3)->select();
        var_dump($data3);
        echo '<p>';
    }

    //统计查询
    public function selectCount() {
        $form = M('user');
        //统计有多少行
        $items = $form->Count();
        echo 'count'.': '.$items.'<p>';

        //统计列
        $ids = $form->Count('id');
        echo  'countline'.':'.$ids.'<p>';

        //统计最大
        $ageMax = $form->Max('age');
        echo  'maxAge'.':'.$ageMax.'<p>';

        //统计区间,大于10中最小的
        $minScore = $form->where('score>10')->min('score');
        echo $minScore.'<p>';

        //统计平均分数
        $avgScore = $form->Avg('score');
        echo 'avgScore: '.$avgScore.'<p>';

        //统计总分
        $sumScore = $form->Sum('score');
        echo 'sumScore: '.$sumScore.'<p>';
    }

    public function selectSQL() {
        $model = new FormQueryClass();
    }

    public function selectContinue () {
        $user = M('user');
        //没有顺序要求
        $limit = $user->where('age=2')->order('score')->limit(10)->select();
//        echo 'userLimitAge: '.$limit.'<p>';
        var_dump($limit);

        //
        $query = new FormQueryClass();
    }
}