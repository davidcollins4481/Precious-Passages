<?php
    $images = array(
        "/images/homeimgs/dreamstimeweb_554857.jpg",
        "/images/homeimgs/dreamtime.jpg",
        "/images/homeimgs/erika.jpg",
    );
?>

<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => "Precious Passage Birth Services")) ?>
<script type="text/javascript" src="/js/pp/imageSwitcher.js"></script>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

    <div id="content">
        <div class="jsnipImageSwitcher">
            <?php foreach ($images as $image) { ?>
                <img src="<?php echo $image?>" />
            <?php } ?>
        </div>
        <ul class="navigation" dojoType="pp.mobile.navigation"></ul>
    </div>

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

