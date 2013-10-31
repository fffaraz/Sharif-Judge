<?php
/**
 * Sharif Judge online judge
 * @file delete_user.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->view('templates/top_bar'); ?>
<?php $this->view('templates/side_bar',array('selected'=>'users')); ?>

<div id="main_container">

	<div id="page_title">
		<img src="<?php echo base_url('assets-fa/images/icons/delete_submissions.png') ?>"/>
		<span><?php t($title); ?></span>
	</div>

	<div id="main_content">
		<p><?php t("Are you sure you want to delete this user's submitted codes?"); ?></p>
		<p><?php t("Username"); ?>: <?php echo $delete_username ?></p>
		<?php echo form_open('users/delete_submissions/'.$id); ?>
		<input type="hidden" name="delete" value="delete"/>
		<p class="input_p">
			<input type="checkbox" name="delete_from_database"/> <?php t("Also delete submission results from database."); ?>
		</p>
		<p class="input_p">
			<input type="submit" class="sharif_input" value="Yes, I'm Sure"/> <?php echo anchor('users', tr("No, I'm not")); ?>
		</p>
		</form>

	</div> <!-- main_content -->

</div> <!-- main_container -->