<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>
<?php $this->load->view("admin/includes/js.php") ?>
<?php $this->load->view("admin/includes/css.php") ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>

<div class="admin-container">
    <p>Admin Landing</p>
    
    <h2>What do you want to do?</h2>
    <ul>
        <li><a href="/index.php/admin/create_user">Create a User</a></li>
    </ul>
</div>


<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

