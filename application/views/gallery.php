<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>

<link href="/css/gallery.css" rel="stylesheet" type="text/css" />
<link href="/css/lightbox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/external/prototype.js"></script>
<script type="text/javascript" src="/js/external/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="/js/external/lightbox.js"></script>
<script type="text/javascript" src="/js/pp/gallery.js"></script>

<?php
    $imagesPerRow = 4;
    $visibleRows = 4;
    $pageCount = ceil(count($images) / ($imagesPerRow * $visibleRows));
    $style = ($pageCount > 1) ? 'display:block' : 'display:none';
?>

<script type="text/javascript">
    var imagesPerRow = <?php echo $imagesPerRow ?>;
    var visibleRows = <?php echo $visibleRows ?>;
    var pageCount = <?php echo $pageCount ?>;
</script>

<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

<div id="gallery-container">
    <div id="pagination-container" style="<?php echo $style; ?>">
        <span id="previous" class="invisible previous">Previous</span>
        <?php
            for ($i = 1;$i <= $pageCount; $i++) {
                echo '<span id="page-' . $i . '" class="pagination-link">' . $i. '</span>';
            }
        ?>
        <span id="next" class="next">Next</span>
    </div>

    <?php
        for ($i = 0; $i < count($images);$i++) {
            $newRow = $i % $imagesPerRow == 0;
            $endRow = $i % $imagesPerRow == ($imagesPerRow - 1);
            $rowNumber = ($i / $imagesPerRow);

            if ($newRow) {
                $class = $rowNumber >= $visibleRows ? 'row hidden' : 'row';
                echo '<div id="row-' . ($rowNumber + 1) . '" class="' . $class . '">';
            }

            $src = $images[$i]['src'];
            $thumb = $images[$i]['thumb'];
            $title = $images[$i]['title'];
            echo '<div class="photo-container">';
            echo '<a href="' . $src . '" rel="lightbox" title="' . $title . '"><img src="' . $thumb . '"/></a>';
            echo '<p>' . $title . '</p>';
            echo '</div>';
            if ($endRow || $i == count($images) - 1) {
                echo '</div>';
            }
        }
    ?>
</div>

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
