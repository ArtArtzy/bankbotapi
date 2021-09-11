<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$TxBankId = $_POST['TxBankId'];
$TxAccountNo = $_POST['TxAccountNo'];
// $TxAccountNo = "XXXX619337";
// $TxBankId = "SCB";
$sql = "select * from transection where TxBankId ='" . $TxBankId . "' and TxAccountNo ='" . $TxAccountNo . "' order by TxId DESC limit 1";
$result = $db->query($sql)->fetchAll();
echo json_encode($result);
?>