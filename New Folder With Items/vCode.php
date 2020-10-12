<?php
header('Content-type:image/jpeg');
$weidth=120;
$height=50;
$str="";
for($i=0;$i<5;$i++){
	$str .=chr(rand(97,122)); 
}
setcookie('vcode', $str,time()+180,"/");

$img = @imagecreatetruecolor($weidth, $height);

$colorBg= imagecolorallocate($img, rand(200,255), rand(200,255),rand(200,255));
$colorBorder= imagecolorallocate($img, 0,0,0);  
$colorStr= imagecolorallocate($img, rand(10,140), rand(10,150),rand(20,160));
imagefill($img,0,0,$colorBg); 
imagerectangle($img,0,0,$weidth-1,$height-1,$colorBorder);

for($i=0;$i<100;$i++){  //Pixel point
	imagesetpixel($img,rand(0,$weidth-1), rand(0,$height-1),imagecolorallocate($img,rand(0,100),rand(0,100),rand(0,100)));
}

for($i=0;$i<3;$i++){  //Three line
	imageline($img,rand(0,$weidth/2), rand(0,$height), rand($weidth/2,$weidth),rand(0,$height),imagecolorallocate($img,rand(0,100),rand(0,100),rand(0,100)));
}

imagettftext($img, 14, rand(-5,5), rand(5,15), rand(30,35),$colorStr,'./font/Monaco.ttf', $str);

//outputimg
imagejpeg($img);
imagedestroy($img);

?>