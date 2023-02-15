<?php
//điều chỉnh kết nối db ở đây
const DBNAME = "we17316";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";

const BASE_URL = "http://localhost:8888/we17315_PHP2/bai6_base_mvc/";

function delele_er_sc(){
    unset($_SESSION['errors']);
    unset($_SESSION['success']);
}