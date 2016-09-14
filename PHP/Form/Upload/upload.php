

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Image</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: liuyong
 * Date: 5/8/16
 * Time: 7:39 PM
 */
print_r($_FILES);
$file = $_FILES['file'];
$fileName = $file['name'];
move_uploaded_file($file['temp_name'],$fileName);
echo "<img src='$fileName'>";
?>
</body>
</html>
