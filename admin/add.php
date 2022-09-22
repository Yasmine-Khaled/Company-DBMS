<?php 
include'../shared/header.php';
include'../general/env.php';
include'../general/functions.php';
include'../shared/nav.php';
$message="";
if(isset($_POST['add'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $newPassword=sha1($password);
    $role=$_POST['role'];
    $insert ="INSERT INTO `admin`(`id`,`name`, `email`, `password`, `role`) VALUES (null,'$name','$email','$newPassword',$role)";
    $i =mysqli_query($conn,$insert); 
    $message=testMessage($i," has been inserted");
 }
?> 
 
  <h1 class="text-center title ">Add Admin</h1> 
  <?php if(!empty($message)):?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?php echo $name.$message ;?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif;?>
<div class="container col-6 cont">
    <div class="card ">
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="">Admin Name</label>
                    <input type="text" name="name"class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Admin email</label>
                    <input type="email" name="email"class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Admin password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" >Admin Role</label>
                    <select name="role" class="form-control">
                        <option value ="1">All acess</option>
                        <option value ="2">Semi acess</option>
                    </select>
                </div>
                <button name="add" class="btn btn-1">Add Admin</button>
            </form>
        </div>
    </div>
</div>
<?php 
include'../shared/footer.php';
?> 

