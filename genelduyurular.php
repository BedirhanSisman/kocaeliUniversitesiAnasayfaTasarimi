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
    $geneld = $conn->query("SELECT * FROM geneld ORDER BY geneld_id DESC LIMIT 30",PDO::FETCH_ASSOC);

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
    			$geneld_ek [] = $row["geneld_ek"];
    		}
    		else
    		{
    			$geneld_ek[] = null;
    		}
    	}
    }
    
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

include 'gdtemplate.php';
?>