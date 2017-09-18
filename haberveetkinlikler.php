<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "duyuru_db";

function getMonth($f)
{
	if($f == 1)
	{
		return "OCAK";
	}
	if($f == 2)
	{
		return "ŞUBAT";
	}
	if($f == 3)
	{
		return "MART";
	}
	if($f == 4)
	{
		return "NİSAN";
	}
	if($f == 5)
	{
		return "MAYIS";
	}
	if($f == 6)
	{
		return "HAZİRAN";
	}
	if($f == 7)
	{
		return "TEMMUZ";
	}
	if($f == 8)
	{
		return "AĞUSTOS";
	}
	if($f == 9)
	{
		return "EYLÜL";
	}
	if($f == 10)
	{
		return "EKİM";
	}
	if($f == 11)
	{
		return "KASIM";
	}
	if($f == 12)
	{
		return "ARALIK";
	}

}

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $etkinlikd = $conn->query("SELECT * FROM etkinlikd ORDER BY etkinlikd_id DESC LIMIT 39",PDO::FETCH_ASSOC);

    if ($etkinlikd->rowCount())
    {
    	foreach($etkinlikd as $row)
    	{
    		$etkinlikd_title [] = $row["etkinlikd_title"];
    		$etkinlikd_content [] = $row["etkinlikd_content"];
    		$time_e1 = $row["etkinlikd_date"];
    		$time_e1  = strtotime($time_e1);
			$day_e1   = date('d',$time_e1);
			$month_e1 = date('m',$time_e1);
			$month_e1 = getMonth($month_e1);
			$etkinlikd_day[] = $day_e1;
			$etkinlikd_month[] = $month_e1;
    		$etkinlikd_author[] = $row["etkinlikd_author"];
    		if ($row["etkinlikd_ek"] != null)
    		{
    			$etkinlikd_ek [] = $row["etkinlikd_ek"];
    		}
    		else
    		{
    			$etkinlikd_ek[] = null;
    		}
    	}
    }
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

include 'hetemplate.php';
?>