<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => "Newborn Screening")) ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            
            <!-- exclude --><?php $this->load->view("includes/sidebar.php") ?><!-- /exclude -->
            
            <div id="mainbar">
                <h1>
                    <a name="intro" id="intro"></a>
                    Newborn Screening
                </h1>
                
                <p>
                    The state of Ohio requires newborn metabolic screening in order 
                    to obtain a birth certificate.
                    <a href="http://www.odh.ohio.gov/localHealthDistricts/localHealthDistricts.aspx" target="_blank">
                        Click here
                    </a>
                    to find your local health department.
                </p>
                <p>
                    The state of Ohio currently requires the following tests: 
                    Phenylketonuria (PKU, Homocystinuria, Galactosemia, Medium-chain 
                    Acyl-CoA, Dehydrogenase Deficiency, Hypothyroidism, Sickle Cell 
                    Disease, Maple Syrup Urine Disease, Isovaleric Acidemia, 
                    Propionic Acidemia, Methylmalonic Acidemia, Citrullinemia, 
                    Argininosuccinic Acidemia. (Additional tests available, not 
                    mandatory)
                    <br/>
                    <a href="http://pregnancy.about.com/od/newbornbabies/a/newbornstate_5.htm" target="_blank">
                        Newborn Screening Recommendations by State
                    </a>
                </p>
                <p>
                    Newborn Screening is the process of testing and screening 
                    newborn babies for certain potentially dangerous conditions. 
                    If these conditions are caught at birth, the child in question 
                    can be saved from potentially disastrous consequences. For 
                    example, a lab may discover that 1 in 40,000 babies tested has 
                    an inability to break down sugars within milk. Such a child can 
                    potentially die or become retarded should they be given milk in 
                    regular quantities. By screening children for this condition at 
                    birth, one can easily avoid this consequence by changing the 
                    diet of the child. This is one of many conditions which are 
                    tested for. 
                </p>
                <p>
                    Newborn Screening is still a relatively young science. In the 
                    state of Ohio, all children are screened at birth and their 
                    blood samples are sent to a central state lab. The cost appears 
                    as a nominal charge on the parent's hospital bill (20 to 30 
                    dollars) and few would dispute it's worth. In contrast, 
                    developing countries are often hard pressed to screen a 
                    sizable portion of their newborn children. For the sake of 
                    simplicity, let us assume that for a given lab, 1 in 3000 
                    children have a condition which will lead to retardation if 
                    left undiscovered and the cost of the test is $10 per child. 
                    This means that preventing a particular child from retardation 
                    is $30,000. While few would dispute the worthiness of this 
                    expenditure, the practicality of obtaining such funding in 
                    some developing countries means that many such children are 
                    not screened. 
                </p>
                <p>
                    The above example is very simplistic, but helps to illustrate 
                    the economics behind this discipline. In reality, each lab tests 
                    for different conditions as different ethnic groups have varying 
                    incidence rates. Some conditions are more serious and some are 
                    harder to identify. Methods and instrumentation vary as do the 
                    costs involved and the process of collecting samples. It is 
                    hoped that sharing common experiences through this site will 
                    help improve the overall science, as well as promote the science 
                    to those not already involved.
                    <br/>
                    <a href="http://www.newbornscreening.com/cms/About_Newborn_Screening.shtml" target="_blank">
                        About Newborn Screening
                    </a>
                </p>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

