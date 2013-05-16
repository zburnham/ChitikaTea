<?php echo validation_errors(); ?>

<?php echo form_open('search'); ?>

<label for="keyword">Search: </label>
<input type="text" name="keyword" /><br>

<input type="submit" name="Submit" value="Search" />
</form>
