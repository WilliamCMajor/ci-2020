<!-- views/bird_view.php -->
<h2><?php echo $heading; ?></h2> <!-- each array item in the controller become a PHP variable in the view-->
<div class="birds">
    <?php echo $message; ?>
    <img src="<?php echo base_url(); ?>img/birds/<?php echo $picture; ?>" alt="">
    
</div>