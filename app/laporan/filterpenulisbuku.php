
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Toko Buku Qu</title>
<meta name="generator" content="Bootply" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../plugin/tcal.css" />
<link href="../../css/styles.css" rel="stylesheet">
<link rel="shortcut icon" href="../img/icon.png">
</head>
<body>
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
        <li class="active"> <a href="../index.php"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>
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
        <div class="panel panel-default">
  <div class="panel-heading">
    <div class="panel-title">
      <h4>Form Filter Buku Berdasarkan Penulis</h4>
    </div>
  </div>
  
  <div class="panel-body">
    <form class="form form-vertical" method="post">
        <div class="control-group">
        <label>Nama Penulis</label>
        <div class="controls">
          <select name="penulis" class="form-control" onchange="submit()" required>
            <option value=""></option>
                        <option value="@yayaijal_">@yayaijal_</option>
                        <option value="ANDRE">ANDRE</option>
                        <option value="Anton">Anton</option>
                        <option value="Atun gendut">Atun gendut</option>
                        <option value="Azazel">Azazel</option>
                        <option value="boneng">boneng</option>
                        <option value="chanyeol">chanyeol</option>
                        <option value="Chocomilkoreo_">Chocomilkoreo_</option>
                        <option value="dudi">dudi</option>
                        <option value="Idrus Kampret">Idrus Kampret</option>
                        <option value="Iki">Iki</option>
                        <option value="Irfan Fediyanto">Irfan Fediyanto</option>
                        <option value="KUNCORO">KUNCORO</option>
                        <option value="Lee Soo Man">Lee Soo Man</option>
                        <option value="LICH">LICH</option>
                        <option value="Park Chanyeol">Park Chanyeol</option>
                        <option value="Park Jihoon">Park Jihoon</option>
                        <option value="Peter Kasenda">Peter Kasenda</option>
                        <option value="Projen">Projen</option>
                        <option value="R Saiya">R Saiya</option>
                        <option value="Rafi Aprilian">Rafi Aprilian</option>
                        <option value="saha">saha</option>
                        <option value="Sahawae">Sahawae</option>
                        <option value="Suho">Suho</option>
                        <option value="Sylva">Sylva</option>
                        <option value="Teguh Himawan">Teguh Himawan</option>
                        <option value="Tere Liye">Tere Liye</option>
                        <option value="Tere Vica">Tere Vica</option>
                        <option value="tes">tes</option>
                        <option value="Ucok Friyad">Ucok Friyad</option>
                        <option value="WolfSnakes">WolfSnakes</option>
                      </select>
        </div>
      </div>
      
      <div class="control-group">
        <label></label>
        <div class="controls">
          <a href="laporan/lap_filter_penulis_buku.php?penulis=" target="_blank" class="btn btn-primary btn-lg btn-block">LIHAT</a>  
        </div>
      </div>
      
    </form>
  </div>
  
  <!--/panel content--> 
</div>
      </div>
      <!--/row--> 
    </div>
    <!--/col-span-9--> 
  </div>
</div>
<!-- /Main --> 
<script type="text/javascript" src="../../plugin/tcal.css"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/scripts.js"></script>
</body>
</html>