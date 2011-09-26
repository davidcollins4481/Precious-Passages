<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php") ?>
<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            <?php $this->load->view("includes/sidebar.php") ?>
            
            <div id="mainbar">
                <h1>
                    <a name="intro" id="intro"></a>
                    Dr. Luke's Top 25 Food All-Stars
                </h1>
                <p>
					<img src="/images/resources/top_251.jpg" alt="Dr. Barbara Luke" title="drBarbaraLuke" class="articleimg" />
					Does it seem like every time you open a newspaper or magazine you 
					read different advice on diet and health? In one sense you are, but 
					in another sense it's just that the field of nutrition and diet 
					therapy is constantly changing as researchers make new discoveries 
					every day, often changing last year's advice in light of today's 
					science. One constant theme, though, has emerged over the years
					-variety in the daily diet has always been associated with better 
					health. And with variety in mind, your best choices should be foods 
					that are the most nutrient-dense--the best nutritional-buys for your 
					grocery dollar. This is a list of what I consider to be the top 25 
					foods everyone should eat.
                </p>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>

