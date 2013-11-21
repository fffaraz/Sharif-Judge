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
<div id="header_full">
	<div id="header_bar">
	</div>
</div>
<div id="main_step">