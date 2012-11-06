<?php
include('header.php');
$b=new connection;
$b->connect();
$msg = $_REQUEST['msg'];
$id = $_REQUEST['id'];
if($_SESSION['username'])
{
$select = $b->select("app_apk","*","apk_id='$id'");
$rows = mysql_fetch_array($select);
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
   <div id="uploadedappdetail">
   <h3>APP Name: <?php echo $rows['app_name']; ?> </h3>
  <p>Application Type : <?php echo $rows['app_type']; ?></p>
  <p>Application Id : <?php echo $rows['apk_id']; ?></p>
  <p>Version : <?php echo $rows['app_version']; ?></p>
  <p>Author :</p>
  <p>Description : <?php echo $rows['description']; ?></p>
   </div>
   <form enctype="multipart/form-data" action="action/confirmaction.php" method="POST">
  <div id="forms4">
    <div class="upload">
            <h3>Compatable Android Versions </h3>
            <div class="control-group">
            <div class="controls span2">
            <label class="checkbox">
            <input type="checkbox" value="2.x" name="android[]" id="inlinecheckbox1">2.0/2.1 Eclair</label>
            <label class="checkbox">
            <input type="checkbox" value="2.2.x" name="android[]" id="inlinecheckbox1">2.2.x Froyo</label>
            <label class="checkbox">
            <input type="checkbox" value="2.3.x" name="android[]" id="inlinecheckbox1">2.3.x Gingerbread</label>
            <label class="checkbox">
            <input type="checkbox" value="3.x" name="android[]" id="inlinecheckbox1">3.x Honeycomb</label>
            <label class="checkbox">
            <input type="checkbox" value="4.0.x" name="android[]" id="inlinecheckbox1">4.0.x Ice Cream Sandwich</label>
            <label class="checkbox">
            <input type="checkbox" value="4.1.x" name="android[]" id="inlinecheckbox1">4.1/4.2 Jelly Bean</label>
            <label class="checkbox">
            </div>
            </div>
              
</div>  
</div>
    <div id="imgupld2">
       <div class="upload">
         <h3>Upload Display Banner</h3>
         <input name="banner" type="file" />      
         </div>
         
        <h3>Upload Screen Shots</h3>
        <input name="scr1" type="file"/>
        <input name="scr2" type="file"/>
        <input name="scr3" type="file"/>
        <br/>
        <br/>
        <input type="submit" name="upload" value="Publish" class="btn btn-primary" />
        </div>
       </div>
    </form>
<?php
include('footer.php');
}
else{
     header('location:loginsignup.php');
}
?>