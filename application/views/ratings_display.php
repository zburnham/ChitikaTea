<p>Taster Name: <?=$taster['name']?> (ID: <?=$taster['ID']?>)</p>
<?php if (0 < count($ratings)): ?>
<table class="ratings">
    <tr>
        <th>Tea</th><th>Category</th><th>Taste</th><th>Body</th><th>Color</th><th>Notes</th>
    </tr>
    <?php foreach ($ratings as $rating): ?>
    <tr>
        <td><?=$rating['tea_name']?></td>
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
