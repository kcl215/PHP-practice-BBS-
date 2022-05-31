<?php
// <!-- /* htmlspecialcharsを短くする（ファンクション化） */ -->
function h($value) {
    return htmlspecialchars($value, ENT_QUOTES);
}
function dbconnect() {
    $db = new mysqli('localhost:8889', 'root', 'root', 'bbs');
    if(!$db) {
		die($db -> error);
	}
    return $db;
}
