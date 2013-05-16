<div class="box">Name: <?=$tea['tea_name']?> (ID: <?=$tea['ID']?>)<br>
Category: <?=$category['name']?></div>
<?php if (0 < $averages['count']): ?>
<p>Average Ratings: (Total ratings: <?=$averages['count']?>)</p>
<ul>
    <li>Taste: <?=$averages['taste']?></li>
    <li>Color: <?=$averages['color']?></li>
    <li>Body: <?=$averages['body']?></li>
</ul>
<p>Individual Ratings:</p>
<div class="box">
<table class="ratings">
    <tr>
        <th>Taster</th><th>Taste</th><th>Body</th><th>Color</th><th>Notes</th>
    </tr>
    <?php foreach ($ratings as $rating): ?>
    <tr>
        <td><?=$rating['name']?></td>
        <td><?=$rating['taste']?></td>
        <td><?=$rating['body']?></td>
        <td><?=$rating['color']?></td>
        <td><?=$rating['notes']?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
<?php else: ?>
<p>No ratings found.</p>
<?php endif; ?>
<p><a href="<?php echo base_url('/addrating?id=' . $tea['ID']);?>">Add a rating</a></p>