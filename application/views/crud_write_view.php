<h1>New Article</h1>

<?php echo form_open_multipart('/blog/write'); ?>

    <div class="form-group">
        <label for="animal_name">Article Title</label>
        <input type="text" name="title" class="form-control form-width"
               value="<?php echo set_value('title'); ?>"/>
        <?php echo form_error('title'); ?>
    </div>

    <div class="form-group">
        <label for="file">Image</label>
        <input type="file" name="file" class="form-control form-width"
               value=""/>
        <?php echo form_error('file'); ?>
    </div>

    <div class="form-group">
        <label for="animal_name">Content</label>
        <div id="content" name="body">
            <p>Welcome to the <b>wangEditor</b> rich text editor</p>
        </div>
        <textarea style="display: none;" id="text1" name="body" style="width:100%; height:200px;"></textarea>
    </div>

    <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-outline-success"/>
    </div>
</form>

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
