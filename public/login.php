<?php
    require ('../app/database.php');

function check_password($text)
{
    $regex = "#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#";
    if (preg_match($regex, $text)) {
        return TRUE;
    }
    else {
        return FALSE;
    }
}

if (isset($_POST['emaillogin']) && filter_var($_POST['emaillogin'],FILTER_VALIDATE_EMAIL) )
{
    $email = $_POST['emaillogin'];
    $sql = "SELECT email FROM usersaccountsnew WHERE email = '$email'";
    $sth = $database->prepare($sql);
    $sth->execute();
    $fetchType = PDO::FETCH_ASSOC;
    $count = $sth->rowCount();
    $results = $sth->fetchall($fetchType);

    if ($count > 0)
    {
        $password = $_POST['passwordlogin'];
        $password_hash = hash('ripemd160',$password);
            $sql = "SELECT password FROM usersaccountsnew WHERE password = '$password_hash'";
            $sth = $database->prepare($sql);
            $sth->execute();
            $fetchType = PDO::FETCH_ASSOC;
            $count = $sth->rowCount();
            $results = $sth->fetchall($fetchType);
        if ($count > 0)
        {
            $messageLogin = 'Here is your download just click here :)';
            header("location:../public/index.php?message=$messageLogin");
        }
        else
        {
            $messageLogin = 'Sorry the password or email arent correct... please register first!';
            header("location:../public/index.php?message=$messageLogin");
        }

    }
    else
    {

        $messageLogin = 'the email or password arent correct... please register first!';
        header("location:../public/index.php?message=$messageLogin");
    }

}
else
{
    $messageLogin = 'This isnt even a email adress...';
    header("location:../public/index.php?message=$messageLogin");
}

?>

