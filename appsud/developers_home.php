<?php
include('header.php');
if($_SESSION['username'])
{
?>
<div class="useropt">
  <p>Welcome <?php echo $_SESSION['username']; ?></p>
  <ul class="useropt">
      <li><a href="">Edit Profile</a></li>
      <li><a href="logout.php">Log Out</a></li>
  </ul>
</div>
<?php 
include('footer.php');
} 
else{
  header('location:loginsignup.php');
}