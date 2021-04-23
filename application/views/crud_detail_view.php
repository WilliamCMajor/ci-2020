<!-- // views/crud_detail_view.php  -->
<h1><?php //echo $heading ?></h1>
<?php if (($id)) : ?>
    <div class="well">
        <h3><?php echo $title ?></h3>
        <p class="author">Added by <?php echo $username ?> in <?php echo $created_at; ?></p>
        <img src="<?php echo base_url() . $slug; ?>" style="width: 100%; height: auto">
        <p><?php echo $this->typography->nl2br_except_pre($body); ?></p>

        <?php if ($uid == $user_id): ?>
            <a href="<?php echo base_url() . "blog/edit/" . $id; ?>" class="btn btn-primary btn-sm"> <i
                        class="material-icons">edit</i>Edit</a>
            <a href="<?php echo base_url() . "blog/delete/" . $id; ?>" class="btn btn-danger btn-sm"> <i
                        class="material-icons">delete</i>Delete</a>
        <?php endif; ?>
    </div>
<?php else : ?>
    <p>No results</p>
<?php endif; ?>