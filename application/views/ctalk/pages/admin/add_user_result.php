<?php
/**
 * Sharif Judge online judge
 * @file add_user_result.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php if (count($ok) > 0): ?>
<p class="shj_ok"><?php tt("These users added successfully"); ?>:</p>
<ol>
	<?php foreach ($ok as $item): ?>
	<li><?php tt("Username"); ?>: <?php echo $item[0] ?> <?php tt("Email"); ?>: <?php echo $item[1] ?> <?php tt("Password"); ?>: <?php echo $item[2] ?> <?php tt("Role"); ?>: <?php echo $item[3] ?></li>
	<?php endforeach ?>
</ol>
<?php endif ?>
<?php if (count($error) > 0): ?>
<p class="shj_error"><?php tt("Error adding these users"); ?>:</p>
<ol>
	<?php foreach ($error as $item): ?>
	<li><?php tt("Username"); ?>: <?php echo $item[0] ?> <?php tt("Email"); ?>: <?php echo $item[1] ?> <?php tt("Password"); ?>: <?php echo $item[2] ?> <?php tt("Role"); ?>: <?php echo $item[3] ?> (<?php echo $item[4] ?>)</li>
	<?php endforeach ?>
</ol>
<?php endif ?>