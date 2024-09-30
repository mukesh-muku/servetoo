<?php
namespace App\Models\Common;
use CodeIgniter\Model;
class Dropdown_list_model extends Model{
    protected $db;

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->db = db_connect();
    }
    public function selectPassword($loginid) {
        $builder = $this->db->table("users");
        $builder->select("*");
        $builder->WHERE('empid',$loginid);
        $builder->WHERE('display','Y');
        $query =$builder->get(1);
        if($query->getNumRows() >= 1) {
            return $result = $query->getResultArray();
        }else{return false;}
    }
    public function high_courts($hc_id=null) {
        $table_name='m_tbl_high_courts_bench'; $file=Json_master_table.$table_name.'.json';
        if(file_exists($file)){
            $url=base_url('/'.$file); $json = file_get_contents($url);
            $json = file_get_contents($url);  $json_data = json_decode($json, true); $json_array=false;
      //  in_array($id,$json_data);
        if ($json_data){
            if (!empty($hc_id) && $hc_id !=null) { foreach ($json_data[$table_name] as $subArray) { if (isset($subArray['hc_id']) && $subArray['hc_id'] == $hc_id) { $json_array = $subArray;break; } }  }else{ $json_array=$json_data; }  }else{  $json_array; } return $json_array;
        }else{ echo $table_name.' table does not exist';exit(); }
    }
    function hc_bench($hc_id, $type=1){
        if($type==1)
            $table_name='m_tbl_high_courts_bench'; $file=Json_master_table.$table_name.'.json';
        if(file_exists($file)){
            $url=base_url('/'.$file); $json = file_get_contents($url);
            $json = file_get_contents($url);  $json_data = json_decode($json, true); $json_array=false;
            //  in_array($id,$json_data);
            if ($json_data){
                if (!empty($hc_id) && $hc_id !=null) { foreach ($json_data[$table_name] as $subArray) { if (isset($subArray['hc_id']) && $subArray['hc_id'] == $hc_id) { $json_array = $subArray;break; } }  }else{ $json_array=$json_data; }  }else{  $json_array; } return $json_array;
        }else{ echo $table_name.' table does not exist';exit(); }
    }

}
