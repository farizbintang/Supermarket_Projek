<?php include "../model/koneksi.php";
$db=new koneksi();
$aksi=$_GET ['aksi'];

if($aksi=="insert_user") {
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];
    $db ->insert_user($name, $username, $password, $level);
    header('location:../login.php');
}

else if($aksi=="login") {
    foreach($db->viewuser() as $a) {
        if($a['username']==$_POST['username'] && $a['password']==$_POST['password'] && $a['level']=="admin") {
            header('location:../view/libsss/tampilan_makanan.php');
            break;
        }

        else if($a['username']==$_POST['username'] && $a['password']==$_POST['password'] && $a['level']=="pegawai") {
            header('location:../view/libsss/index_makanan.php');
            break;
        }

        else {
            header('location:../login.php');
        }

    }
}

?>