<?php
function appinfo($salt = "") {
    return 1;
}
function appinfo_mid_msg(){
}
function appinfo_domain_msg(){
}
function get_dbmid(){
    $CI =& get_instance();
    return $CI->db->select("machine_id")->where("id",1)->get("db_sitesettings")->row()->machine_id;
}
function get_domain(){
    return $_SERVER['SERVER_NAME'];
}
function get_dbdomain(){
    $CI =& get_instance();
    return $CI->db->select("domain")->where("id",1)->get("db_sitesettings")->row()->domain;
}
function isEnabled($func) {
    return is_callable($func) && false === stripos(ini_get('disable_functions'), $func);
}
