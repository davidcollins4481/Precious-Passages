<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>

<link href="/css/gallery.css" rel="stylesheet" type="text/css" />
<link href="/css/lightbox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/external/prototype.js"></script>
<script type="text/javascript" src="/js/external/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="/js/external/lightbox.js"></script>

<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

<div id="gallery-container">
    <?php
        foreach ($images as $image) {
            $src = $image['src'];
            $thumb = $image['thumb'];
            $title = $image['title'];
            echo '<div class="photo-container">';
            echo '<a href="' . $src . '" rel="lightbox" title="' . $title . '"><img src="' . $thumb . '"/></a>';
            echo '<p>' . $title . '</p>';
            echo '</div>';
        }
    ?>
</div>

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
