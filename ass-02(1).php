<?php
/*ID: 602110194
Name: Yu tianhe
Wechat: yth137175083*/
$XX=substr($_SERVER['argv'][1],0,2);
$ss=substr($_SERVER['argv'][1],2);
$m=0;
for($i=0;;$i++){
    if(substr($ss,$i,1)==0){
        $m++;
    }else{
        break;
    }$sss=substr($ss,$m);
}$f=fopen($_SERVER['argv'][2],'r');
fscanf($f,"%d",$n);
$products=[];
for($i=0;$i<$n;$i++){
    $product=[];
    $product['product']=fgets($f,4096);
    $product['ss']=$sss+$i;
    $product['0']=str_repeat("0",$m);
    $product['XX']=$XX;
    $products[]=$product;
}fclose($f);
$printproduct=function($product){
    printf("%s%s%d %s",$product['XX'],$product['0'],$product['ss'],$product['product']);
};
array_walk($products,$printproduct);
?>