<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            <!-- exclude --><?php $this->load->view("includes/sidebar.php") ?><!-- /exclude -->
            
            <div id="mainbar">
                <h1>
                    <a name="intro" id="intro"></a>
                    Rh incompatability and Rhogam
                </h1>
                <p>
					The following pages will help you explore the issue of Rh 
					incompatibility and the use of Rhogam during and after pregnancy. 
					<ul>
						<li>
							<a href="/d/rhIncompatability">What is Rh incompatibility?</a>
						</li>
						<li>
							<a href="/d/whyRhogam">Why use Rhogam?</a>
						</li>
						<li>
							<a href="/d/antiD">Anti-d (Rhogam): Exploring Midwifery Knowledge</a>
						</li>
					</ul>
                </p>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

