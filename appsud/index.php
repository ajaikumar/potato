<?php
include('header.php');
$b=new connection;
$b->connect();
$select = $b->select("app_apk","*");
?>
<div class="container">
<?php
while($rows=mysql_fetch_array($select))
{?>
	<div class="well sidebar-nav span6 single-app">
		<?php $banner = '/screenshots/'.$rows['app_banner']; ?>
		<img src=".<?php echo $banner ?>" class="app-banner">
		<div class="app-details offset1">
			<a href="app_detail.php?id=<?php echo $rows['apk_id']; ?>"><?php echo $rows['app_name']; ?></a>
			<p>
				<?php echo $rows['description']; ?>
			</p>
		</div>
		<div class="developed-by">
			<img src=".<?php echo ?>" class="app-banner">
		</div>
	</div>
<?php
}
include('footer.php');
?>
</div>

