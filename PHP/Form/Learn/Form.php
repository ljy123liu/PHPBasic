<html>
<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>
<body>


<form name="form_name" method="get" action="www.baidu.com" enctype="multipart/form-data" target="_self">
    1:输入区域标记:'input'
    <br>
    username:<input name="name" type="text">
    <br>
    password:<input name="password" type="password" value="6666666" size="12" maxlength="6">
    <br>
    sex:<input name="sex" type="radio" value="1" checked>man <input name="sex" type="radio" value="0" checked>female
    <br>
    hobby:<input name="hobby" type="checkbox" value="1" checked>music
    <br>
    <input name="hobby" type="checkbox" value="2" >cook
    <br>
    <input name="upload" type="file" size="16" maxlength="200">
    <br>
    <input name="image" type="image" src="logo.jpg" width="100" height="100" >
    <br>
    <input name="hobby" type="checkbox" value="3" >book
    <br>
    <input name="submit" type="submit" value="sure">
    <br>
    <input name="button" type="button" value="click">
    <br>
    <input name="h" type="hidden">
    <br>

    2.选择域标记
    <br>
    language:'select'
    列表方式:<select name="lan" >
        <option value="0" selected>OC</option>
        <option value="1" >Java</option>
        <option value="2" >JS</option>
        <option value="3" >PHP</option>'
    </select>
    <br>
    language:
    菜单方式:<select name="lan"  multiple >
        <option value="0" selected>OC</option>
        <option value="1" >Java</option>
        <option value="2" >JS</option>
        <option value="3" >PHP</option>
    </select>
    <br>
    3.文字域标记'textarea'
    <br>
    <textarea name="remark" cols="20" rows="4" id="remark"> 请输入您的建议!</textarea>
    <br>

    4.
    <table width="300" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td height="30">&nbsp;&nbsp;订单号:
                <input type="text" name="user" size="20">
                <input type="submit" name="submit" value="提交">
            </td>
        </tr>

    </table>

</form>



</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/5/29
 * Time: 下午10:07
 */

