<?php
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Laporan Distribusi</title>

</head>

<body bgcolor="white" style="margin-left: 200px;margin-right: 100px;margin-bottom: 100px">
<center>
    <img src="<?= base_url() ?>assets/templates1/img/ol.png" alt="icon" class="icon" height=60px" width="550px">

</center><br>
<p align="center"> Badan Penelitian dan Pengembangan Provinsi Riau </p></font>
<font face="Arial" color="black"> <p align="center">  </p></font>
<font face="Arial" color="black" size="3"> <p align="center"> JL.Diponegoro No.24A, Simpang Empat, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28156 </p></font>
<hr>

<font face="Arial" color="black" size="6"> <p align="center"> <u> <b> Surat Keterangan </b></u></font><br>
<font face="Arial" color="black" size="4"> Tanggal:  <?php $date = Date("Y-m-d H:i:s");Echo  $date; ?>  </p></font>
<p  style="font-size: 18px ">
    &nbsp;    &nbsp;    &nbsp;    &nbsp; Dengan ini kami sampaikan bahwasanya anda telah <b>LULUS</b> dalam pengajuan proposal, diharapkan saudara/i datang ke kantor untuk melakukan seminar proposal penelitian yang akan dilaksanakan pada:
  <br>  tanggal &nbsp; &nbsp;  &nbsp;:  &nbsp; <?= $tampil['tanggal'] ?>
   <br> waktu &nbsp; &nbsp;  &nbsp;  &nbsp;: &nbsp;  <?= $tampil['jam']?>
   <br> ruangan &nbsp;  &nbsp; :  &nbsp; <?= $tampil['ruangan']?>
   <br> diharapkan membawa perlengkapan seminar dan datang sebelum waktu yang telah ditentukan
</p>
<p  style="font-size: 18px"><font face="Arial">    &nbsp;    &nbsp;    &nbsp;    &nbsp;Sekian kami sampaikan surat ini mohon dimaklumi</font></p>

<pre>
<h1 align="center"></h1>
</pre>
<p  style="font-size: 18px "><font face="Arial">
        &nbsp;    &nbsp;    &nbsp;    &nbsp;       </font></p>
<p  align="right"><font face="Arial">Hormat Kami</font></p><br><br><br><br>
<p  align="right"><font face="Arial"> BALITBANG </font></p>
</body>

<script>
        window.print();
</script>
</html>
