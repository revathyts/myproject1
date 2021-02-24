<?php
/**
 *
 */
class mainmodel extends CI_model
{

public function encpswd($pass)
{
return password_hash($pass, PASSWORD_BCRYPT);
}
public function regist($a,$b)
{
$this->db->insert("emp_table",$b);
$loginid=$this->db->insert_id();
$a['loginid']=$loginid;
$this->db->insert("regtable",$a);


}
public function view_table()
{
$this->db->select('*');
$this->db->join('emp_table','emp_table.id=regtable.loginid','inner');
$n=$this->db->get("regtable");
return $n;
}
public function approve($id)
{
$this->db->set('status','1');
$this->db->where("id",$id);
$qry=$this->db->update("emp_table",$b);
return $qry;
}
public function reject($id)
{
$this->db->set('status','2');
$this->db->where("id",$id);
$qry=$this->db->update("emp_table",$b);
return $qry;

}
public function slctpass($unm,$pass)
{
$this->db->select('password');
$this->db->from("emp_table");
$this->db->where("uname",$unm);
$qry=$this->db->get()->row('password');
return $this->verfypass($pass,$qry);
}
public function verfypass($pass,$qry)
{
return password_verify($pass,$qry);
}
public function getusrid($unm)
{
$this->db->select('id');
$this->db->from("emp_table");
$this->db->where("uname",$unm);
return $this->db->get()->row('id');
}
public function getusr($id)
{
$this->db->select('*');
$this->db->from("emp_table");
$this->db->where("id",$id);
return $this->db->get()->row();
}
}
