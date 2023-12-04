<?php
include_once 'pdo.php';
function statistic_status_order()
{
    $sql = "SELECT status, count(id) as SoLuong FROM category GROUP BY status";
    return pdo_query($sql);
}
