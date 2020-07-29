<?php
if(! isset($_GET["who"])){
  die("Name parameter missing");


}
?>
<html>
<head>
<title>kanishk dutt sharma Rock, Paper, Scissors Game</title>
</head>
<body>
<div class="container">
<h1>Rock Paper Scissors</h1>
<p>Welcome:<?= htmlentities($_GET["who"]) ?></p>
<form method="POST">
<select name="human">
<option value="select" >Select</option>
<option value="Rock">Rock</option>
<option value="Paper">Paper</option>
<option value="Scissors">Scissors</option>
<option value="test">Test</option>
</select>
<input type="submit" value="Play">
<input type="submit" name="logout" onclick="location.href='intro.php'; return false;" value="Logout">
</form>

<pre>
  <?php
  $CPUChoice = array('Rock', 'Paper', 'Scissors');
                       shuffle($CPUChoice);
                      $comp = $CPUChoice[0];
  $human= isset($_POST['human'])?$_POST['human']:"select";


if($human=="select"){
  print "Please select a strategy and press Play.";}

  elseif($human=="Rock" || $human== "Paper" || $human=="Scissors"){
  $result=check($human,$comp);
print "Your Play=$human Computer Play=$comp Result=$result";}

  elseif($human=="test"){
for($c=0;$c<3;$c++) {

for($h=0;$h<3;$h++) {
  $arr1= array('Rock', 'Paper', 'Scissors');

$r = check($arr1[$c],$arr1[$h]);

print "Your Play = $arr1[$c] Computer Play = $arr1[$h] Result=$r\n";

}

}
}
function check($human,$comp){
if($human==$comp){
  return "tie";
}
elseif(($human=="rock" && $comp=="paper") || ($human=="scissors" && $comp=="rock") || ($human=="paper" && $comp=="scissors")){
  return "lose";
    }
elseif(($human=="rock" && $comp=="scissors") || ($human=="scissors" && $comp=="paper") || ($human=="paper" && $comp=="rock")){
  return "win";
        }
      }
        ?>
</pre>
</div>
</body>
</html>
