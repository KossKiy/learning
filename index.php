<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test hello form</title>
</head>
<body>
<form method="post" action="../learning/index.php">
    <label>Name</label>    <input type="text" name="name">
    <label>SurName</label>
    <input type="text" name="surname">
    <input type="submit" name="done">
</form>
</body>
</html>

<?php
if (isset($_POST['done'])&& $name !="" ){
echo "Hello, ".$name." ".$surname;
}
?>
