<?php
session_start();
if(isset($_GET['logout'])){
  session_unset();
  session_destroy();
  header("Location: http://localhost:8080/company/"); 
  exit();

}
?>
<nav class="navbar navbar-expand-lg navbar-dark bd-navbar">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/company/shared/home.php">Company<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Admins</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/company/admin/list.php">List</a>
          <a class="dropdown-item" href="/company/admin/add.php">Add</a>

        </div>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Employees</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/company/employees/list.php">List</a>
          <a class="dropdown-item" href="/company/employees/add.php">Add</a>
        </div>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Departments</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/company/departments/list.php">List</a>
          <a class="dropdown-item" href="/company/departments/add.php">Add</a>
        </div>
      </li> 
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="logout" href="/company/admin/login.php">Log out</button>
    </form>
  </div>
</nav>