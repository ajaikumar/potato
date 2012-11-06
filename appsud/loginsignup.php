<?php
include('header.php');
$b=new connection;
$b->connect();
$msg='';
if(isset($_REQUEST['msg']))
{
$msg = $_REQUEST['msg'];
}
if($msg == '')
{
  session_destroy();
}

?>


<div class="container">
                    <div id="loginreghead">
                        <h2>Already a member Log in, else Sign Up its free</h2>
                    </div>
                    <?php
                    if($msg!='')
                    { ?>
                      <div class="alert alert-error">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <?php echo $msg; ?>
                    </div>
                   <?php } ?>
                    
                <div id="hr"></div>
                
                
            <div id="forms1">
        <div class="login">
    <h3>Developer Login</h3>

<table border="0">
<form method="POST" action="action/loginauth.php">
<tr><td>Username</td><td>:</td><td><input type="text" name="uname" size="20" value="<?php echo isset($_SESSION['uname'])?$_SESSION['uname']:''; ?>"></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="pass"></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Login" class="btn btn-primary" name="login"></td></tr>
</form>
</table>
        </div>
        </div>
        
        <div id="forms2">
        <div class="signup">
    <h3>Sign Up</h3>

            <table border="0">
            <form method="POST" action="action/loginauth.php">
            <tr><td>Username<input type="text" name="username" size="20" value="<?php echo isset($_SESSION['username'])?$_SESSION['username']:''; ?>"></td></tr>
            <tr><td>Email<input type="text" name="emailid" value="<?php echo isset($_SESSION['email'])?$_SESSION['email']:'' ?>"></td></tr>
            <tr><td>New Password<input type="password" name="password" ></td></tr>
            <tr><td>Retype Password<input type="password" name="re_password"></td></tr>
            <tr><td>Company/IndividualDeveloper<select name="usertype"> 
  <option value="0" >Choose Category</option>
  <option value="1" >Individual</option>
  <option value="2" >Company</option>
  </select></p></td></tr>
            <tr><td>Country<input type="text" name="country" value="<?php echo isset($_SESSION['country'])?$_SESSION['country']:'' ?>"></td></tr>
            <tr><td>Phone<input type="text" name="phone" value="<?php echo isset($_SESSION['phone'])?$_SESSION['phone']:'' ?>"></td></tr>
            <tr><td>Website<input type="text" name="website" value="<?php echo isset($_SESSION['website'])?$_SESSION['website']:'' ?>"></td></tr>
            <tr><td><input type="submit" value="Sign Up" name="signup" class="btn btn-primary"></td></tr>
        </form>
    </table>
        </div>
            </div>
                  
        <div id="terms">
        <h3>Terms & Conditions</h3>
        <P></P>
        </div>          
                  
</div>  
<?php
include('footer.php');
?>