<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="love"  href="img/love.png">
    <title>PT. BLACK SKY</title>
    <style type="text/css">
        
        a{
            text-decoration: none;
            font-size: 25px;
            color:green;
        }

        body{
            background-image: url(img/bg.jpg);
        }
        a:hover{
            color: white;
        }
        table{
            color: white;
            background-color: rgb(112,130,56);
            text-align: center;
        }

        table:hover{
            color: white;
        }
h1{
    text-align: center;
    font-style: italic;
    font-family: serif;
}
.nav{
    background-color:black;
}

img{
    border-radius: 100px;
}

.brand{
    border-radius: 100px;
    width: 200px;
    height: 200px;
}


    </style>
  </head>
  <body>
    <h1>Welcome To Our Website <br>
      <marquee> <b style="color:blue"> PT. BLACK SKY</b></marquee>
    </h1>
    <hr>
    <div class="nav">
    <a href="index.php">HOME</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page1')); ?>">ABOUT</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page2')); ?>">CONTACK</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page3')); ?>">HISTORY</a> |
    <a href="index.php?page=<?= base64_encode(base64_encode('page4')); ?>">LOCATION</a> |
    <hr>
    </div>
    <?php 
    
    if (isset($_GET['page'])) :  
        $page= base64_decode(base64_decode(filter_var($_GET['page'],FILTER_SANITIZE_URL)));
        $a= include "halaman/".$page.".php";
        if ($a==false):
          header('location:index.php');
        endif;
        ?>
 <?php else: ?>
      <center><img src="img/brand.png" class="brand"><br> <table border="1px" width="70%" cellpadding="5" cellspacing="0">
    <tr>
        <td>NAMA       : EVITA RAHMA DONA</td>
    </tr>
    <tr><td>JABATAN    : CHIEF EXECUTIVE OFFICER</td></tr>
        <tr><td>ALAMAT : SUMATERA SELATAN</td></tr>
        <tr><td>E-MAIL : evitarahmadona48@gmail.com</td></tr>
        <tr><td>NO HP  : 085783497210</td></tr>
    <tr>
        <td style="background-color:silver; color: black" > CHIEF EXECUTIVE OFFICER PT. BLACK SKY <br><img src="img/vr.jpg" width="400px" height="400px"></td></tr>

        
</table>

</center>

<?php endif; ?>
    
  </body>
</html>

<!--php://filter/convert.base64-encode/resource= ->
