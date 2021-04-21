<!-- views/crud_read_view.php -->

<h1><?php echo $heading; ?></h1>

<?php if(($results)): ?>
    <?php foreach($results as $row): ?>

        <div class="whatever">
            <h3><?php echo $row->animal_name ?></h3>
            <a class="btn btn-success" href="<?php echo base_url(); ?>crud/detail/<?php echo $row->animal_id ?>">Read More</a>
        </div>
    <?php endforeach; ?>
<?php endif; ?>