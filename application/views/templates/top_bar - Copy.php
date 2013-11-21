<?php
/**
 * Sharif Judge online judge
 * @file top_bar.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script>
	$(document).ready(function(){
		$("#top_bar").hoverIntent({
			over:function(){
				$(this).children(".top_menu").show();
				$(this).addClass('shj_white');
			},
			out:function(){
				$(this).children(".top_menu").hide();
				$(this).removeClass('shj_white');
			},
			selector:'.top_object.shj_menu'
		});
		$(".select_assignment").click(
			function(){
				var id = $(this).attr('id');
				$.post(
					'<?php echo site_url('assignments/select') ?>',
					{
						assignment_select:id,
						<?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>'
					},
					function(a) {
						if (a != "shj_failed"){
							$(".select_assignment").removeClass('checked');
							$(".i"+id).addClass('checked');
							$(".assignment_name").html($("#"+id+" .assignment_item").html());
							finish_time = moment(a.split(',')[0]);
							extra_time = moment.duration(parseInt(a.split(',')[1],10), 'seconds');
						}
					}
				);
			}
		);
	});
</script>
<div id="header_bar">
Hello
</div>
<div id="top_bar">
	<div class="top_object shj_menu" id="user_top">
		<?php echo anchor('profile',$username,'id="profile_link"') ?>
		<div class="top_menu" id="user_menu">
			<a href="<?php echo site_url('profile') ?>"><div><?php tt('Profile'); ?></div></a>
			<a href="<?php echo site_url('logout') ?>"><div><?php tt('Logout'); ?></div></a>
		</div>
	</div>
	<div class="top_object shj_menu" id="select_assignment_top">
		<a href="<?php echo site_url('assignments') ?>"><span class="assignment_name"><?php echo $assignment['name'] ?></span></a>
		<div class="top_menu" id="select_assignment_menu">
			<?php foreach($all_assignments as $item): ?>
				<div class="assignment_block" id="<?php echo $item['id'] ?>">
					<div class="c1">
						<div class="select_assignment <?php echo ($item['id']==$assignment['id']?'check checked':'check') ?> i<?php echo $item['id'] ?>" id="<?php echo $item['id'] ?>"></div>
					</div>
					<div class="assignment_item"><?php echo $item['name'] ?></div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<div class="top_object countdown" id="countdown">
		<div class="time_block">
			<span id="time_days"></span><br>
			<span class="time_label"><?php tt('day'); ?></span><span class="time_label" id="days_label"></span>
		</div>
		<div class="time_block">
			<span id="time_hours"></span><br>
			<span class="time_label"><?php tt('hour'); ?></span><span class="time_label" id="hours_label"></span>
		</div>
		<div class="time_block">
			<span id="time_minutes"></span><br>
			<span class="time_label"><?php tt('minute'); ?></span><span class="time_label" id="minutes_label"></span>
		</div>
		<div class="time_block">
			<span id="time_seconds"></span><br>
			<span class="time_label"><?php tt('second'); ?></span><span class="time_label" id="seconds_label"></span>
		</div>
	</div>
	<div class="top_object countdown" id="extra_time">
		<div class="time_block">
			<span><?php tt('Extra'); ?></span><br><span><?php tt('Time'); ?></span>
		</div>
	</div>
	<div id="shj_logo">
		<a href="<?php echo site_url('/'); ?>">
			<img src="<?php echo base_url('assets-fa/images/logo_small.png'); ?>"/>
			<img src="<?php echo base_url('assets-fa/images/banner_small.png'); ?>"/>
		</a>
	</div>
	<?php if ($user_level >= 2): ?>
	<div class="top_object shj_menu top_left" id="admin_tools_top">
		Tools
		<div class="top_menu" id="admin_tools_menu">
			<a href="<?php echo site_url('rejudge') ?>"><div><?php tt('Rejudge'); ?></div></a>
			<a href="<?php echo site_url('queue') ?>"><div><?php tt('Submission Queue'); ?></div></a>
			<a href="<?php echo site_url('moss/'.$assignment['id']) ?>"><div><?php tt('Cheat Detection'); ?></div></a>
		</div>
	</div>
	<?php endif ?>
</div>
<div class="mainstep">