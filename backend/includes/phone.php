<?php
	$query_contacts=mysqli_query($connect,'SELECT `value`,`title`,`link`,`options` FROM `contacts` WHERE id IN (4,5)');
		
	while ($contact=mysqli_fetch_assoc($query_contacts)) {
		
?>
	<div class="line">
		<b><?php echo $contact['title']?></b>
        <span>		
			<a href="tel:<?php echo $contact['link']?>">
			<?php echo $contact['value']?></a>
			<small>(<?php echo $contact['options']?>)</small>
		</span>
	</div>
<?php	

	}
?>