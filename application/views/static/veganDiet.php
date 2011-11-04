<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => "Vegan Diet")) ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            <!-- exclude --><?php $this->load->view("includes/sidebar.php") ?><!-- /exclude -->
            
            <div id="mainbar">
                <h1>
                    <a name="intro" id="intro"></a>
                    The Vegan Diet
                </h1>
                <p>
					
                </p>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>



