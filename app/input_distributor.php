
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Toko Buku </title>
<meta name="generator" content="Bootply" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="plugins/tigra_calendar/tcal.css" />
<link href="../css/styles.css" rel="stylesheet">
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
        <body OnLoad="document.myform.nama.focus();">
<div class="panel panel-default">
  <div class="panel-heading">
    <div class="panel-title">
      <h4>Form Distributor</h4>
    </div>
  </div>
  <div class="panel-body">
    <form class="form form-vertical" method="post" name="myform">
      <div class="control-group">
        <label>Nama Distributor</label>
        <div class="controls">
          <input type="text" name="nama" setFocus class="form-control" value="" required placeholder="Masukan nama distributor">
        </div>
      </div>
      <div class="control-group">
        <label>Alamat</label>
        <div class="controls">
          <textarea class="form-control" name="alamat"></textarea>
        </div>
      </div>
      <div class="control-group">
        <label>Telpon</label>
        <div class="controls">
          <input type="number" name="telpon" class="form-control" value="" placeholder="Masukan Telpon">
        </div>
      </div>
       <div class="control-group">
        <label></label>
        <div class="controls">
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                  </div>
      </div>
    </form>
  </div>
</div>
<div class="form-group form-inline text-right">
  <div class="clearfix"></div>
  <div class="controls">
    <form method="post" class="form-group form-inline">
      <label>Pencarian :</label>
      <input type="text" name="txtcari" class="form-group form-control" placeholder="nama distributor">
      <button type="submit" name="cari" class="form-group btn btn-info">Cari</button>
      <a class="form-group btn btn-success" href="?menu=distributor">Refresh</a>
    </form>
  </div>
