<?php
//$recebe_ip1    = "172.29.201.12233"; 
$recebe_ip1    = "10.99.20.12";
$recebe_porta1 = "80";

$recebe_ip2    = "10.99.20.13";
$recebe_porta2 = "80";


/*$comando = shell_exec("ping -n 5 $recebe_ip1");
echo $comando."<br>";*/
$min = date("i");
while($min == date("i")){
TesteServ($recebe_ip1,$recebe_porta1);
TesteServ($recebe_ip2,$recebe_porta2);
}

//FUNÇÃO QUE TESTA A PORTA E IP.
function TesteServ($ip,$porta){
    $r = 'OK';  
    $connection = @fsockopen($ip, $porta, $errno, $errstr,3); 
        if (is_resource($connection)){          
           //$url = "http://10.99.20.15:9000/?DEVICE_TYPE=SERVIDOR&IP=10.99.20.19&PORT=80&ACTION=ALARM&DATA=/$ip/$porta/";
           //echo $url."<br>";
           //$comando = shell_exec("ping -n 5 $ip"); //Executa o comando Shell ping Windows
           //echo $comando."\n";
           echo "Ok";
           echo "\n";
           fclose($connection);
        }
        else{
            $url = "http://10.99.20.15:9000/?DEVICE_TYPE=SERVIDOR&IP=10.99.20.19&PORT=80&ACTION=ALARM&DATA=/$ip/$porta/";
            //file_get_contents($url); 
            echo $url."\n";
            //$comando = shell_exec("ping -n 5 $ip");
            //echo $comando."\n";
            echo "Fora";     
        }
        sleep(2);   
}
?>