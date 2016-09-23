<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/17
 * Time: 下午12:12
 */

/*
 * crypt
 */
$str = 'This is an example';
echo '加密前$str的值为: '.$str."<p>";
$crypttostr = crypt($str,'123456789');
echo '加密后的$str的值为: '.$crypttostr."<p>";

/*
 * md5
 */
