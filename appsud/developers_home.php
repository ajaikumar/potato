<?php
include('header.php');
if($_SESSION['username'])
{
?>
<div id="useroptions">
    <div class="span6">
    <ul class="nav nav-pills">
    <li class="dropdown">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
  <p>Welcome <?php echo $_SESSION['username']; ?></p><b class="caret"></b></a>
  <ul class="dropdown-menu">
      <li><a href="edit_profile.php">Edit Profile</a></li>
      <li><a href="upload_file.php">Upload Apps</a></li>
      <li class="divider"></li>
      <li><a href="logout.php">Log Out</a></li>
  </ul>
</li>
</ul>
</div>
</div>

<div class="container">
<div id="specpage">
<div class="userpanel">
<div class="devtabs">
                <ul class="nav nav-tabs">
                <li><a href="#" data-toggle="tab">Home</a></li>
                <li><a href="#" data-toggle="tab">Activity</a></li>
                <li><a href="#" data-toggle="tab">Blog</a></li>
                </ul>
                </div>
                
                <div class="pic">
                <table>
                <tr><td>
                <img src="userim/app_104_462586713767628_420011445.png" />
                </td></tr>
                </table>
                </div>
                
</div>

    <div class="Uploadpglnk">
    <hr />
    <h2>Upload Your Application Here</h2>.
    <a href="upload_file.php"><ul class="btn btn-primary" >Upload New App</ul></a>
    </div>
            <div class="uplodedapps">
            <hr />
            <h3>Your Apps</h3>
            <hr />
            </div>
</div>
</div>
<?php 
include('footer.php');
} 
else{
  header('location:loginsignup.php');
}