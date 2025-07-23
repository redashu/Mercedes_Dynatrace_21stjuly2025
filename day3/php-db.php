<?php
$mysqli = new mysqli("localhost", "root", "Redhat@123", "mysql");
$stmt = $mysqli->prepare("SELECT NOW(), COUNT(*) FROM user");
$stmt->execute();
$stmt->bind_result($now, $cnt);
$stmt->fetch();
sleep(1); // simulate latency
echo "Now: $now – Cnt: $cnt";