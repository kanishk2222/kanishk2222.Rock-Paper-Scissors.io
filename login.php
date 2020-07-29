<?php
$error1= " ";
$error2= false;
if(isset($_POST["who"])){
  $error1=$_POST["who"];
  $error2=$_POST["pass"];
  }
  $input='XyZzy12*_'.$error2;
  $pass=hash('md5',$input);
  $correct= hash('md5','XyZzy12*_php123');
if(strlen($error1) <1){
  echo "username and password are required<br>";
}
elseif(strlen($error2)<1){
    echo "username and password are required<br>";
}
elseif($pass!=$correct){
  echo "Incorrect password";

}
else {header("Location: game.php?who=".urlencode($_POST["who"]));}
?>
<html>
<head>
<title>Kanishk dutt sharma</title>
</head>
<body>
<h1>Login</h1>
<br><br><form method = POST >
<label for="name">Name : </label><input type="text" name="who"/><br><br>
<label for="password">password : </label><input type="password" name="pass"/><br><br>

<p>To know the password go to the page source</p>
<!--password is php123-->
<input type="submit" value="Log In" />
<input type="submit" value="cancel" onclick="location.href='intro.php'; return false;" />
</form>
</body>
</html>
