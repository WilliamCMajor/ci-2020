<!-- views/crud_read_view.php -->

<h1><?php echo $heading; ?></h1>

<div class="tutorial-container">
    <?php if (($results)): ?>
        <?php foreach ($results as $row): ?>
    
            <div class="whatever">
                <h3><?php echo $row->title ?></h3>
                <img src="<?php echo base_url().$row->slug;?>"><br>
                <a class="btn btn-success" href="<?php echo base_url(); ?>blog/detail/<?php echo $row->id ?>">Read More</a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>