<?php
include('header.php');
$b=new connection;
$b->connect();
$appid = $_SESSION['appid'];
$apkid = $_REQUEST['id'];
$select = $b->select("app_apk","*","apk_id='$apkid'");
$rows = mysql_fetch_array($select);
?>
           
           <div class="container">
                    <div id="leftPanel">
                     <div id="specpage">
                     <div class="appdet">
                <h3><?php echo $rows['app_name']; ?></h3>
                <div class="appdetails">
                <ul class="nav nav-tabs">
                <li><a href="#" data-toggle="tab">Description</a></li>
                <li><a href="#" data-toggle="tab">Reviews</a></li>
                <li><a href="#" data-toggle="tab">What's New</a></li>
                <li><a href="#" data-toggle="tab">Permission's</a></li>
                </ul>
                </div>
                <div class="apimg">
                <table border="0">
                <tr><td><img class="screenshots" src="<?php echo 'screenshots/'.$rows['app_banner']; ?>"/></td>
                </td></tr></table>
                <a href="<?php echo 'apk/'.$rows['apk_name']; ?>" target="_blank" class="offset5"><ul class="btn btn-primary" >Download</ul></a>
                </div>
                </div>
                <hr />
                        <div class="scrnsht">
                        <h3>Screen Shots</h3>
                        <div class="scrnshtimg">
                        <table>
                        <tr>
                        <td><img class="screenshots" src="<?php echo 'screenshots/'.$rows['app_scr1']; ?>"/></td>
                        <td><img class="screenshots" src="<?php echo 'screenshots/'.$rows['app_scr2']; ?>"/></td>
                        <td><img class="screenshots" src="<?php echo 'screenshots/'.$rows['app_scr3']; ?>"/></td>
                        </tr></table></div>
                        <hr />
                        </div>
                                <div id="appreviews">
                                <hr />
                                <h3>Reviews</h3>
                                <hr />
                                </div>
                    </div>
                    </div>
                    </div>
    
<?php
include('footer.php');


?>