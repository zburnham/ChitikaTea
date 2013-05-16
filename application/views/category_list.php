<p>Category: <?=$category['name']?></p>
<?php if (0 < $averages['count']): ?>
<p>Average Ratings: (Total ratings: <?=$averages['count']?>)</p>
<ul>
    <li>Taste: <?=$averages['taste']?></li>
    <li>Color: <?=$averages['color']?></li>
    <li>Body: <?=$averages['body']?></li>
</ul>
<p>Individual Ratings:</p>
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
<?php else: ?>
<p>No ratings found.</p>
<?php endif; ?>
