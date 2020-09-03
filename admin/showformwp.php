<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{
$eid=intval($_GET['frid']);
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
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet"> 
        <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
  <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: block;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}


.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}


[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}

@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
}
</style>





    </head>
    <body>
  <?php include('includes/header.php');?>
            
       <?php include('includes/sidebar.php');?>
   <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">Show form</div>
                        
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <h3>Show Form WP Info</h3>
                                
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <h4>1. Working Permit</h4>
                                    <div class="row">
                                        <div class="col m12">
                                            <div class="row">
                                                
                                            <?php 
$eid=intval($_GET['frid']);
$sql = "SELECT * from  tbljobinformation where id=:eid";
$query = $dbh -> prepare($sql);
$query -> bindParam(':eid',$eid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?> 
                                            <div clas="div2">
                                                <h5>A. Informasi Pekerjaan</h5>
                                                <div class=" col-2">
                                                    <p>1. Tanggal Pengajuan</p>
                                                </div>
                                                <div class=" col-10">
                                                    <p>: <?php echo htmlentities($result->Date);?></p>
                                                </div>
                                                <div class=" col-2">
                                                    <p>2. Jenis Pekerjaan</p>
                                                </div>
                                                <div class=" col-10">
                                                    <p>: <?php echo htmlentities($result->TypeOfWork);?></p>
                                                </div>
                                                <div class=" col-2">
                                                    <p>3. Detail Pekerjaan</p>
                                                </div>
                                                <div class=" col-10">
                                                    <p>: <?php echo htmlentities($result->JobDetails);?></p>
                                                </div>
                                                <div class=" col-2">
                                                    <p>4. Lokasi Pekerjaan</p>
                                                </div>
                                                <div class=" col-10">
                                                    <p>: <?php echo htmlentities($result->JobLocation);?></p>
                                                </div>
                                                <div class="col-2">
                                                    <p>5. Pengawas Pekerjaan</p>
                                                </div>
                                                <div class="col-6">
                                                    <p>: <?php echo htmlentities($result->NameJobSupervisor);?></p>
                                                </div>
                                                <div class="col-1">
                                                    <p>No. Telp </p>
                                                </div>
                                                <div class="col-3">
                                                    <p>: <?php echo htmlentities($result->PhoneNumberJobSupervisor);?></p>
                                                </div>
                                                <div class="col-2">
                                                    <p>6. Pengawas K3</p>
                                                </div>
                                                <div class="col-6">
                                                    <p>: <?php echo htmlentities($result->NameOhsSupervisor);?></p>
                                                </div>
                                                <div class="col-1">
                                                    <p>No. Telp </p>
                                                </div>
                                                <div class="col-3">
                                                    <p>: <?php echo htmlentities($result->PhoneNumberOhsSupervisor);?></p>
                                                </div>
                                                <div class="col-12">
                                                </div>
                                            </div>
                                            <div class="div2">
                                                <h5>B. DURASI PEKERJAAN</h5>
                                                <div >
                                                    <h6 >Durasi Kerja</h6>
                                                </div>
                                                <div class="col-2">
                                                    <p>Tanggal mulai</p>
                                                </div>
                                                <div class="col-4">
                                                    <p>: <?php echo htmlentities($result->StartDate);?></p>
                                                </div>
                                                <div class="col-2">
                                                    <p>Jam Mulai</p>
                                                </div>
                                                <div class="col-4">
                                                    <p>: <?php echo htmlentities($result->StartTime);?></p>
                                                </div>
                                                <div class="col-2">
                                                    <p>Tanggal Selesai</p>
                                                </div>
                                                <div class="col-4">
                                                    <p>: <?php echo htmlentities($result->EndDate);?></p>
                                                </div>
                                                <div class="col-2">
                                                    <p>Jam Selesai</p>
                                                </div>
                                                <div class="col-4">
                                                    <p>: <?php echo htmlentities($result->EndTime);?></p>
                                                </div>
                                                <div class="col-12">
                                                </div>
                                                
                                            </div>
                                            <div class="div2">
                                                <h5>C. KLASIFIKASI PEKERJAAN</h5>
                                                <div class="col-2">
                                                    <p>Detail Pekerjaan</p>
                                                </div>
                                                <div class="col-10">
                                                    <p>: <?php
                                                    $Pecah = explode(",",$result->JobClassification );
                                                    for ( $i = 0; $i < count( $Pecah ); $i++ ) {
                                                    echo $Pecah[$i];
                                                      ;echo"<br />&nbsp&nbsp";}?>
                                                     </p>
                                                </div>
                                            </div>
                                            <div class="div2">
                                                <h5>D. PROSEDUR PEKERJAAN YANG TELAH DIJELASKAN KEPADA PEKERJA</h5>
                                                <div class="col-2">
                                                    <p>Detail Pekerjaan</p>
                                                </div>
                                                <div class="col-10">
                                                    <p>: <?php
                                                    $Pecah = explode(",",$result->JobProcedure);
                                                    for ( $i = 0; $i < count( $Pecah ); $i++ ) {
                                                    echo $Pecah[$i];
                                                      ;echo"<br />&nbsp&nbsp";}?>
                                                     </p>
                                                </div>
                                            </div>
                                            <div class="div2">
                                                <h5>E. Lampiran Izin Kerja</h5>
                                                <div class="col-5">
                                                    <p>Identifikasi Bahaya, Penilaian dan Pengendalian Resiko</p>
                                                </div>
                                                <div class="col-5">
                                                    <?php echo " <a href='../images/imgresiko/$result->HazardIdentificationImage' download='imgresiko'>
                                                    download
                                                    </a>";?>
                                                </div>
                                                <div class="col-5">
                                                    <p>Job Safety Analysis</p>
                                                </div>
                                                <div class="col-5">
                                                    <?php echo " <a href='../images/imganalysis/$result->JobSafetyImage' download='imganalysis'>
                                                    download
                                                    </a>";?>
                                                </div>
                                                <div class="col-5">
                                                    <p>Prosedur Kerja</p>
                                                </div>
                                                <div class="col-5">
                                                    <?php echo " <a href='../images/imgprosedurkerja/$result->WorkProceduresImage' download='Prosedur'>
                                                    download
                                                    </a>";?>
                                                </div>
                                                <div class="col-5">
                                                    <p>Sertifikat Kompetensi Pekerja</p>
                                                </div>
                                                <div class="col-5">
                                                    <?php echo " <a href='../images/imgpekerja/$result->CertificateOfCompetenceImage' download='sertifikat'>
                                                    download
                                                    </a>";?>
                                                </div>
                                            </div>
<?php }} ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <h4>2. Job Safety Analysis</h4>
                                    <div class="row">
                                        <div class="col m12">
                                            <div class="row">
                                                
                                            <?php 
