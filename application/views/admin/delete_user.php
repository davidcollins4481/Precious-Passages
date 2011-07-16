<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>
<?php $this->load->view("admin/includes/js.php") ?>
<?php $this->load->view("admin/includes/css.php") ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>

<div class="admin-container claro">
    <h2>Delete User(s)</h2>
    
    <div>
        <p id="response"></p>
    </div>
    
    <?php
        echo $users;
    
    ?>
    
</div>


<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

