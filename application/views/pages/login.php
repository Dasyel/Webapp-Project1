<h2>Create Account</h2>

<?php echo $success_message; ?>

<?php echo form_open('user/create') ?>

    <?php echo form_error('email'); ?>
	<label for="email">Email Address</label>
	<input type="input" name="email" value="<?php echo set_value('email'); ?>" /><br />

    <?php echo form_error('usernameC'); ?>
	<label for="usernameC">username</label>
	<input type="input" name="usernameC" value="<?php echo set_value('usernameC'); ?>" /><br />

    <?php echo form_error('passwordC'); ?>	
	<label for="passwordC">Password</label>
	<input type="password" name="passwordC" value="<?php echo set_value('passwordC'); ?>" /><br />

    <?php echo form_error('passwordCRepeat'); ?>	
	<label for="passwordCRepeat">Repeat Password</label>
	<input type="password" name="passwordCRepeat" value="<?php echo set_value('passwordCRepeat'); ?>" /><br />

	<input type="submit" name="submitC" value="Create Account"/>

</form>
<br/>

<h2>Login</h2>
<?php echo form_open('users/login') ?>

    <?php echo form_error('username'); ?>
	<label for="username">Username/Email</label>
	<input type="input" name="username" /><br />

    <?php echo form_error('password'); ?>
	<label for="password">Password</label>
	<input type="password" name="password" /><br />

	<input type="submit" name="submit" value="Login" />

</form>
