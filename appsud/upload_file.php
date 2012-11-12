<?php
include('header.php');
$msg = $_REQUEST['msg'];
if($_SESSION['username'])
{
?>
<div class="container">               
 <?php
if($msg!='')
{ ?>
    <div class="alert alert-error">                    
    <button type="button" class="close" data-dismiss="alert">×
    </button>
<?php echo $msg; ?>                  
    </div>

<?php } ?>                
 
 <div id="forms3">
    <div class="upload">
            <h3>Upload Your App</h3>
            <table border="0">
            <form enctype="multipart/form-data" action="action/uploadaction.php" method="POST">
                Application Name<input type="text" name="apps" size="20"/>
                Application ID<input type="text" name="appid" size="20"/>
                Version<input type="text" name="version" size="20"/>
                Application Type<select name="apptype">
                    <option value="0" >Choose Category</option>
                    <option value="1">Games</option>
                    <option value="2">Social Networking</option>
                    <option value="3">Music</option>
                    <option value="3">Entertainment</option>
                    <option value="3">Navigation / Search</option>
                    <option value="3">Communication</option>
                    <option value="3">News</option>
                    <option value="3">Shopping</option>
                    <option value="3">Banking / Finance</option>
                    <option value="3">Dining / Restaurant</option>
                    <option value="3">Dinning / Restaurant</option>
                    <option value="3">Food / Drink</option>
                    <option value="3">Health</option>
                    <option value="3">Sports</option>
                    <option value="3">Productivity</option>
                    <option value="3">Education / Learning</option>
                    <option value="3">Travel</option>
                    <option value="3">Weather</option>
                </select>
                License<select name="license">
                    <option value="0" >Choose Category</option>
                    <option value="1">Free Ware</option>
                    <option value="2">Demo Version</option>
                </select>
                <label>Description</label>
                <input type = "text" name="description">
                <input name="uploaded" type="file" />
                <br/>
                <br/>
                <input type="submit" name="upload" value="Upload" class="btn btn-primary" />
                </table>
            </form>   
 
     
              
</div>  
</div>
</div>
<?php
include('footer.php');
}
else{
     header('location:loginsignup.php');
}
?>