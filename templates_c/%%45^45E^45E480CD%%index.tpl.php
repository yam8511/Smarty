<?php /* Smarty version 2.6.25-dev, created on 2016-07-12 07:36:56
         compiled from index.tpl */ ?>
	<h1>I am <?php echo $this->_tpl_vars['name']; ?>
.</h1>
	<p>Welcome to Smarty World</p>
	<div>
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $this->_tpl_vars['username']; ?>
">
		<p id="hint_username"></p>
		<label>Password</label>
		<input type="password" name="password1">
		<br>
		<label>Confirm Password</label>
		<input type="password" name="password2">
		<p id="hint_username"></p>
		<hr>
		<input type="submit" name="submit" value="Register" onclick="loadDoc()"/>
		<input type="hidden" name="send" value="1" >
	</div>

<?php if (( $this->_tpl_vars['send'] )): ?>
	<p>Username: <?php echo $this->_tpl_vars['username']; ?>
</p>
	<p>Password: <?php echo $this->_tpl_vars['password']; ?>
</p>
<?php endif; ?>