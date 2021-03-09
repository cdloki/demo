<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>

    <form method="post">
    <label>Nhập Tên:</label>
    <input type="text" name="name">
    <label>Nhập Email:</label>
    <input type="text" name="email">
    <button type="submit">Gửi</button>
    </form>
    </br>
    <?php 
if($_POST['name'] && $_POST['email'] != null){
echo "Chào bạn ".$_POST['name'].", email của bạn là ".$_POST['email']."";
}
?>
</body>
</html>