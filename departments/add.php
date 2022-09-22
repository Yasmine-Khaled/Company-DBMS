<?php 
include'../shared/header.php';
include'../general/env.php';
include'../general/functions.php';
include'../shared/nav.php';
$message="";
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $insert="INSERT INTO `departments`(`id`, `name`) VALUES (null,'$name')";
     $i= mysqli_query($conn ,$insert); 
    $message = testMessage($i," department has been inserted");
    
}
// print_r($_FILES);
?> 
  <h1 class="text-center title "> Add Department </h1> 
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
                    <label for="">Department Name</label>
                    <input type="text" name="name"class="form-control">
                </div>
                <button name="send" class="btn btn-1">Add</button>
            </form>
        </div>
    </div>
</div>
<?php 
include'../shared/footer.php';
?> 

