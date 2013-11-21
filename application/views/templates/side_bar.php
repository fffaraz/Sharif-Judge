<?php
/**
 * Sharif Judge online judge
 * @file side_bar.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script type="text/javascript" src="<?php echo base_url("assets-fa/js/shj_functions.js") ?>"></script>

<script type= "text/javascript">
	// difference of server and browser time:
	var offset = moment('<?php echo date("Y-m-d H:i:s",shj_now()); ?>').diff(moment());
	var time; // current time of browser
	var finish_time; // finish time of assignment
	var extra_time; // extra time of assignment
	var sidebar;


	function sync_server_time() {
		$.post('<?php echo site_url('server_time') ?>',
			{<?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>'},
			function(data) {
				offset = moment(data).diff(moment());
			}
		);
	}

	$(document).ready(function() {
		time = moment();
		finish_time = moment("<?php echo $assignment['finish_time'] ?>");
		extra_time = moment.duration(<?php echo $assignment['extra_time'] ?>, 'seconds');
		update_clock();
		window.setInterval(update_clock,1000);
	});
</script>

<div id="side_bar" class="sidebar_open">
	<ul>

		<div class="side_box">
			<a href="<?php echo site_url('dashboard') ?>"><li <?php echo ($selected=='dashboard'?'class="selected"':'') ?>><i class="splashy-home_green"></i><br><span class="sidebar_text"><?php tt('Dashboard'); ?></span></li></a>
		</div>

		<?php if ($user_level==3): ?>
		<div class="side_box">
			<a href="<?php echo site_url('settings') ?>"><li <?php echo ($selected=='settings'?'class="selected"':'') ?>><i class="splashy-sprocket_light"></i><br><span class="sidebar_text"><?php tt('Settings'); ?></span></li></a>
		</div>
		<?php endif ?>

		<?php if ($user_level==3): ?>
		<div class="side_box">
			<a href="<?php echo site_url('users') ?>"><li <?php echo ($selected=='users'?'class="selected"':'') ?>><i class="splashy-group_blue"></i><br><span class="sidebar_text"><?php tt('Users'); ?></span></li></a>
		</div>
		<?php endif ?>

		<div class="side_box">
			<a href="<?php echo site_url('notifications') ?>"><li <?php echo ($selected=='notifications'?'class="selected"':'') ?>><i class="splashy-comment_reply"></i><br><span class="sidebar_text"><?php tt('Notifications'); ?></span></li></a>
		</div>

		<div class="side_box">
			<a href="<?php echo site_url('registera') ?>"><li <?php echo ($selected=='registera'?'class="selected"':'') ?>><i class="splashy-folder_modernist_opened"></i><br><span class="sidebar_text"><?php tt('Register Assignment'); ?></span></li></a>
		</div>

		<div class="side_box">
			<a href="<?php echo site_url('assignments') ?>"><li <?php echo ($selected=='assignments'?'class="selected"':'') ?>><i class="splashy-folder_modernist_opened"></i><br><span class="sidebar_text"><?php tt('Assignments'); ?></span></li></a>
		</div>

		<div class="side_box">
			<a href="<?php echo site_url('problems') ?>"><li <?php echo ($selected=='problems'?'class="selected"':'') ?>><i class="splashy-folder_modernist_opened"></i><br><span class="sidebar_text"><?php tt('Problems'); ?></span></li></a>
		</div>

		<div class="side_box">
			<a href="<?php echo site_url('submit') ?>"><li <?php echo ($selected=='submit'?'class="selected"':'') ?>><i class="splashy-arrow_large_up"></i><br><span class="sidebar_text"><?php tt('Submit'); ?></span></li></a>
		</div>

		<div class="side_box">
			<a href="<?php echo site_url('submissions/final') ?>"><li <?php echo ($selected=='final_submissions'?'class="selected"':'') ?>><i class="splashy-marker_rounded_violet"></i><br><span class="sidebar_text"><?php tt('Final Submissions'); ?></span></li></a>
		</div>

		<div class="side_box">
			<a href="<?php echo site_url('submissions/all') ?>"><li <?php echo ($selected=='all_submissions'?'class="selected"':'') ?>><i class="splashy-view_list_with_thumbnail"></i><br><span class="sidebar_text"><?php tt('All Submissions'); ?></span></li></a>
		</div>

		<div class="side_box">
			<a href="<?php echo site_url('scoreboard') ?>"><li <?php echo ($selected=='scoreboard'?'class="selected"':'') ?>><i class="splashy-star_boxed_full"></i><br><span class="sidebar_text"><?php tt('Scoreboard'); ?></span></li></a>
		</div>

	</ul>
</div>

