<?php
$globleConnectDB = array();
$globleConnectCartCheckout = array();
$globleConnectReport = array(); 
try {
        $username = "efranorg_website";
    $password = "HOLq5LnGVTuM";
    $conn = new PDO('mysql:host=localhost;dbname=efranorg_website', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    $stmt = $conn->prepare('SELECT * FROM configuration_site');
    $stmt->execute();
    while($row = $stmt->fetch()) {
        $globleConnectDB = $row;
    }
    
    $stmt = $conn->prepare('SELECT * FROM configuration_report');
    $stmt->execute();
    while($row = $stmt->fetch()) {
        $globleConnectReport = $row;
    }
    
    $stmt = $conn->prepare('SELECT * FROM configuration_cartcheckout');
    $stmt->execute();
    while($row = $stmt->fetch()) {
        $globleConnectCartCheckout = $row;
    }
    
    
} catch(PDOException $e) {
 
}
