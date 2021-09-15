<?php
$sql = mysqli_query($link, "SELECT * FROM sms WHERE status = 'Activated'") or die (mysqli_error($link));
$find = mysqli_fetch_array($sql);
$ozeki_user = $find['username'];
$ozeki_password = $find['password'];
$ozeki_url = $find['api'];
$status = $find['status'];

########################################################
# Functions used to send the SMS message
########################################################

function ozekiSend($sender, $phone, $msg, $debug=false){
      global $ozeki_user,$ozeki_password,$ozeki_url;

      $url = 'username='.$ozeki_user;
      $url.= '&password='.$ozeki_password;
      $url.= '&sender='.urlencode($sender);
      $url.= '&recipient='.urlencode($phone);
      $url.= '&message='.urlencode($msg);

      $urltouse =  $ozeki_url.$url;
      //if ($debug) { echo "Request: <br>$urltouse<br><br>"; }

      //Open the URL to send the message
      $response = file_get_contents($urltouse);
      if ($debug) {
           //echo "Response: <br><pre>".
           //str_replace(array("<",">"),array("&lt;","&gt;"),$response).
           //"</pre><br>"; 
           }

      return($response);
}

function ccMasking($number, $maskingCharacter = '*') {
    return substr($number, 0, 3) . str_repeat($maskingCharacter, strlen($number) - 6) . substr($number, -3);
}
//$var = '1234123412341234';
//$var = substr_replace($var, str_repeat("X", 8), 4, 8);
//echo $var;

$search_cust = mysqli_query($link, "SELECT * FROM transaction WHERE txid = '$txid'") or die("Error:" . mysqli_error($link));
$get_cust = mysqli_fetch_array($search_cust);
$amount = number_format($get_cust['amount'],2,'.',',');
$accno = ccMasking($get_cust['acctno']);
$phone = $get_cust['phone'];
$time = $get_cust['date_time'];
$sender = "NIS Bank";

$search_bal = mysqli_query($link, "SELECT * FROM borrowers WHERE account = '$account'") or die("Error:" . mysqli_error($link));
$get_bal = mysqli_fetch_array($search_bal);
$bal = $get_bal['balance'];

$search_sys = mysqli_query($link, "SELECT * FROM systemset") or die("Error:" . mysqli_error($link));
$get_sys = mysqli_fetch_array($search_sys);
$currency = $get_sys['currency'];
$address = $get_sys['address'];

$message = "NIR Bank>>>Credit Alert\\n";
$message .= "Amt: '".$currency."'.'".$amount."'\\n";
$message .= "Acc: '".$accno."'\\n";
$message .= "Desc: '".$address."'.'|'.'".$txid."'\\n";
$message .= "Time: '".$time."'\\n";
$message .= "Bal: '".$currency."'.'".$bal."'\\n";
$message .= "#CriTech";
$debug = true;
ozekiSend($sender,$phone,$message,$debug);
?>