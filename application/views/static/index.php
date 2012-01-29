<?php
    $images = array(
        "/images/homeimgs/alyssa2.jpg",
        "/images/homeimgs/alyssa.jpg",
        "/images/homeimgs/ana baby_edited.JPG",
        "/images/homeimgs/dreamstimeweb_554857.jpg",
        "/images/homeimgs/dreamtime.jpg",
        "/images/homeimgs/erika.jpg",
        "/images/homeimgs/index.1.gif",
        "/images/homeimgs/Pictures 19 015.jpg",
        "/images/homeimgs/Pictures 19 024.jpg"
    );
?>

<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => "Precious Passage Birtrh Services")) ?>

<script type="text/javascript" src="/js/pp/imageSwitcher.js"></script>

<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            <!--
            <p class="introduction">
                Welcome to Precious Passage Birth Services. 
                I specialize in direct-entry midwifery and doula 
                services, particularly in the home setting. I service 
                the Cleveland, Akron, and Canton area of Ohio. 
                As a midwife and doula I strives to give you the 
                gift of a birth experience you will want to remember. 
            </p>
            -->
            <!-- exclude --><?php $this->load->view("includes/sidebar.php") ?><!-- /exclude -->
            
            <div id="mainbar">
                <h1>
                    <a name="intro" id="intro"></a>
                    "Supporting women, nurturing families"
                </h1>

                <p class="homep">
                    Erika Obert founded Precious Passage Birth Services in 2004 to serve 
                    birthing families in the Northeast Ohio area as a doula.  Since that 
                    time, the business has expanded to offer home birth midwifery as well 
                    as several other services.  Every member of Precious Passage Birth 
                    Services' staff believes that birth can be a transformative event in a 
                    woman's life.  It is our heartfelt desire to give you the gift of a birth 
                    experience that you will want to remember.
                </p>

                <div class="jsnipImageSwitcher">
                    <?php foreach ($images as $image) { ?>
                        <img src="<?php echo $image?>" />
                    <?php } ?>
                </div>

                <h2>
                    Precious Passage offers these services:
                </h2>

                <ul>
                    <li>
                        Homebirth Midwifery
                    </li>
                    <li>
                        Doula
                    </li>
                    <li>
                        Placental Encapsulation
                    </li>
                    <li>
                        Belly Casting
                    </li>
                    <li>
                        Pregnancy, Birth, and Newborn Photography
                    </li>
                </ul>
                
                <br/>
                
                <h3>
                    Precious Passage Birth Services proudly endorses:
                <br/>
                    The Michigan School of Traditional Midwifery
                </h3>
                
                <a href="http://www.traditionalmidwife.com/" target="_blank">
                    <img src="/images/resources/MSTM.png" alt="MSTM" title="MSTM" class="homeMSTMimg" />
                </a>
                
                <br/>
                
                <h4>
                    It is not the mountains ahead that wear you down, it is the grain of sand
                    in your shoe.
                </h4>
                
                <br/>
                
                <blockquote>
                    I believe that imagination is stronger than knowledge.
                    That myth is more potent than history.
                    That dreams are more powerful than facts.
                    That hope always triumphs over experience.
                    That laughter is the only cure for grief.
                    And I believe that love is stronger than death.
                    <br/>
                    - Robert Fulghum 2003
                </blockquote>
                
                <br/>
                
                <a href="http://www.facebook.com/pages/Precious-Passage-Birth-Services/52022083462" target="_blank">
                    <img src="/images/resources/facebook.png" alt="facebook" title="facebook" class="facebook" />
                </a>
                
                <h5>
                    *Note: The opinions found on this site are my own and should not be 
                    construed as endorsing or promoting any organization, person, or method.
                </h5>
                
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

