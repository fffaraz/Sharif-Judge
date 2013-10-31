<?php
/**
 * Sharif Judge online judge
 * @file delete_assignment.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->view('templates/top_bar'); ?>
<?php $this->view('templates/side_bar',array('selected'=>'assignments')); ?>

<div id="main_container">

	<div id="page_title">
		<img src="<?php echo base_url('assets/images/icons/delete.png') ?>"/>
		<span><?php t($title); ?></span>
	</div>

	<div id="main_content">
		<p><?php t("Are you sure you want to delete this assignment?"); ?></p>
		<p>
			<?php t("Assignment id"); ?>: <?php echo $id ?><br>
			<?php t("Assignment name"); ?>: <?php echo $name ?>
		</p>
		<p><?php t("All submission results will be deleted."); ?></p>
		<?php echo form_open('assignments/delete/'.$id); ?>
		<input type="hidden" name="delete" value="delete"/>
		<p class="input_p">
			<input type="checkbox" name="delete_codes"/> <?php t("Also delete test cases and all submitted codes for this assignment."); ?>
		</p>
		<p class="input_p">
			<input type="submit" class="sharif_input" value="Yes, I'm Sure"/> <?php echo anchor('assignments', tr("No, I'm not")); ?>
		</p>
		</form>

	</div> <!-- main_content -->

</div> <!-- main_container -->