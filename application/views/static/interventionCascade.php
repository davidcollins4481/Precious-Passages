<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => "Cascade of Interventions")) ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            <!-- exclude --><?php $this->load->view("includes/sidebar.php") ?><!-- /exclude -->
            
            <div id="mainbar">
                <h1>
                    <a name="intro" id="intro"></a>
                    Cascade of Interventions
                </h1>
                <p>
                    Obstetric interventions can be life-saving procedures for women and 
                    babies. Technological advances, improved surgical techniques and better 
                    anesthetics have ensured that the small percentage  of women who need 
                    this kind of help receive the best possible care.  
                </p>
                <p>
					Once the natural process of labor and birth has been disturbed, 
					especially if there is no actual medical emergency, there is a 
					significant risk that the unwelcome side effects of the treatment will 
					make further intervention necessary to remedy the problem. This 
					phenomenon is known as the <b>cascade of intervention</b> and is 
					illustrated in the diagram below.
                </p>
				<table>
					<tr>
						<td> 
							<img src="/images/resources/diagram.gif" alt="Cascade of Interventions" title="cascadeOfInterventions" width="350" />
						</td>
						<td>
							All the links shown have been proven by scientific research.
							To read the diagram, start with the intervention being 
							considered and read downwards from that point.
						</td>
					</tr>
					<tr>
						<td colspan="2">
							Graphic courtesy of  http://www.acegraphics.com.au/parents/obstetric/
						</td>
					</tr>
				</table>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

