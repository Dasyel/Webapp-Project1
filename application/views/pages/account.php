<form>
<div data-role="fieldcontain">
<ul data-role="listview">
<li>
<label for="email">Username: </label>
	<input type="text" disabled="disabled" name="username" data-clear-btn="true" value="<?php echo $user->username; ?>" /><br />
</li>
<li>
	<label for="email">(New) Email Address: </label>
	<input type="text" disabled="disabled" name="email" data-clear-btn="true" value="<?php echo $user->email; ?>" /><br />
</li>
<li>	
	<label for="password">Current Password: </label>
	<input type="password" disabled="disabled" name="password" value="Not Shown" /><br />
</li>
</ul>
</div>
</form>
<a href="<?php echo site_url('user/edit'); ?>" data-role="button" >Edit</a>
