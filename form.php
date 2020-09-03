<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{
$eid=$_SESSION['emplogin'];

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Admin | Update Employee</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet"> 
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

textarea {
    border:none;
    border-bottom: 1px solid #BCBCBC;
    box-shadow:  #BCBCBC;
    outline: none !important;
}

</style>


    </head>
    <body>
  <?php include('includes/header.php');?>
            
       <?php include('includes/sidebar.php');?>
   <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">Formulir WP Aproval</div>
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <form id="example-form" method="POST" action="saveform.php" enctype="multipart/form-data">
                                <div class="container">
                                    <h3>Approval online PT. PLN (Persero)</h3>
                                    <div id="myDIV">
                                    <p>Mengisi formulir secara online, silahkan masukkan email anda dibawah ini. Email tersebut akan menjadi alat komunikasi bagi kami untuk memberikan anda kabar mengenai persetujuan atau penolakan atas pengisian form izin kerja anda.</p>

                                    <br>
                                    <div class="input-field">
                                        <label for="email">Email</label>
                                        <input required id="email" type="text" name="email" class="validate" autocomplete="off" >
                                    </div>
                                    <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform()">next</button>
                                    </div>

                                    <div id="myDIV2" style="display: none;" >
                                    <h5>1. Working Permit</h5>
                                    <br>
                                    <p>Harap siapkan 4 dokumen : Prosedur bekerja, Job safety analysis, Sertifikat Kompetensi Bekerja, dan Identifikasi Bahaya, Penilaian dan Pengendalian Resiko untuk di-upload ke bagian akhir di form berikut ini (klik Berikutnya)</p>
                                    <br>
                                    <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform()">back</button>
                                    <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform2()">next</button>
                                    </div>

                                    <div id="myDIV3" style="display: none;" >
                                        <h5>A. Informasi Pekerjaan</h5>
                                        <br>
                                        <div class="input-field">
                                            <label for="">Tanggal Entry </label>
                                            <input required id="mydiv11"  type="date" name="tanggal_pengajuan" class="validate datepicker" autocomplete="off">
                                        </div>
                                        <div class="input-field">
                                            <label for="">Jenis Pekerjaan </label>
                                            <input required id="mydiv12"  type="text" name="jenis_pekerjaan" class="validate" autocomplete="off"   >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Detail Pekerjaan </label>
                                            <input required id="mydiv13"  type="text" name="detail_pekerjaan" class="validate" autocomplete="off"   >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Lokasi Pekerjaan </label>
                                            <input required id="mydiv14"  type="text" name="lokasi_pekerjaan" class="validate" autocomplete="off"   >
                                        </div>
                                        <p for="">Pengawas K3</p>
                                        <div class="input-field col s6">
                                            <label for="">Nama</label>
                                            <input required id="mydiv17"  type="text" name="Pengawas_K3" class="validate" autocomplete="off">
                                        </div>
                                        <div class="input-field col s6">
                                            <label for="">No. Telp</label>
                                            <input required id="mydiv18"  type="text" name="telp2" class="validate" autocomplete="off"   >
                                        </div>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform2()">back</button>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform3()">next</button>
                                    </div>

                                    <div id="myDIV4" style="display: none;" >
                                        <h5>B. Durasi Pekerjaan</h5>
                                        <br>
                                        <div class="input-field col s5">
                                            <p for="">Mulai </p>
                                            <input required  id="mydiv21"  type="date" name="Tanggal_Mulai" class="validate datepicker" autocomplete="off"  >
                                        </div>
                                        <div class="input-field col s2 " >
                                        <p style="text-align: center">-</p>
                                        </div>
                                        <div class="input-field col s5">
                                            <p for="">Berakhir </p>
                                            <input required  id="mydiv22"  type="date" name="Tanggal_selesai" class="validate datepicker" autocomplete="off"  >
                                        </div>
                                        <div class="input-field col s5">
                                            <p for="">Jam Mulai </p>
                                            <input required  id="mydiv23"  type="time" name="Jam_Mulai" class="validate" autocomplete="off"  >
                                        </div>
                                        <div class="input-field col s2 " >
                                        <p style="text-align: center">-</p>
                                        </div>
                                        <div class="input-field col s5">
                                            <p for="">Jam selesai </p>
                                            <input required  id="mydiv24"  type="time" name="Jam_selesai" class="validate" autocomplete="off"  >
                                        </div>
                                        
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform3()">back</button>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform4()">next</button>
                                    </div>

                                    <div id="myDIV5" style="display: none;" >
                                        <h5>C. Klasifikasi Pekerjaan</h5>
                                        <br>
                                        <p>Pilih klasifikasi</p>
                                        <div class="input-field col s10">
                                            <input type="checkbox" id="mydiv31" name="ck1[]"  value="Pekerjaan Bertegangan Listrik">
                                            <label for="mydiv31"> Pekerjaan Bertegangan Listrik</label><br>
                                        </div>
                                        
                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv32" name="ck1[]"  value="Pekerjaan Confined Spac">
                                            <label for="mydiv32"> Pekerjaan Confined Space</label><br>
                                        </div>

                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv33" name="ck1[]"  value="Pekerjaan Panas">
                                            <label for="mydiv33"> Pekerjaan Panas</label><br>
                                        </div>

                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv34" name="ck1[]"  value="Pekerjaan di ketinggian">
                                            <label for="mydiv34"> Pekerjaan di ketinggian</label><br>
                                        </div>

                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv35" name="ck1[]"  value="Pekerjaan Penggalian">
                                            <label for="mydiv35"> Pekerjaan Penggalian</label><br>
                                        </div>

                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv36" name="ck1[]"  value="Pekerjaan Penanaman Tiang">
                                            <label for="mydiv36"> Pekerjaan Penanaman Tiang</label><br>
                                        </div>

                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv37" name="ck1[]"  value="Pekerjaan Perampalan Pohon (ROW)">
                                            <label for="mydiv37"> Pekerjaan Perampalan Pohon (ROW)</label><br>
                                        </div>

                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv38" name="ck1[]"  value="Pekerjaan Sipil">
                                            <label for="mydiv38"> Pekerjaan Sipil </label><br>
                                        </div>
                                        <div class="input-field col s2 ">
                                            <input type="checkbox" id="ckin" onclick="validatein()">
                                            <label for="ckin"> Lainnya : </label><br>
                                        </div>
                                        <div class="input-field col s10 " >
                                            <input type="text" disabled name="ck1[]" id="inck">
                                        </div>
                                        <br>
                                        <div class="input-field col s12"></div>
                                        <div class="input-field col s12"></div>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform4()">back</button>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform5()">next</button>
                                    </div>

                                    <div id="myDIV6" style="display: none;" >
                                        <h5>D. Prosedur Pekerjaan yang telah dijelaskan kepada pekerja</h5>
                                        <br>
                                        <p>Pilih Prosedur</p>
                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv41" name="ck2[]" value="Pemeliharaan Fuse Cut Out">
                                            <label for="mydiv41"> Pemeliharaan Fuse Cut Out</label><br>
                                        </div>
                                        
                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv42" name="ck2[]" value="Bongkar Pasang Trafo Portal">
                                            <label for="mydiv42"> Bongkar Pasang Trafo Portal</label><br>
                                        </div>

                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv43" name="ck2[]" value="Pemeliharaan SUTM (Perabasan)">
                                            <label for="mydiv43"> Pemeliharaan SUTM (Perabasan)</label><br>
                                        </div>

                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv44" name="ck2[]" value="Pemeliharaan SUTM (Perbaikan Kawat terburai/rantas)">
                                            <label for="mydiv44"> Pemeliharaan SUTM (Perbaikan Kawat terburai/rantas)</label><br>
                                        </div>

                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv45" name="ck2[]" value="Pemeliharaan Arrester pada gardu">
                                            <label for="mydiv45"> Pemeliharaan Arrester pada gardu</label><br>
                                        </div>

                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv46" name="ck2[]" value="Pemeliharaan Isolator">
                                            <label for="mydiv46"> Pemeliharaan Isolator</label><br>
                                        </div>

                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv47" name="ck2[]" value="Pemeliharaan LBS dan RECLOSER">
                                            <label for="mydiv47"> Pemeliharaan LBS dan RECLOSER</label><br>
                                        </div>

                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv48" name="ck2[]" value="Bongkar dan Pasang Tiang Beton">
                                            <label for="mydiv48"> Bongkar dan Pasang Tiang Beton </label><br>
                                        </div>

                                        <div class="input-field col s12">
                                            <input type="checkbox" id="mydiv49" name="ck2[]" value="Pemeliharaan Cubikie Gardu Bangunan">
                                            <label for="mydiv49"> Pemeliharaan Cubikie Gardu Bangunan </label><br>
                                        </div>
                                        <div class="input-field col s2 ">
                                            <input type="checkbox" id="ckin2" onclick="validatein2()">
                                            <label for="ckin2"> Lainnya : </label><br>
                                        </div>
                                        <div class="input-field col s10 " >
                                            <input type="text" disabled name="ck2[]" id="inck2">
                                        </div>
                                        <div class="input-field col s12"></div>
                                        <div class="input-field col s12"></div>
                                        <br>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform5()">back</button>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform6()">next</button>
                                    </div>

                                    <div id="myDIV7" style="display: none;" >
                                        <h5>E. Lampiran Izin Kerja</h5>

                                        <br>
                                       
                                      
                                        <div class="input-field ">
                                            <p for="mydiv51"> Identifikasi Bahaya, Penilaian dan Pengendalian Resiko </p><br>
                                            <input required  id="mydiv51" name="img_resiko" type="file"  >
                                        </div>
                                        
                                        <div class="input-field ">
                                            <p for="mydiv52"> Job Safety Analysis</p><br>
                                            <input required  id="mydiv52" name="img_analysis" type="file"   >
                                        </div>

                                        <div class="input-field ">
                                            <p for="mydiv53"> Prosedur Kerja</p><br>
                                            <input required  id="mydiv53" name="img_prosedur_kerja" type="file"   >
                                        </div>

                                        <div class="input-field ">
                                            <p for="mydiv54"> Sertifikat Kompetensi Pekerja</p><br>
                                            <input required  id="mydiv54" name="img_pekerja" type="file"   >
                                        </div>
                                        
                                        <br>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform6()">back</button>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform7()">next</button>
                                        
                                    </div>
                                    <div id="myDIV8"  style="display: none;">
                                        <h5>2. Job Safety Analysis</h5>
                                        <br>
                                        <p>Harap siapkan 4 dokumen : Prosedur bekerja, Job safety analysis, Sertifikat Kompetensi Bekerja, dan Identifikasi Bahaya, Penilaian dan Pengendalian Resiko untuk di-upload ke bagian akhir di form berikut ini (klik Berikutnya)</p>
                                        
                                        <br>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform7()">back</button>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform8()">next</button>
                                    </div>

                                    <div id="myDIV9" style="display: none;" >
                                        <h5>A. INFORMASI PEKERJAAN</h5>
                                        <br>

                                        <div class="input-field">
                                            <label for="">Perusahaan Pelaksana </label>
                                            <input required id="mydiv64"  type="text" name="perusahaan_pelaksana" autocomplete="off"  >
                                        </div>
                                        <div class="input-field">
                                            <label for="">Pelaksana Pekerjaan </label><br>
                                            <input type="text" cols="1" required id="mydiv66"  type="text" name="pelaksana_pekerjaan[]" autocomplete="off"  >
                                            
                                        </div>
                                        <div class="input-field" id="addinput">
                                            
                                        </div>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="addinput()">Tambah Pelaksana</button>
                                        <br>
                                        <br>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform8()">back</button>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform9()">next</button>
                                    </div>

                                    <div id="myDIV10" style="display: none;" >
                                        <h5>B. Peralatan Keselamatan</h5>
                                        <br>
                                        <p>Alat Pelindung diri</p>
                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv71"  name="ck3[]" value="Helm">
                                            <label for="mydiv71"> Helm</label><br>
                                        </div>
                                        
                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv72"  name="ck3[]" value="Sepatu Keselamatan">
                                            <label for="mydiv72"> Sepatu Keselamatan</label><br>
                                        </div>

                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv73"  name="ck3[]" value="Kacamata">
                                            <label for="mydiv73"> Kacamata</label><br>
                                        </div>

                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv74"  name="ck3[]" value="Earplug">
                                            <label for="mydiv74"> Earplug</label><br>
                                        </div>

                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv75"  name="ck3[]" value="Earmuff">
                                            <label for="mydiv75"> Earmuff</label><br>
                                        </div>

                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv76"  name="ck3[]" value="Sarung tangan katun">
                                            <label for="mydiv76"> Sarung tangan katun</label><br>
                                        </div>

                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv77"  name="ck3[]" value="Sarung tangan karet">
                                            <label for="mydiv77"> Sarung tangan karet</label><br>
                                        </div>

                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv78"  name="ck3[]" value="Sarung tangan 20kV">
                                            <label for="mydiv78"> Sarung tangan 20kV </label><br>
                                        </div>

                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv79"  name="ck3[]" value="Pelampung life Vest">
                                            <label for="mydiv79"> Pelampung life Vest </label><br>
                                        </div>

                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv710" name="ck3[]" value="Tabung Pernafasan">
                                            <label for="mydiv710"> Tabung Pernafasan </label><br>
                                        </div>

                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv711" name="ck3[]" value="Full-Body Harness">
                                            <label for="mydiv711"> Full-Body Harness </label><br>
                                        </div>

                                        <div class="input-field col s2 ">
                                            <input type="checkbox" id="ckin3" onclick="validatein3()">
                                            <label for="ckin3"> Lainnya : </label><br>
                                        </div>
                                        <div class="input-field col s10 " >
                                            <input type="text" disabled name="ck3[]" id="inck3">
                                        </div>
                                        <div class="input-field col s12"></div>
                                        <div class="input-field col s12"></div>
                                        <br>
                                        <br>
                                        <p>Perlengkapan keselamatan & darurat</p>
                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv81" name="ck4[]" value="Pemadam Api (APAR dll)">
                                            <label for="mydiv81"> Pemadam Api (APAR dll)</label><br>
                                        </div>
                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv82" name="ck4[]" value="Rambu Keselamatan">
                                            <label for="mydiv82"> Rambu Keselamatan</label><br>
                                        </div>
                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv83" name="ck4[]" value="LOTO (lock out tag out)">
                                            <label for="mydiv83"> LOTO (lock out tag out)</label><br>
                                        </div>
                                        <div class="input-field col s12 ">
                                            <input type="checkbox" id="mydiv84" name="ck4[]" value="Radio Telekomunikasi">
                                            <label for="mydiv84"> Radio Telekomunikasi</label><br>
                                        </div>
                                        <div class="input-field col s2 ">
                                            <input type="checkbox" id="ckin4" onclick="validatein4()">
                                            <label for="ckin4"> Lainnya : </label><br>
                                        </div>
                                        <div class="input-field col s10 " >
                                            <input type="text" disabled name="ck4[]" id="inck4">
                                        </div>
                                        
                                        <div class="input-field col s12"></div>
                                        <div class="input-field col s12"></div>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform9()">back</button>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform10()">next</button>
                                    </div><br>

                                    <div id="myDIV11" style="display: none;" >
                                        <h5>C. Analisis Keselamatan Kerja</h5>
                                        <br>
                                        <table id="table">
                                            <thead>
                                                <tr>
                                                    <th>Uraikan Langkah Pekerjaan</th>
                                                    <th>Uraikan Potensi Bahaya dan Resiko</th>
                                                    <th>Uraikan Tindakan Pengendalian</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input cols="1" required class="custom-file-input" type="text" name="langkah_pekerjaan[]"  id="mydiv92"></td>
                                                    <td><input cols="1" required  type="text" name="potensi_bahaya_dan_resiko[]"  id="mydiv93"></td>
                                                    <td><input cols="1" required  type="text"  name="tindakan_pengendalian[]"  id="mydiv94"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="addcolumn()">Tambah Baris</button>
                                        <br>
                                        <br>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform10()">back</button>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform11()">next</button>
                                    </div>
                                    <br>
                                    <div id="myDIV12" style="display: none;">
                                        <h5>3. Identifikasi Bahaya, Penilaian dan Pengendalian resiko</h5>
                                        <br>
                                        <p>HAZARD IDENTIFICATION, RISK ASSESSMENT AND RISK CONTROL (HIRARC)</p>
                                        
                                        <br>
                                        
                                        <div class="input-field ">
                                            <label for="mydiv101"> Nama Unit</label>
                                            <input required  type="text" name="nama_unit"  class="custom-file-input"  id="mydiv101">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv102"> Bidang</label>
                                            <input required  type="text" name="bidang" class="custom-file-input"  id="mydiv102">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv103"> Jenis Pekerjaan</label>
                                            <input required  type="text" name="jenis_pekerjaan" class="custom-file-input"  id="mydiv103">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv104"> No. Dokumen</label>
                                            <input required  type="text" name="no_dokumen" class="custom-file-input"  id="mydiv104">
                                        </div>
                                        <div class="input-field ">
                                            <p> Tanggal</p>
                                            <input required   type="date" name="tgl3" class="validate datepicker" autocomplete="off"   >
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv106"> Revisi</label>
                                            <input required  type="text" name="revisi" class="custom-file-input"  id="mydiv106">
                                        </div>
                                        <div class="input-field ">
                                            <label for="mydiv107"> Halaman</label>
                                            <input required  type="text" name="halaman" class="custom-file-input"  id="mydiv107">
                                        </div>
                                        <table id="table2" >
                                            <thead>
                                                <tr>
                                                    <th>Kegiatan</th>
                                                    <th>Potensi Bahaya</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><textarea cols="1" required  type="text" name="kegiatan[]" class="custom-file-input"  id="mydiv108"></textarea></td>
                                                    <td><textarea cols="1" required  type="text" name="potensi_bahaya[]" class="custom-file-input"  id="mydiv109"></textarea></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="addcolumn2()">Tambah baris</button>
                                        <br>
                                        
                                        <hr>
                                        <div style="overflow-x:auto;">
                                            <table id="table3" class="col-4" >
                                                <thead>
                                                    <tr>
                                                        <th>Resiko</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td ><textarea cols="2" required  type="text" name="resiko[]" class="custom-file-input"  id="mydiv1010"></textarea></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table id="table4" class="col-8">
                                                <thead>
                                                    <tr>
                                                        <th colspan="3">Penilaian Resiko</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Konsekuensi</th>
                                                        <th>Kemungkinan</th>
                                                        <th>Tingkat Resiko</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><textarea cols="1" required  type="text" name="Consequences[]" class="custom-file-input"  id="mydiv1010"></textarea></td>
                                                        <td><textarea cols="1" required  type="text" name="Possibility[]" class="custom-file-input"  id="mydiv1010"></textarea></td>
                                                        <td><textarea cols="1" required  type="text" name="LevelOfRisk[]" class="custom-file-input"  id="mydiv1010"></textarea></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="addcolumn3()">Tambah baris</button>
                                        <br>
                                        
                                        <hr>
                                        <div style="overflow-x:auto;">
                                            <table id="table5" class="col-4" >
                                                <thead>
                                                    <tr>
                                                        <th>Pengendalian Resiko</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td ><textarea cols="1" required  type="text" name="RiskControl[]" class="custom-file-input"  id="mydiv1011"></textarea></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table id="table6" class="col-8">
                                                <thead>
                                                    <tr>
                                                        <th colspan="3">Pengendalian Resiko</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Konsekuensi</th>
                                                        <th>Kemungkinan</th>
                                                        <th>Tingkat Resiko</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><textarea cols="1" required  type="text" name="Consequences2[]" class="custom-file-input"  id="mydiv1011"></textarea></td>
                                                        <td><textarea cols="1" required  type="text" name="Possibility2[]" class="custom-file-input"  id="mydiv1011"></textarea></td>
                                                        <td><textarea cols="1" required  type="text" name="LevelOfRisk2[]" class="custom-file-input"  id="mydiv1013"></textarea></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="addcolumn4()">Tambah baris</button>
                                        <hr>
                                        <table id="table7" >
                                                <thead>
                                                    <tr>
                                                        <th>Status Pengendalian</th>
                                                        <th>Penanggung Jawab</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input required  type="text" name="status_pengendalian[]" class="custom-file-input"  id="mydiv1014"></td>
                                                        <td><input required  type="text"  name="penanggung_jawab[]" class="custom-file-input"  id="mydiv1015" ></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button class="waves-effect waves-light btn blue-grey dark-1" onclick="addcolumn5()">Tambah baris</button>
                                        <br>
                                        <div class="input-field col s12"></div>
                                        <div class="input-field col s12"></div>
                                        <button class="waves-effect waves-light btn blue-grey dark-1" onclick="myform11()">back</button>
                                        <right>
                                        <input required  type="submit"  id="save" name="save" class="waves-effect waves-light btn blue-grey dark-1">
                                        </right>
                                        
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/pages/form_elements.js"></script>

    </body>
</html>
<?php } ?> 