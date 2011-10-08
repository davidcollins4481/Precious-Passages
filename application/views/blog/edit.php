<?php
    $args['body_class'] = "claro";

    if (isset($entry)) {
        $title = $entry->title;
        $entry_id = $entry->entry_id;
        $content = $entry->entry;
    }

?>

<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>

<script type="text/javascript" src="/js/pp/blog/edit.js"></script>
<link rel="stylesheet" type="text/css" href="/js/dojo/dijit/themes/claro/claro.css" />

<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php", $args) ?>
<?php $this->load->view("includes/globalnav.php") ?>

<div id="message-container"></div>

<div id="edit-container">
    <form id="form-parent" method="post" action="/blog/edit_post">
        <label for="title">Title</label><br/>
        <input type="text" name="title" id="title" value="<?php echo isset($title) ? $title : ''?>"/>

        <?php if (isset($entry_id)) { ?>
            <input type="hidden" name="entry_id" value="<?php echo $entry_id ?>" />
        <?php } ?>

        <div id="editor">
            <?php
                if (isset($content)) {
                    echo $content;
                }
            ?>
        </div>

        <div id="post-btn">
            <button id="submit-btn">Post</button>
        </div>
    </form>
</div>

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
