<?php
session_start();
if($_COOKIE['person'] === null){
	echo 0;
}
else{
        setcookie("person", '', time() - 3600, '/');
        session_unset();
        echo 1;
}

?>