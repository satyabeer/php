<?php
header("Content-Type: application/json; charset=UTF-8");
//header("Access-Control-Allow-Origin:https://localhost:3000");

if(strpos($_SERVER["HTTP_ORIGIN"], "javascript") == false){
    header("Access-Control-Allow-Origin:".$_SERVER["HTTP_ORIGIN"]);
}