<?php
/**
 * Created by PhpStorm.
 * User: Anshu
 * Date: 26/8/23
 * Time: 11:30 AM
 */
function sanitize($val){
    $val = preg_replace('/string:/','',$val);
    return $val;
}
function encrypt($val){
    $encrypter = \Config\Services::encrypter();
    $enc_id=bin2hex($encrypter->encrypt($val));
    return $enc_id;
}
function decrypt($val){
    $encrypter = \Config\Services::encrypter();
    $dec_id=$encrypter->decrypt(hex2bin($val));
    return $dec_id;
}
function url_encryption($val){
    $encrypter = \Config\Services::encrypter();
    $enc_id=bin2hex($encrypter->encrypt($val));
    return $enc_id;
}
function url_decryption($val){
    $encrypter = \Config\Services::encrypter();
    $dec_id=$encrypter->decrypt(hex2bin($val));
    return $dec_id;
}
function is_data_from_table($table,$condition=null,$column_names='*')
{
    $db = \Config\Database::connect();
    $builder = $db->table($table);
    if (!empty($condition) && $condition != null) {
        $query = $builder->select($column_names)->where($condition)->get();
    } else {
        $query = $builder->select($column_names)->get();
    }
    if ($query->getNumRows() >= 1) {
        return $result = $query->getResultArray();
    } else {
        return false;
    }
}

function unique_multidim_array($array, $key) {
    $temp_array = array(); $i = 0; $key_array = array(); foreach($array as $val) { if (!in_array($val[$key], $key_array)) { $key_array[$i] = $val[$key]; $temp_array[$i] = $val; } $i++; }
    return $temp_array;
}
function exists_from_table($table,$col_name1,$col_str1,$col_name2=null,$col_str2=null,$column_names='*')
{
    if (!empty($col_name2) && !empty($col_str2) != null) {
        $lower=strtolower($col_str1);$lower2=strtolower($col_str2);
        for ($x = 1; $x <= 5; $x++) {
            if ($x==1){$text=$lower; $text2=$lower2;}elseif ($x==2){$text=strtoupper($lower); $text2=strtoupper($lower2);}elseif ($x==3){$text=ucwords($lower); $text2=ucwords($lower2);}elseif ($x==4){$text=ucfirst($lower); $text2=ucfirst($lower2);}elseif ($x==5){$text=lcfirst($lower); $text2=lcfirst($lower2);}
            $query =is_data_from_table($table,[$col_name1 => $text,$col_name2 => $text2, 'is_deleted' => false],$column_names);
            if ($query && !empty($query) && $query != false) { return $query; }
        }
    }elseif (!empty($col_name1) && $col_name1 != null) {
        $lower=strtolower($col_str1);
        for ($x = 1; $x <= 5; $x++) {
            if ($x==1){$text=$lower;}elseif ($x==2){$text=strtoupper($lower);}elseif ($x==3){$text=ucwords($lower);}elseif ($x==4){$text=ucfirst($lower);}elseif ($x==5){$text=lcfirst($lower);}
            $query =is_data_from_table($table,[$col_name1 => $text, 'is_deleted' => false],$column_names);
            if ($query && !empty($query) && $query != false) { return $query; }
        }
    } else {
        $query =is_data_from_table($table,'',$column_names);
    }
    if (!empty($query) && count($query) >= 1) {
        return $query;
    } else {
        return false;
    }
}
if (!function_exists('sendSMS')) {
    function sendSMS($mobile_no, $smsmsg)
    {
        $template_id = 1107165900749762632;
        $url = "http://10.25.78.5/eAdminSCI/a-push-sms-gw?mobileNos=" . $mobile_no . "&message=" . rawurlencode($smsmsg) . "&typeId=29&myUserId=NIC001001&myAccessId=root&authCode=" . SMS_KEY . "&templateId=" . $template_id;

        $result = (array)json_decode(file_get_contents($url));
    }
}
if (!function_exists('generateRandomString')) {
    function generateRandomString($length = 16)
    {

        // generates random string for login salt

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
if (!function_exists('get_diff_two_date')) {
    function get_diff_two_date($date1, $date2)
    {

        // Declare and define two dates
        //$date1 = strtotime("2016-06-01 22:45:00");
        // $date2 = strtotime("2018-09-21 10:44:01");
        $date1 = strtotime($date1);
        $date2 = strtotime($date2);

        // Formulate the Difference between two dates
        $diff = abs($date2 - $date1);

        // To get the year divide the resultant date into
        // total seconds in a year (365*60*60*24)
        $years = floor($diff / (365 * 60 * 60 * 24));

        // To get the month, subtract it with years and
        // divide the resultant date into
        // total seconds in a month (30*60*60*24)
        $months = floor(($diff - $years * 365 * 60 * 60 * 24)
            / (30 * 60 * 60 * 24));

        // To get the day, subtract it with years and
        // months and divide the resultant date into
        // total seconds in a days (60*60*24)
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 -
                $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

        // To get the hour, subtract it with years,
        // months & seconds and divide the resultant
        // date into total seconds in a hours (60*60)
        $hours = floor(($diff - $years * 365 * 60 * 60 * 24
                - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24)
            / (60 * 60));

        // To get the minutes, subtract it with years,
        // months, seconds and hours and divide the
        // resultant date into total seconds i.e. 60
        $minutes = floor(($diff - $years * 365 * 60 * 60 * 24
                - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24
                - $hours * 60 * 60) / 60);

        // To get the minutes, subtract it with years,
        // months, seconds, hours and minutes
        $seconds = floor(($diff - $years * 365 * 60 * 60 * 24
            - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24
            - $hours * 60 * 60 - $minutes * 60));
        $totalMinutes = ($hours * 60) + ($minutes);
        return $result = ['years' => $years, 'months' => $months, 'days' => $days, 'hours' => $hours, 'minutes' => $minutes, 'seconds' => $seconds, 'totalMinutes' => $totalMinutes];
        // Print the result
        /*printf("%d years, %d months, %d days, %d hours, "
             . "%d minutes, %d seconds", $years, $months,
                     $days, $hours, $minutes, $seconds);*/

    }
}
