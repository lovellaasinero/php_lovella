<?php
$title='success';
require_once 'include/header.php'?>

<h1 class="text-center">YOU HAVE BEEN REGISTERED</h1>
<br>

<div class="card text-center mb-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_GET['firstname']. ' ' .$_GET['lastname'];?>
    <br>
    <br>
    <p class="card-text"><?php echo $_GET['birthday'];?>
    <br>
    <br>
    <p class="card-text"><?php echo $_GET['Specialty'];?>
    <br>
    <br>
    <p class="card-text"><?php echo $_GET['emailaddress'];?>
    <br>
    <br>
    <p class="card-text"><?php echo $_GET['contactnumber'];?>
    <br>
    <br>
    <a href="#" class="btn btn-primary">Don't go looking for others! ^_^</a>
  </div>
</div>

<?php require_once 'include/footer.php'?>