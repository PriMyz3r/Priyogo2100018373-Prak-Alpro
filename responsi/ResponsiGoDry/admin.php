<?php
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
	<!-- Custom styles-->
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
                    <li><a href="order.html">Order</a></li>
                    <li class="active"><a href="#">Admin</a></li>                    
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

			<!-- Article main content -->
            <div id="valid"><br>
                <header class="page-header">
					<h1 class="page-title">Login Admin</h1>
				</header>
                <form name="form" method="POST" onSubmit="validasi(); return false;">                
                    <div>
                        <label>Username :</label><br>
                        <input type="text" name="nama" id="nama" />
                    </div>
                    <div>
                        <label>Password :</label><br>
                        <input type="password" name="password" id="password" />
                    </div><br>
                    <input type="submit" value="Submit" name="submit">
                    //note buat demo username : admin dan password : admin
                </form>
                <br><br><br><br>
                <br><br><br><br>
            </div>
            <div id="my_form" style="display: none;">
                <article class="col-md-8 maincontent">
                    <header class="page-header">
                        <h1 class="page-title">Data Orderan</h1>
                    </header>
                    '; 
                        $fp = fopen("orderan.txt","r"); 
                        echo "<table border=0>";

                        while ($isi = fgets($fp, 500)){
                            $pisah = explode("|",$isi); 
                            echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>"; 
                            echo "<tr><td>Jumlah </td><td>: $pisah[1]</td></tr>"; 
                            echo "<tr><td>Paket </td><td>: $pisah[2]</td></tr>";
                            echo "<tr><td>Tanggal </td><td>: $pisah[3]</td></tr>";
                            echo "<tr><td>Alamat </td><td>: $pisah[4]</td></tr>"; 
                            echo "<tr><td>Note </td><td>: $pisah[5]</td></tr> <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
                        }
                        echo "</table>"; 
                        echo "<a href=download.php> Klik untuk Download Data<a/><br>";
                        echo "<a href=index.html> Klik untuk Kembali<br><br>";
                        
                        echo '</article>
                </div>
			<!-- /Article -->

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
								<a href="order.html">Order</a> |
								<a href="admin.php">Admin</a>
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
    <script>
    function validasi() {
		var nama = document.getElementById("nama").value;
		var password = document.getElementById("password").value;
		if (nama=="admin" && password=="admin") {
            alert("Login Berhasil");
            document.getElementById("my_form").style.display = "block";
            document.getElementById("valid").style.display = "none";
			return true;
		}else{
			alert("Username dan Password salah!");
		}
	}
    </script>
</body>
</html>';
?>
