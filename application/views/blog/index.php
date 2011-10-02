<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <title>Blog</title>
  
</head>
<body id="blog_entry" onload="">
  <h2>Blog</h2>
  <?php foreach ($query as $entry) { ?>
  <div class="blog_entry">
    <h2><a href="/blog/entry/<?php echo $entry->url_title; ?>"><?php echo $entry->title; ?></a></h2>
    <span class="metadata"><?php echo $entry->author; ?></span>
    <p><?php echo $entry->summary; ?></p>
  </div>
  <?php } ?>
</body>
<html> 
