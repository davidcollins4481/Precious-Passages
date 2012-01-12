<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => "Birth Plans")) ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            
            <!-- exclude --><?php $this->load->view("includes/sidebar.php") ?><!-- /exclude -->
            
            <div id="mainbar">
                <h1>
                    <a name="intro" id="intro"></a>
                    Birth Plans
                </h1>
                
                <p>
                    My father was fond of saying "It is not the mountains ahead that wear you 
                    down, it is the grain of sand in your shoe".  In other words, both the pain 
                    and the joy are in the details.  This is so true when it comes to birth.  
                    Writing a birth plan is an excellent way to learn and express your 
                    childbirth options.   A well written birth plan enables you to communicate 
                    in a non-threatening, non-demanding  way with your care providers.  A birth 
                    plan need not be elaborate.  In fact, care providers are more likely to 
                    read and remember a plan if it is one page or less.  Here are a few sample 
                    plans for you to look at.  These plans are very long, but for each section 
                    you only select one or two options, so your plan will be significantly 
                    shorter.
                </p>
                <div align="center">
                    <a href="/birthplans/samplePlanOne" target="_blank">Sample Plan 1</a>
                    &nbsp; &nbsp; &nbsp;
                    <a href="/birthplans/samplePlanTwo" target="_blank">Sample Plan 2</a>                    
                </div>
                <p>
                    Be sure to thoroughly research anything you don't understand.  Informed 
                    consent is only possible if you understand each option you choose.  Also, 
                    do not feel restricted by the sample plans.  A birth plan is a very 
                    individual work that should reflect your personality and style.  Aim to 
                    have your plan completed around the 36th week of pregnancy.  This will give 
                    you a few office visits to discuss the plan with your doctor.  While what 
                    you want is important, realize that you may have to make compromises to 
                    comply with hospital policy.  Talking to your Doctor ahead of time will 
                    allow you to work out any sticking points and create a plan that is more 
                    likely to be honored.
                </p>
                <p>
                    Here are a few websites to help you write your birth plan. <br/>
                    <a href="http://birthplan.com/" target="_blank">birthplan.com</a> <br/>
                    <a href="http://www.childbirth.org/articles/birthplans.html" target="_blank">childbirth.org</a> <br/>
                    <a href="http://www.thelaboroflove.com/forum/attachment/2.html" target="_blank">thelaboroflove.com</a> <br/>
                    <a href="http://www.babyzone.com/" target="_blank">babyzone.com</a>
                </p>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

