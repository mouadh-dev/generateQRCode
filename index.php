<?php



require 'vendor\autoload.php';

use chillerlan\QRCode\QRcode ;
use chillerlan\QRCode\QROptions ;
for ($n = 1; $n < count($argv) ;$n ++){
	print_r($argv[$n]."\n");
	qr($argv[$n]);
};




function qr(String $text ){


	$options = new QROptions([
		'version'    => 5,
		'outputType' => 'png',
		'eccLevel'   => QRCode::ECC_L,
	]);
	// invoke a fresh QRCode instance
	$qrcode = new QRCode($options);
	

	// ...with additional cache file
	$qrcode->render($text, 'qrcodes/'  . $text . '.png');
	
}