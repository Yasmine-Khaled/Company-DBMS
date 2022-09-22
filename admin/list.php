<?php 
include'../shared/header.php';
include'../general/env.php';
include'../general/functions.php';
include'../shared/nav.php';
$select ="SELECT * FROM `admin`";
$s =mysqli_query($conn,$select);

if(isset($_GET['delete'])){
  $id= $_GET['delete'];
  $delete="DELETE FROM `admin` WHERE id=$id";
  $d =mysqli_query($conn,$delete);
  header("location:/company/admin/list.php");
}

?> 
  <h1 class="text-center title ">Company Admins List</h1> 
  <div class="container col-6 cont">
    <div class="card ">
        <div class="card-body">
           <table class="table table-light">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Role</th>
              <th style="padding-left:20px;">Delete</th>
            </tr>
           <?php foreach($s as $data){?>
            <tr>
              <td><?= $data['id'] ?> </td>
              <td><?= $data['name'] ?> </td>
              <td><?= $data['role'] ?> </td>
              <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
  <a class="btn " href="/company/admin/list.php?delete=<?=$data['id']?>"><i class="bi bi-trash3-fill text-danger" style ="font-size: 18px;  padding: 5px;" ></i></a>

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
  
