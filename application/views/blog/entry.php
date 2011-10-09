<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            <?php $this->load->view("includes/sidebar.php") ?>

            <div id="mainbar">
                <h1><?php echo $post->title; ?></h1>

                <?php echo $post->entry; ?>

                <p>-- Last Edited <?php $time = strtotime($post->edited_date); echo date('m/d/Y @ H:i', $time); ?> 
                    <?php echo $post->author; ?>
                    <?php if ($editable) { ?>
                        <a href="/blog/edit?entry_id=<?php echo $post->entry_id ?>">edit</a>
                    <?php } ?>
                </p>
                <p><a href="/index.php/blog/">Back to Blog</a></p>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
