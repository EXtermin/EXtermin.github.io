<!doctype php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>De_Gokkers</title>
</head>

<div class="header">
    <div class="logo">
        <img src="logo.png">
        </div>
    </div>
    <div class="topnav" id="topnav">
        <ul>
            <li><a name="Game" href="#Game">Game</a></li>
            <li><a name="Info" href="#Info">Info</a></li>
            <li><a name="Registration" href="#Registration">Registration</a></li>
            <li><a name="Footer" href="#Footer">Footer</a></li>
        </ul>
    </div>

<h1>Game</h1>
<p> if you want to download just login!</p>



<form action="../public/login.php" method="post" id="Game">

<label for="emaillogin"> Please fill in your Email:</label>
<input name="emaillogin" type="text" id="emaillogin">

<label for="passwordlogin"> Please fill in your password:</label>
<input name="passwordlogin" type="text" id="passwordlogin">

    <input type="submit" value="Login">
</form>
<h1 id="Info">Info</h1>
<iframe width="420" height="315"
        src="https://www.youtube.com/embed/EVLFfzVM5ws?autoplay=1">
</iframe>
<p>This game is about that you can bet which Elephant wins the race </p>
<p>The credit goes to the creator of the game is Damian Meijer and the creator of the website is Tim Verheijen</p>
<?php
$message = $_GET['message'];
$download = 'Here is your download just click here :)';
if( $message == $download)
{
echo '<a href="../app/storage/DeGokkers.zip" download="DeGokkers">' . $download . '</a>';
}
else
{
echo $message;
}

?>


<h2 id="Registration">Register</h2>

<form action="../app/account_creation.php" method="post">

        <label for="email"> Please fill in your Email-adress</label>
        <input name="email" type="text" id="email">

        <label for="password"> Please fill in a password::</label>
        <input name="password" type="text" id="password">

        <input type="submit" value="Register">
 </form>
</body>
<footer>
    <p>contact us</p>
    <p>this how you can contact us</p>
    <ul>
        <li>email:</li>
    </ul>
</footer>
</html>