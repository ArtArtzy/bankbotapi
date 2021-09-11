<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$TxDateTime = $_POST['TxDateTime'];
$TxBankId = $_POST['TxBankId'];
$TxAccountNo = $_POST['TxAccountNo'];
$TxType = $_POST['TxType'];
$TxToBankId = $_POST['TxToBankId'];
$TxToAccountNo = $_POST['TxToAccountNo'];
$TxAmount = $_POST['TxAmount'];
$TxEndingBalance = $_POST['TxEndingBalance'];
$BankRef = $_POST['BankRef'];

$db->insert("transection",[
 "TxDateTime"=>$TxDateTime,
 "TxBankId"=>$TxBankId,
 "TxAccountNo"=>$TxAccountNo,
 "TxType"=>$TxType,
 "TxToBankId"=>$TxToBankId,
 "TxToAccountNo"=>$TxToAccountNo,
 "TxAmount"=>$TxAmount,
 "TxEndingBalance"=>$TxEndingBalance,
 "BankRef"=>$BankRef,
]);
echo "finish";
?>