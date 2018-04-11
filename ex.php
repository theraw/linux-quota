<?php
$user = 'raw';
$uidd = '1002';
$vfs = '/kvm/userfs';

$filescreatedMaxLimit = '30,000';
$maxNPROC = '100';
$maxRAM = '16018MB';
$maxSPACE = '5G';

$liveF = exec("find $vfs/home/$user/ -type f | wc -l");
$livePROC = exec("ps aux | grep $user |  wc -l");
$liveRAM = exec("ps -U $user --no-headers -o rss | awk '{ sum+=$1} END {print int(sum/1024) \"MB\"}'");
$liveSPACE = exec("du -sh $vfs/home/$user | cut -f1");
echo "RAW TOTAL FILES MAX/LIVE : $filescreatedMaxLimit/$liveF";
echo "RAW MAX LIVE PROCC : $maxNPROC/$livePROC";
echo "RAW MAX LIVE RAM : $maxRAM/$liveRAM";
echo "RAW MAX LIVE SPACE : $maxSPACE/$liveSPACE";
?>
