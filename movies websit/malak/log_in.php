<html>

<head>
  <title>Escape&Enjoy</title>
  <link rel="stylesheet" href="log_in.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>

  <?php
      if(isset($_COOKIE["email"]) and isset($_COOKIE["email"])) {
        header("location: http://localhost:3000/movies%20websit/naden/project.php");
      }
     if(isset($_POST["login"])) {
    $email=$_POST["email"]; 
    $password=$_POST["password"];
    $admin_email="admin@gmail.com";
 $admin_password="admin2004";
 if($email==$admin_email&&$password==$admin_password){
  header("location: http://localhost/movies%20websit/momen/home_admin/home_admin.php#"); 
 }
    include("database.php");
    $sql= "SELECT * from users WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
   
    if($user){
      $email=$_POST["email"];
    $password=$_POST["password"];
    if (password_verify($password, $user["password"])){
    
     if(isset($_POST["remember"])){
      $name=$user['name'];
      $_SESSION['name']=$name;
      setcookie('email',$email,time()+60*60);
      setcookie('password',$password,time()+60*60);

    }
    header("location: http://localhost/movies%20websit/naden/project.php");
      

    }

    else{
      
      echo"<div class= 'alert-alert-danger'> <h4> incorrect password <h4> </div>";
    }

}

else{
      echo"<div class= 'alert-alert-danger'> <h4>you should have account <h4> </div>";
}
 }
 

 ?>
  <h3><i class='material-icons' style='font-size:155px ;color: #a91d99da '>account_circle</i></h3>
  <div class="container500">

    <form action="log_in.php" method="post">
      <label for="email">
        <input type="email" name="email" placeholder="enter your email" required>
      </label>
      <lable for="password1">
        <input type="password" name="password" placeholder="enter your password" required>
      </lable>
      <label for="login1">
        <input type="submit" name="login" value="login">
      </label>

      <input type="checkbox" name="remember">
      <h5 class="remember">Remember me</h5>


    </form>
    <h5 class="account">Do you have account?</h5>
    <a href="sign_up.php">
      sign up
    </a>






</body>

</html>