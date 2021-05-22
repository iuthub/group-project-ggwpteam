<?php
	$query_contacts=mysqli_query($connect,'SELECT `value`,`icon`,`link` FROM `contacts` WHERE id IN (1,2)');
	$i=0;
	
	while ($contact=mysqli_fetch_assoc($query_contacts)) {
		$i++;
?>
	<div class="line">
        	<i class="icon-<?php echo $contact['icon']?>"></i>
        <span>		
<?php 
	if ($i==2){
?>		<a href="mailto:<?php echo $contact['link']?>">
			<?php echo $contact['value']?></a>
<?php }else{
?>	
	<a href="<?php echo $contact['link']?>">
			<?php echo $contact['value']?></a>

<?php } ?>
        	
		</span>
	</div>
<?php	

	}
?>