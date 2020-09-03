<?php
error_reporting(E_ALL);
session_start();
include('includes/config.php');
if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{
    $eid=$_SESSION['emplogin'];
}
//form 1
//f0
$eid=$_SESSION['emplogin'];
    $sql = "SELECT * from  tblemployees where EmailId=:eid";
    $query = $dbh -> prepare($sql);
    $query -> bindParam(':eid', $eid, PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        foreach ($results as $result) {
            
        

if (isset($_POST['save'])) {
    $id=$result->id;
    $status='0';
    $email=$_POST['email'];
    $firstname=$result->FirstName;
    $Lastname=$result->LastName;
    $Pengawas_Pekerjaan=$firstname." ".$Lastname;
    $telp1=$result->Phonenumber;

    //f1
    $tanggal_pengajuan=$_POST['tanggal_pengajuan'];
    $jenis_pekerjaan=$_POST['jenis_pekerjaan'];
    $detail_pekerjaan=$_POST['detail_pekerjaan'];
    $lokasi_pekerjaan=$_POST['lokasi_pekerjaan'];
    $Pengawas_K3=$_POST['Pengawas_K3'];
    $telp2=$_POST['telp2'];
    //f2
    $Tanggal_Mulai=$_POST['Tanggal_Mulai'];
    $Tanggal_selesai=$_POST['Tanggal_selesai'];
    $Jam_Mulai=$_POST['Jam_Mulai'];
    $Jam_selesai=$_POST['Jam_selesai'];
    //f3

    $ck1all = implode(",", $_POST['ck1']);
    //f4
    $ck2all=implode(",", $_POST['ck2']);
    //f5
    $img_resiko=$_FILES['img_resiko']['name'];
    $img_analysis=$_FILES['img_analysis']['name'];
    $img_prosedur_kerja=$_FILES['img_prosedur_kerja']['name'];
    $img_pekerja=$_FILES['img_pekerja']['name'];

    //form 2
    //f6
    $tgl_informasi_pekerjaan2=$_POST['tanggal_pengajuan'];
    $jenis_pekerjaan2=$_POST['jenis_pekerjaan'];
    $lokasi_pekerjaan2=$_POST['lokasi_pekerjaan'];
    $perusahaan_pelaksana=$_POST['perusahaan_pelaksana'];
    $pengawas_pekerjaan=$firstname." ".$Lastname;
    $pelaksana_pekerjaan=implode(",", $_POST['pelaksana_pekerjaan']);
    //f7
    $ck3=implode(",", $_POST['ck3']);
    $ck4=implode(",", $_POST['ck4']);
    //f9
    $langkah_pekerjaan=implode(",", $_POST['langkah_pekerjaan']);
    $potensi_bahaya_dan_resiko=implode(",", $_POST['potensi_bahaya_dan_resiko']);
    $tindakan_pengendalian=implode(",", $_POST['tindakan_pengendalian']);
    //f10
    $nama_unit=$_POST['nama_unit'];
    $bidang=$_POST['bidang'];
    $jenis_pekerjaan=$_POST['jenis_pekerjaan'];
    $no_dokumen=$_POST['no_dokumen'];
    $tgl3=$_POST['tgl3'];
    $revisi=$_POST['revisi'];
    $halaman=$_POST['halaman'];
    $kegiatan=implode(",", $_POST['kegiatan']);
    $potensi_bahaya=implode(",", $_POST['potensi_bahaya']);
    $resiko=implode(",", $_POST['resiko']);
    $RiskControl=implode(",", $_POST['RiskControl']);
    $Consequences=implode(",", $_POST['Consequences']);
    $Consequences2=implode(",", $_POST['Consequences2']);
    $Possibility=implode(",", $_POST['Possibility']);
    $Possibility2=implode(",", $_POST['Possibility2']);
    $LevelOfRisk=implode(",", $_POST['LevelOfRisk']);
    $LevelOfRisk2=implode(",", $_POST['LevelOfRisk2']);

    $status_pengendalian=implode(",", $_POST['status_pengendalian']);
    $penanggung_jawab=implode(",", $_POST['penanggung_jawab']);
    
    $loc_img_resiko="images/imgresiko/";
    $loc_img_analysis="images/imganalysis/";
    $loc_img_prosedur_kerja="images/imgprosedurkerja/";
    $loc_img_pekerja="images/imgpekerja/";

    $target_file1 = $loc_img_resiko . basename($_FILES["img_resiko"]["name"]);
    $target_file2 = $loc_img_analysis . basename($_FILES['img_analysis']['name']);
    $target_file3 = $loc_img_prosedur_kerja . basename($_FILES['img_prosedur_kerja']['name']);
    $target_file4 = $loc_img_pekerja . basename($_FILES['img_pekerja']['name']);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
    $imageFileType = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
    $imageFileType = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));
    $imageFileType = strtolower(pathinfo($target_file4, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png");

    if (in_array($imageFileType, $extensions_arr)) {
        $sql = "INSERT INTO tbljobinformation (EmployeesID,
        Date,
        Email,
        TypeOfWork,
        JobDetails,
        JobLocation,
        NameJobSupervisor,
        PhoneNumberJobSupervisor,
        NameOhsSupervisor,
        PhoneNumberOhsSupervisor,
        StartDate,
        EndDate,
        StartTime,
        EndTime,
        JobClassification,
        JobProcedure,
        HazardIdentificationImage,
        JobSafetyImage,
        WorkProceduresImage,
        CertificateOfCompetenceImage,
        Status
        ) 
            VALUES (:EmployeesID,
        :DateOfFilin,
        :Email,
        :TypeOfWork,
        :JobDetails,
        :lokasi_pekerjaan,
        :Pengawas_Pekerjaan,
        :telp1,
        :Pengawas_K3,
        :telp2,
        :Tanggal_Mulai,
        :Tanggal_selesai,
        :Jam_Mulai,
        :Jam_selesai,
        :ck1all,
        :ck2all,
        :HazardIdentificationImage,
        :JobSafetyImage,
        :WorkProceduresImage,
        :CertificateOfCompetenceImage,
        :status
        )";
        $stmt = $dbh->prepare($sql);
        $params = array(
        ':EmployeesID' => $id,
        ':DateOfFilin' => $tanggal_pengajuan,
        ':Email' => $email,
        ':TypeOfWork' => $jenis_pekerjaan,
        ':JobDetails' => $detail_pekerjaan,
        ':lokasi_pekerjaan' => $lokasi_pekerjaan,
        ':Pengawas_Pekerjaan' => $Pengawas_Pekerjaan,
        ':telp1' => $telp1,
        ':Pengawas_K3' => $Pengawas_K3,
        ':telp2' => $telp2,
        ':Tanggal_Mulai' => $Tanggal_Mulai,
        ':Tanggal_selesai' => $Tanggal_selesai,
        ':Jam_Mulai' => $Jam_Mulai,
        ':Jam_selesai' => $Jam_selesai,
        ':ck1all' => $ck1all,
        ':ck2all' => $ck2all,
        ':HazardIdentificationImage'=> $img_resiko,
        ':JobSafetyImage'=> $img_analysis,
        ':WorkProceduresImage'=> $img_prosedur_kerja,
        ':CertificateOfCompetenceImage'=> $img_pekerja,
        ':status'=>$status
    );  
        move_uploaded_file($_FILES['img_resiko']['tmp_name'], $loc_img_resiko.$img_resiko);
        move_uploaded_file($_FILES['img_analysis']['tmp_name'], $loc_img_analysis.$img_analysis);
        move_uploaded_file($_FILES['img_prosedur_kerja']['tmp_name'], $loc_img_prosedur_kerja.$img_prosedur_kerja);
        move_uploaded_file($_FILES['img_pekerja']['tmp_name'], $loc_img_pekerja.$img_pekerja);

        
        $sql2 = "INSERT INTO tblworksafetyanalysis (EmployeesID,
        Email,
        Date,
        TypeOfWork,
        Location,
        JobImplementingCompany,
        JobSupervisor,
        JobExecutors,
        PersonalProtectiveEquipment,
        SafetyEmergencyEquipment,
        JobSteps,
        PotentialDangersAndRisks,
        ControlMeasures,
        Status
        ) 
        VALUES (
        :EmployeesID,
        :Email,
        :Date,
        :TypeOfWork,
        :Location,
        :JobImplementingCompany,
        :JobSupervisor,
        :JobExecutors,
        :PersonalProtectiveEquipment,
        :SafetyEmergencyEquipment,
        :JobSteps,
        :PotentialDangersAndRisks,
        :ControlMeasures,
        :Status
            )";
        $stmt2 = $dbh->prepare($sql2);
        $params2 = array(
        ':EmployeesID'=>$id,
        ':Email' => $email,
        ':Date'=>$tgl_informasi_pekerjaan2,
        ':TypeOfWork'=>$jenis_pekerjaan2,
        ':Location'=>$lokasi_pekerjaan2,
        ':JobImplementingCompany'=>$perusahaan_pelaksana,
        ':JobSupervisor'=>$pengawas_pekerjaan,
        ':JobExecutors'=>$pelaksana_pekerjaan,
        ':PersonalProtectiveEquipment'=>$ck3,
        ':SafetyEmergencyEquipment'=>$ck4,
        ':JobSteps'=>$langkah_pekerjaan,
        ':PotentialDangersAndRisks'=>$potensi_bahaya_dan_resiko,
        ':ControlMeasures'=>$tindakan_pengendalian,
        ':Status'=>$status
        );
        

        $sql3= $dbh->prepare(" INSERT INTO tblidentification (
            EmployeesID,
            Email,
            UnitName,
            Field,
            TypeOfWork,
            DocumentNumber,
            Date,
            Revision,
            Page,
            Activity,
            PotentialHazard,
            onsequence,
            Consequences,
            Possibility,
            LevelOfRisk,
            RiskControl,
            Consequences2,
            Possibility2,
            LevelOfRisk2,
            ControlStatus,
            PersonInCharge,
            Status
            ) 
            VALUES(
            :EmployeesID,
            :Email,
            :UnitName,
            :Field,
            :TypeOfWork,
            :DocumentNumber,
            :Date,
            :Revision,
            :Page,
            :Activity,
            :PotentialHazard,
            :onsequence,
            :Consequences,
            :Possibility,
            :LevelOfRisk,
            :RiskControl,
            :Consequences2,
            :Possibility2,
            :LevelOfRisk2,
            :ControlStatus,
            :PersonInCharge,
            :Status
            )");
            
            $params3 = array(
                ':EmployeesID'=>$id,
                ':Email'=>$email,
                ':UnitName'=>$nama_unit,
                ':Field'=>$bidang,
                ':TypeOfWork'=>$jenis_pekerjaan,
                ':DocumentNumber'=>$no_dokumen,
                ':Date'=>$tgl3,
                ':Revision'=>$revisi,
                ':Page'=>$halaman,
                ':Activity'=>$kegiatan,
                ':PotentialHazard'=>$potensi_bahaya,
                ':onsequence'=>$resiko,
                ':Consequences'=>$Consequences,
                ':Possibility'=>$Possibility,
                ':LevelOfRisk'=>$LevelOfRisk,
                ':RiskControl'=>$RiskControl,
                ':Consequences2'=>$Consequences2,
                ':Possibility2'=>$Possibility2,
                ':LevelOfRisk2'=>$LevelOfRisk2,
                ':ControlStatus'=>$status_pengendalian,
                ':PersonInCharge'=>$penanggung_jawab,
                ':Status'=>$status
            );
            $saved = $stmt->execute($params);
            if ($saved) {
                echo 'berhasil 1';}
            $saved2 = $stmt2->execute($params2);
            if ($saved2) {
                    echo 'berhasil2';}
            
            $saved3 = $sql3->execute($params3);
             if ($saved3) {
                echo 'berhasil3';
                header ('Location:statuswp.php');
            }
            
        }
    }
    }
    
}



    // //f10



?>
