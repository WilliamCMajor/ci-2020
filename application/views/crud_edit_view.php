<!-- // views/crud_edit_view.php. -->
<h1>Edit Blog</h1>
<?php echo form_open_multipart("blog/edit/$id"); ?>
    <div class="form-group">
        <label for="animal_name">Title</label>
        <input type="text" name="title" class="form-control form-width" value="<?php echo set_value('title', $title); ?>"/>
        <?php echo form_error('title'); ?>
    </div>

    <div class="form-group">
        <label for="file">Image</label>
        <img src="<?php echo base_url().$slug;?>" style="width: 100px;height: 100px;">
        <input type="file" name="file" class="form-control form-width" value=""/>
    </div>

    <div class="form-group">
        <label for="animal_name">Content</label>
        <div id="content" name="body">
            <?php echo htmlspecialchars_decode($body);?>
        </div>
        <?php echo form_error('body'); ?>
        <textarea style="display: none;" id="text1" name="body" style="width:100%; height:200px;">
            <?php echo set_value("body",$body);?>
        </textarea>
    </div>

    <div class="form-group">
        <input type="hidden" name="id" value="<?php echo set_value("id",$id);?>" />
        <input type="submit" name="update" value="Update" class="btn btn-primary"/>
    </div>
</from>
<script src="<?php echo base_url(); ?>/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url(); ?>/js/wangEditor.min.js"></script>
<script>
    //init edit
    const E = window.wangEditor
    const editor = new E('#content')
    const $text1 = $('#text1')
    editor.config.onchange = function (html) {
        $text1.val(html)
    }
    editor.create()
    $text1.val(editor.txt.html())
</script>