$eid=intval($_GET['frid']);
$sql = "SELECT * from  tblworksafetyanalysis where id=:eid";
$query = $dbh -> prepare($sql);
$query -> bindParam(':eid',$eid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?> 
                                            <div class="div2">
                                                <h5>A. INFORMASI PEKERJAAN</h5>
                                                <div class="col-3">
                                                    <p>1. Tanggal</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->Date);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>2. Jenis Pekerjaan</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->TypeOfWork);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>3. Lokasi</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->Location);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>4. Perusahaan Pelaksana Pekerjaan</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->JobImplementingCompany);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>5. Pengawas Pekerjaan</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->JobSupervisor);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>6. Pelaksana Pekerjaan</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: 
                                                    <?php
                                                    $Pecah = explode(",",$result->JobExecutors);
                                                    for ( $i = 0; $i < count( $Pecah ); $i++ ) {
                                                    echo $Pecah[$i];
                                                      ;echo"<br />&nbsp&nbsp";}?>
                                                     </p></p>
                                                </div>
                                            
                                            </div>
                                            <div class="div2">
                                                <h5>B. Peralatan Keselamatan</h5>
                                                
                                                <div class="col-3">
                                                    <p>Alat Pelindung diri</p>
                                                </div>
                                                <div class="col-9">
                                                    <div class="col-9">
                                                    <p>: 
                                                    <?php
                                                    $Pecah = explode(",",$result->PersonalProtectiveEquipment  );
                                                    for ( $i = 0; $i < count( $Pecah ); $i++ ) {
                                                    echo $Pecah[$i];
                                                      ;echo"<br />&nbsp&nbsp";}?>
                                                     </p>
                                                </div>
                                                </div>
                                                <div class="col-3">
                                                    <p>Perlengkapan keselamatan & darurat</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: 
                                                    <?php
                                                    $Pecah = explode(",",$result->SafetyEmergencyEquipment  );
                                                    for ( $i = 0; $i < count( $Pecah ); $i++ ) {
                                                    echo $Pecah[$i];
                                                      ;echo"<br />&nbsp&nbsp";}?>
                                                     </p>
                                                </div>
                                            
                                            </div>
                                            <div class="div2">
                                                <h5>C. Analisis Keselamatan Kerja</h5>
                                                
                                                <div class="col-3">
                                                    <p>Uraikan Langkah Pekerjaan</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->JobSteps);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Uraikan Potensi Bahaya dan Resiko</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->PotentialDangersAndRisks);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Uraikan Tindakan Pengendalian</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->ControlMeasures);?></p>
                                                </div>
                                            
                                            </div>
<?php }} ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <h4>3. Identifikasi Bahaya, Penilaian dan Pengendalian resiko</h4>
                                    <div class="row">
                                        <div class="col m12">
                                            <div class="row">
                                                
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
                                            <div class="div2">
                                                
                                                <div class="col-3">
                                                    <p>Nama Unit</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->UnitName);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Bidang</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->Field);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Jenis Pekerjaan</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->TypeOfWork);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>No. Dokumen</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->DocumentNumber);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Tanggal</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->Date);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Revisi</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->Revision);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Halaman</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->Page);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Kegiatan</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->Activity);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Potensi Bahaya</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->PotentialHazard);?></p>
                                                </div>
                                                <hr>
                                                <div class="col-3">
                                                    <p>Kemungkinan</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->onsequence);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Konsekuensi</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->Consequences);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Resiko</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->Possibility);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Tingkat Resiko</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->LevelOfRisk2);?></p>
                                                </div>
                                                <hr>
                                                <div class="col-3">
                                                    <p>Pengendalian Resiko</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->RiskControl);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Konsekuensi</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->Consequences2);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Kemungkinan</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->Possibility2);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Tingkat Resiko</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->LevelOfRisk2);?></p>
                                                </div>
                                                <hr>
                                                <div class="col-3">
                                                    <p>Status Pengendalian</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->ControlStatus);?></p>
                                                </div>
                                                <div class="col-3">
                                                    <p>Penanggung Jawab</p>
                                                </div>
                                                <div class="col-9">
                                                    <p>: <?php echo htmlentities($result->PersonInCharge);?></p>
                                                </div>
                                                
                                                
                                            
                                            </div>
<?php }} ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="../assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/js/alpha.min.js"></script>
        <script src="../assets/js/pages/form_elements.js"></script>
        
    </body>
</html>
<?php } ?> 