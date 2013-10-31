<?php
/**
 * Sharif Judge online judge
 * @file register.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php echo form_open('login/register') ?>
<div class="box register">

	<div class="judge_logo">
		<a href="<?php echo site_url() ?>"><img src="<?php echo base_url("assets/images/banner.png") ?>"/></a>
	</div>

	<div class="login_form">
		<div class="login1">
			<?php if ($registration_code_required): ?>
				<p>
					<label for="registration_code">Registration Code</label><br/>
					<input type="text" name="registration_code" required="required" autofocus="autofocus" class="sharif_input" value="<?php echo set_value('registration_code'); ?>"/>
					<?php echo form_error('registration_code','<div class="shj_error">','</div>'); ?>
				</p>
			<?php endif ?>
			<p>
				<label for="username">Username</label><br/>
				<input type="text" name="username" required="required" pattern="[0-9A-Za-z]{3,20}" title="The Username field must be between 3 and 20 characters in length, and contain only alpha-numeric characters" class="sharif_input" value="<?php echo set_value('username'); ?>"/>
				<?php echo form_error('username','<div class="shj_error">','</div>'); ?>
			</p>
			<p>
				<label for="email">Email</label><br/>
				<input type="email" autocomplete="off" name="email" required="required" class="sharif_input" value="<?php echo set_value('email'); ?>"/>
				<?php echo form_error('email','<div class="shj_error">','</div>'); ?>
			</p>
			<p>
				<label for="password">Password</label><br/>
				<input type="password" name="password" required="required" pattern="[0-9A-Za-z]{6,20}" title="The Password field must be between 6 and 30 characters in length, and contain only alpha-numeric characters" class="sharif_input"/>
				<?php echo form_error('password','<div class="shj_error">','</div>'); ?>
			</p>
			<p>
				<label for="password_again">Password, Again</label><br/>
				<input type="password" name="password_again" required="required" class="sharif_input"/>
				<?php echo form_error('password_again','<div class="shj_error">','</div>'); ?>
			</p>
		</div>
		<div class="login2">
			<p style="margin:0;">
				<?php echo anchor("login","Login") ?></a>
				<input type="submit" value="Register" id="sharif_submit"/>
			</p>
		</div>
	</div>

</div>
</form>