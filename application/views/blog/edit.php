<?php
    $args['body_class'] = "claro";
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
        <label for="title">Title</label>
        <input type="text" name="title" id="title" />

        <div id="editor"></div>

        <div id="post-btn">
            <button id="submit-btn">Post</button>
        </div>
    </form>
</div>

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
