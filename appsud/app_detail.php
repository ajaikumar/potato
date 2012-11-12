<?php
include('header.php');
$b=new connection;
$b->connect();
$appid = $_SESSION['appid'];
$apkid = $_REQUEST['id'];
$select = $b->select("app_apk","*","apk_id='$apkid'");
if($_SESSION['username'])
{
?>
           
           <div class="container">
                    <div id="leftPanel">
                     <div id="specpage">
                     <div class="appdet">
                <h3>APP XX01</h3>
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
                <tr><td><img src="appimage/01.jpg"/></td>
                </td></tr></table>
                </div>
                </div>
                <hr />
                        <div class="scrnsht">
                        <h3>Screen Shots</h3>
                        <div class="scrnshtimg">
                        <table>
                        <tr>
                        <td><img src="appimage/01.jpg"/></td>
                        <td><img src="appimage/01.jpg"/></td>
                        <td><img src="appimage/01.jpg" /></td>
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
}
else
{
    header('location:loginsignup.php');
}
?>
