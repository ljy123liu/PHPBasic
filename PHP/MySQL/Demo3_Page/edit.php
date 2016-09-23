<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 16/9/19
 * Time: 下午6:22
 */
include 'connection.php';
$id;
if (is_numeric($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = "SELECT id,username FROM user WHERE id=$id";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);

?>
<form action="update.php" method="get">
    <table>
        <tr>
            <td>用户名:<input type="text" name="username" value="<?php echo $data['username']?>"></td>
        </tr>
        <tr>
            <td>密&nbsp;&nbsp;&nbsp;&nbsp;码:<input type="text" name="password" value=""></td>
            <td><input type="hidden" name="id" value="<?php echo $data['id']?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="提交"></td>
        </tr>

    </table>
</form>

<?php
mysqli_close($conn);
?>