<?php
$ip="192.168.1.1";


if (filter_var($ip,FILTER_VALIDATE_IP)) {
    print("suu esta correcta");
}else{
    print("vaya caca de ip");
}
?>