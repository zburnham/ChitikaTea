<div id="content">
<p>Category: <?=$category['name']?></p>
<?php foreach($teas as $tea): ?>
    <a href="<?php echo base_url('viewtea?id=' . $tea['ID']);?>"><?=$tea['tea_name']?></a>
<?php endforeach; ?>
    
    
    
</div>