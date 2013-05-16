<?php echo validation_errors(); ?>

<?php echo form_open('addrating'); ?>

<input type="hidden" name="teas_ID" value="<?=$teas_ID?>" />
<input type="hidden" name="tasters_ID" value="<?=$tasters_ID?>" />
<label for="taste">Taste: </label>
<input type="radio" name="taste" value="0" />0<br>
<input type="radio" name="taste" value="1" />1<br>
<input type="radio" name="taste" value="2" />2<br>
<input type="radio" name="taste" value="3" />3<br>
<input type="radio" name="taste" value="4" />4<br>
<input type="radio" name="taste" value="5" />5<br>

<label for="taste">Color: </label>
<input type="radio" name="color" value="0" />0<br>
<input type="radio" name="color" value="1" />1<br>
<input type="radio" name="color" value="2" />2<br>
<input type="radio" name="color" value="3" />3<br>
<input type="radio" name="color" value="4" />4<br>
<input type="radio" name="color" value="5" />5<br>

<label for="taste">Body: </label>
<input type="radio" name="body" value="0" />0<br>
<input type="radio" name="body" value="1" />1<br>
<input type="radio" name="body" value="2" />2<br>
<input type="radio" name="body" value="3" />3<br>
<input type="radio" name="body" value="4" />4<br>
<input type="radio" name="body" value="5" />5<br>

<label for="notes">Notes: </label>
<textarea name="notes"></textarea>

<input type="submit" name="Submit" value="Add" />
</form>
