<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => "CIMS Induction Fact Sheet")) ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            
            <!-- exclude --><?php $this->load->view("includes/sidebar.php") ?><!-- /exclude -->
            
            <div id="mainbar">
                <h1>
                    <a name="intro" id="intro"></a>
                    CIMS Induction Fact Sheet
                </h1>
                <img src="/images/resources/CIMS_F1.gif" alt="CIMS Fact Sheet" title="CIMS Fact Sheet" width="500px" />
				<img src="/images/resources/CIMS_F2.gif" alt="CIMS Fact Sheet" title="CIMS Fact Sheet" width="500px" />
				<img src="/images/resources/CIMS_F3.jpg" alt="CIMS Fact Sheet" title="CIMS Fact Sheet" width="500px" />
				<img src="/images/resources/CIMS_F4.gif" alt="CIMS Fact Sheet" title="CIMS Fact Sheet" width="500px" />
			</div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

