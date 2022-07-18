<?php
session_start();
if(isset($_SESSION['logged'])){
    echo "FLAG{BrU0te_Leg}";
}else{
    die("Not Allowed");
}
