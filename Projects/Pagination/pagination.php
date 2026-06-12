<?php

$perpage_result=5;
$stmt = $connection->query("SELECT count(*) AS total FROM developers");$total_result= $stmt->fetch(PDO::FETCH_ASSOC)["total"];
$totalpages = ceil($total_result / $perpage_result);

$page = isset($_GET["page"])? (int) $_GET["page"] : 1;
$page =  max(1,min($page , $totalpages));
$begin_from = ($page-1) * $perpage_result;

$stmt =  $connection->query("SELECT * FROM developers LIMIT $begin_from, $perpage_result");
$developers = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>