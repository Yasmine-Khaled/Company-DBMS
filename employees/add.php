<?php 
include'../shared/header.php';
include'../general/env.php';
include'../general/functions.php';
include'../shared/nav.php';
$message="";
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $depId=$_POST['depId'];
    //image 
    $image_name =time().$_FILES['image']['name'];
    $tmp_name =$_FILES['image']['tmp_name'];
    $location ="../upload/";
    move_uploaded_file($tmp_name,$location.$image_name);

/* test upload image :
 if(move_uploaded_file($tmp_name,$location.$image_name)){
    echo "true Uploaded";
  } */

    $insert="INSERT INTO `employees`(`id`, `name`, `email`,`image`, `depId`) VALUES (null ,'$name','$email','$image_name','$depId')";
     $i= mysqli_query($conn ,$insert); 
    $message = testMessage($i," has been inserted");
    
}
$select = "SELECT * FROM `departments`";
$departments = mysqli_query($conn,$select);
// print_r($_FILES);
?> 
  <h1 class="text-center title "> Add Employee </h1> 
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
                    <label for="">Employee Name</label>
                    <input type="text" name="name"class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Employee email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Profile image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Department</label>
                    <select name="depId" class="form-control">
                        <?php foreach($departments as $data) { ?>
                        <option value ="<?php echo $data['id'] ?>"><?php echo $data['name'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <button name="send" class="btn btn-1">Add Employee</button>
            </form>
        </div>
    </div>
</div>
<?php 
include'../shared/footer.php';
?> 

