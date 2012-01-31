<?php $this->load->view("includes/doctype_html.php") ?>
<?php $this->load->view("includes/head_start.php", array("title" => $post->title)) ?>

<meta property="og:title" content="<?php echo $post->title;?>"/>
<meta property="og:site_name" content="preciouspassage.com"/>
<meta property="og:type" content="article"/>
<meta property="og:image" content="http://www.preciouspassage.com/images/resources/logo.jpg"/>
<meta property="og:description" content="<?php echo $post->title;?>"/> 
<meta property="fb:admins" content="52022083462"/>

<?php $this->load->view("includes/head_end.php") ?>
<?php $this->load->view("includes/body_start.php") ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php $this->load->view("includes/globalnav.php") ?>

        <!-- unique -->
        <div id="content">
            <?php $this->load->view("includes/sidebar.php") ?>

            <div id="mainbar">
                <h1><?php echo $post->title; ?></h1>

                <?php echo $post->entry; ?>

                <p>-- Last Edited <?php $time = strtotime($post->edited_date); echo date('m/d/Y @ H:i', $time); ?> 
                    <?php echo $post->author; ?>
                    <?php if ($editable) { ?>
                        <a href="/blog/edit?entry_id=<?php echo $post->entry_id ?>">edit</a>
                    <?php } ?>
                </p>
                <div class="fb-like" data-send="true" data-width="450" data-show-faces="true"></div>
                <p><a href="/index.php/blog/">Back to Blog</a></p>
            </div>
        </div>
        <!-- /unique -->

<?php $this->load->view("includes/footer.php");?>
<?php $this->load->view("includes/body_end.php");?>
<?php $this->load->view("includes/html_end.php");?>
