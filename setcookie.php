<?php

$conn=mysqli_connect("localhost", "root", "", "lsp_pelatihan");

if(isset($_COOKIE['remember_id']) && isset($_COOKIE['remember_key']))
{
    $id=$_COOKIE['remember_id'];
    $key=$_COOKIE['remember_key'];

    //get username
    $cekCookieUser=mysqli_query($conn, "SELECT * FROM tbl_login WHERE id='$id'");
    $res=mysqli_fetch_assoc($cekCookieUser);


    if($key===hash('sha256', $res['username']))
    {
        $_SESSION['logged']=true;
        $_SESSION["username"]=$res['username'];
    }
}

?>