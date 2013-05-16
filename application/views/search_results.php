<?php foreach($search_results as $result): ?>
<p><?php echo '<a href="' . base_url('viewtea?id=' . $result['ID']) . '">' . $result['tea_name'] . '</a>'; ?></p>
<?php endforeach; ?>

