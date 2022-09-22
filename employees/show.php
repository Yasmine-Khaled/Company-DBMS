<?php 
include'../shared/header.php';
include'../general/env.php';
include'../general/functions.php';
include'../shared/nav.php';
if(isset($_GET['show'])){
    $id =$_GET['show'];
    $select ="SELECT * FROM `employeesjoinwithdepartment` where EmpId=$id";
    $s = mysqli_query($conn,$select);
    $row =mysqli_fetch_assoc($s);

}

?> 
  <h2 class="text-center title "><?= $row['EmpName']?> Details</h2> 
  <div class="container col-4 cont">
    <div class="card ">
      <img src="/company/upload/<?= $row['empImg']?>" class="card-img-top" alt="">
        <div class="card-body">
          <h4 style="color:#7a59ab;"><?= $row['EmpName']?></h4>
          <h6><?= $row['empEmail']?></h6>
          <h6><?= $row['DepName']?></h6>


        </div>
    </div>
</div>

<?php 
include'../shared/footer.php';
?> 
  
