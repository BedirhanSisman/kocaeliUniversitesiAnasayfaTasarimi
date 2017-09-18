<?php
	session_start();
$duyurutipi=$_SESSION["duyuru"];
$author = $_SESSION["author"];	
$title = $_POST["title"];
$content = $_POST["content"];
if($_POST["ek"]!= null)
{
	$ek = $_POST["ek"];
}
else
{
	$ek=null;
}
$host = "localhost";
$user = "root";
$pass = "";
$db = "duyuru_db";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($duyurutipi == "geneld")
    {
    	$account = $conn->query("INSERT INTO geneld (geneld_id, geneld_title, geneld_content, geneld_date, geneld_teacher, geneld_ek, geneld_web)
    							VALUES('NULL','$title','$content',CURRENT_TIMESTAMP,'$author','$ek','NULL')",PDO::FETCH_ASSOC);
    }
    elseif($duyurutipi == "bolumd")
    {
    	$account = $conn->query("INSERT INTO bolumd(bolumd_id, bolumd_title, bolumd_content, bolumd_date, bolumd_teacher, bolumd_ek, bolumd_web)
    							VALUES('NULL','$title','$content',CURRENT_TIMESTAMP,'Bölüm Başkanlığı','$ek','NULL')",PDO::FETCH_ASSOC);
    }
    else
    {
    	$account = $conn->query("INSERT INTO etkinlikd(etkinlikd_id, etkinlikd_title, etkinlikd_content, etkinlikd_date, etkinlikd_teacher, etkinlikd_ek, etkinlikd_web)
    							VALUES('NULL','$title','$content',CURRENT_TIMESTAMP,'Bilgisayar Mühendisliği','$ek','NULL')",PDO::FETCH_ASSOC);
    }

    echo '<script type="text/javascript">'; 
    echo 'window.location.href="sistemegiris.php";'; 
    echo '</script>'; 
    echo '<noscript>'; 
    echo '<meta http-equiv="refresh" content="0;url=sistemegiris.php" />'; 
    echo '</noscript>';
    exit; 
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>