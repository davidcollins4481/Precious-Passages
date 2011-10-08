<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            <?php $this->load->view("includes/sidebar.php") ?>
            
            <?php if (!$query) { ?>
                <p>No Entries</p>
            <?php } ?>

            <?php foreach ($query as $entry) { ?>
                <div class="blog_entry">
                    <h2><a href="/blog/entry/<?php echo $entry->url_title; ?>"><?php echo $entry->title; ?></a></h2>
                    <p>
                        <?php echo $entry->summary; ?>
                        <a href="/blog/entry/<?php echo $entry->url_title; ?>">[...]</a>
                    </p>
                    <!--<span class="metadata"><?php echo $entry->author; ?></span>-->
                </div>
            <?php } ?>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
