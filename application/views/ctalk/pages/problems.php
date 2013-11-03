<?php
/**
 * Sharif Judge online judge
 * @file assignments.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->view('templates/top_bar'); ?>
<?php $this->view('templates/side_bar',array('selected'=>'problems')); ?>

<div id="main_container">

	<div id="page_title">
		<img src="<?php echo base_url('assets-fa/images/icons/assignments.png') ?>"/>
		<span><?php t($title); ?></span>
	</div>

	<div id="main_content">

		<?php if (count($all_problems)==0): ?>
			<p style="text-align: center;"><?php t("Nothing to show..."); ?></p>
		<?php endif ?>
		<?php foreach($all_problems as $item): ?>
			<div class="assignment_block" id="<?php echo $item['id'] ?>">
				<div class="assignment_item">
					<div class="assignment_subitem"><?php echo $item['id'] ?></div>
					<div class="assignment_subitem"><?php echo $item['name'] ?></div>
					<div class="assignment_subitem"><?php echo $item['score'] ?> </div>
					<div class="assignment_subitem"><?php echo $item['question'] ?> </div>
				</div>
			</div>

		<?php endforeach ?>

	</div> <!-- main_content -->

</div> <!-- main_container -->