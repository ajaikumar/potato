<?php
include('header.php');
if($_SESSION['username'])
{
    $uname = $_SESSION['username'];
    $b=new connection;
    $b->connect();
    $select = $b->select("app_register","*","username='$uname'");
    $rows = mysql_fetch_array($select);
?>

<div class="container">
    <div id="leftPanel">
        <div id="forms3">
            <div class="eduserinfo">
                <h3>User Info</h3>
                <table border="0">
                <form action='action/editpro_action.php' method='post'>
                <input id="SnapHostID" name="SnapHostID" type="hidden" value="7TLQ3DQP68GP" />
                <tr><td>First Name<input id="firstname" type="text" name="firstname" value="<?php echo isset($rows['firstname'])?$rows['firstname']:''; ?>" size="20"></td></tr>
                <tr><td>Last Name<input id="lastname" type="text" name="lastname" value="<?php echo isset($rows['lastname'])?$rows['lastname']:''; ?>" ></td></tr>
                <tr><td>Country<input id="country" type="text" value="<?php echo isset($rows['country'])?$rows['country']:''; ?>" name="country"></td></tr>
                <tr><td>Phone<input id="phone" type="text" value="<?php echo isset($rows['phone'])?$rows['phone']:''; ?>" name="phone"></td></tr>
                <tr><td>Website / Online Profile<input  id="website" type="text" value="<?php echo isset($rows['website'])?$rows['website']:''; ?>" name="website"></td></tr>
                <tr><td><input id="submit" type="submit" name="update" value="Update"></td></tr>
                </form>
                </table>
            </div>
        </div>
        <div id="photoupload">
            <form action="action/editpropic.php" method="post" enctype="multipart/form-data">
            <label for="photo">Edit profile Picture:</label>
            <img src="<?php echo 'propic/'.$rows['propic']; ?>">
            <input type="file" name="file" id="file"/>
            <input type="submit" name="save" value="Save"/>
            </form>
            <ul>
            <li><a href="#">Change Username</a></li>
            <li><a href="#">Change Password</a></li>
            </ul>
        </div>
    </div>
</div>



<?php 
include('footer.php');
} 
else{
  header('location:loginsignup.php');
}           
