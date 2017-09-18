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
    $bolumd = $conn->query("SELECT * FROM bolumd ORDER BY bolumd_id DESC LIMIT 12",PDO::FETCH_ASSOC);

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
    			$bolumd_ek [] = $row["bolumd_ek"];
    		}
    		else
    		{
    			$bolumd_ek [] = null;
    		}
    	}
    }
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

include 'bdtemplate.php';
?>