<?php
$connection_string = "postgres://zwxcfkbnnofssn:3988c3bfbee7aa180f0830590f64be229d50bb79063fc9fce8bc3b726855fc9e@ec2-54-247-158-179.eu-west-1.compute.amazonaws.com:5432/dbg30a66nr6ce9";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
      $sql = "insert into public.user(name,email,password)values('".$_POST['name']."','".$_POST['email']."','".md5($_POST['pwd'])."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
      header("Location: login.php");
      exit();
    }else{
        echo "Błąd";
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-800 text-white">
<nav class="bg-gray-900">
 <div class="container mx-auto py-6 px-8 flex items-center justify-between">
   <a href="index.php" class="text-2xl font-bold">
     Czas światowy
   </a>
   <div>
   <a href="login.php" class="font-semibold">
   Logowanie
  </a>
  <a href="register.php" class="font-semibold ml-10">
   Rejestracja
  </a>
  </div>
  </div>
</nav>
<div>
  <form class="min-h-screen flex items-center justify-center" method="post">
    <div>
  <h2 class="font-bold text-4xl">Rejestracja </h2>
  <div class="form-group">
      <label class="block text-xl mt-6" for="name">Nick:</label>
      <input class="pl-4 rounded-md pr-16 py-2 mt-3" type="text" class="form-control" id="name" placeholder="Wpisz nick" name="name" requuired>
    </div>
    <div class="form-group">
      <label class="block text-xl mt-6" for="email">Email:</label>
      <input class="pl-4 rounded-md pr-16 py-2 mt-3" type="email" class="form-control" id="email" placeholder="Wpisz email" name="email">
    </div>
    <div class="form-group">
      <label class="block text-xl mt-6" for="pwd">Hasło:</label>
      <input class="pl-4 rounded-md pr-16 py-2 mt-3" type="password" class="form-control" id="pwd" placeholder="Wpisz hasło" name="pwd">
    </div>
    <input class="bg-indigo-700 text-white px-4 py-2 font-semibold rounded-md mt-6" type="submit" name="submit" class="btn btn-primary" value="Submit">
  </div>
</div>
</form>
</body>
</html>