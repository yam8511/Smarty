	<h1>I am <?= $name ?>.</h1>
	<p>Welcome to Smarty World</p>
	<div>
		<label>Username</label>
		<input type="text" name="username" value="<?= $username ?>">
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

<?= if ($send) ?>
	<p>Username: <?= $username ?></p>
	<p>Password: <?= $password ?></p>
<?= /if ?>