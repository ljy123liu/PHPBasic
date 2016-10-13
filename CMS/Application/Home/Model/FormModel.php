<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/27
 * Time: 下午1:14
 */
namespace Home\Model;
use Think\Model;
class FormModel extends Model {
    // 定义自动验证
    protected $_validate    =   array(
        array('title','require','标题必须'),
    );
    // 定义自动完成
    protected $_auto    =   array(
        array('create_time','time',1,'function'),
    );

    //命名范围
    protected $_scope = array(
        'latest'=>array(
            'order'=>'creat_time desc',
            'limit'=>10
        ),
        'vip'=>array(
            where=>array(
                'is_vip'=>1
            )
        ),
    );

}