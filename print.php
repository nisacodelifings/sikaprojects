<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{
    $eid=intval($_GET['frid']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"  integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C   +OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft   +2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <style type="text/css">
/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    p{
        font-size:11px;
        margin: 0;
   padding: 0;  }
    th{
        font-size:11px;
        margin: 0;
   padding: 0;  
    }
    td{
        font-size:11px;
        margin: 0;
   padding: 0;  
    }
    body {
        width: 100%;
        height: 100%;
        background-color:grey;
        
    }
    table{
        padding:0%;
    }
    .button5 {border-radius: 50%;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .pagelandscape {
        width: 297mm;
        min-height: 210mm;
        padding: 20mm;
        margin: 10mm auto;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    
    
    
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>
</head>
<body>
<div class="sticky-top" id="bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="btn btn-light" href="statuswp.php" type="button" >
        <i class="material-icons p-1" title="Accept">keyboard_backspace</i></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        </div>
        <div class="form-inline ">
            <a class="text-right btn btn-light " type="button" onClick="action();">
            <i class="material-icons p-1" title="Accept">print</i></a>
        </div>
    </nav>
</div>
<div class="book">
    <div class="page">
        <?php 
            $eid=intval($_GET['frid']);
            $sql = "SELECT * from  tbljobinformation where id=:eid";
            $query = $dbh -> prepare($sql);
            $query -> bindParam(':eid',$eid, PDO::PARAM_STR);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            $cnt=1;
            if ($query->rowCount() > 0) {
                foreach ($results as $result) {               ?>
        <p class="text-right mr-5">No Dok :  <?php
        $Status=$result->Status;
         if ($Status =="1") {
             echo htmlentities($result->id); ?>-UPPJJBB-<?php echo date("Y"); ?></p>
        <?php
         } ?></p>
        <div class="text-center">
          <h3 >WORKING PERMIT</h3>
          <hr class="col-sm-5">
          <h4 class="">IJIN BEKERJA</h4>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div>
                    <p class="font-weight-bold mb-0">&nbsp UNIT PELAKSANA PROYEK JARINGAN JAWA BAGIAN BARAT 2</p>
                </div>    
            </div>    
            <div class="col-sm-12">
                <div>
                    <p class="font-weight-bold p-2 mt-2">A. INFORMASI PEKERJAAN</p>
                </div>    
            </div>    
        
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-1">
                    <p>&nbsp&nbsp 1.</p>
                    </div>
                    <div class="col-sm-3">
                    <p>Tanggal Pengajuan</p>
                    </div>
                    <div class="col-sm-8">
                    <p>: <?php echo htmlentities($result->Date);?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-1">
                    <p>&nbsp&nbsp 2.</p>
                    </div>
                    <div class="col-sm-3">
                    <p>Jenis Pekerjaan</p>
                    </div>
                    <div class="col-sm-8">
                    <p>: <?php echo htmlentities($result->TypeOfWork);?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-1">
                    <p>&nbsp&nbsp 3.</p>
                    </div>
                    <div class="col-sm-3">
                    <p>Detail Pekerjaan</p>
                    </div>
                    <div class="col-sm-8">
                    <p>: <?php echo htmlentities($result->JobDetails);?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-1">
                    <p>&nbsp&nbsp 5.</p>
                    </div>
                    <div class="col-sm-3">
                    <p>Pengawas Pekerjaan</p>
                    </div>
                    <div class="col-sm-4">
                    <p>: <?php echo htmlentities($result->NameJobSupervisor);?></p>
                    </div>
                    <div class="col-sm-2">
                    <p>No. Telp</p>
                    </div>
                    <div class="col-sm-2">
                    <p>: <?php echo htmlentities($result->PhoneNumberJobSupervisor);?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-1">
                    <p>&nbsp&nbsp 6.</p>
                    </div>
                    <div class="col-sm-3">
                    <p>Pengawas K3</p>
                    </div>
                    <div class="col-sm-4">
                    <p>: <?php echo htmlentities($result->NameOhsSupervisor);?></p>
                    </div>
                    <div class="col-sm-2">
                    <p>No. Telp</p>
                    </div>
                    <div class="col-sm-2">
                    <p>: <?php echo htmlentities($result->PhoneNumberOhsSupervisor);?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <p class="font-weight-bold p-2 mt-2">B. DURASI PEKERJAAN</p>
            </div>
            <div class="col-sm-12">
                <div class="row ">
                    <div class="col-sm-2 p-auto">
                    <p class="text-center">Durasi Kerja</p>
                    </div>
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-3">
                                <p >Jam Mulai</p>
                                </div>
                                <div class="col-sm-3">
                                <p>: <?php echo htmlentities($result->StartDate);?></p>
                                </div>
                                <div class="col-sm-3">
                                <p >Jam Mulai</p>
                                </div>
                                <div class="col-sm-3">
                                <p>: <?php echo htmlentities($result->StartTime);?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-3">
                                <p >Tanggal Selesai</p>
                                </div>
                                <div class="col-sm-3">
                                <p>: <?php echo htmlentities($result->EndDate);?></p>
                                </div>
                                <div class="col-sm-3">
                                <p >Jam Selesai</p>
                                </div>
                                <div class="col-sm-3">
                                <p>: <?php echo htmlentities($result->EndTime);?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <p class="font-weight-bold p-2 mt-2">C. KLASIFIKASI PEKERJAAN</p>   
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-3">
                        <p>&nbsp Pilih klasifikasi</p>
                    </div>
                    <div class="col-sm-9">
                        <p>: <?php $Pecah = explode(",",$result->JobClassification );
                    for ( $i = 0; $i < count( $Pecah ); $i++ ) { 
                        echo $Pecah[$i];
                        echo"<br/>&nbsp&nbsp";}?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <p class="font-weight-bold p-2 mt-2">D. PROSEDUR PEKERJAAN YANG TELAH DIJELASKAN KEPADA PEKERJA</p>   
            </div>
            <div class="col-sm-12">
                <div class="row">
                    
                    <div class="col-sm-3">
                        <p>&nbsp Pilih klasifikasi</p>
                    </div>
                    <div class="col-sm-9">
                        <p>: <?php $Pecah = explode(",",$result->JobProcedure);
                        for ( $i = 0; $i < count( $Pecah ); $i++ ) {
                        echo $Pecah[$i];
                        echo"<br />&nbsp&nbsp";}?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <p class="font-weight-bold p-2 mt-2">E. LAMPIRAN IZIN KERJA (WAJIB DILAMPIRKAN)</p>   
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8">
                        <p>&nbsp  Identifikasi Bahaya, Penilaian dan Pengendalian Resiko</p>
                    </div>
                    <div class="col-sm-4">
                        
                        <?php
                        $img=$result->HazardIdentificationImage;
                        if ($img !=""){
                            ?>
                            <i class="material-icons p-1" title="Accept">done</i>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8">
                        <p>&nbsp  Job Safety Analysis</p>
                    </div>
                    <div class="col-sm-4">
                    <?php
                        $img=$result->JobSafetyImage;
                        if ($img !=""){
                            ?>
                            <i class="material-icons p-1" title="Accept">done</i>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8">
                        <p>&nbsp  Prosedur Kerja</p>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $img=$result->WorkProceduresImage;
                        if ($img !=""){
                            ?>
                            <i class="material-icons p-1" title="Accept">done</i>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8">
                        <p>&nbsp  Sertifikat Kompetensi Pekerja</p>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        $img=$result->CertificateOfCompetenceImage;
                        if ($img !=""){
                            ?>
                            <i class="material-icons p-1" title="Accept">done</i>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                
            </div>
            <div class="col-sm-12 mt-2">
                <p>Keterangan : Form izin kerja tidak dapat disetujui jika salah satu lampiran tidak ada</p>
            </div>
            <div class="col-sm-12 mt-5">
                <p class="font-weight-bold p-2 mt-2 text-center" >PENGESAHAN IJIN KERJA</p>
            </div>
            <div class="col-sm-12 mt-3">
                <div class="row text-center font-weight-bold">
                    <div class="col-sm-3">
                        <p>DISETUJUI OLEH :
                        <br><br><br><br><br>
                        (MANAGER BAGIAN )</p>
                    </div>
                    <div class="col-sm-3">
                        <p>DIPERIKSA OLEH :
                        <br><br><br><br><br>
                        (PEJABAT PELAKSANA K3L)</p>
                    </div>
                    <div class="col-sm-3">
                        <p>DIPERIKSA OLEH :
                        <br><br><br><br><br>
                        (SPV / PIC PEKERJAAN)</p>
                    </div>
                    <div class="col-sm-3">
                        <p>DISUSUN OLEH :
                        <br><br><br><br><br>
                        (PENGAWAS PEKERJAAN)</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mt-5">
                <p>KETERANGAN :</p> 
            </div>
            <div class="col-sm-12 ">
                <p>1. PADA UNIT INDUK UNTUK KOLOM PERSETUJUAN DITANDATANGANI OLEH DEPUTI MANAJER TERKAIT</p> 
            </div>
            <div class="col-sm-12 ">
                <p>2. PADA SUB UNIT PELAKSANA ATAU RAYON UNTUK KOLOM PERSETUJUAN DITANDATANGANI OLEH MANAJER SUB UNIT PELAKSANA / MANAJER RAYON</p> 
            </div>
        </div>
    <?php }
} ?>
    </div>
    <?php 
    $eid=intval($_GET['frid']);
    $sql = "SELECT * from  tblworksafetyanalysis where id=:eid";
    $query = $dbh -> prepare($sql);
    $query -> bindParam(':eid',$eid, PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $cnt=1;
    if ($query->rowCount() > 0) {
        foreach ($results as $result) {               ?> 
    <div class="page">
    <p class="text-right mr-5">Lampiran II</p>
        <div class="text-center">
          <h3 >JOB SAFETY ANALYSIS (JSA)</h3>
          <hr class="col-sm-6">
          <h4 class="">ANALISIS KESELAMATAN KERJA</h4>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p class="font-weight-bold p-2 mt-2">A. INFORMASI PEKERJAAN</p>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-1">
                    <p class="font-weight-bold">&nbsp&nbsp 1.</p>
                    </div>
                    <div class="col-sm-4">
                    <p class="font-weight-bold">Tanggal </p>
                    </div>
                    <div class="col-sm-7">
                    <p>: <?php echo htmlentities($result->Date);?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-1">
                    <p class="font-weight-bold">&nbsp&nbsp 2.</p>
                    </div>
                    <div class="col-sm-4">
                    <p class="font-weight-bold">Jenis Pekerjaan </p>
                    </div>
                    <div class="col-sm-7">
                    <p>: <?php echo htmlentities($result->TypeOfWork);?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-1">
                    <p class="font-weight-bold">&nbsp&nbsp 3.</p>
                    </div>
                    <div class="col-sm-4">
                    <p class="font-weight-bold">Lokasi </p>
                    </div>
                    <div class="col-sm-7">
                    <p>: <?php echo htmlentities($result->Location);?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-1">
                    <p class="font-weight-bold">&nbsp&nbsp 4.</p>
                    </div>
                    <div class="col-sm-4">
                    <p class="font-weight-bold">Perusahaan Pelaksana Pekerjaan </p>
                    </div>
                    <div class="col-sm-7">
                    <p>: <?php echo htmlentities($result->JobImplementingCompany);?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-1">
                    <p class="font-weight-bold">&nbsp&nbsp 5.</p>
                    </div>
                    <div class="col-sm-4">
                    <p class="font-weight-bold">Pengawas Pekerjaan</p>
                    </div>
                    <div class="col-sm-7">
                    <p>: <?php echo htmlentities($result->JobSupervisor);?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-1">
                    <p class="font-weight-bold">&nbsp&nbsp 6.</p>
                    </div>
                    <div class="col-sm-4">
                    <p class="font-weight-bold">Pelaksana Pekerjaan </p>
                    </div>
                    <div class="col-sm-7">
                        <div class ="row">
                            <div class="col-sm-6">
                                <p class="text-center font-weight-bold">Nama</p>
                                <?php
                                $count=1;
                                $Pecah = explode(",",$result->JobExecutors);
                                for ( $i = 0; $i < count( $Pecah ); $i++ ) {
                                echo "<div class='col-sm-12'><p><br>";
                                echo $Pecah[$i];
                                echo"<br></p></div>"; }?>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-center font-weight-bold">Tanda Tangan</p>
                                <?php
                                $Pecah = explode(",",$result->JobExecutors);
                                for ( $i = 0; $i < count( $Pecah ); $i++ ) {
                                echo "<div class='col-sm-12'><p><br>...<br></p></div>";}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <p class="font-weight-bold p-2 mt-2">B. Peralatan Keselamatan</p>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-1">
                    <p class="font-weight-bold">&nbsp&nbsp 1.</p>
                    </div>
                    <div class="col-sm-4">
                    <p class="font-weight-bold">Alat Pelindung diri</p>
                    </div>
                    <div class="col-sm-7">
                        <div class ="row">
                            <div class="col-sm-4">
                                <p>
                                <?php
                                $Pecah = explode(",",$result->PersonalProtectiveEquipment  );
                                for ( $i = 0; $i < count( $Pecah ); $i+=3 ) {
                                echo $Pecah[$i];
                                  ;echo",<br />&nbsp&nbsp";}?>
                                 </p>
                            </div>
                            <div class="col-sm-4">
                                <p>
                                <?php
                                $Pecah = explode(",",$result->PersonalProtectiveEquipment  );
                                for ( $i = 1; $i < count( $Pecah ); $i+=3 ) {
                                echo $Pecah[$i];
                                  ;echo",<br />&nbsp&nbsp";}?>
                                 </p>
                            </div>
                            <div class="col-sm-4">
                                <p>
                                <?php
                                $Pecah = explode(",",$result->PersonalProtectiveEquipment  );
                                for ( $i = 2; $i < count( $Pecah ); $i+=3 ) {
                                echo $Pecah[$i];
                                  ;echo",<br />&nbsp&nbsp";}?>
                                 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-1">
                    <p class="font-weight-bold">&nbsp&nbsp 2.</p>
                    </div>
                    <div class="col-sm-4">
                    <p class="font-weight-bold">PERLENGKAPAN KESELAMATAN & DARURAT</p>
                    </div>
                    <div class="col-sm-7">
                        <div class ="row">
                            <div class="col-sm-6">
                                <p>
                                <?php
                                $Pecah = explode(",",$result->SafetyEmergencyEquipment  );
                                for ( $i = 0; $i < count( $Pecah ); $i+=2 ) {
                                echo $Pecah[$i];
                                  ;echo"<br />&nbsp&nbsp";}?>
                                 </p>
                            </div>
                            <div class="col-sm-6">
                                <p>
                                <?php
                                $Pecah = explode(",",$result->SafetyEmergencyEquipment  );
                                for ( $i = 1; $i < count( $Pecah ); $i+=2 ) {
                                echo $Pecah[$i];
                                  ;echo"<br />&nbsp&nbsp";}?>
                                 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <p class="font-weight-bold p-2 mt-2">C. ANALISIS KESELAMATAN KERJA</p>
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>LANGKAH PEKERJAAN</th>
                            <th>POTENSI BAHAYA DAN RESIKO</th>
                            <th>TINDAKAN PENGENDALIAN</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $number=1;
                    $a = explode(",",$result->JobSteps  );
                    $b = explode(",",$result->PotentialDangersAndRisks  );
                    $c = explode(",",$result->ControlMeasures  );
                    for ( $i = 0; $i < count( $a ); $i++ ) {
                    ;echo"<tr>
                    <td>".$number."</td>
                    <td>".$a[$i]."</td>
                    <td>".$b[$i]."</td>
                    <td>".$b[$i]."</td>
                    </tr>";$number++; } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 mt-4">
                <div class="row text-center font-weight-bold">
                    <div class="col-sm-3">
                        <p>DISETUJUI OLEH :
                        <br><br><br><br><br>
                        (MANAGER BAGIAN )</p>
                    </div>
                    <div class="col-sm-3">
                        <p>DIPERIKSA OLEH :
                        <br><br><br><br><br>
                        (PEJABAT PELAKSANA K3L)</p>
                    </div>
                    <div class="col-sm-3">
                        <p>DIPERIKSA OLEH :
                        <br><br><br><br><br>
                        (SPV / PIC PEKERJAAN)</p>
                    </div>
                    <div class="col-sm-3">
                        <p>DISUSUN OLEH :
                        <br><br><br><br><br>
                        (PENGAWAS PEKERJAAN)</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mt-5">
                <p>KETERANGAN :</p> 
            </div>
            <div class="col-sm-12 ">
                <p>1. PADA UNIT INDUK UNTUK KOLOM PERSETUJUAN DITANDATANGANI OLEH DEPUTI MANAJER TERKAIT</p> 
            </div>
            <div class="col-sm-12 ">
                <p>2. PADA SUB UNIT PELAKSANA ATAU RAYON UNTUK KOLOM PERSETUJUAN DITANDATANGANI OLEH MANAJER SUB UNIT PELAKSANA / MANAJER RAYON</p> 
            </div>
        </div>
    </div>
<?php $cnt++;}} ?>

    <?php 
    $eid=intval($_GET['frid']);
    $sql = "SELECT * from  tblidentification where id=:eid";    
    $query = $dbh -> prepare($sql);
    $query -> bindParam(':eid',$eid, PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $cnt=1;
    if($query->rowCount() > 0)
    {
    foreach($results as $result)
    {               ?> 
    <div class="pagelandscape">
        <div class="row">
            <div class="col-sm-12">
                <p class="text-right mr-5">Lampiran I</p>
                <div class="row">
                    <div class="col-sm-2">
                        <p>Nama Unit</p>
                    </div>
                    <div class="col-sm-10">
                        <p>: <?php echo htmlentities($result->UnitName);?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <p>Bidang</p>
                    </div>
                    <div class="col-sm-10">
                        <p>: <?php echo htmlentities($result->Field);?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <p>Jenis Pekerjaan</p>
                    </div>
                    <div class="col-sm-10">
                        <p>: <?php echo htmlentities($result->TypeOfWork);?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mt-3">
                <table class="table table-bordered " >
                    <thead>
                        <tr>
                            <th colspan="10" rowspan="4" class="text-center align-middle"><h5> HAZARD IDENTIFICATION, RISK ASSESSMENT AND RISK CONTROL (HIRARC) </h5><hr class="col-10"><h6>IDENTIFIKASI BAHAYA, PENILAIAN, DAN PENGENDALIAN RESIKO (IBPPR)</h6>  </th>
                            <td>No Dokumen
                                <td><?php echo htmlentities($result->DocumentNumber);?>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td><?php echo htmlentities($result->Date);?></td>
                                    </tr>
                                    <tr>
                                        <td>Revisi</td>
                                        <td><?php echo htmlentities($result->Revision);?></td>
                                    </tr>
                                    <tr>
                                        <td>Halaman</td>
                                        <td><?php echo htmlentities($result->Page);?></td>
                                    </tr>
                                </td>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center align-middle">
                            <td rowspan="2">Kegiatan</td>
                            <td rowspan="2">Potensi Bahaya</td>
                            <td rowspan="2">Resiko</td>
                            <td colspan="3">Penilaian Resiko</td>
                            <td rowspan="2">Pengendalian Resiko</td>
                            <td colspan="3">Pengendalian Resiko</td>
                            <td rowspan="2">Status Pengendalian</td>
                            <td rowspan="2">Penanggung Jawab</td>
                        </tr>
                        <tr >
                            <td>Konsekuensi</td>
                            <td>Kemungkinan</td>
                            <td>Tingkat Resiko</td>
                            <td>Konsekuensi</td>
                            <td>Kemungkinan</td>
                            <td>Tingkat Resiko</td>
                        </tr>
                        <?php
                        $number=1;
                        $a = explode(",",$result->Activity);
                        $b = explode(",",$result->PotentialHazard);
                        $c = explode(",",$result->onsequence);
                        $d = explode(",",$result->LevelOfRisk2);
                        $e = explode(",",$result->ControlStatus);
                        $f = explode(",",$result->PersonInCharge);
                        $g = explode(",",$result->Possibility2);
                        $h = explode(",",$result->Consequences);
                        $j = explode(",",$result->Possibility);
                        $k = explode(",",$result->LevelOfRisk);
                        $l = explode(",",$result->RiskControl);
                        $m = explode(",",$result->Consequences2);
                        for ( $i = 0; $i < count( $a ); $i++ ) {
                        ;echo"<tr>
                        <td>".$a[$i]."</td>
                        <td>".$b[$i]."</td>
                        <td>".$c[$i]."</td>
                        <td>".$h[$i]."</td>
                        <td>".$j[$i]."</td>
                        <td>".$k[$i]."</td>
                        <td>".$l[$i]."</td>
                        <td>".$m[$i]."</td>
                        <td>".$g[$i]."</td>
                        <td>".$d[$i]."</td>
                        <td>".$e[$i]."</td>
                        <td>".$f[$i]."</td>
                        </tr>";$number++; } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 mt-4">
                <div class="row text-center font-weight-bold">
                    <div class="col-sm-3">
                        <p>DISETUJUI OLEH :
                        <br><br><br><br><br>
                        (MANAGER BAGIAN )</p>
                    </div>
                    <div class="col-sm-3">
                        <p>DIPERIKSA OLEH :
                        <br><br><br><br><br>
                        (PEJABAT PELAKSANA K3L)</p>
                    </div>
                    <div class="col-sm-3">
                        <p>DIPERIKSA OLEH :
                        <br><br><br><br><br>
                        (SPV / PIC PEKERJAAN)</p>
                    </div>
                    <div class="col-sm-3">
                        <p>DISUSUN OLEH :
                        <br><br><br><br><br>
                        (PENGAWAS PEKERJAAN)</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mt-5">
                <p>KETERANGAN :</p> 
            </div>
            <div class="col-sm-12 ">
                <p>1. STATUS "OK" PADA KOLOM STATUS PENGENDALIAN DITULIS HANYA JIKA TINGKAT RESIKO SUDAH DALAM KATEGORI LOW / RENDAH</p> 
            </div>
            <div class="col-sm-12 ">
                <p>2. PADA UNIT INDUK UNTUK KOLOM PERSETUJUAN DITANDATANGANI OLEH DEPUTI MANAJER DAN PEJABAT PENGENDALI K3L</p> 
            </div>
            <div class="col-sm-12 ">
                <p>3. PADA SUB UNIT PELAKSANA ATAU RAYON UNTUK KOLOM PERSETUJUAN DITANDATANGANI OLEH MANAJER SUB UNIT PELAKSANA</p> 
            </div>
        </div>
    </div>
    <?php }} ?>
</div>
    <script>
        var hidden = false;
    function action() {
        document.getElementById('bar').style.visibility = 'hidden';
        window.print();
        document.getElementById('bar').style.visibility = 'visible';
        

    }
</script>
</body>
</html>
