<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>学生管理信息</title>
</head>
<body>
<center>
    <?php include("menu.php");
    //1.链接数据库
    try{
    $pdo = new PDO("mysql:host=localhost;dbname=pdoDB;","root","");
    }catch(Exception $err){
    die("数据库链接失败".$err->getMessage());
    }
    //2.sql,取信息
    $sql = "select * from studentsInfoSystem where id=".$_GET['id'];
    $stmt = $pdo->exec($sql);
    if ($stmt->rowCount() > 0){
//        $stu = $stmt->fetch(PDO::Fe)
    }
    ?>
    <h3>修改学生信息</h3>
    <form action="action.php?action=edit.php" method="post">
        <table>
            <tr>
                <td>姓名</td>
                <td>
                    <input type="text" name="name" />
                </td>
            </tr>

            <tr>
                <td>性别</td>
                <td>
                    <input type="radio" name="sex" value="m" /> 男
                    <input type="radio" name="sex" value="w" /> 女
                </td>
            </tr>

            <tr>
                <td>年龄</td>
                <td>
                    <input type="text" name="age" />
                </td>
            </tr>
            <tr>
                <td>班级</td>
                <td>
                    <input type="text" name="classid" />
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" value="增加" />
                    <input type="reset" value="重置" />
                </td>
            </tr>
        </table>
    </form>
</center>

</body>
</html>

