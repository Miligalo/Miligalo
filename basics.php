html
<hr>
<?php
	echo 'Hello, World!';
?>
<hr>
<select name="year">
	<?php 
	 for($i = 1910; $i <= 2010; $i++){
		echo "<option>$i</option>";
	 } 
	 ?>
</select>
<hr>
&copy; <?php echo date('Y'); ?>