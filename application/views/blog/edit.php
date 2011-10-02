<?php
    $args['body_class'] = 'claro';
?>

<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>

<script type="text/javascript" src="/js/pp/blog/edit.js"></script>
<link rel="stylesheet" type="text/css" href="/js/dojo/dijit/themes/claro/claro.css" />

<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php", $args) ?>
<?php $this->load->view("includes/globalnav.php") ?>

<div id="edit-container">
    <div dojoType="dijit.Editor" id="editor1" onChange="console.log('editor1 onChange handler: ' + arguments[0])">
        <p>
            This instance is created from a div directly with default toolbar and
            plugins
        </p>
    </div>
</div>

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
