<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| BITCOIN CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access bitcoind.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['ssl'] 		Indicates whether bitcoind has an SSL certificate configured.
|	['user']		The username for the RPC interface.
|	['password']	The password for the RPC interface.
|	['ip']			The IP of the RPC interface.
| 	['port']		The Port for the RPC interface.
|	['url']			DO NOT CHANGE. Generates the URL to use with the Jsonrpcclient. 
*/

$config['ssl']		= %BTC_SSL%;
$config['testnet']		= %BTC_TESTNET%;
$config['user']		= "%BTC_USERNAME%";
$config['password'] = "%BTC_PASSWORD%";
$config['host']		= '%BTC_IP%';
$config['port']		= '%BTC_PORT%';
$config['url']		= (($config['ssl'] == TRUE) ? 'https://' : 'http://').$config['ssl'].$config['user'].':'.$config['password'].'@'.$config['host'].':'.$config['port'].'/';

if($config['testnet']){
    $config['magic_byte']		= '6f';
    $config['magic_p2sh_byte']		= 'c4';
}else{
    $config['magic_byte']		= '00';
    $config['magic_p2sh_byte']		= '05';
}
/* End of file bitcoin.php */
/* Location: ./application/config/bitcoin.php */
