<?php

$db_type = 'mysqli';
$db_host = 'localhost';
$db_name = 'flux';
$db_username = 'root';
$db_password = 'anjing';
$db_prefix = '';
$p_connect = false;

$cookie_name = 'pun_cookie_78d643';
$cookie_domain = '';
$cookie_path = '/';
$cookie_secure = 0;
$cookie_seed = 'cc799a9e5fb3793a';

function connection(){
  return mysqli_connect("localhost", "root", "anjing", "flux");
}
function sqlQuery($script){
  return mysqli_query(connection(), $script);
}

function sqlInsert($table, $data){
      if (is_array($data)) {
          $key   = array_keys($data);
          $kolom = implode(',', $key);
          $v     = array();
          for ($i = 0; $i < count($data); $i++) {
              array_push($v, "'" . $data[$key[$i]] . "'");
          }
          $values = implode(',', $v);
          $query  = "INSERT INTO $table ($kolom) VALUES ($values)";
      } else {
          $query = "INSERT INTO $table $data";
      }
      return $query;

  }

function sqlUpdate($table, $data, $where){
    if (is_array($data)) {
        $key   = array_keys($data);
        $kolom = implode(',', $key);
        $v     = array();
        for ($i = 0; $i < count($data); $i++) {
            array_push($v, $key[$i] . " = '" . $data[$key[$i]] . "'");
        }
        $values = implode(',', $v);
        $query  = "UPDATE $table SET $values WHERE $where";
    } else {
        $query = "UPDATE $table SET $data WHERE $where";
    }

   return $query;
}

function sqlArray($sqlQuery){
    return mysqli_fetch_assoc($sqlQuery);
}

function sqlRowCount($sqlQuery){
    return mysqli_num_rows($sqlQuery);
}


define('PUN', 1);
