<p>Name: <?=$tea['name']?></p>
<p>Category: <?=$category['name']?></p>
<?php if (0 < $ratings['count']): ?>
<p>Ratings: (Total ratings: <?=$ratings['count']?>)</p>
<ul>
    <li>Taste: <?=$ratings['taste']?></li>
    <li>Color: <?=$ratings['color']?></li>
    <li>Body: <?=$ratings['body']?></li>
</ul>
<?php else: ?>
<p>No ratings found.</p>
<?php endif; ?>