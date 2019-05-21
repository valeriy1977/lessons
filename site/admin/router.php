<?php
session_start();


if ($_SESSION['loged'])
{
    var_dump($_SESSION['loged']);
    if ($_GET)
    {
        if ($_GET['page']=='logout')
        {
            unset($_SESSION['loged']);
        }
    }
}
else
{
    if ($_POST)
    {
        $authorizatrion = new \app\classes\Db();

        if($user = $authorizatrion->sql("SELECT name,surname FROM users WHERE login='{$_POST['login']}' AND pass='{$_POST['pass']}'"))
        {

            $_SESSION['loged'] = $user[0]['name']." ".$user[0]['surname'];

        }
    }
    else
    {
        require_once "views/VloginForm.php";
    }
}







