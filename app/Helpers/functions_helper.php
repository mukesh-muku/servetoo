<?php
/**
 * Created by PhpStorm.
 * User: Anshu
 * Date: 26/8/23
 * Time: 11:30 AM
 */


function getClientIP(){
    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)){
        return  $_SERVER["HTTP_X_FORWARDED_FOR"];
    }else if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
        return $_SERVER["REMOTE_ADDR"];
    }else if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
        return $_SERVER["HTTP_CLIENT_IP"];
    }

    return '';
}


function getClientMAC(){
    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)){
        $ipAddress = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }else if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
        $ipAddress = $_SERVER["REMOTE_ADDR"];
    }else if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
        $ipAddress = $_SERVER["HTTP_CLIENT_IP"];
    }

    //$ipAddress = getClientIP();

    //echo "<br>";
    //$ipAddress = "172.16.182.57";
    ob_start();
    system('ping -c 2 '.$ipAddress);
    $macfull=ob_get_contents();
    ob_clean();
    //echo $macfulll;

    ob_start();
    system('arp -an '.$ipAddress);
    $macfull=ob_get_contents();
    ob_clean();
    //echo $macfull;

    $pmac = strpos($macfull, $ipAddress);
    $mac=substr($macfull,($pmac+18),17);
    return $mac;
}
function sendSMS($mobile_no,$smsmsg)
{
    $template_id=1107165900749762632;
    $url = "http://10.25.78.5/eAdminSCI/a-push-sms-gw?mobileNos=".$mobile_no."&message=".rawurlencode($smsmsg)."&typeId=29&myUserId=NIC001001&myAccessId=root&authCode=".SMS_KEY."&templateId=".$template_id;

    $result = (array)json_decode(file_get_contents($url));
}
function generateRandomString($length = 16) {

    // generates random string for login salt

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function get_diff_two_date($date1,$date2){

    // Declare and define two dates
    //$date1 = strtotime("2016-06-01 22:45:00");
    // $date2 = strtotime("2018-09-21 10:44:01");
    $date1 = strtotime($date1);
    $date2 = strtotime($date2);

    // Formulate the Difference between two dates
    $diff = abs($date2 - $date1);

    // To get the year divide the resultant date into
    // total seconds in a year (365*60*60*24)
    $years = floor($diff / (365*60*60*24));

    // To get the month, subtract it with years and
    // divide the resultant date into
    // total seconds in a month (30*60*60*24)
    $months = floor(($diff - $years * 365*60*60*24)
        / (30*60*60*24));

    // To get the day, subtract it with years and
    // months and divide the resultant date into
    // total seconds in a days (60*60*24)
    $days = floor(($diff - $years * 365*60*60*24 -
            $months*30*60*60*24)/ (60*60*24));

    // To get the hour, subtract it with years,
    // months & seconds and divide the resultant
    // date into total seconds in a hours (60*60)
    $hours = floor(($diff - $years * 365*60*60*24
            - $months*30*60*60*24 - $days*60*60*24)
        / (60*60));

    // To get the minutes, subtract it with years,
    // months, seconds and hours and divide the
    // resultant date into total seconds i.e. 60
    $minutes = floor(($diff - $years * 365*60*60*24
            - $months*30*60*60*24 - $days*60*60*24
            - $hours*60*60)/ 60);

    // To get the minutes, subtract it with years,
    // months, seconds, hours and minutes
    $seconds = floor(($diff - $years * 365*60*60*24
        - $months*30*60*60*24 - $days*60*60*24
        - $hours*60*60 - $minutes*60));
    $totalMinutes=($hours * 60)+($minutes);
    return $result=['years'=>$years,'months'=>$months,'days'=>$days,'hours'=>$hours,'minutes'=>$minutes,'seconds'=>$seconds,'totalMinutes'=>$totalMinutes];
    // Print the result
    /*printf("%d years, %d months, %d days, %d hours, "
         . "%d minutes, %d seconds", $years, $months,
                 $days, $hours, $minutes, $seconds);*/

}
if (!function_exists('escape_data')) {

    function escape_data($post) {
        return trim(pg_escape_string(strip_tags($post)));
    }

}
function associative_array_merged_key($array1,$array2,$key){
    $combinedArray = array();
    foreach (array_merge($array1, $array2) as $item) {
        if (!empty($item)) {
            $year = $item["$key"];
            if (!isset($combinedArray[$year])) {
                $combinedArray[$year] = array("$key" => $year);
            }
            $combinedArray[$year] = array_merge($combinedArray[$year], $item);
        }
    }
    $combinedArray = array_values($combinedArray);
    return $combinedArray;
}

function get_from_table_json($table_name,$condition=null,$column_names='id'){
    $file=Json_master_table.$table_name.'.json';
    if(file_exists($file)){
        $url=base_url('/'.$file); $json = file_get_contents($url); $json_data = json_decode($json, true);
        $json_array=false;
        if ($json_data){
            if (!empty($condition) && $condition !=null && !empty($column_names) && $column_names !=null) {
                foreach ($json_data[$table_name] as $subArray) {
                    if (isset($subArray[$column_names]) && $subArray[$column_names] == $condition) {
                        $json_array = $subArray; break;
                    } }
            }else{  $json_array=$json_data;}
        }else{ $json_array;}
        return $json_array; //echo '<pre>';print_r($json_array);exit();
    }else{ echo $table_name.' table does not exist';exit(); }
}