<?php
function js_alert($text){
    echo "<script>alert('".$text."');</script>";
}

function js_redirect($location){
    echo "<script>window.location.href = '".$location."';</script>";
}