
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Satria Nur Karim Amrullah">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Starter Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <?= link_tag('bootstrap-4.0.0/dist/css/bootstrap.min.css');?>
    <!-- Custom styles for this template -->
    <?= link_tag('my.css');?>
    <?= $this->renderSection("customCSS");?>
    
  </head>

  <body>

    <?= $this->include("navbar");?>

    <main role="main" class="container">
        <?= $this->renderSection("content");?>
    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <?= script_tag('jquery-3.6.0.min.js');?>
    <?= script_tag('bootstrap-4.0.0/dist/js/bootstrap.min.js');?>
    <?= $this->renderSection("customJS");?>

  </body>
</html>
