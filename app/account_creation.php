<?php
require ('../app/database.php');





if (isset($_POST['email']) && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) )
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($password <= 7)
    {
        $password_hash = hash('ripemd160',$password);
        $messageRegister = 'Thanks for your registration! now just login!';
        $sql = "INSERT INTO usersaccountsnew (email, password) VALUES ('$email', '$password_hash')";
        $database->query($sql);
        header("location:../public/index.php?message=$messageRegister");
    }


}
else
{
    $messageRegister = 'This Email doesnt exist, or is already in use...';
    header("location:../public/index.php?message=$messageRegister");
}


?>