</div>
<div class="table-responsive">
  <table class="table table-hover table-bordered table-responsive">
    <tr>
      <th>Nama Distributor</th>
      <th>Alamat</th>
      <th>Telpon</th>
      <th>Edit</th>
      <th>Hapus</th>
    </tr>
        <tr>
      <td>BANG AMIR</td>
      <td>ALAMAT PALSU</td>
      <td>11706006</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=49" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=49" title="HAPUS" onClick="return confirm('Hapus distributor BANG AMIR ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>PT. Aprilian Bersahaja</td>
      <td>Belakang UNPAK</td>
      <td>00000000000</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=46" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=46" title="HAPUS" onClick="return confirm('Hapus distributor PT. Aprilian Bersahaja ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>tes</td>
      <td>alamat</td>
      <td>0812</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=45" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=45" title="HAPUS" onClick="return confirm('Hapus distributor tes ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>tes</td>
      <td>alamat</td>
      <td>0812</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=44" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=44" title="HAPUS" onClick="return confirm('Hapus distributor tes ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>Memet Abdurahman</td>
      <td>Jalan mana coba</td>
      <td>08128989898</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=43" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=43" title="HAPUS" onClick="return confirm('Hapus distributor Memet Abdurahman ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>dilong</td>
      <td>di mana aja</td>
      <td>099999</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=41" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=41" title="HAPUS" onClick="return confirm('Hapus distributor dilong ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>atun</td>
      <td>JL.Tapos</td>
      <td>08965432109</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=38" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=38" title="HAPUS" onClick="return confirm('Hapus distributor atun ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>sakur</td>
      <td>tajut</td>
      <td>09876545678</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=36" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=36" title="HAPUS" onClick="return confirm('Hapus distributor sakur ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>Qorygore Son Of Zeus Hacker Son Of Zeuszzzzz</td>
      <td>jln Athena Olympus gg.validasi Heaven</td>
      <td>suram</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=35" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=35" title="HAPUS" onClick="return confirm('Hapus distributor Qorygore Son Of Zeus Hacker Son Of Zeuszzzzz ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>PT. BOSTON CELTICS</td>
      <td>Kp. Boston Celtics rt 06/07 Desa Boston Kec. Celtics</td>
      <td>022541648</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=34" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=34" title="HAPUS" onClick="return confirm('Hapus distributor PT. BOSTON CELTICS ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>Ucok Frityadi</td>
      <td>Jalan Jalan Kuy</td>
      <td>081288245771</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=33" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=33" title="HAPUS" onClick="return confirm('Hapus distributor Ucok Frityadi ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>PT PTAN</td>
      <td>AYOOOOOOOO</td>
      <td>089929837</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=32" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=32" title="HAPUS" onClick="return confirm('Hapus distributor PT PTAN ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>PT.TOKO SAHABAT Rasis</td>
      <td>CIKERETEG CITY</td>
      <td>081213146969</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=30" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=30" title="HAPUS" onClick="return confirm('Hapus distributor PT.TOKO SAHABAT Rasis ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>Mamat </td>
      <td>Kolong Jembatan</td>
      <td>696969696969</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=28" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=28" title="HAPUS" onClick="return confirm('Hapus distributor Mamat  ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>adsa</td>
      <td>asdsad</td>
      <td>213123123</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=24" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=24" title="HAPUS" onClick="return confirm('Hapus distributor adsa ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>ucok</td>
      <td>kp dukuh</td>
      <td>089512332121</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=23" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=23" title="HAPUS" onClick="return confirm('Hapus distributor ucok ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>sehun</td>
      <td>kalideres</td>
      <td>6</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=22" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=22" title="HAPUS" onClick="return confirm('Hapus distributor sehun ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>ucokk</td>
      <td>alamat</td>
      <td>1000</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=20" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=20" title="HAPUS" onClick="return confirm('Hapus distributor <?php echo $con; ?> ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>jajang sukmara</td>
      <td>jalan - jalan </td>
      <td>69</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=19" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=19" title="HAPUS" onClick="return confirm('Hapus distributor jajang sukmara ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>kim jong in</td>
      <td>gapunya rumah diamah</td>
      <td>01234</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=15" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=15" title="HAPUS" onClick="return confirm('Hapus distributor kim jong in ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>exooo</td>
      <td>korea</td>
      <td>00000</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=14" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=14" title="HAPUS" onClick="return confirm('Hapus distributor exooo ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>kenapa pt elsa beauty haul indo di hapus</td>
      <td>tapos country</td>
      <td>9999</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=13" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=13" title="HAPUS" onClick="return confirm('Hapus distributor kenapa pt elsa beauty haul indo di hapus ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>elsa sylva rifa</td>
      <td>tapos leweng</td>
      <td>087712342194</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=12" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=12" title="HAPUS" onClick="return confirm('Hapus distributor elsa sylva rifa ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>PT Elsa Beauty HaulIndo</td>
      <td>Gangnam City</td>
      <td>0839383</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=11" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=11" title="HAPUS" onClick="return confirm('Hapus distributor PT Elsa Beauty HaulIndo ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>PT. SYLVA KOREA</td>
      <td>Jl. Raya Cibalok</td>
      <td>081212121212</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=10" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=10" title="HAPUS" onClick="return confirm('Hapus distributor PT. SYLVA KOREA ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>PT. Teguh Himawari</td>
      <td>Jalan Raya Wangun No. 69 Komplek Bawah Tanah Cibalok Blok B2. </td>
      <td>081908215161</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=6" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=6" title="HAPUS" onClick="return confirm('Hapus distributor PT. Teguh Himawari ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>PT Wijaya</td>
      <td>Jalan raya wangun</td>
      <td>0251345643</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=3" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
            <td align="center">
      <a href="?menu=distributor&hapus&id=3" title="HAPUS" onClick="return confirm('Hapus distributor PT Wijaya ? ')">
      <img class="img-responsive" src="../img/b_drop.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>PT Angkasa</td>
      <td>Jalan raya tajur</td>
      <td>0251694567</td>
      
      <td align="center">
      <a href="?menu=distributor&edit&id=1" title="EDIT">
      <img class="img-responsive" src="../img/b_edit.png">
      </a>
      </td>
          </tr>
        <tr>
      <td>        Jumlah : <strong>28</strong> distributor </td>
      <td colspan="4"> Hal :
        1</td>
    </tr>
  </table>
</div>
</body>      </div>
      <!--/row--> 
    </div>
    <!--/col-span-9--> 
  </div>
</div>
<!-- /Main --> 
<script type="text/javascript" src="plugins/tigra_calendar/tcal.js"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/scripts.js"></script>
</body>
</html>