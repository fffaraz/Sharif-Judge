<?php
/**
 * Sharif Judge online judge
 * @file rejudge.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->view('templates/top_bar'); ?>
<?php $this->view('templates/side_bar',array('selected'=>'assignments')); ?>

<div id="main_container">

	<div id="page_title">
		<img src="<?php echo base_url('assets/images/icons/rejudge.png') ?>"/>
		<span><?php t($title); ?></span>
	</div>

	<div id="main_content">
		<?php foreach ($msg as $message): ?>
			<p class="shj_ok"><?php echo $message ?></p>
		<?php endforeach ?>
		<p>
			<?php t("Selected Assignment"); ?>: <?php echo $assignment['name'] ?>
		</p>
		<p>
			<?php t("By clicking on rejudge, all submissions of selected problem will go in <code>PENDING</code> state. Then Sharif Judge rejudges them one by one."); ?>
		</p>
		<p>
			<?php t("If you want to rejudge a single submission, you can click on rejudge button in %1 or %2 page.", anchor('submissions/all', 'All Submissions'), anchor('submissions/final', 'Final Submissions')); ?>
		</p>
		<?php foreach ($problems as $problem): ?>
			<?php echo form_open('rejudge') ?>
				<input type="hidden" name="problem_id" value="<?php echo $problem['id'] ?>"/>
				<input type="submit" class="sharif_input" value="Rejudge Problem <?php echo $problem['id'] ?> (<?php echo $problem['name'] ?>)"/>
			</form>
		<?php endforeach ?>

	</div> <!-- main_content -->

</div> <!-- main_container -->