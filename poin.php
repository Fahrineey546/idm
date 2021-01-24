function dzain_vina($url, $head_cart, $post_cart){

    $dzain = curl_init($url);
    
    
          curl_setopt($dzain, CURLOPT_POST, true);
          curl_setopt($dzain, CURLOPT_HTTPHEADER, $head_cart);
          curl_setopt($dzain, CURLOPT_POSTFIELDS, $post_cart);
          curl_setopt($dzain, CURLOPT_SSL_VERIFYPEER, FALSE);
          curl_setopt($dzain, CURLOPT_SSL_VERIFYHOST, FALSE);;
          curl_setopt($dzain, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($dzain, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($dzain, CURLOPT_ENCODING, "");
          curl_setopt($dzain, CURLOPT_VERBOSE, true);
          curl_setopt($dzain, CURLINFO_HEADER_OUT, true);
          curl_setopt($dzain, CURLOPT_HEADER, true);
          $data     = curl_exec($dzain);
          $header_size = curl_getinfo($dzain, CURLINFO_HEADER_SIZE);
          $header = substr($data, 0, $header_size);
          $body_cart = substr($data, $header_size);
          $info_cart = curl_getinfo($dzain, CURLINFO_HTTP_CODE);
          return $body_cart;
    };

    function dapet($url, $headers){
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);
        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $header = substr($resp, 0, $header_size);
        $body_cart = substr($resp, $header_size);
        $info_cart = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        return $resp;
            };

            function otp_send($url,$headers){
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                $resp = curl_exec($curl);
                $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
                $header = substr($resp, 0, $header_size);
                $body_cart = substr($resp, $header_size);
                $info_cart = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                return $body_cart;
                };



                function input_otp(){
                    echo "Masukan Kode OTP: ";
                    $input_otp = fopen("php://stdin","r");
                    $otp = trim(fgets($input_otp));
                    $otp = "\"$otp\"";
                    return $otp;
                     }
//poin.php
$url_login = "https://edtsapp.indomaretpoinku.com/customer/api/login";
$url_otp = "https://edtsapp.indomaretpoinku.com/customer/api/login-verified";
$url_token = "https://edtsapp.indomaretpoinku.com/coupon/api/mobile/gift/redeem";
$url_redem = "https://edtsapp.indomaretpoinku.com/coupon/api/mobile/coupons?unpaged=true";



$header = [
    'Content-Type: application/json',
    'user-agent: okhttp/4.9.0',
];

echo ("\e[1;33m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
echo ("\e[91m >               SHARING CUAN             < \n");




echo ("\e[91m >            GRUP FREE METODE            <\n");
echo ("\e[1;33m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
echo ("\e[91m >     Time  : ".date('[d-m-Y] [H:i:s]')."    < \n");echo ("\e[1;33m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
echo ( "\e[91m Nomor : " );
$input_hp = fopen("php://stdin","r");
$phone = trim(fgets($input_hp));
$phone = "\"$phone\"";
 ("\e[1;33m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");

$idhp = base_convert(microtime(false), 16, 36);
$idhp = "\"$idhp\"";
 ("\e[1;33m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
$data_login = '{"deviceId":'.$idhp.',"phoneNumber":'.$phone.'}';


$hasil_login = dzain_vina($url_login, $header, $data_login);
$pesan_login = json_decode($hasil_login, true);
$pesan_login = $pesan_login['message'];
echo ("\e[1;33m message : $pesan_login" ).PHP_EOL;
 ("\e[1;33m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
$x = 0;
do {
$otp = input_otp();
$data_otp = '{"deviceId":'.$idhp.',"otp":'.$otp.',"phoneNumber":'.$phone.'}';
$hasil_otp = dzain_vina($url_otp, $header, $data_otp);
$minta_token = json_decode($hasil_otp, true);
$status = $minta_token['status'];
if ($status == '01'){
    $x = 4;
}else {
  $x++;
}
}while ($x < 3);
/// cek otp 
    if($status == '03'){
                echo "Mengirim Ulang OTP".PHP_EOL;
                $url_resend = "https://edtsapp.indomaretpoinku.com/customer/api/resend-otp?phoneNumber=$phone";
                $resend = otp_send($url_resend,$header);
                $resend = json_decode($resend, true);
                $status_resend = $resend['status'];
                if ($status_resend == '03'){
                $pesan_ot = $resend['message'];
                echo $pesan_ot;
                die;
                }

                $otp = input_otp();
                $data_otp = '{"deviceId":'.$idhp.',"otp":'.$otp.',"phoneNumber":'.$phone.'}';
                $hasil_otp = dzain_vina($url_otp, $header, $data_otp);
                $minta_token = json_decode($hasil_otp, true);
                $status = $minta_token['status'];}
                if($status == '03'){die;}
        elseif($status == '01'){
            echo "BERHASIL BRO😎".PHP_EOL;
        }

$token = $minta_token['data']['access_token'];
$cek_user = $minta_token['data']['isNewRegister'];
if (empty($cek_user)){ 
    echo "AKUN ANDA SUDAH TERDAFTAR".PHP_EOL;
}else {
    $header_token = [
        'user-agent: okhttp/4.9.0',
        'Authorization: Bearer '.$token,
        'Content-Type: application/json',
    ];

    $data_token = '{"couponPromoCode":"TR3M"}';
    $hasil_token = dzain_vina($url_token, $header_token, $data_token);
    $minta_data = json_decode($hasil_token, true);
    $minta_data = $minta_data['data']['content']['0']['couponName'];
    echo "$minta_data".PHP_EOL;
}




/* ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬  */


/*▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ */




$headers = [
    'Authorization: Bearer '.$token,
];

$voucher = dapet($url_redem, $headers);
$hasil_voucher = json_decode($voucher, true);

/* semoga cuan */
//
$data = $hasil_voucher['data']['content'];
if ($data == null){
    echo "wait !!!: 1".PHP_EOL;
sleep(3);
$voucher = dapet($url_redem, $headers);
$hasil_voucher = json_decode($voucher, true);
}

$data = $hasil_voucher['data']['content'];
if ($data == null){
    echo "wait!!: 2".PHP_EOL;
    sleep(10);
    $voucher = dapet($url_redem, $headers);
    $hasil_voucher = json_decode($voucher, true);
}

$data = $hasil_voucher['data']['content'];
if ($data == null){
echo 'Voucher DELAY tunggu 1 menit lalu login kembali';
die;
}


$kupon_0 = $hasil_voucher['data']['content']['0'];
$kupon_0 = [
    
    $kupon_0['couponCode'], 
    $kupon_0['couponName'],
    $kupon_0['expiredDate'],
];
$kupon_0 = implode(" | ", $kupon_0);
//


//
$kupon_1 = $hasil_voucher['data']['content']['1'];
$kupon_1 = [
    
    $kupon_1['couponCode'], 
    $kupon_1['couponName'],
    $kupon_1['expiredDate'],
];
$kupon_1 = implode(" | ", $kupon_1);
//




//
$kupon_2 = $hasil_voucher['data']['content']['2'];
$kupon_2 = [
    
    $kupon_2['couponCode'], 
    $kupon_2['couponName'],
    $kupon_2['expiredDate'],
];
$kupon_2 = implode(" | ", $kupon_2);
//



//
$kupon_3 = $hasil_voucher['data']['content']['3'];
$kupon_3 = [
    
    $kupon_3['couponCode'], 
    $kupon_3['couponName'],
    $kupon_3['expiredDate'],
];
$kupon_3 = implode(" | ", $kupon_3);
//


//
$kupon_4 = $hasil_voucher['data']['content']['4'];
$kupon_4 = [
    
    $kupon_4['couponCode'], 
    $kupon_4['couponName'],
    $kupon_4['expiredDate'],
];
$kupon_4 = implode(" | ", $kupon_4);
//





//
$kupon_6 = $hasil_voucher['data']['content']['6'];
$kupon_6 = [
    
    $kupon_6['couponCode'], 
    $kupon_6['couponName'],
    $kupon_6['expiredDate'],
];
$kupon_6 = implode(" | ", $kupon_6);
//


$kupon_5 = $hasil_voucher['data']['content']['5'];
$kupon_5 = [
    
    $kupon_5['couponCode'], 
    $kupon_5['couponName'],
    $kupon_5['expiredDate'],
];
$kupon_5 = implode(" | ", $kupon_5);
//
$file = fopen("indo.txt","a");  
fwrite($file,"▬▬▬▬▬▬▬▬▬▬_hasil_vocher_▬▬▬▬▬▬▬▬▬".PHP_EOL);
fwrite($file,"$kupon_0".PHP_EOL);
fwrite($file,"$kupon_1".PHP_EOL);
fwrite($file,"$kupon_2".PHP_EOL);
fwrite($file,"$kupon_3".PHP_EOL);
fwrite($file,"$kupon_4".PHP_EOL);
fwrite($file,"$kupon_5".PHP_EOL);
fwrite($file,"$kupon_6".PHP_EOL);
fwrite($file,"▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬".PHP_EOL);
fwrite($file,"Nomor yang terdaftar: $phone".PHP_EOL);
fwrite($file,"▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ ".PHP_EOL);
fwrite($file,"            script tools by : alovena    ".PHP_EOL);  
fclose($file);  
echo 'KUPON BERHASIL DI AMBIL!!!'.PHP_EOL;
sleep (1);
echo ("\e[1;33m▬▬▬▬▬▬▬▬▬▬▬▬( HASIL_CLAIM_KODE) ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
echo "\e[91mKUPON 1:".$kupon_0."\n";
echo "\e[91mKUPON 2:".$kupon_1."\n";
echo "\e[91mKUPON 3:".$kupon_2."\n";
echo "\e[91mKUPON 4:".$kupon_3."\n";
echo "\e[91mKUPON 5:".$kupon_4."\n";
echo "\e[91mKUPON 6:".$kupon_5."\n";
echo "\e[91mKUPON 7:".$kupon_6."\n";
echo ("\e[1;33m▬▬▬▬▬▬▬▬▬▬▬▬( SEMOGA CUAN) ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
echo ("\e[93m     tools script : by alovena           \n");
// echo 'Ingin jalankan lagi (y/n): ';
// $input = fopen("php://stdin","r");
// $eksekusi = trim(fgets($input));
// if ($eksekusi == 'y'){

//     system('./script.bat');
// }else {die;}
