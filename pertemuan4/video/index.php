<?php
//------------------------
//------GET Dan POST------
//------------------------

// if (isset($_GET)['submit]) ){
//  echo $_GET['password'];
//}

if (isset($_POST['submit']) ){
    echo $_POST['password'];
}

?>

<form action="index.php" method="get">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>