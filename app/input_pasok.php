
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
        <body>
<div class="panel panel-default">
  <div class="panel-heading">
    <div class="panel-title">
      <h4>Form Pasok Buku</h4>
    </div>
  </div>
  <div class="panel-body">
    <form class="form form-vertical" method="post">
      <div class="control-group">
        <label>Nama Distributor</label>
        <div class="controls">
          <select class="form-control input-lg" name="distributor" required>
          <option></option>
                      <option value="1">PT Angkasa</option>
                    <option value="41">dilong</option>
                    <option value="3">PT Wijaya</option>
                    <option value="12">elsa sylva rifa</option>
                    <option value="6">PT. Teguh Himawari</option>
                    <option value="10">PT. SYLVA KOREA</option>
                    <option value="11">PT Elsa Beauty HaulIndo</option>
                    <option value="30">PT.TOKO SAHABAT Rasis</option>
                    <option value="38">atun</option>
                    <option value="13">kenapa pt elsa beauty haul indo di hapus</option>
                    <option value="14">exooo</option>
                    <option value="15">kim jong in</option>
                    <option value="23">ucok</option>
                    <option value="24">adsa</option>
                    <option value="22">sehun</option>
                    <option value="20"><?php echo $con; ?></option>
                    <option value="19">jajang sukmara</option>
                    <option value="33">Ucok Frityadi</option>
                    <option value="34">PT. BOSTON CELTICS</option>
                    <option value="28">Mamat </option>
                    <option value="32">PT PTAN</option>
                    <option value="35">Qorygore Son Of Zeus Hacker Son Of Zeuszzzzz</option>
                    <option value="36">sakur</option>
                    <option value="46">PT. Aprilian Bersahaja</option>
                    <option value="43">Memet Abdurahman</option>
                    <option value="44">tes</option>
                    <option value="45">tes</option>
                    <option value="49">BANG AMIR</option>
                    </select>  
        </div>
      </div>
      <div class="control-group">
        <label>Judul Buku</label>
        <div class="controls">
          <select class="form-control input-lg" name="buku" required>
          <option></option>
                      <option value="BQU0000000000000001">Harry Potter</option>
                    <option value="BQU0000000000000008">A Very Yuppy Wedding</option>
                    <option value="BQU0000000000000002">Sukarno Muda</option>
                    <option value="BQU0000000000000004">dudidudi</option>
                    <option value="BQU0000000000000005">Teguh Tetaplah Teguh</option>
                    <option value="BQU0000000000000006">SIKSA KUBUR</option>
                    <option value="BQU0000000000000011">tanpa judul</option>
                    <option value="BQU0000000000000007">Lola si cewek tangguh</option>
                    <option value="BQU0000000000000009">persahabatan 3 wanita tapos</option>
                    <option value="BQU0000000000000010">Banana</option>
                    <option value="BQU0000000000000012">Naon we bebas</option>
                    <option value="BQU0000000000000013">EXO PLANET</option>
                    <option value="BQU0000000000000014">judul</option>
                    <option value="BQU0000000000000015">Ichitan</option>
                    <option value="BQU0000000000000016">LASKAR PELANGI</option>
                    <option value="BQU0000000000000024">Fatal Escape</option>
                    <option value="BQU0000000000000018">EXO </option>
                    <option value="BQU0000000000000019">Hidayah Seorang Azhar</option>
                    <option value="BQU0000000000000020">WannaOne The Series</option>
                    <option value="BQU0000000000000021">EXO The Series</option>
                    <option value="BQU0000000000000022">Cara Bernafas</option>
                    <option value="BQU0000000000000023">Icot Geulis</option>
                    <option value="BQU0000000000000025">Hacking Human</option>
                    <option value="BQU0000000000000026">Atun Yach Terchakhity</option>
                    <option value="BQU0000000000000027">Komet</option>
                    <option value="BQU0000000000000032">Kisah Kopil Sie Botcah Barbar Zaman Qeqinian</option>
                    <option value="BQU0000000000000029">Si Buta yang Melihat</option>
                    <option value="BQU0000000000000030">tes</option>
                    <option value="BQU0000000000000031">Kenapa Selalu Aku? huft ..</option>
                    <option value="BQU0000000000000033">Saint Saiya</option>
                    </select>  
        </div>
      </div>
      <div class="control-group">
        <label>Jumlah</label>
        <div class="controls">
          <input type="number" name="jumlah" class="form-control" placeholder="Masukan Jumlah Pasok">
        </div>
      </div>
      <div class="control-group">
        <label>Tanggal</label>
        <div class="controls">
          <input type="text" name="tanggal" value="26-02-2019" class="tcal control">
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
  <!--/panel content--> 
</div>
<!--/panel-->
<div class="form-group form-inline text-right">
  <div class="clearfix"></div>
  <div class="controls">
    <form method="post" class="form-group form-inline">
      <label>Pencarian :</label>
      <input type="text" name="txtcari" class="form-group form-control" placeholder="Judul buku / Distributor">
      <button type="submit" name="cari" class="form-group btn btn-info">Cari</button>
      <a class="form-group btn btn-success" href="?menu=pasok">Refresh</a>
    </form>
  </div>
