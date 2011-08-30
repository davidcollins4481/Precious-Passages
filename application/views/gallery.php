<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>

<link href="/css/gallery.css" rel="stylesheet" type="text/css" />
<script src="/js/pp/gallery.js" type="text/javascript"></script>

<script type="text/javascript">
    var galleryImages = <?php echo json_encode($images); ?>;
</script>

<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

<div id="gallery-container" dojoType="pp.gallery"></div>

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

