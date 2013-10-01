
<?php echo $error_message ?>
<?php echo form_open('user/edit') ?>
<div data-role="fieldcontain">
<ul data-role="listview">
<li>
<label for="email">Username: </label>
	<input type="text" disabled="disabled" name="username" data-clear-btn="true" value="<?php echo $user->username; ?>" /><br />
</li>
<li>
<?php echo form_error('email'); ?>
	<label for="email">(New) Email Address: </label>
	<input type="text" name="email" data-clear-btn="true" value="<?php echo $user->email; ?>" /><br />
</li>
<li>
<?php echo form_error('new_password'); ?>	
	<label for="new_password">(New) Password: </label>
	<input type="password" name="new_password" /><br />
</li>
<li>
    <?php echo form_error('password'); ?>	
	<label for="password">Current Password: </label>
	<input type="password" name="password" /><br />
</li>
<li>
	<input type="submit" name="submit" value="Save" />
</li>
    
</ul>
</div>
</form>
	<a href="<?php echo site_url('user/show'); ?>" data-role="button">Back</a>
