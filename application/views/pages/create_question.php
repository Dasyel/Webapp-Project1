<?php echo $error_message ?>
<?php echo form_open('question/create') ?>
<div data-role="fieldcontain">
<ul data-role="listview">
<li>
    <?php echo form_error('name'); ?>
	<label for="name">Question Name: </label>
	<input type="text" name="name" value="<?php echo set_value('email'); ?>" /><br />
</li>
<li>	
	<?php echo form_error('res'); ?>	
	<label for="res">Picture/Youtube Link: </label>
	<input type="text" name="res" value="<?php echo set_value('res'); ?>"/><br />
</li>
<li>	
    <?php echo form_error('question'); ?>	
	<label for="question">Question: </label>
	<input type="text" name="question" value="<?php echo set_value('question'); ?>"/><br />
</li>
<li>
    <?php echo form_error('right'); ?>	
	<label for="right">Right Answer: </label>
	<input type="text" name="right" value="<?php echo set_value('right'); ?>"/><br />
</li>
<li>	
	<?php echo form_error('wrong1'); ?>	
	<label for="wrong1">Wrong Answer1: </label>
	<input type="text" name="wrong1" value="<?php echo set_value('wrong1'); ?>"/><br />
</li>
<li>	
	<?php echo form_error('wrong2'); ?>	
	<label for="wrong2">Wrong Answer2: </label>
	<input type="text" name="wrong2" value="<?php echo set_value('wrong2'); ?>"/><br />
</li>
<li>	
	<?php echo form_error('wrong3'); ?>	
	<label for="wrong3">Wrong Answer3: </label>
	<input type="text" name="wrong3" value="<?php echo set_value('wrong3'); ?>"/><br />
</li>
<li>	
	<input type="submit" name="submit" value="Create"/>
</li>
</ul>
</div>
</form>
<a href="<?php echo site_url('question'); ?>" data-role="button">Back</a></br>
