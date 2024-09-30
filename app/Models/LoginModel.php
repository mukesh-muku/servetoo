<?php
namespace App\Models;
use CodeIgniter\Model;
class LoginModel extends Model{
    protected $table = 'users';
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

    public function checkLogin($username,$password,$if_loggable = true, $if_match_password = true)
    { // echo 'username='.$username.' password='.$password;// exit();
        $builder = $this->db->table("users");
        $builder->select("*");
        $builder->WHERE('empid',$username);
        $builder->WHERE('display','Y');
        $query =$builder->get(1);
        if($query->getNumRows() >= 1) {
            $result = $query->getRowArray();
            if($result && !empty($result)){
                if($result['userpass'].$_SESSION['login_salt']==$password){  //$if_match_password for ICMIS_assistant
                    if($if_loggable) {//for ICMIS_assistant
                         //echo 'Successfully Login ICMIS_assistant'; exit();
                        return $result;
                    }
                }

            }
            return false;

        }else{
            //echo 'Password not match'; exit(); 
              return false;
        }

    }
    function login_in_update($username){
        $builder = $this->db->table("users");
        $builder->set('log_in', date('Y-m-d H:i:s'));
        $builder->set('logout', '1970-01-01 00:00:00');
        $builder->WHERE('empid',$username);
        $builder->WHERE('display','Y');
        // $builder->update();
        if($builder->update()) {
            return true;
        }else{return false;}
    }
    public function get_multi_section($username) {
        $builder = $this->db->table("user_sec_map as usm");
        $builder->select("*");
        $builder->join('usersection as us', 'us.id=usm.usec');
        $builder->WHERE('usm.empid',$username);
        $builder->WHERE('usm.display','Y');
        $query =$builder->get();
        if($query->getNumRows() >= 1) {
            return $result = $query->getResultArray();
        }else{return false;}
    }
    public function get_usertype($usertype_id)
    {
        $builder = $this->db->table("usertype");
        $builder->select("*");
        $builder->WHERE('id',$usertype_id);
        $builder->WHERE('display','Y');
        $query =$builder->get(1);
        if($query->getNumRows() >= 1) {
            return $result = $query->getRowArray();
        }else{return false;}

    }
    public function log_check($log_check_data)
    {
        $builder = $this->db->table("log_check");
        if($builder->insert($log_check_data)) {
            return true;
        }else{return false;}

    }

}
