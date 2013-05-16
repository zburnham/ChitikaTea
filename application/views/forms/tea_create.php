<?php echo validation_errors(); ?>

<?php echo form_open('addtea'); ?>

<label for="tea_name">Name: </label>
<input type="text" name="tea_name" /><br>

<label for="categories_ID">Category: </label>
<select name="categories_ID">
    <?php foreach ($categories as $category): ?>
    <option value="<?=$category['ID']?>"><?=$category['name']?></option>
    <?php endforeach; ?>
</select>

<input type="submit" name="Submit" value="Add" />
</form>