</div>
<div class="table-responsive">
  <table class="table table-hover table-bordered table-responsive">
    <tr>
      <th>Judul Buku</th>
      <th>Nama Distributor</th>
      <th>Jumlah</th>
      <th>Tanggal</th>
      <th>Hapus</th>
    </tr>
        <tr>
      <td>Kenapa Selalu Aku? huft ..</td>
      <td>PT Angkasa</td>
      <td>100</td>
      <td>2019-02-26</td>
      <td align="center"><a href="?menu=pasok&hapus&id=35" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Kenapa Selalu Aku? huft .. ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>tes</td>
      <td><?php echo $con; ?></td>
      <td>11</td>
      <td>2019-02-26</td>
      <td align="center"><a href="?menu=pasok&hapus&id=34" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku tes ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>Harry Potter</td>
      <td>atun</td>
      <td>100</td>
      <td>2018-05-10</td>
      <td align="center"><a href="?menu=pasok&hapus&id=33" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Harry Potter ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>Harry Potter</td>
      <td>atun</td>
      <td>100</td>
      <td>2018-05-10</td>
      <td align="center"><a href="?menu=pasok&hapus&id=32" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Harry Potter ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>dudidudi</td>
      <td>adsa</td>
      <td>100</td>
      <td>2018-05-10</td>
      <td align="center"><a href="?menu=pasok&hapus&id=31" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku dudidudi ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>Harry Potter</td>
      <td>PT Angkasa</td>
      <td>25</td>
      <td>2018-04-23</td>
      <td align="center"><a href="?menu=pasok&hapus&id=30" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Harry Potter ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>tes</td>
      <td>tes</td>
      <td>3</td>
      <td>2018-03-20</td>
      <td align="center"><a href="?menu=pasok&hapus&id=29" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku tes ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>Harry Potter</td>
      <td>PT Angkasa</td>
      <td>2</td>
      <td>2018-03-17</td>
      <td align="center"><a href="?menu=pasok&hapus&id=28" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Harry Potter ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>Atun Yach Terchakhity</td>
      <td>PT. Teguh Himawari</td>
      <td>20</td>
      <td>2018-03-14</td>
      <td align="center"><a href="?menu=pasok&hapus&id=27" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Atun Yach Terchakhity ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>Naon we bebas</td>
      <td>Qorygore Son Of Zeus Hacker Son Of Zeuszzzzz</td>
      <td>0</td>
      <td>2018-02-14</td>
      <td align="center"><a href="?menu=pasok&hapus&id=26" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Naon we bebas ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>Cara Bernafas</td>
      <td>Ucok Frityadi</td>
      <td>2147483647</td>
      <td>2018-03-12</td>
      <td align="center"><a href="?menu=pasok&hapus&id=25" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Cara Bernafas ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>LASKAR PELANGI</td>
      <td>PT PTAN</td>
      <td>20</td>
      <td>2018-03-12</td>
      <td align="center"><a href="?menu=pasok&hapus&id=22" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku LASKAR PELANGI ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>Ichitan</td>
      <td>PT. Teguh Himawari</td>
      <td>100</td>
      <td>2018-03-07</td>
      <td align="center"><a href="?menu=pasok&hapus&id=21" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Ichitan ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>Banana</td>
      <td>elsa sylva rifa</td>
      <td>3</td>
      <td>2017-12-13</td>
      <td align="center"><a href="?menu=pasok&hapus&id=16" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Banana ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>persahabatan 3 wanita tapos</td>
      <td>elsa sylva rifa</td>
      <td>4</td>
      <td>2017-12-13</td>
      <td align="center"><a href="?menu=pasok&hapus&id=15" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku persahabatan 3 wanita tapos ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>A Very Yuppy Wedding</td>
      <td>PT. SYLVA KOREA</td>
      <td>90</td>
      <td>2017-11-30</td>
      <td align="center"><a href="?menu=pasok&hapus&id=13" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku A Very Yuppy Wedding ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>Teguh Tetaplah Teguh</td>
      <td>PT. Teguh Himawari</td>
      <td>100</td>
      <td>2020-11-22</td>
      <td align="center"><a href="?menu=pasok&hapus&id=8" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Teguh Tetaplah Teguh ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>Harry Potter</td>
      <td>PT Angkasa</td>
      <td>40</td>
      <td>2017-11-21</td>
      <td align="center"><a href="?menu=pasok&hapus&id=6" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Harry Potter ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>Sukarno Muda</td>
      <td>PT Angkasa</td>
      <td>4321</td>
      <td>2017-04-17</td>
      <td align="center"><a href="?menu=pasok&hapus&id=3" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Sukarno Muda ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>Sukarno Muda</td>
      <td>PT Wijaya</td>
      <td>120</td>
      <td>2017-03-10</td>
      <td align="center"><a href="?menu=pasok&hapus&id=2" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Sukarno Muda ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>Harry Potter</td>
      <td>PT Angkasa</td>
      <td>100</td>
      <td>2017-03-07</td>
      <td align="center"><a href="?menu=pasok&hapus&id=1" title="HAPUS" onClick="return confirm('Hapus data pasok dgn judul buku Harry Potter ? ')"><img class="img-responsive" src="../img/b_drop.png"></a></td>
    </tr>
        <tr>
      <td>        Jumlah : <strong>30</strong> pasok </td>
      <td colspan="4"> Hal :
        1</td>
    </tr>
  </table>
</div>
</body>
      </div>
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