<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>

<?php $this->load->view("admin/includes/js.php") ?>
<?php $this->load->view("admin/includes/css.php") ?>

<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>


<div id="content">
    <div class="admin-container">
        <div class="admin-tools-container">
            <h2>Admin Tools</h2>
            <ul>
                <li><a href="/index.php/admin/create_user">Create a User</a></li>
                <li><a href="/index.php/admin/delete_user">Delete a User</a></li>
            </ul>
        </div>

        <div class="User Tools">
            <h2>User Tools</h2>
            <ul>
                <li><a href="/index.php/admin/upload">File Management (upload files)</a></li>
            </ul>
        </div>

        <div>
            <h2>Blogging</h2>
            <ul>
                <li><a href="/blog/edit">New Entry</a></li>
                <li><a href="/blog/delete">Delete Entry</a></li>
            </ul>
        </div>
    </div>
</div>

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
