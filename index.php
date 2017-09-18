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
    $geneld = $conn->query("SELECT * FROM geneld ORDER BY geneld_id DESC LIMIT 10",PDO::FETCH_ASSOC);
    $etkinlikd = $conn->query("SELECT * FROM etkinlikd ORDER BY etkinlikd_id DESC LIMIT 5",PDO::FETCH_ASSOC);
    $bolumd = $conn->query("SELECT * FROM bolumd ORDER BY bolumd_id DESC LIMIT 5",PDO::FETCH_ASSOC);
    $img = $conn->query("SELECT * FROM img ORDER BY id DESC LIMIT 6",PDO::FETCH_ASSOC);

    if ($geneld->rowCount())
    {
    	foreach($geneld as $row)
    	{
    		$geneld_title [] = $row["geneld_title"];
    		$geneld_content [] = $row["geneld_content"];
    		$time = $row["geneld_date"];
    		$time  = strtotime($time);
			$day   = date('d',$time);
			$month = date('m',$time);
			$month = getMonth($month);
			$geneld_day[] = $day;
			$geneld_month[] = $month;
    		$geneld_teacher[] = $row["geneld_teacher"];
    		if ($row["geneld_ek"] != null)
    		{
    			$geneld_ek[] = $row["geneld_ek"];
    		}
    		else
    		{
    			$geneld_ek[] = null;
    		}
    	}
    }
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
    if ($bolumd->rowCount())
    {
    	foreach($bolumd as $row)
    	{
    		$bolumd_title [] = $row["bolumd_title"];
    		$bolumd_content [] = $row["bolumd_content"];
    		$time_b1 = $row["bolumd_date"];
    		$time_b1  = strtotime($time_b1);
			$day_b1   = date('d',$time_b1);
			$month_b1 = date('m',$time_b1);
			$month_b1 = getMonth($month_b1);
			$bolumd_day[] = $day_b1;
			$bolumd_month[] = $month_b1;
    		$bolumd_author[] = $row["bolumd_teacher"];
    		if ($row["bolumd_ek"] != null)
    		{
    			$bolumd_ek[] = $row["bolumd_ek"];
    		}
    		else
    		{
    			$bolumd_ek[] = null;
    		}
    	}
    }
    if($img->rowCount())
    {
    	foreach ($img as $row) 
    	{
    		$img_link[] = $row["img_link"];
    		$img_href[] = $row["img_href"];
    		$img_title[] = $row["img_title"];
    		if ($row["img_content"] != null)
    		{
    			$img_content[] = $row["img_content"];
    		}
    		else
    		{
    			$img_content[] = null;
    		}
    	}
    }
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

include 'template.php';
?>