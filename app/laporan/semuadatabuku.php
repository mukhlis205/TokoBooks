
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
      <h4>LAPORAN SEMUA BUKU</h4>
    </div>
  </div>
  <div class="panel-body">
    <div class="form-group form-inline text-left">
      <div class="clearfix"></div>
      <div class="controls"> <a target="_blank" href="laporan/lap_semua_buku_cetak.php" class="btn btn-primary">Cetak</a> <a target="_blank" href="laporan/lap_semua_buku_cetak_excel.php" class="btn btn-success">Export Excel</a> </div>
    </div>
    <div class="table-responsive">
      <table class="table table-hover table-bordered">
        <tr>
          <th>No</th>
          <th>Kode Buku</th>
          <th>Judul</th>
          <th>NO ISBN</th>
          <th>Penulis</th>
          <th>Penerbit</th>
          <th>Stok</th>
          <th>Harga Pokok</th>
          <th>Harga Jual</th>
          <th>PPN</th>
          <th>Diskon</th>
        </tr>
                <tr>
          <td>1</td>
          <td>BQU0000000000000001</td>
          <td>Harry Potter</td>
          <td>974-34-085702-23</td>
          <td>Anton</td>
          <td>Wikipedia</td>
          <td>199</td>
          <td>20.000</td>
          <td>30.000</td>
          <td>10%</td>
          <td>12%</td>
        </tr>
                  <tr>
          <td>2</td>
          <td>BQU0000000000000002</td>
          <td>Sukarno Muda</td>
          <td>975-34-085702-23</td>
          <td>Peter Kasenda</td>
          <td>Komunitas Bambu</td>
          <td>4251</td>
          <td>45.000</td>
          <td>60.000</td>
          <td>10%</td>
          <td>0%</td>
        </tr>
                  <tr>
          <td>3</td>
          <td>BQU0000000000000004</td>
          <td>dudidudi</td>
          <td>1234</td>
          <td>dudi</td>
          <td>dudi123</td>
          <td>100</td>
          <td>50.000</td>
          <td>60.000</td>
          <td>10%</td>
          <td>0%</td>
        </tr>
                  <tr>
          <td>4</td>
          <td>BQU0000000000000005</td>
          <td>Teguh Tetaplah Teguh</td>
          <td>978-979-18346-3-6</td>
          <td>Teguh Himawan</td>
          <td>Himawari</td>
          <td>0</td>
          <td>256.999</td>
          <td>299.999</td>
          <td>10%</td>
          <td>0%</td>
        </tr>
                  <tr>
          <td>5</td>
          <td>BQU0000000000000006</td>
          <td>SIKSA KUBUR</td>
          <td>66666666</td>
          <td>KUNCORO</td>
          <td>CORO.INC</td>
          <td>0</td>
          <td>20.000.000</td>
          <td>2.147.483.647</td>
          <td>10%</td>
          <td>99%</td>
        </tr>
                  <tr>
          <td>6</td>
          <td>BQU0000000000000007</td>
          <td>Lola si cewek tangguh</td>
          <td>1211114</td>
          <td>boneng</td>
          <td>PT Boneng curug</td>
          <td>0</td>
          <td>3.000</td>
          <td>400.000</td>
          <td>10%</td>
          <td>10%</td>
        </tr>
                  <tr>
          <td>7</td>
          <td>BQU0000000000000008</td>
          <td>A Very Yuppy Wedding</td>
          <td>12341234</td>
          <td>Sylva</td>
          <td>Rifa </td>
          <td>33</td>
          <td>50.000</td>
          <td>60.000</td>
          <td>10%</td>
          <td>5%</td>
        </tr>
                  <tr>
          <td>8</td>
          <td>BQU0000000000000009</td>
          <td>persahabatan 3 wanita tapos</td>
          <td>349</td>
          <td>saha</td>
          <td>gram</td>
          <td>0</td>
          <td>40.000</td>
          <td>3.000</td>
          <td>10%</td>
          <td>10%</td>
        </tr>
                  <tr>
          <td>9</td>
          <td>BQU0000000000000010</td>
          <td>Banana</td>
          <td>221</td>
          <td>@yayaijal_</td>
          <td>grup sahabatan</td>
          <td>0</td>
          <td>5.300.000</td>
          <td>5.000.000</td>
          <td>10%</td>
          <td>0%</td>
        </tr>
                  <tr>
          <td>10</td>
          <td>BQU0000000000000011</td>
          <td>tanpa judul</td>
          <td>1234</td>
          <td>chanyeol</td>
          <td>jongdae</td>
          <td>0</td>
          <td>10.000</td>
          <td>500</td>
          <td>10%</td>
          <td>0%</td>
        </tr>
                  <tr>
          <td>11</td>
          <td>BQU0000000000000012</td>
          <td>Naon we bebas</td>
          <td>241125-9231232</td>
          <td>Sahawae</td>
          <td>Gramer</td>
          <td>0</td>
          <td>2.000.000</td>
          <td>2.500.000</td>
          <td>10%</td>
          <td>100%</td>
        </tr>
                  <tr>
          <td>12</td>
          <td>BQU0000000000000013</td>
          <td>EXO PLANET</td>
          <td>20120408</td>
          <td>Suho</td>
          <td>SUHO JAYA</td>
          <td>0</td>
          <td>2.500</td>
          <td>5.000</td>
          <td>10%</td>
          <td>2%</td>
        </tr>
                  <tr>
          <td>13</td>
          <td>BQU0000000000000014</td>
          <td>judul</td>
          <td>12345678</td>
          <td>Tere Vica</td>
          <td>PT Grmedia</td>
          <td>21</td>
          <td>2.000</td>
          <td>5.000</td>
          <td>10%</td>
          <td>0%</td>
        </tr>
                  <tr>
          <td>14</td>
          <td>BQU0000000000000015</td>
          <td>Ichitan</td>
          <td>8888888</td>
          <td>Irfan Fediyanto</td>
          <td>Kompas</td>
          <td>98</td>
          <td>70.000</td>
          <td>80.000</td>
          <td>10%</td>
          <td>10%</td>
        </tr>
                  <tr>
          <td>15</td>
          <td>BQU0000000000000016</td>
          <td>LASKAR PELANGI</td>
          <td>90798987</td>
          <td>ANDRE</td>
          <td>GRAMEDIA</td>
          <td>2</td>
          <td>17.000</td>
          <td>25.000</td>
          <td>10%</td>
          <td>2%</td>
        </tr>
                  <tr>
          <td>16</td>
          <td>BQU0000000000000018</td>
          <td>EXO </td>
          <td>1235654</td>
          <td>Lee Soo Man</td>
          <td>SM</td>
          <td>0</td>
          <td>200.000</td>
          <td>250.000</td>
          <td>10%</td>
          <td>10%</td>
        </tr>
                  <tr>
          <td>17</td>
          <td>BQU0000000000000019</td>
          <td>Hidayah Seorang Azhar</td>
          <td>123456</td>
          <td>Iki</td>
          <td>ga di terbitin</td>
          <td>0</td>
          <td>2.000</td>
          <td>7.000</td>
          <td>10%</td>
          <td>0%</td>
        </tr>
                  <tr>
          <td>18</td>
          <td>BQU0000000000000020</td>
          <td>WannaOne The Series</td>
          <td>423465425</td>
          <td>Park Jihoon</td>
          <td>Mnet</td>
          <td>0</td>
          <td>20.000</td>
          <td>25.000</td>
          <td>10%</td>
          <td>10%</td>
        </tr>
                  <tr>
          <td>19</td>
          <td>BQU0000000000000021</td>
          <td>EXO The Series</td>
          <td>6544423645</td>
          <td>Park Chanyeol</td>
          <td>SM.</td>
          <td>0</td>
          <td>200.000</td>
          <td>240.000</td>
          <td>10%</td>
          <td>15%</td>
        </tr>
                  <tr>
          <td>20</td>
          <td>BQU0000000000000022</td>
          <td>Cara Bernafas</td>
          <td>080812-038</td>
          <td>Ucok Friyad</td>
          <td>Gramed Ia</td>
          <td>7</td>
          <td>2.147.483.647</td>
          <td>2.147.483.647</td>
          <td>10%</td>
          <td>1%</td>
        </tr>
                  <tr>
          <td>21</td>
          <td>BQU0000000000000023</td>
          <td>Icot Geulis</td>
          <td>4567756</td>
          <td>Projen</td>
          <td>Sopi hehe</td>
          <td>0</td>
          <td>15.000</td>
          <td>67.000</td>
          <td>10%</td>
          <td>12%</td>
        </tr>
                  <tr>
          <td>22</td>
          <td>BQU0000000000000024</td>
          <td>Fatal Escape</td>
          <td>6666</td>
          <td>WolfSnakes</td>
          <td>Creepypasta Indonesia</td>
          <td>0</td>
          <td>50.000</td>
          <td>60.000</td>
          <td>10%</td>
          <td>5%</td>
        </tr>
                  <tr>
          <td>23</td>
          <td>BQU0000000000000025</td>
          <td>Hacking Human</td>
          <td>asdf jkl; asdf jkl; asdf jkl; asdf jkl; asdf jk;l asdf kjl; asdf jkl; asdf jkl; asdf jkl; asdf jk;k </td>
          <td>Azazel</td>
          <td>Tindakan seseorang tergantung lingkungan temoat dia tinggal. Orang dapat merubah tindakanya dengan m</td>
          <td>0</td>
          <td>2.147.483.647</td>
          <td>2.147.483.647</td>
          <td>10%</td>
          <td>5000%</td>
        </tr>
                  <tr>
          <td>24</td>
          <td>BQU0000000000000026</td>
          <td>Atun Yach Terchakhity</td>
          <td>12345</td>
          <td>Atun gendut</td>
          <td>Dimas guy</td>
          <td>18</td>
          <td>1.000.000</td>
          <td>2.147.483.647</td>
          <td>10%</td>
          <td>100%</td>
        </tr>
                  <tr>
          <td>25</td>
          <td>BQU0000000000000027</td>
          <td>Komet</td>
          <td>ISBN-067</td>
          <td>Tere Liye</td>
          <td>Gramedia</td>
          <td>0</td>
          <td>100.000</td>
          <td>150.000</td>
          <td>10%</td>
          <td>5%</td>
        </tr>
                  <tr>
          <td>26</td>
          <td>BQU0000000000000029</td>
          <td>Si Buta yang Melihat</td>
          <td>123456789</td>
          <td>Idrus Kampret</td>
          <td>Pertamina</td>
          <td>0</td>
          <td>70.000</td>
          <td>60.000</td>
          <td>10%</td>
          <td>10%</td>
        </tr>
                  <tr>
          <td>27</td>
          <td>BQU0000000000000030</td>
          <td>tes</td>
          <td>0888</td>
          <td>tes</td>
          <td>test</td>
          <td>14</td>
          <td>8.000</td>
          <td>10.000</td>
          <td>10%</td>
          <td>2%</td>
        </tr>
                  <tr>
          <td>28</td>
          <td>BQU0000000000000031</td>
          <td>Kenapa Selalu Aku? huft ..</td>
          <td>123456789</td>
          <td>Rafi Aprilian</td>
          <td>Mediakita</td>
          <td>100</td>
          <td>0</td>
          <td>0</td>
          <td>10%</td>
          <td>90%</td>
        </tr>
                  <tr>
          <td>29</td>
          <td>BQU0000000000000032</td>
          <td>Kisah Kopil Sie Botcah Barbar Zaman Qeqinian</td>
          <td>12345678910</td>
          <td>LICH</td>
          <td>QEQINIAN</td>
          <td>10</td>
          <td>1.000.000</td>
          <td>1.000.000</td>
          <td>10%</td>
          <td>1%</td>
        </tr>
                  <tr>
          <td>30</td>
          <td>BQU0000000000000033</td>
          <td>Saint Saiya</td>
          <td>1234567890</td>
          <td>R Saiya</td>
          <td>Kopil</td>
          <td>0</td>
          <td>1.000.000</td>
          <td>1.000.000</td>
          <td>10%</td>
          <td>1%</td>
        </tr>
                  <tr>
          <th class="text-right">Jumlah</th>
                    <td colspan="10"><strong>30 Buku</strong></td>
        </tr>
      </table>
    </div>
  </div>
  <!--/panel content--> 
</div>
<!--/panel--> 
      </div>
      <!--/row--> 
    </div>
    <!--/col-span-9--> 
  </div>
</div>
<!-- /Main --> 
<script type="text/javascript" src="../../plugin/tcal.js"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/scripts.js"></script>
</body>
</html>