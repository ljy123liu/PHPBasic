<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>学生信息管理</title>
</head>

<script>
    function doDel(id){
        if (confirm("确定要删除吗?")){
            window.location='action.php?action=del&id='+id;
        }
    }
</script>

<body>
    <center>
    <?php include("menu.php") ?>
        <h3>浏览学生信息</h3>
        <table width="600" border="1">
            <tr>
                <th>ID</th>
                <th>姓名</th>
                <th>性别</th>
                <th>年龄</th>
                <th>班级</th>
                <th>操作</th>
            </tr>
            <?php
            //1.链接数据库
                try{
                    $pdo = new PDO("mysql:host=localhost;dbname=pdoDB","root","");
                }catch(Exception $err){
                    die("数据库链接失败".$err->getMessage());
                }
            //2.执行sql查询,并解析与遍历
            $sql = "select * from studentsInfoSystem";
            foreach ($pdo->query($sql) as $row){
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['sex']}</td>";
                echo "<td>{$row['age']}</td>";
                echo "<td>{$row['classid']}</td>";
                echo "<td>
                    <a href='javascript:doDel({$row["id"]})'>删除</a>
                    <a href='edit.php?id={$row['id']}'>修改</a>
                      </td>";
            }
            ?>
        </table>
    </center>
</body>
</html>

