<?php
$user = 'raw';
$uidd = '1002';

$filescreatedMaxLimit = '30,000';
$maxNPROC = '100';
$maxRAM = '16018MB';

$liveF = exec("find /kvm/userfs/home/$user/ -type f | wc -l");
$livePROC = exec("ps aux | grep $user |  wc -l");
$liveRAM = exec("ps -U $user --no-headers -o rss | awk '{ sum+=$1} END {print int(sum/1024) \"MB\"}'");
echo "RAW TOTAL FILES MAX/LIVE : $filescreatedMaxLimit/$liveF";
echo "RAW MAX LIVE PROCC : $maxNPROC/$livePROC";
echo "RAW MAX LIVE RAM : $maxRAM/$liveRAM";
?>
