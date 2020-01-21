<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test hello form</title>
</head>
<body>

<form method="post" action="../learning/index.php">
    <label>Name</label>
    <input type="text" name="name" value="<?= $_POST['name'];?>"><br /><br />
    <label>SurName</label>
    <input type="text" name="surname" value="<?= $_POST['surname'];?>"><br /><br />
    <label>Email</label>
    <input type="email" name="email" value="<?= $_POST['email'];?>"><br /><br />
    <input type="submit" name="done">

</form>
</body>
</html>


<?php
if (isset($_POST['done']) && !empty($name) && !empty($surname) && !empty($email)) {
    echo "<img src=\"https://media.giphy.com/media/FpKKILCKqNIgIE1GZf/giphy.gif\" width=\"175px\"><br />";
} elseif (isset($_POST['done'])) {
    echo "<img src=\"https://media.giphy.com/media/oxFDq4E9CHb7W/giphy.gif\" width=\"200px\"><br />";
    foreach ($_POST as $key => $value) {
        if ($value == "") {
            echo "<p style=\"color:red\">You need to fill <b>$key</b> field</p>";
        }
    }
}
?>