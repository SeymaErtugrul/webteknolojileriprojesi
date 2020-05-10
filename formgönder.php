
<?php       

$myemail="b191210052@sakarya.edu.tr";
$mysifre="12345678";
$email = $_POST['email'];
$isim = $_POST['isim'];
  $namen=explode("@",$email);
 if($email==$myemail && $mysifre==$sifre)
   {
   echo $namen[0]."  Hoşgeldin" ;
  }else {
    echo "Kullanıcı epostası yada şifre hatalı";
    header("Location:contact.html");
    }?>