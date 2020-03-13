<?php
    ob_start();
?>
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
            width: 200px;
            margin-left: 45px;
            margin-top: 240px;
            z-index: 4;
          }
          table {
            margin-top: -215px;
            font-size: 22px;
            margin-left: 145px;
            z-index: 2;
            width: 550px;
            z-index: 1;
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
        
        
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $nis = $_POST['nis'];
        $tl = $_POST['ttl'];
        $address = $_POST['alamat'];
        
        if (!file_exists ("images/$nama.png")){
            // Barcode Objet
            $qr = new QR_BarCode(); 
            $qr->text ($nis." ".$nama);
            $qr->qrCode(500,'images/'.$nis." ".$nama.'.png');
        }


        

    ?>
    <img class="bg" src="bg-2.png ">
    <img class="qr" src="images/<?php echo $nis." ".$nama;?>.png"/>
    <table>
        <tr><td><?php echo $nisn; ?></td></tr>
        <tr><td><?php echo $nis; ?></td></tr>
        <tr><td><?php echo $nama; ?></td></tr>
        <tr><td><?php echo $tl; ?></td></tr>
        <tr><td><?php echo $address; ?></td></tr>
    </table>
    
    
    
    
	

</body>
</html>

<?php
//<img class="qr" src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=2021.1.103 Muhammad Farras Maruf&choe=UTF-8" />
//    <img class="bg" src="bg.jpg">    
    
        $html = ob_get_clean ();
            
        // include autoloader 
        require_once 'dompdf/autoload.inc.php';
        
        
        // reference the Dompdf namespace 
        use Dompdf\Dompdf;
        
        
        // instantiate and use the dompdf class 
        $dompdf = new Dompdf();
        
        // (Opsional) Mengatur ukuran kertas dan orientasi kertas
        $setpaper = array(0,0,153.45,243);
        $dompdf->setPaper($setpaper,"landscape");
        
        
        $dompdf->loadHtml($html);
        
        $dompdf->set_option( 'dpi' , '300' );
        // Render the HTML as PDF 
        $dompdf->render();
        
        
        // Output the generated PDF to Browser 
        $dompdf->stream("$nama.pdf");
        
        //send to filemanager
        $output = $dompdf->output();

?>
