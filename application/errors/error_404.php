<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>Page Not Found</title>
        <link href="/css/global.css" rel="stylesheet" type="text/css" />
        <link href="/css/navigation.css" rel="stylesheet" type="text/css" />
        <!--[if IE]>
            <link rel="stylesheet" type="text/css" href="/css/ie.css" />
        <![endif]-->
        <script type="text/javascript">
            var djConfig = {
                parseOnLoad: true,
                isDebug: true,
                locale: 'en-us',
                modulePaths: {
                    pp:'../../pp'
                }
            };
        </script>
        <script type="text/javascript" src="/js/dojo/dojo/dojo.js"></script>
        <script type="text/javascript" src="/js/global.js"></script>
        <script type="text/javascript" src="/js/pp/sidebar/navigation.js"></script>
        <script type="text/javascript" src="/js/pp/util/highlighter.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="content-wrapper">
            <div id="menu">
                <div class="container">
                    <div class="logo-container">
                        <img src="/images/logo5.png" />
                    </div>
                    <div class="link-container">
                        <a href="/">home</a>
                        <a href="/gallery">gallery</a>
                        <a href="/bio">about me</a>
                        <a href="/blog">blog</a>
                    </div>
                </div>
            </div>
            <div id="content" style="min-height: 300px;">
                <h1><?php echo $heading; ?></h1>
                <?php echo $message; ?>
                <p>Wanna search for something?</p>
                <form method="GET" action="/search">
                    <input type="input" name="query" value="<?php if (isset($_GET["query"])) echo $_GET["query"]; ?>"/>
                    <input value="Search" type="submit" />
                </form>
            </div>
            <div id="footer">
                Erika Obert and Precious Passage  Birth Services, Ltd.  
                offer this information free to all for educational purposes.  
                Please be fair. 
             </div>
            </div>
        </div>
        <div id="modal-background"></div>
    </body>
</html>

