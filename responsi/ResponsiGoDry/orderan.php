<?php
   $path = 'orderan.txt';
   if (isset($_POST['nama']) && isset($_POST['jumlah']) && isset($_POST['paket']) && isset($_POST['tanggal']) && isset($_POST['alamat']) && isset($_POST['note'])) {
      $fh = fopen($path,"a+");
      $string = $_POST['nama'].'|'.$_POST['jumlah'].'|'.$_POST['paket'].'|'.$_POST['tanggal'].'|'.$_POST['alamat'].'|'.$_POST['note'];
      fwrite($fh,$string."\n"); // Write information to the file
      fclose($fh); // Close the file
   }
   echo '<html lang="en">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta name="description" content="Techro is a modern and fully responsive Template by WebThemez.">
       <meta name="author" content="webThemez.com">
       <title>GO-DRY</title>
       <link rel="favicon" href="assets/images/favicon.png">
       <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
       <link rel="stylesheet" href="assets/css/bootstrap.min.css">
       <link rel="stylesheet" href="assets/css/font-awesome.min.css">
       <!-- Custom styles for our template -->
       <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
       <link rel="stylesheet" href="assets/css/style.css">
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
       <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
      <![endif]-->
   </head>
   
   <body>
       <!-- Fixed navbar -->
       <div class="navbar navbar-inverse">
           <div class="container">
               <div class="navbar-header">
                   <!-- Button for smallest screens -->
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                   <a class="navbar-brand" href="index.html">
                       <img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
               </div>
               <div class="navbar-collapse collapse">
                   <ul class="nav navbar-nav pull-right">
                       <li><a href="index.html">Home</a></li>
                       <li class="active"><a href="#">Order</a></li>
                       <li><a href="admin.html">Admin</a></li>                    
                       <li><a href="contact.html">Contact</a></li>
                   </ul>
               </div>
               <!--/.nav-collapse -->
           </div>
       </div>
       <!-- /.navbar -->
   
       <header id="head" class="secondary"></header>
   
       <!-- container -->
       <div class="container">
           <div class="row">
               <!-- Article content -->
                 <div id="thank_you">
                   <br><br>
                   <header class="page-header">
					      <h1 class="page-title">Orderan anda berhasil!</h1>
				       </header>
                   <li><a href="index.html">Kembali</a></li>
                   <br><br><br><br><br><br>
                   <br><br><br><br><br><br>
                   <br><br><br><br><br><br>
                   <br><br><br><br><br><br> 
                 </div>
               <br><br>       
           </div>
       </div>
       <!-- /container -->
       <footer id="footer">
           <div class="footer1">
               <div class="container">
                   <div class="row">      
                       <div class="col-md-4 panel contact">
                           <h3 class="panel-title">Contact Info</h4>
                     <div class="panel-body">
                               <p>Kontak info kami melayani 24/7</p>
                               <ul>
                                   <li><i class="fa fa-phone"></i> 1-123-345-6789</li>
                                   <li><a href="#"><i class="fa fa-envelope-o"></i> contact@webthemez.com</a></li>
                                   <li><i class="fa fa-flag"></i> 123 Smith Drive, Baltimore, MD 21212</li>
                               </ul>
                           </div>
                       </div>
                       <div class="col-md-3 panel">
                           <h3 class="panel-title">Ikuti kami</h3>
                           <div class="panel-body">
                               <p class="follow-me-icons">
                                   <a href=""><i class="fa fa-twitter fa-2"></i></a>
                                   <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                                   <a href=""><i class="fa fa-github fa-2"></i></a>
                                   <a href=""><i class="fa fa-facebook fa-2"></i></a>
                                   <a href=""><i class="fa fa-youtube fa-2"></i></a>
                                   <a href=""><i class="fa fa-pinterest fa-2"></i></a>
                               </p>
                           </div>
                       </div>
   
                   </div>
                   <!-- /row of panels -->
               </div>
           </div>
           <div class="footer2">
               <div class="container">
                   <div class="row">
                       <div class="col-md-6 panel">
                           <div class="panel-body">
                               <p class="simplenav">
                                   <a href="index.html">Home</a> | 
                           <a href="services.html">Services</a> |
                           <a href="portfolio.html">Portfolio</a> |
                           <a href="contact.html">Contact</a>
                               </p>
                           </div>
                       </div>
                       <div class="col-md-6 panel">
                           <div class="panel-body">
                               <p class="text-right">
                                   Copyright &copy; 2022. Made by Anugrah Akbar Priyogo Wiratama
                               </p>
                           </div>
                       </div>
                   </div>
                   <!-- /row of panels -->
               </div>
           </div>
       </footer>
   
   
   
   
   
       <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
       <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
       <script src="assets/js/custom.js"></script>
   </body>
   </html>';
?>