<?php
$connection_string = "postgres://zwxcfkbnnofssn:3988c3bfbee7aa180f0830590f64be229d50bb79063fc9fce8bc3b726855fc9e@ec2-54-247-158-179.eu-west-1.compute.amazonaws.com:5432/dbg30a66nr6ce9";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
      $sql = "insert into public.user(name,email,password)values('".$_POST['name']."','".$_POST['email']."','".md5($_POST['pwd'])."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
      header("login.php");
      exit();
    }else{
        echo "Soething Went Wrong";
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Rejestracja </h2>
  <form method="post">
  <div class="form-group">
      <label for="name">Nick:</label>
      <input type="text" class="form-control" id="name" placeholder="Wpisz nick" name="name" requuired>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Wpisz email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Hasło:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Wpisz hasło" name="pwd">
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  </form>
</div>
</body>
</html>