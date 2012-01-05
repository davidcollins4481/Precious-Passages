<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => "Breech Presentation")) ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            
            <!-- exclude --><?php $this->load->view("includes/sidebar.php") ?><!-- /exclude -->
            
            <div id="mainbar">
                <h1>
                    <a name="intro" id="intro"></a>
                    Breech Presentation
                </h1>
					<a href="http://www.nlm.nih.gov/medlineplus/ency/images/ency/fullsize/19158.jpg" target="_blank">
						<img src="/images/resources/breech3.jpg" alt="Breech Presentation" title="Breech Presentation" class="articleimg" />
                    </a>
                <p>
                    Many physicians are uncomfortable allowing a woman to vaginally birth a 
                    breech baby.  Because of this fear, most physicians will suggest a 
                    cesarean section if the baby is breech after the 37th week of pregnancy. 
                    There are options. 
                </p>
                <h3>
					Vaginal Breech Delivery
                </h3>
                <ul>
					<li>
						<a href="http://aims.org.uk/Journal/Vol10No3/breechCSvsNormal.htm" target="_blank">
							Breech Presentation: Caesarean operation versus normal birth
						</a>
					</li>
					<li>
						<a href="http://www.americanpregnancy.org/labornbirth/breechpresentation.html" target="_blank">
							Breech Births
						</a>
					</li>
					<li>
						<a href="http://www.ican-online.org/pregnancy/breech-presentation-fact-sheet" target="_blank">
							Breech Presentation Fact Sheet
						</a>
					</li>
                </ul>
                <h3>
					External Cephalic Version
                </h3>
                <ul>
					<li>
						<a href="http://www.birthsource.com/scripts/article.asp?articleid=314" target="_blank">
							Turning a Breech Baby
						</a>
					</li>
					<li>
						<a href="http://www.aafp.org/afp/980901ap/coco.html" target="_blank">
							External Cephalic Version
						</a>
					</li>
					<li>
						<a href="/d/turningABreech">
							Turning a Breech
						</a>
					</li>
                </ul>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

