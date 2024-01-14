<?php
 
include('conf.php');
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
 
// |-----------------------------------------------------------------------
// |   FUNCTION : Data from staff
// |-----------------------------------------------------------------------
 
if($_GET['getFoodSold'])
{
    $sql = "SELECT * FROM total_sales";
    $result = $db->query($sql);
    $result = $result->fetch_all(MYSQLI_ASSOC);
 
    echo json_encode($result);
    die;
}
 
// |-----------------------------------------------------------------------
// |   FUNCTION : Data from Profict
// |-----------------------------------------------------------------------
 
if($_GET['getSales'])
{
    $sql = "SELECT SUM(orders_subtotal) total, DATE_FORMAT(order_date, '%M') mth FROM `orders` GROUP BY MONTH(order_date)";
    $result = $db->query($sql);
    $result = $result->fetch_all(MYSQLI_ASSOC);
 
 
    foreach($result as $row)
    {
        $sales[] = $row['total'];
        $bulan[] = $row['mth'];
    }
 
    echo json_encode([
        "sales" => $sales,
        "bulan" => $bulan,
    ]);
    die;
}
 
// |-----------------------------------------------------------------------
// |   FUNCTION : Data from Profict
// |-----------------------------------------------------------------------
 
if($_GET['getshipping'])
{
    echo json_encode([
        "incomp" => 20,
        "total" => 40,
    ]);
    die;
}
 
 
 
?>