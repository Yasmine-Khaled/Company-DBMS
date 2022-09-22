<?php 
include'./shared/header.php';
include'./general/env.php';
include'./general/functions.php';
include'./shared/header.php';
include'./shared/footer.php';

?>
<nav class="navbar navbar-expand-lg navbar-dark bd-navbar "style="height:50px;">
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Company<span class="sr-only">(current)</span></a>
      </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-light my-2 my-sm-0" type="submit" href="./admin/login.php">Login</a>
    </form>
  </div>

</nav>
<div class="container-fluid">
  <div class="row row-col">
    <div class="col-5"><h1 style="font-size:80px;font-style: bold; padding:60px; padding-top:100px;color: rgb(45, 45, 45);">Welcome to<br> our company</h1><br>
    <p style="padding:80px; padding-top:0px;padding-bottom:20px;">Company Database Management System to manage Admins , Employees and Departments data with easy access and manipulation of the same.</p>
    <div style="padding-left:80px;"><a href="./admin/login.php" class="btn btn-1" style=" width:80px; background-color: #7a59ab;color: white;">Login</a></div>
</div>
    <div class="col"><img  style="width:90%;height:92vh;" src="./shared/At the office-amico.png" alt=""></div>
  </div>
</div>