<?php
include('header.php');
$b=new connection;
$b->connect();
$select = $b->select("app_apk INNER JOIN app_register","*","app_apk.reg_id = app_register.reg_id");
?>
<div class="container">
<?php
while($rows=mysql_fetch_array($select))
{?>
	<div class="well sidebar-nav span7 single-app">
		<?php $banner = '/screenshots/'.$rows['app_banner']; ?>
		<img src=".<?php echo $banner ?>" class="app-banner">
		<div class="app-details offset1">
			<a href="app_detail.php?id=<?php echo $rows['apk_id']; ?>"><?php echo $rows['app_name']; ?></a>
			<p>
				<?php echo $rows['description']; ?>
			</p>
		</div>
		<div class="developed-by">
			<?php $propic = '/propic/'.$rows['propic'];?>
			<img src=".<?php echo $propic ?>" class="app-banner propic">
			<label class="username"><?php echo $rows['username']; ?></label>
			<a class="offset4"  href="app_detail.php?id=<?php echo $rows['apk_id']; ?>"><ul class="btn btn-primary btn-small" >Download</ul></a>
		</div>
	</div>
<?php
}
include('footer.php');
?>
</div>