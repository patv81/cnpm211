<?php 
$re = Array
(
    'id' => '34',
    'products' => '["12","13","14"]',
    'prices' => '["25000","70000","135000"]',
    'quantities' => '["1","2","3"]',
    'money_payed' => '500000',
    'names' => '["2 MIẾNG GÀ GIÒN","CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)","2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT"]',
    'status' => '0',
    'created' => '2021-12-08',
    'created_by' => '1'
);
echo '<pre>' ;
foreach ($re as $key => $val) {
    // print_r($key); 
    // echo '<br>';
    $re[$key] = json_decode($val)??$val;
}
// print_r(count($re));
// print_r(json_decode($a['names'])); 
print_r($re);
echo'<pre>';

?>