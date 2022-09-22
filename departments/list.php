<?php 
include'../shared/header.php';
include'../general/env.php';
include'../general/functions.php';
include'../shared/nav.php';
$select ="SELECT * FROM `departments`";
$s =mysqli_query($conn,$select);

if(isset($_GET['delete'])){
  $id= $_GET['delete'];
  $delete="DELETE FROM `departments` WHERE id=$id";
  $d =mysqli_query($conn,$delete);
  header("location:/company/departments/list.php");
}

?> 
  <h1 class="text-center title ">Company Departments List</h1> 
  <div class="container col-6 cont">
    <div class="card ">
        <div class="card-body">
           <table class="table table-light">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th style="padding-left:20px;">Delete</th>
            </tr>
           <?php foreach($s as $data){?>
            <tr>
              <td><?= $data['id'] ?> </td>
              <td><?= $data['name'] ?> </td>
              <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
  <a class="btn " href="/company/departments/list.php?delete=<?=$data['id']?>"><i class="bi bi-trash3-fill text-danger" style ="font-size: 18px;  padding: 5px;" ></i></a>

</div>
</td>
            </tr>
            <?php }?>
           </table>
        </div>
    </div>
</div>

<?php 
include'../shared/footer.php';
?> 
  
