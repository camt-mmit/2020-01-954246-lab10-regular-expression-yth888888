<?php
/*ID: 602110194
Name: Yu tianhe
Wechat: yth137175083*/
$f=fopen($_SERVER['argv'][1],'r');
fscanf($f,"%s%s",$Firstname,$Lastname);
fscanf($f,"%d",$n);
$transactions=[];
for($i=0;$i<$n;$i++){
	$transaction=[];
	fscanf($f,"%s%f",$transaction['tr'],$transaction['num']);
	$transactions[]=$transaction;
}fclose($f);
$AB=0;
foreach($transactions as$item){
	if(strcasecmp($item['tr'],"DEPOSIT")==0){
	$AB+=$item['num'];
	}if(strcasecmp($item['tr'],"WITHDRAW")==0){
	$AB-=$item['num'];
	}if(strcasecmp($item['tr'],"TRANSFER")==0){
	$AB+=$item['num'];
	}
}$printtransaction=function($transaction){
    printf("%15s:%22.2f\n",$transaction['tr'],$transaction['num']);
};
printf("Transaction for:\n    First name: %s\n     Last name: %s\nNumber of transactions: %d\n",$Firstname,$Lastname,$n);
array_walk($transactions,$printtransaction);
printf("\nAccount Balance:%22.2f",$AB);
?>