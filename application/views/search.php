<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>
<script type="text/javascript" src="/js/pp/sidebar/search.js"></script>

<?php
    $resultsPerPage = 5;
    $pageCount = isset($query) ? ceil(count($query) / ($resultsPerPage)) : 0;
    $style = ($pageCount > 1) ? 'display:block' : 'display:none';
?>

<script type="text/javascript">
    var resultsPerPage = <?php echo $resultsPerPage ?>;
    var pageCount = <?php echo $pageCount ?>;
</script>

<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>
    <div id="search-container">
        <div id="content">
            <?php $this->load->view("includes/sidebar.php") ?>

            <?php if (isset($query) && count($query)) { ?>
                <p><?php echo $message; ?></p>
                <?php for($i = 0; $i < count($query);$i++) { ?>
                    <div id="search-result-<?php echo $i + 1 ?>" class="search-result <?php if ($i > $resultsPerPage - 1) echo "hidden"; ?>">
                        <h2>
                            <a href="<?php echo $query[$i]['url']; ?>">
                                <?php echo $query[$i]['title']; ?>
                            </a>
                        </h2>
                        <p>
                            <?php echo $query[$i]['context_segment']; ?>
                        </p>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p><?php echo $message; ?></p>
            <?php } ?>
            
            <div id="pagination-container" style="<?php echo $style; ?>">
                <span id="previous" class="invisible previous">Previous</span>
                <?php
                    for ($i = 1;$i <= $pageCount; $i++) {
                        $selectedClass = $i == 1 ? ' active' : '';
                        echo '<span id="page-' . $i . '" class="pagination-link' . $selectedClass . '">' . $i. '</span>';
                    }
                ?>
                <span id="next" class="next">Next</span>
            </div>

        </div>
    </div>

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
