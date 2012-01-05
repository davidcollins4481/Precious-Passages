<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => "Vaccines")) ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            
            <!-- exclude --><?php $this->load->view("includes/sidebar.php") ?><!-- /exclude -->
            
            <div id="mainbar">
                <h1>
                    <a name="intro" id="intro"></a>
                    Vaccines
                </h1>
                
                <p>
                    As a doula, I do not dispense medical advice.  As a parent and a 
                    midwife, I encourage you to research the routine administration 
                    of vaccines - especially to newborns.  What you are not told is 
                    incredible.  While reactions to vaccines are rare, that doesn't 
                    ease the pain if it's your child that suffers that 'rare' 
                    reaction.  One of the most common defensive statements is "if 
                    vaccines don't work, then why have we eradicated polio, measles, 
                    etc"?  The answer to that question and others can be found in 
                    the following links.
                </p>
                <p>
                    <blockquote>
                        “Up to 90% of the total decline in the death rate of children 
                        between 1860-1965 because of whooping cough, scarlet fever, 
                        diphtheria, and measles occurred before the introduction of 
                        immunizations and antibiotics.”Dr. Archie Kalokerinos, M.D.
                    </blockquote>
                    - Dr. Archie Kalokerinos, M.D.
                </p>
                <ul>
                    <li>
                        <a href="http://www.nvic.org/" target="_blank">
                            National Vaccine Information Center
                        </a>
                    </li>
                    <li>
                        <a href="http://www.know-vaccines.org/?page_id=456" target="_blank">
                            KNOW…The Vaccine Controversy
                        </a>
                    </li>
                    <li>
                        <a href="http://www.eagleforum.org/psr/1999/feb99/psrfeb99.html" target="_blank">
                            Whatever Happened to Informed Medical Choice?
                        </a>
                    </li>
                    <li>
                        <a href="http://www.immunizationinfo.org/parents/evaluating-information-web" target="_blank">
                            Evaluating Information on the Web
                        </a>
                        - How to decide whether what your reading is scientifically 
                        supported analysis or merely someone's opinion.
                    </li>
                    <li>
                        <a href="http://www.cdc.gov/vaccines/recs/schedules/#child" target="_blank">
                            Recommended Immunization Schedule
                        </a>
                        - Lists all the vaccinations currently recommended by the 
                        CDC from birth through age 18.  This chart will assist you 
                        in researching vaccines.
                    </li>
                    <li>
                        <a href="http://pediatrics.aappublications.org/content/109/1/124.full" target="_blank">
                            Addressing Parents’ Concerns
                        </a>
                    </li>
                    <li>
                        <a href="http://www.vaclib.org/news/belief.htm" target="_blank">
                            The Belief in Vaccines 
                        </a>
                    </li>
                    <li>
                        <a href="http://www.newswithviews.com/Tenpenny/sherri1.htm" target="_blank">
                            Vaccinations and the Right to Refuse
                        </a>
                    </li>
                    <li>
                        <a href="http://www.healing-arts.org/children/vaccines/#return" target="_blank">
                            Children's Vaccines: Research on the Risks for 
                            Children and Possible Neurological Consequences
                        </a>
                        -This is a very complete site giving both pro and 
                        con arguments.
                    </li>
                    <li>
                        <a href="/d/informedConsent">
                            Informed Consent
                        </a>
                    </li>
                    <li>
                        <a href="http://www.nlm.nih.gov/portals/public.html" target="_blank">
                            The National Institute of Health
                        </a>
                        -enter either vaccines or Childhood Immunization into 
                        the search engine.  Because this information comes from 
                        the NIH it's bias is pro-vaccine; however, there are many 
                        articles disclosing the potential risks as well.
                    </li>
                </ul>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

