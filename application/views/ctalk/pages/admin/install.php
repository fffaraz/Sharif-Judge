<?php
/**
 * Sharif Judge online judge
 * @file install.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="main_container">

	<div id="page_title">
		<span><?php tt($title); ?></span>
	</div>

	<div id="main_content">
		<?php if($status=="Installed"): ?>
			<?php if (!$key_changed): ?>
				<p class="shj_error">
					<?php tt("It seems that the file"); ?> <code>application/config/config.php</code> <?php tt("is not writable by PHP"); ?>.
				</p>
				<p>
					<?php tt("So, for security, you should change the encryption key manually."); ?>
					<br>
					<?php tt("You should open"); ?> <code>application/config/config.php</code> <?php tt("and change the encryption key in this line"); ?>:
				</p>
				<pre>$config['encryption_key'] = '<?php echo $this->config->item('encryption_key'); ?>';</pre>
				<p>
					<?php tt("The key should be a 32-characters string as random as possible, with numbers and uppercase and lowercase letters."); ?><br>
					<?php tt("You can use this random string"); ?>: <code><?php echo random_string('alnum',32) ?></code>
				</p>
				<br>
			<?php endif ?>
			<p class="shj_ok"><?php tt("Sharif Judge installed!"); ?> <?php tt("Now you can"); ?><?php echo anchor('login', tr('login')); ?>.</p>
		<?php else: ?>
		<?php echo form_open('install') ?>
		<p class="input_p">
			<label for="username"><?php tt("Admin username"); ?>:</label>
			<input class="sharif_input" type="text" name="username" required="required" pattern="[0-9A-Za-z]{3,20}" title="The Username field must be between 3 and 20 characters in length, and contain only alpha-numeric characters" value="<?php echo set_value('username'); ?>"/>
			<?php echo form_error('username','<div class="shj_error">','</div>'); ?>
		</p>
		<p class="input_p">
			<label for="email"><?php tt("Admin email"); ?>:</label>
			<input type="email" autocomplete="off" name="email" required="required" class="sharif_input" value="<?php echo set_value('email'); ?>"/>
			<?php echo form_error('email','<div class="shj_error">','</div>'); ?>
		</p>
		<p class="input_p">
			<label for="username"><?php tt("Admin password"); ?>:</label>
			<input type="password" name="password" required="required" pattern="[0-9A-Za-z]{6,20}" title="The Password field must be between 6 and 30 characters in length, and contain only alpha-numeric characters" class="sharif_input"/>
			<?php echo form_error('password','<div class="shj_error">','</div>'); ?>
		</p>
		<p class="input_p">
			<label for="username"><?php tt("Password, again"); ?>:</label>
			<input type="password" name="password_again" required="required" class="sharif_input"/>
			<?php echo form_error('password_again','<div class="shj_error">','</div>'); ?>
		</p>
		<p class="input_p">
			<input class="sharif_input" type="submit" value="Continue"/>
		</p>
		</form>
		<?php endif ?>

	</div> <!-- main_content -->

</div> <!-- main_container -->