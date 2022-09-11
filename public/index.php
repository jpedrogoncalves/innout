<?php
    require_once(dirname(__FILE__, 2) . '/src/config/database.php');

    // Database::getConnection();
    $sql = 'select * from users';
    Database::getResultFromQuery();
?>