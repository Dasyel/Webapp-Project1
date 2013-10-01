<div data-role="collapsible-set" data-theme="c" data-content-theme="d">
    <div data-role="collapsible">
        <h3>Create Account</h3>
        <?php echo form_open('user/create') ?>
        <div data-role="fieldcontain">
            <ul data-role="listview">
                <li>
                    <?php echo form_error('email'); ?>
	                <label for="email">Email Address: </label>
	                <input type="text" name="email" id="text-basic" value="<?php echo set_value('email'); ?>" /><br />
                </li>
                <li>
                    <?php echo form_error('usernameC'); ?>
	                <label for="usernameC">username: </label>
	                <input type="text" name="usernameC" value="<?php echo set_value('usernameC'); ?>" /><br />
                </li>
                <li>
                    <?php echo form_error('passwordC'); ?>	
	                <label for="passwordC">Password: </label>
	                <input type="password" name="passwordC" value="<?php echo set_value('passwordC'); ?>" /><br />
                </li>
                <li>
                    <?php echo form_error('passwordCRepeat'); ?>	
	                <label for="passwordCRepeat">Repeat Password: </label>
	                <input type="password" name="passwordCRepeat" value="<?php echo set_value('passwordCRepeat'); ?>" /><br />
                </li>
                <li>
	                <input type="submit" name="submitC" value="Create Account"/>
                </li>
            </ul>
        </div>
        </form>
    </div>
    <div data-role="collapsible" data-collapsed="false">
        <h3>Login</h3>
        <?php echo $success_message; ?>
        <?php echo $login_message; ?>

        <?php echo form_open('user/login') ?>
        <div data-role="fieldcontain">
            <ul data-role="listview">
                <li>
                    <?php echo form_error('username'); ?>
	                <label for="username">Username/Email: </label>
	                <input type="text" name="username" /><br />
                </li>
                <li>
                    <?php echo form_error('password'); ?>
	                <label for="password">Password: </label>
	                <input type="password" name="password" /><br />
                </li>
                <li>
	                <input type="submit" name="submit" value="Login" />
	                </li>
            </ul>
        </div>
        </form>
    </div>
</div>


