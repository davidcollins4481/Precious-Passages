<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            <?php $this->load->view("includes/sidebar.php") ?>

            <?php if (isset($query) && count($query)) { ?>
                <?php foreach($query as $item) { ?>
                    <div class="search-result">
                        <p><?php echo $message; ?></p>
                        
                        <h2>
                            <a href="/blog/entry/<?php echo $item['url']; ?>">
                                <?php echo $item['title']; ?>
                            </a>
                        </h2>
                        <p>
                            <?php echo $item['context_segment']; ?>
                        </p>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p><?php echo $message; ?></p>
            <?php } ?>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
