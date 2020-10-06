<?php
if (isset($_POST['tombolsubmit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "anto" && $password == "123") {
        echo "Sukses";
    }
    else {
        echo "User / Password ada yg salah";
    }
}
else {
    echo "Mohon maaf cek login tidak bisa diakses langsung";
}
?>