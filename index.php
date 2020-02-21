
<!DOCTYPE html>
    <!DOCTYPE html>
<html>
<head>
	<meta Charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" href="mystyle.css">

    <style>
        @page { margin: 0px; }
        body { margin: 0px; }
        @font-face {
            font-family: 'Filson';
            font-style: normal;
            font-weight: normal;
            src: url(http://localhost/kartu-siswa/font/Filson-Soft.ttf) format('truetype');
        }

        body {
            background-color: gray;
        }
        .bg {
            position: fixed;
            left: 0px;
            top: 0px;
            z-index: -1;
          }
          
          .qr {
            width: 150px;
            margin-top: -30px;
            margin-left: 45px;
            z-index: 1;
          }
          table {
            font-size: 22px;
            margin-top: 240px;
            margin-left: 145px;
            z-index: 2;
            width: 550px;
          }
          td {
            line-height: 22px;
            font-family: Filson;
            padding-right: 40px;            
          }

    </style>
</head>
<body>
    <?php
        include ("qr.php");
        
        $nama = "Adi Saputra";
        $nis = "1031.01.20";
        // QR_BarCode object 
        $qr = new QR_BarCode(); 
        $qr->text ($nama);
        $qr->qrCode(350,'images/'.$nama.'.png');
        

    ?>
    <table>
        <tr><td>Bla Bla Bla Bla</td></tr>
        <tr><td><?php echo $nis; ?></td></tr>
        <tr><td><?php echo $nama; ?></td></tr>
        <tr><td>27 Desember 2003</td></tr>
        <tr><td>Jl, Cibubur 4 Rt 004 Rw 002 No.122 bla bla  bla bla  bla bla  bla bla bla bla bla bla bla bla</td></tr>
    </table>
    
    <img class="bg" src="bg.png ">
    <img class="qr" src="images/<?php echo $nama;?>.png"/>
    
    
	

</body>
</html>

<?php
//<img class="qr" src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=2021.1.103 Muhammad Farras Maruf&choe=UTF-8" />
//    <img class="bg" src="bg.jpg">    
    
    //$html = ob_get_clean ();
    //    
    //// include autoloader 
    //require_once 'dompdf/autoload.inc.php';
    //
    //
    //// reference the Dompdf namespace 
    //use Dompdf\Dompdf;
    //
    //
    //// instantiate and use the dompdf class 
    //$dompdf = new Dompdf();
    //
    //// (Opsional) Mengatur ukuran kertas dan orientasi kertas
    //$setpaper = array(0,0,153.45,243);
    //$dompdf->setPaper($setpaper,"landscape");
    //
    //
    //$dompdf->loadHtml($html);
    //
    //$dompdf->set_option( 'dpi' , '300' );
    //// Render the HTML as PDF 
    //$dompdf->render();
    //
    //
    //// Output the generated PDF to Browser 
    //$dompdf->stream();
    //
    ////send to filemanager
    //$output = $dompdf->output();

?>
