<?php
	$query_menu=mysqli_query($connect,'SELECT * FROM `menu`');
	while ($menu=mysqli_fetch_assoc($query_menu)) {
?>
<li>
	<a href="/<?php echo $menu['link']?>"><?php echo $menu['title']?></a>
</li>

<?php	

	}
?>