<?php
/**
 * Sharif Judge online judge
 * @file scoreboard.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->view('templates/top_bar'); ?>
<?php $this->view('templates/side_bar',array('selected'=>'scoreboard')); ?>

<div id="main_container">

	<div id="page_title">
		<img src="<?php echo base_url('assets/images/icons/scoreboard.png') ?>"/>
		<span><?php echo $title ?></span>
	</div>

	<div id="main_content">
		<?php if ($assignment['id']===0): ?>
		<p>No assignment is selected.</p>
		<?php elseif (!$assignment['scoreboard']): ?>
		<p>Scoreboard is disabled.</p>
		<?php else: ?>
			<p>Scoreboard of <?php echo $assignment['name'] ?></p>
			<?php echo $scoreboard ?>
		<?php endif ?>

	</div> <!-- main_content -->

</div> <!-- main_container -->