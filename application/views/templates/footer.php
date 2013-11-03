<?php
/**
 * Sharif Judge online judge
 * @file footer.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script>
	var check_for_notifications = false; // Set to true if you want to enable checking for new notifications
	var notif_check_time = null;
	var notif_check_delay = 30; //checks for new notifications every 30 seconds
	function check_notifs(){
		if (notif_check_time==null)
			notif_check_time = moment().add('milliseconds',offset-(notif_check_delay*1000));
		$.post("<?php echo site_url('notifications/check') ?>",
			{
				time: notif_check_time.format('YYYY-MM-DD HH:mm:ss'),
				<?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>'
			},
			function (data) {
				if (data=="new_notification"){
					noty({
						text: 'New Notification',
						layout: 'bottomRight',
						type: 'information',
						closeWith: ['click','button'],
						animation: {
							open: {height: 'toggle'},
							close: {height: 'toggle'},
							easing: 'swing',
							speed: 300
						}
					});
					alert("New Notification");
				}
			}
		);
		notif_check_time = moment().add('milliseconds',offset);
	}
	$(document).ready(function(){
		$('body').nanoScroller();
		$(window).resize(function(){
			$('body').nanoScroller();
		});
		$('#main_content').resize(function(){
			$('body').nanoScroller();
		});
		if ( check_for_notifications )
			window.setInterval(check_notifs,(notif_check_delay*1000));
	});
</script>
</div>
</body>
</html>