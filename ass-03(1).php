<?php
/*ID: 602110194
Name: Yu tianhe
Wechat: yth137175083*/
$c=fopen($_SERVER['argv'][2],'r');
$n=0;
for($j=0;;$j++){
    $cg[$j]=trim(fgets($c,4096));
    $low[$j]=strtolower($cg[$j]);
    $uc[$j]=ucwords($low[$j]);
    if(feof($c)){
        break;
    }
}fclose($c);
$f=fopen($_SERVER['argv'][1],'r');
for($i=0;;$i++){
    $fg[$i]=trim(fgets($f,4096));
    if(feof($f)){
        break;
    }
}fclose($f);
$fg1=implode(" ",$fg);
$rf=str_ireplace($cg,$uc,$fg1);
echo$rf;
?>