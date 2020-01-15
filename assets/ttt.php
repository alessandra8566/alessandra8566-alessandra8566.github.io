<?php
  
  $obj[] = array("x"=>10, "y"=>10);
  $obj[] = array("x"=>20, "y"=>20);
  $obj[] = array("x"=>30, "y"=>30); 
  $out = array("lists"=>$obj);
  echo json_encode($out);
?>