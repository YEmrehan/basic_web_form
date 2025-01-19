<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $isim =($_POST["isim"]);
    $soyisim =($_POST["soyisim"]);
    $telefon =($_POST["telefon"]);
    $mail =($_POST["mail"]);
    $şifre =($_POST["şifre"]);
    $cinsiyet =($_POST["cinsiyet"]);

    $dosya = fopen("kayit.txt", "a");
 
    if ($dosya) 
    {
        fwrite($dosya, "$isim\n$soyisim\n$telefon\n$mail\n$şifre\n$cinsiyet\n");
        fclose($dosya);
        echo "İşlem başarılı";
    }

    else 
    {
        echo "Dosya açma hatası";
    }
}

else 
{
    echo "Form gönderilmedi!";
}

?>
