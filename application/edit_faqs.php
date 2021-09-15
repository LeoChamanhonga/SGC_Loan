<?php include "../config/session.php"; ?>  

<?php
if(isset($_POST['submit']))
{
$topic = mysqli_real_escape_string($link, $_POST['topic']);
$content = mysqli_real_escape_string($link, $_POST['content']);

$sql = mysqli_query($link, "UPDATE faqs SET topic = '$topic', content = '$content'") or die(mysqli_error($link));
if(!$sql){
echo '<script>alert("Unable to Update Settings!...please try again later"); </script>';
echo '<script>window.location="faq.php?id='.$_SESSION['tid'].'"; </script>';
}
else{
echo '<script>alert("Faqs Settings Update successfully!"); </script>';
echo '<script>window.location="faq.php?id='.$_SESSION['tid'].'"; </script>';
}
}
?>