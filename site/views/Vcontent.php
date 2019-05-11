<?php
$sql = "SELECT content FROM pages WHERE id='{$_GET['id']}'";
$content= $db->sql($sql);


echo $content[0]['content'];
