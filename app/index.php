<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Toko buku </title>
<meta name="generator" content="Bootply" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../plugin/tcal.css" />
<link href="../css/styles.css" rel="stylesheet">
<link rel="shortcut icon" href="../img/icon.png">
</head>
<body style="background-color:lightgrey">
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="?menu=home">Administrator</a> </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"> <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> admin<span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="?menu=ubahpass">Ubah Password</a></li>
                      </ul>
        </li>
        <li><a href="logout.php" onClick="return confirm('Anda yakin ingin keluar?')"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
      </ul>     
    </div>
  </div>
  <!-- /container --> 
</div>
<!-- /Header --> 
<!-- Main -->
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <ul class="list-unstyled">
        <li class="active"> <a href="index.php"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
          <h5>Inputan <i class="glyphicon glyphicon-chevron-down"></i></h5>
          </a>
          <ul class="list-unstyled collapse" id="userMenu">
            <li><a href="input_distributor.php"><i class="glyphicon glyphicon-file"></i> Input Distributor</a></li>
            <li><a href="input_buku.php"><i class="glyphicon glyphicon-file"></i> Input Buku</a></li>
          </ul>
        </li>
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu1">
          <h5>Tambah <i class="glyphicon glyphicon-chevron-down"></i></h5>
          </a>
          <ul class="list-unstyled collapse" id="userMenu1">
            <li><a href="input_pasok.php"><i class="glyphicon glyphicon-file"></i> Input Pasok Buku</a></li>
          </ul>
        </li>
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2">
          <h5>Laporan <i class="glyphicon glyphicon-chevron-right"></i></h5>
          </a>
          <ul class="list-unstyled collapse" id="menu2">
            <li><a href="laporan/semuadatabuku.php">Semua Data Buku</a> </li>
            <li><a href="laporan/filterpenulisbuku.php">Filter Penulis Buku</a> </li>
            <li><a href="laporan/bukularis">Buku yang Sering Terjual</a> </li>
            <li><a href="laporan/bukubangkrut">Buku yang Tidak Pernah Terjual</a> </li>
            <li><a href="laporan/pasokbuku">Pasok Buku</a> </li>
            <li><a href="laporan/filterpasokbuku">Filter Pasok Buku</a> </li>
          </ul>
        </li>
              </ul>
      <hr>
    </div>
    <!-- /col-3 -->
    <div class="col-md-9">
      <div class="row">
        <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Toko</title>
</head>
<body style="background-color: blue">
<div class="panel panel-default">
  <div class="panel-heading">
    <div class="panel-title">
      <div class="logo-beranda"> <img class="img-responsive" src="../image/logowikrama.png" width="150px" style="margin-left: 41%"> </div>
      <h2 align="center">Toko Buku</h2>
      <h3 align="center">SMK WIKRAMA BOGOR</h3>
    </div>
  </div>
</div>
<div class="col-md-12 text-center">
  <p>Copyright 2019 <a href="#">Z.I.C</a>. Powered By <a href="#">www.blog spot</a></p>
</div>
</body>
</html>      </div>
      <!--/row--> 
    </div>
    <!--/col-span-9--> 
  </div>
</div>
<!-- /Main --> 
<script type="text/javascript" src="../plugin/tcal.js"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/scripts.js"></script>
</body>
</html>