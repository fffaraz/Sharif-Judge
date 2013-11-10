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

<div id="main_container">

	<div id="page_title">
		<img src="<?php echo base_url('assets-fa/images/icons/assignments.png') ?>"/>
		<span><?php t($title); ?></span>
	</div>

	<div id="main_content">

	<?php
	if($has_error == true)
		echo $error;
	else
	{
		if($show_code)
		{
	?>



	<?php
		}
		if($show_buy)
		{
	?>



	<?php		
		}
		if($show_free)
		{
	?>

	<br> <a href="<?php echo site_url('registera/freeactivate/'.$buy_assignment['id']) ?>"><?php t("Activate Free"); ?></a> <br>

	<?php
		}
	}
	?>

	</div> <!-- main_content -->

</div> <!-- main_container -->
