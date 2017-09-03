<?php
// returnCode函数
function returnDetail($data){
  $res = [];
  if (!empty($data)) {
    $res = [
      "status_code" => 1000,
      "success" => true,
      // "message" => $msg,
      "bizContent" => $data->first()
    ];
  } else {
    $res = [
      "status_code" => 4001,
      "success" => false,
      // "message" => $msg,
      "bizContent" => ''
    ];
  }
  return $res;
}
