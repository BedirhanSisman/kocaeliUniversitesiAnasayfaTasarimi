<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="Kocaeli Universitesi Bilgisayar Mühendisliği" />
<link rel="stylesheet" type="text/css" media="all" href="Styles/Style.css" />
<link rel="Stylesheet" type="text/css" media="all" href="Styles/bootstrap.css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>

  <div id="header">
        <div class="header_content">
      
        <div class="logo"><a href="index.php">KOCAELİ ÜNİVERSİTESİ</a> <span>| Bilgisayar Mühendisliği</span></div>
         
        </div>
  </div>
  <div class="row">
      <nav class="navbar navbar-default" role="navigation" >
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
          <li><a href="index.php">Anasayfa</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hakkımızda <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="tarihce.php">Tarihçe</a></li>
            <li><a href="hakkimizda.php">Hakkımızda</a></li>
            <li><a href="misyon.php">Misyon</a></li>
            <li><a href="vizyon.php">Vizyon</a></li>
            <li><a href="anabilimdallari.php">Ana Bilim Dalları</a></li>
            <li><a href="programciktilari.php">Program Çıktıları</a></li>
            </ul>
          </li>
          <li><a href="yonetim.php">Yönetim</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Araştırma <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="http://bilgisayar.kocaeli.edu.tr/akilli_sistemler_lab/" target="_blank">Akıllı Sistemler Araştırma Laboratuvarı</a></li>
            <li><a href="http://bilgisayar.kocaeli.edu.tr/comnet" target="_blank">Bilgisayar Ağları ve Haberleşme Araştırma Laboratuvarı</a></li>
            <li><a href="http://embedded.kocaeli.edu.tr/" target="_blank">Gömülü ve Algılayıcı Sistemler Araştırma Laboratuvarı</a></li>
            <li><a href="http://ipcv.kocaeli.edu.tr/" target="_blank">Görüntü İşleme Araştırma Laboratuvarı</a></li>
            <li><a href="http://ibel.kocaeli.edu.tr/" target="_blank">İnsan Bilgisayar Etkileşimi Araştırma Laboratuvarı</a></li>
            <li><a href="http://yapbenzet.kocaeli.edu.tr/" target="_blank">Yapay Zeka ve Benzetim Sistemleri Araştırma Laboratuvarı</a></li>
            <li><a href="projeler.php">Projeler</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personel <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="kadro.php">Öğretim Üyeleri</a></li>
            <li><a href="ogretimelemanlari.php">Öğretim Elemanları</a></li>
            <li><a href="idari.php">İdari Personel</a></li>
            <li><a href="sistemegiris.php">Sisteme Giriş</a></li>


            

            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lisans <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="http://mf.kocaeli.edu.tr/ogrenci/formlar.php" target="_blank">Öğrenci Dilekçe ve Formları</a></li>
            <li><a href="lisansdersplani.php" target="_blank">Ders Planı</a></li>
            <li><a href="lisansdersicerikleri.php">Ders İçerikleri</a></li>
                <li><a href="files/208_Ders_Programi.zip">Ders Programı</a></li>
                <li><a href="files/2016-2017_Danismanliklari.pdf">Akademik Danışmanlar</a></li>
            <li><a href="#">İntibak Öğrencileri</a></li>
            <li><a href="#">Aday Öğrenciler</a></li>
            <li><a href="projebitirmeler.php">Araştırma Problemleri ve Bitirme</a></li>
            <li><a href="http://odb.kocaeli.edu.tr/akademik_takvim.php">Akademik Takvim</a></li>
            <li><a href="mudek.php">MÜDEK</a></li>
            <li><a href="diploma_sorgulama.php">Diploma Sorgulama</a></li>            
            <li><a href="http://mf.kocaeli.edu.tr/ogrenci/staj.php">Staj</a></li> 
                
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Y.Lisans / Doktora <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="calismaalanlari.php">Çalışma Alanları</a></li>
            <li><a href="fbederslistesi.php" target="_blank">Ders Listesi</a></li>
            <li><a href="files/2016-2017_Guz_Lisansustu.pdf" target="_blank">Ders Programı</a></li>
            <li><a href="#">Tezler</a></li>

            </ul>
          </li>
          <li><a href="https://www.facebook.com/groups/25429857332/" target="_blank">Mezunlar</a></li>
          <li><a href="iletisim.php">İletişim/Ulaşım</a></li>
          <li><a href="koubil3d.html">3DNavi</a></li>         
          <li><a href="http://bilgisayar.kocaeli.edu.tr/english">English</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>
</body>


<?php
$duyurutipi = $_POST["duyuru"];
$username = $_POST["username"];
$password = $_POST["password"];
$host = "localhost";
$user = "root";
$pass = "";
$db = "duyuru_db";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $account = $conn->query("SELECT * FROM account",PDO::FETCH_ASSOC);

    if ($account->rowCount())
    {
    	foreach($account as $row)
    	{
    		$uname [] = $row ["username"];
    		$pass []= $row ["password"];
    		$teacher [] = $row ["teacher"];
    	}
    }
    $bool = false;
    for($i = 0 ; $i < sizeof($uname) ; $i++)
    {
    	if($username == $uname[$i] && $password == $pass[$i])
    	{
    		$bool = true;
    		$author = $teacher[$i];
    	}
    }
    if($bool == false)
    {
    	echo '<script type="text/javascript">'; 
        echo 'window.location.href="sistemegiris.php";'; 
        echo '</script>'; 
        echo '<noscript>'; 
        echo '<meta http-equiv="refresh" content="0;url=sistemegiris.php" />'; 
        echo '</noscript>';
        exit; 
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
<div class="row">
    <div class="col-md-12" align="center">
    	<form action="duyuruyukleson.php" method="post">
   				<label for="comment">Başlık:</label>
     			<textarea class="form-control" rows="1" id="title" name="title"></textarea>
     			<br>
     			<label for="comment">İçerik:</label>
     			<textarea class="form-control" rows="5" id="content" name="content"></textarea>
     			<br>
     			<label for="comment">Varsa Ek:</label>
     			<textarea class="form-control" rows="1" id="ek" name="ek"></textarea>
     			<br>
     			<input type="submit" value="Gönder">
  		</form>
    </div>
</div>
<?php
	$_SESSION["author"] = $author;
	$_SESSION["duyuru"] = $duyurutipi;
?>
<br><br>
<footer>
  <div class="row">
      <div class="panel panel-default col-md-12">
        <div class="panel-footer">
          <p>Adres: KOÜ Mühendislik Fakültesi (B Blok) Bilgisayar Mühendisliği Umuttepe Yerleşkesi 41380 Kocaeli<br>
          Tel: +90 (262) 303 35 60<br>
          E-Posta: bilgisayar@kocaeli.edu.tr<br> 
          Web: http://bilgisayar.kocaeli.edu.tr 
                    <br>
                  Web  istek görüş ve önerileriniz için : <a href="http://akademikpersonel.kocaeli.edu.tr/binner/">A. Burak İNNER</a> / <a href="http://akademikpersonel.kocaeli.edu.tr/hikmetcan.ozcan/">Hikmetcan ÖZCAN </a></p>
        </div>
    </div>
    </div>
</footer>
</html>