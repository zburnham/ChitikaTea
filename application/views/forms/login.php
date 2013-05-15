<?php echo validation_errors(); ?>

<?php echo form_open('login'); ?>

<label for="login">Login: </label>
<input type="text" name="login" /><br>

<label for="password">Password: </label>
<input type="password" name="password" /><br>

<input type="submit" name="Submit" value="Login" />
</form>