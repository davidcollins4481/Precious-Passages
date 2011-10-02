<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <title><?php echo $post->title; ?> - Blog</title>
</head>
<body id="blog_entry" onload="">
  <h2><?php echo $post->title; ?></h2>
  <span class="metadata"><?php echo $post->author; ?></span>
  <?php echo $post->entry; ?>
  
  <p><a href="/index.php/blog/">Back to Blog</a></p>
  </body>
<html> 
