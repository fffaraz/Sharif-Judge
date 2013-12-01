<?php
/**
 * Sharif Judge online judge
 * @file buy.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->view('templates/top_bar'); ?>
<?php $this->view('templates/side_bar',array('selected'=>'registera')); ?>
<?php $this->view('templates/menu_bar'); ?>

<div id="main_container">

	<div id="page_title">
		<img src="<?php echo base_url('assets-fa/images/icons/assignments.png') ?>"/>
		<span><?php tt($title); ?></span>
	</div>

	<div id="main_content">

	<?php
	if($has_error == true)
		t($error);
	else
	{
		if($show_code)
		{
	?>

<br><?php echo form_open('registera/codeactivate/'.$buy_assignment['id']); ?>
<?php tt("Activate With Code:"); ?><br>
<?php tt("Code"); ?> : <input type="text" name="code" /><br>
<input type="submit" />
</form><br>

	<?php
		}
		if($show_buy)
		{
	?>

<br>
<?php tt('Participation in this assignment requires payment.'); ?>
<br> <?php tt("Price"); ?> : <?php echo $buy_assignment['price'];?><br>
<a href="<?php echo site_url('registera/buyactivate/'.$buy_assignment['id']) ?>"><?php tt("Pay"); ?></a> <br>

	<?php		
		}
		if($show_free)
		{
	?>

<br>
<?php tt('Participation in this assignment is free.'); ?>
<br> <a href="<?php echo site_url('registera/freeactivate/'.$buy_assignment['id']) ?>"><?php tt("Free Activation"); ?></a> <br>

	<?php
		}
	}
	?>

	</div> <!-- main_content -->

</div> <!-- main_container -->
