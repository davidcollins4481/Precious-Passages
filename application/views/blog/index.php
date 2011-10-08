<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>

<script type="text/javascript">
    dojo.addOnLoad(function() {

        dojo.connect(dojo.byId('entry_sorter'), "onchange", null, function(e) {
            var selected = e.target.selectedIndex;
            var value = e.target.options[selected].value;

            document.location = "/blog/index?order=" + value;
        });

    });
</script>

<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            <?php $this->load->view("includes/sidebar.php") ?>

            <select id="entry_sorter">
                <option <?php echo $sort_order == 'desc' ? 'selected' : '' ?> value="desc">Newest to Oldest</option>
                <option <?php echo $sort_order == 'asc' ? 'selected' : '' ?> value="asc">Oldest to Newest</option>
            </select>

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
                    <?php echo $entry->author; ?> -- <?php $time = strtotime($entry->edited_date); echo date('Y-m-d @ H:i', $time); ?>
                    <?php if ($editable) {?>
                        <p><a href="/blog/edit?entry_id=<?php echo $entry->entry_id ?>" style="font-weight: normal">edit</a></p>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
