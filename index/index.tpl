<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>liuxd.github.io</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://v3.bootcss.com/examples/jumbotron-narrow/jumbotron-narrow.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <div class="container">
      <div class="header">
       <!--
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      -->
        <h3 class="text-muted">我们制造玩具，有些玩具改变了世界。</h3>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
            <h4>文章</h4>
            {$articles}
        </div>

        <div class="col-lg-6">
          <h4>演示稿</h4>
          <h4>
              <a href="http://www.slideshare.net/liuxd/php53php54-12753952" target="_blank">PHP5.3、PHP5.4特性介绍</a>
               - 
              <a href="https://speakerdeck.com/liuxd/php53php54" target="_blank">[备用链接]</a>
          </h4>
          <h4>
              <a href="http://www.slideshare.net/liuxd/nodejs-13001907" target="_blank">Node.js那些事儿</a>
               - 
              <a href="https://speakerdeck.com/liuxd/nodejs" target="_blank">[备用链接]</a>
          </h4>
          <h4>
              <a href="http://www.slideshare.net/liuxd/nginx-guide" target="_blank">Nginx基础知识</a>
               - 
              <a href="https://speakerdeck.com/liuxd/nginx" target="_blank">[备用链接]</a>
          </h4>
          {$ppts}
        </div>
      </div>

      <div class="footer">
          <p>&copy; <a href="https://github.com/liuxd" target="_blank">liuxd</a></p>
      </div>

    </div> <!-- /container -->

    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F4e7b6001ec3473e0c62039e964114667' type='text/javascript'%3E%3C/script%3E"));
    </script>
    
  </body>
</html>
