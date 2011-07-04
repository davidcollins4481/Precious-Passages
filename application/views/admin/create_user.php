<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>
<?php $this->load->view("admin/includes/js.php") ?>
<?php $this->load->view("admin/includes/css.php") ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>

<div class="admin-container claro">
    <h2>Enter new username and password</h2>
    
    <div>
        <p id="response"></p>
    </div>
    
    <form id="create-user" jsId="create-user" encType="multipart/form-data" action="/index.php/admin/create_user_post" method="" dojoType="dijit.form.Form">
        <label for="username">Username</label>
        <input type="text" required="true" dojoType="dijit.form.ValidationTextBox" name="username" />
        
        <label for="password">Password</label>
        <input type="password" required="true" dojoType="dijit.form.ValidationTextBox" name="password" />
        
        <label for="password">Confirm</label>
        <input type="password" required="true" dojoType="dijit.form.ValidationTextBox" name="confirm" />
         
        <button dojoType="dijit.form.Button" type="submit" name="submitButton" value="Submit">
            Submit
        </button>
    </form>
</div>


<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

