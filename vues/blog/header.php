<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Mon blog</title>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link href="vues/blog/bootstrap.css" rel="stylesheet">
    <link href="vues/blog/mon_css.css" rel="stylesheet">
  </head>

  <body>
  
    <div class="container">

      <div class="content">
      
        <div class="page-header">
          <h1>Mon blog, <small>projet de Licence RSC</small></h1>
          <a href="?getBillets=Published">Lister les billets publi&eacute;s</a>
          <a href="?getBillets=NotPublished">Lister les billets non publi&eacute;s</a>
        </div>
        
        <h3>
        <?php
          echo ($_GET['getBillets']=='NotPublished') ? 'Liste des billets non publi&eacute;s' : 'Liste des billets publi&eacute;s';
        ?>
        </h3>

        <div class="row">
        
          <div class="span10">