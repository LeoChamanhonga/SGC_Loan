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
$search_cust = mysqli_query($link, "SELECT * FROM transaction") or die("Error:" . mysqli_error($link));
while($get_cust = mysqli_fetch_array($search_cust))
{
$accno = ccMasking($get_cust['acctno']);
$phone = $get_cust['phone'];
$sender = "NIS Bank";

$search_sys = mysqli_query($link, "SELECT * FROM systemset") or die("Error:" . mysqli_error($link));
$get_sys = mysqli_fetch_array($search_sys);
$currency = $get_sys['currency'];
$address = $get_sys['address'];
$amount = number_format($get_sys['sms_charges'],2,'.',',');

$i = 0;
$search_bow = mysqli_query($link, "SELECT * FROM borrowers WHERE balance > 0") or die("Error:" . mysqli_error($link));
while($get_bow = mysqli_fetch_array($search_bal))
{
$account = $get_bow['account'];
foreach($account as $s)
{
$bal = $get_bow['balance'];
$balance = $bal - $amount;
mysqli_query($link, "UPDATE borrowers SET balance = '$balance' WHERE account = '$s'") or die("Error:" . mysqli_error($link));
$i++;

$message = "NIR Bank>>>SMS Alert\\n";
$message .= "Amt: '".$currency."'.'".$amount."'\\n";
$message .= "Acc: '".$accno."'\\n";
$message .= "Desc: 'SMS MONTHLY ALERT FEE'\\n";
$message .= "Time: '".date('D, M jS Y', strtotime('d',time()))."'\\n";
$message .= "Bal: '".$currency."'.'".$balance."'\\n";
$message .= "#CriTech";
$debug = true;
ozekiSend($sender,$phone,$message,$debug);
}
}
$i++;
}
?>