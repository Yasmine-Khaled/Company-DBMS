<?php 
include'../shared/header.php';
include'../general/env.php';
include'../general/functions.php';
include'../shared/nav.php';
$message="";
if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $selectEmp = "SELECT * FROM `employees` WHERE id=$id";
    $employee =mysqli_query($conn,$selectEmp);
    $row = mysqli_fetch_assoc($employee);
    if(isset($_POST['update'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $depId=$_POST['depId'];
        if(empty($_FILES['image']['name'])){
            $image_name=$row['image'];
        }
        else{
        //image 
        $image_name =time().$_FILES['image']['name'];
        $tmp_name =$_FILES['image']['tmp_name'];
        $location ="../upload/";
        move_uploaded_file($tmp_name,$location.$image_name);
    }


 
        $update="UPDATE `employees` SET `name`='$name',`email`='$email',`image`='$image_name',`depId`='$depId' WHERE id=$id";
         $i= mysqli_query($conn ,$update); 
        // $message = testMessage($i," has been updated");
    //         test update image :
    //  if(move_uploaded_file($tmp_name,$location.$image_name)){
    //     echo "true Uploaded";
    //   } 
    
    }
}

$select = "SELECT * FROM `departments`";
$departments = mysqli_query($conn,$select);

// print_r($_FILES);
?> 

  <h1 class="text-center title ">Update <?= $row['name']?> Data</h1> 
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
                    <input type="text" value="<?= $row['name']?>" name="name"class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Employee email</label>
                    <input type="email" value="<?= $row['email']?>" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Profile image : <img width="20" src="/company/upload/<?= $row['image']?>" alt=""></label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Department</label>
                    <select name="depId" class="form-control">
                        <?php foreach($departments as $data) { ?>
                        <option value ="<?php echo $data['id'] ?>"><?php echo $data['name']?></option>
                        <?php } ?>
                    </select>
                </div>
                <button name="update" class="btn btn-1">Update</button>
            </form>
        </div>
    </div>
</div>
<?php 
include'../shared/footer.php';
?> 

