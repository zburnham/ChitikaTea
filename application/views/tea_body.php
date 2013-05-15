<div id="content">
<?php foreach ($categories as $category): ?>
    <?php echo '<a href="' . base_url('viewcategory?id=' . $category['ID']) . '">' . $category['name'] . '</a>';?><br>
<?php endforeach; ?>
</div>