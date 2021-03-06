<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>
<?php
    $redirect_on_login = true;
?>

<script type="text/javascript">
    dojo.addOnLoad(function() {
        
        if (dojo.byId('entry_sorter')) {
            dojo.connect(dojo.byId('entry_sorter'), "onchange", null, function(e) {
                var selected = e.target.selectedIndex;
                var value = e.target.options[selected].value;

                document.location = "/blog/index?order=" + value;
            });
        }
    });
</script>

<?php if ($editable) { ?>
    <script type="text/javascript" src="/js/pp/blog/delete.js"></script>
<?php } ?>

<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <div id="message-container" style="margin: 0 auto;text-align: left;width:720px;position: relative;"></div>

        <!-- unique -->
        <div id="content" class="blog_index">
            <?php $this->load->view("includes/sidebar.php") ?>
            <div class="blog-entry-container">
                <?php if ($query && count($query) > 1) { ?>

                <select id="entry_sorter">
                    <option <?php echo $sort_order == 'desc' ? 'selected' : '' ?> value="desc">Newest to Oldest</option>
                    <option <?php echo $sort_order == 'asc' ? 'selected' : '' ?> value="asc">Oldest to Newest</option>
                </select>

                <?php } ?>

                <?php if (!$query) { ?>
                    <p><i>No Entries Yet</i></p>
                <?php } ?>

                <?php foreach ($query as $entry) { ?>
                    <div class="blog_entry">
                        <h2 style="font-style: italic"><a href="/blog/entry/<?php echo $entry->url_title; ?>"><?php echo $entry->title; ?></a></h2>
                        <p>
                            <?php echo strip_tags($entry->summary); ?>
                            <a style="font-weight: normal" href="/blog/entry/<?php echo $entry->url_title; ?>">[...]</a>
                        </p>
                        -- Created <?php $time = strtotime($entry->creation_date); echo date('m/d/Y H:i', $time); ?> by <i><?php echo $entry->author; ?></i>
                        <?php if ($editable) {?>
                            <div class="edit-container">
                                <p><a class="edit-link" href="/blog/edit?entry_id=<?php echo $entry->entry_id ?>" style="font-weight: normal;">edit</a></p>

                                <form class="remove-form" action="/blog/delete_post" method="POST">
                                    <a class="remove-link" href="#" style="font-weight: normal;">delete</a>
                                    <input type="hidden" name="entry_id" value="<?php echo $entry->entry_id; ?>"  />
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
