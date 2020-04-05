<?php
session_start();
class app_libs_UserIdentity{
    public $username;
    public $password;
    protected  $id;
    public function _construct($username= "",$password= ""){
    $this->username= $username;
    $this->password= $password;

public function  encryptPassword(){
    return md5($this->password);
}
public function  login(){
    $db= new app_libs_UserIdentity();
    $query = $db->buildQueryParams([
        "where"=>"username=:username AND password=:password",
        "param"=>[
            ":username"=>trim($this->username),
            ":password"=>$this->encryptPassword()
        ]
    ])->selectOne();
    if($query){
            $_SESSION["userId"]= $query["id"];
            $_SESSION["username"]= $query["username"];
            return true;
                }
        return false;
}
public function logout(){
    unset($_SESSION["userId"]);
    unset($_SESSION["username"]);
}
public funtion getSESSION($name){
    if($name !==NUll){
        return isset($_SESSION[$name])?$_SESSION[$NAME] :NULL;
    }
    return $_SESSION;
}
public funtion isLogin(){
    if($this->getSESSION("userId")){
        return true;
}
return false;
}
public funtion getId(){
    return $this->getSESSION("userId");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
}
