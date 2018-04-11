<?php
$filescreatedMaxLimit = '30,000';
$maxNPROC = '100';
$maxRAM = '16018MB';

$totalF = exec('find /kvm/userfs/home/raw/ -type f | wc -l');
$livePROC = exec('ps aux | grep raw |  wc -l');
$liveRAM = exec("ps -U raw --no-headers -o rss | awk '{ sum+=$1} END {print int(sum/1024) "MB"}'");
echo "RAW TOTAL FILES MAX/LIVE : $filescreatedMaxLimit/$totalF";
echo "RAW MAX LIVE PROCC : $maxNPROC/$livePROC";
echo "RAW MAX LIVE RAM : $maxRAM/$liveRAM";
?>
