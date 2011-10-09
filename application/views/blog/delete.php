<?php
    $args['body_class'] = "claro";
?>

<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>

<script type="text/javascript" src="/js/pp/blog/delete.js"></script>
<style>
table {
    border-color: #eee;
    border-width: 0 0 1px 1px;
    border-style: solid;
    width: 525px;
}

td,th {
    border-color: #eee;
    border-width: 1px 1px 0 0;
    border-style: solid;
    margin: 0;
    padding: 4px;
    background-color: #fff;
}

</style>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php", $args) ?>
<?php $this->load->view("includes/globalnav.php") ?>

    <div id="message-container" style="margin: 0 auto;text-align: left;width:720px;position: relative;"></div>

    <!-- unique -->
    <div id="content">
        <?php $this->load->view("includes/sidebar.php") ?>
        
        <?php if (!$query) { ?>
            <p><i>No Blog Entries</i></p>
        <?php }  else { ?>
            <table>
                <thead>
                    <tr>
                        <th>Created Date</th>
                        <th>Title</th>
                        <th>Remove?</th>
                    </tr>
                </thead>
                <?php foreach ($query as $entry) { ?>
                    <tr class="blog_entry">
                        <td><?php echo $entry->creation_date; ?></td>
                        <td><?php echo $entry->title; ?></td>
                        <td>
                            <form class="remove-form" action="/blog/delete_post" method="POST">
                                <a href="#" class="remove-link">remove</a>
                                <input type="hidden" name="entry_id" value="<?php echo $entry->entry_id; ?>"  />
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                
            </table>
        <?php } ?>
    </div>
    <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
