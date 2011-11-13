<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => "Cesarean Section")) ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            <!-- exclude --><?php $this->load->view("includes/sidebar.php") ?><!-- /exclude -->
            
            <div id="mainbar">
                <h1>
                    <a name="intro" id="intro"></a>
                    Cesarean Section
                </h1>
                <p>
                    For many couples, cesarean section is the greatest birth fear.  With 
                    the c-section rate hovering around 30% in most US hospitals, this fear 
                    is well founded.  When a cesarean is necessary, it can be a lifesaving 
                    procedure for both mother and baby.  We are fortunate to have this 
                    resource available to us.  However, experts theorize that the rate of 
                    Cesarean section should be one-third of what it is now, roughly 10%.  
                    CIMS recommends a rate of no more than 15%.  Psychological outcomes  
                    such as negative feelings, fear, guilt, feelings of failure, anger and 
                    postpartum depression are common consequences of both emergent and 
                    elective cesarean sections.  Bonding with the baby is more difficult 
                    and recovery from birth is complicated.  An elective cesarean is rarely 
                    medically necessary.
                </p>
                <p>
                    Some situations really do require a cesarean section.  These include the 
                    following:
                    <ul>
                        <li>
                            Complete placenta previa at term
                        </li>
                        <li>
                            Placental abruption
                        </li>
                        <li>
                            Transverse lie at complete dilation
                        </li>
                        <li>
                            Prolapsed cord
                        </li>
                        <li>
                            Eclampsia or HELLP syndrome after a failed induction
                        </li>
                        <li>
                            Uterine fibroid which blocks the cervix at complete dilation
                        </li>
                        <li>
                            True fetal distress confirmed by fetal scalp blood sampling
                        </li>
                        <li>
                            True cephalopelvic disproportion-- this is very rare and usually 
                            due to a broken pelvis
                        </li>
                        <li>
                            Active herpes outbreak or HIV with a high viral load at time of
                            delivery
                        </li>
                        <li>
                            Uterine rupture
                        </li>
                    </ul>
                </p>
                <p>
                    Please read the CIMS fact sheet 
                    <a href="/d/cSectionRisks">
                        The Risks of Cesarean Delivery to Mother and Baby
                    </a> 
                    for more information. 
                </p>
                <p>
                    To view  a step-by-step pictorial representation of a cesarean section
                    <a href="/d/cSectionPictures">
                        click here
                    </a>. 
                    These are not live photos and are not gory.
                </p>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

