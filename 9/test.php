<?php
    header('Content-type: text/xml');
    echo file_get_contents($_GET['filename']);
?>