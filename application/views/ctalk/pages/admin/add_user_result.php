<?php
/**
 * Sharif Judge online judge
 * @file add_user_result.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php if (count($ok) > 0): ?>
<p class="shj_ok">These users added successfully:</p>
<ol>
	<?php foreach ($ok as $item): ?>
	<li>Usename: <?php echo $item[0] ?> Email: <?php echo $item[1] ?> Password: <?php echo $item[2] ?> Role: <?php echo $item[3] ?></li>
	<?php endforeach ?>
</ol>
<?php endif ?>
<?php if (count($error) > 0): ?>
<p class="shj_error">Error adding these users:</p>
<ol>
	<?php foreach ($error as $item): ?>
	<li>Usename: <?php echo $item[0] ?> Email: <?php echo $item[1] ?> Password: <?php echo $item[2] ?> Role: <?php echo $item[3] ?> (<?php echo $item[4] ?>)</li>
	<?php endforeach ?>
</ol>
<?php endif ?>