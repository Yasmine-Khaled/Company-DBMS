<?php 
include'../shared/header.php';
include'../general/env.php';
include'../general/functions.php';
$message="";
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $newPassword=sha1($password); 
    $select="SELECT * FROM `admin` WHERE email='$email' and password='$newPassword'";
    $s =mysqli_query($conn,$select);
    $numRows =mysqli_num_rows($s);
    if($numRows>0){
        $_SESSION['admin']=$email;
    }
    else{
        $message="Incorrect username or password";
    }
}
if(isset($_SESSION['admin'])){
    header("Location: http://localhost:8080/company/shared/home.php"); 
    exit();
}
// print_r($_SESSION);
?> 
  <!-- <?php if(!empty($message)):?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?php echo $message ;?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif;?> -->
<nav class="navbar navbar-expand-lg navbar-dark bd-navbar "style="height:50px;">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/company/index.php/">Company<span class="sr-only">(current)</span></a>
      </li>
</ul>
  </div>
</nav>
  <h1 class="text-center title ">Login page</h1> 
<div class="container col-6 cont">
    <div class="card ">
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Admin email</label>
                    <input type="email" name="email"class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Admin password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <div><p class="text-danger"><?= $message ?></p></div>
                <button name="login" class="btn btn-1">Login</button>
            </form>
        </div>
    </div>
</div>
<?php 
include'../shared/footer.php';
?> 

