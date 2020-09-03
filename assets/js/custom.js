function myFunction() {
    $.ajax({
        url: "admin/view_notification.php",
        type: "POST",
        processData:false,
        success: function(data){
            $("#notification-count").remove();					
            $("#notification-latest").show();$("#notification-latest").html(data);
        },
        error: function(){}           
    });
 }
 
 $(document).ready(function() {
    $('body').click(function(e){
        if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
        }
    });
});
     

function validate(){

    var a = document.getElementById("makepassword").value;
    var b = document.getElementById("confirm_password").value;
    if (a!=b) {
    alert("Passwords do no match");
    return false;
    }
    }

function myform() {
    var email = document.getElementById("email").value;
    var x = document.getElementById("myDIV");
    var r = document.getElementById("myDIV2");
    if (email !=""){
        if (x.style.display === "none") {
            x.style.display = "block";
            r.style.display = "none";
            
        } else {
            x.style.display = "none";
            r.style.display = "block";
        }
    }
    else{
        alert('isi Email');
    }
}

function myform2() {
    
    var r = document.getElementById("myDIV2");
    var y = document.getElementById("myDIV3");
    
        if (r.style.display === "block") {
            r.style.display = "none";
            y.style.display = "block";
            return false;
        } else {
            r.style.display = "block";
            y.style.display = "none";
        }
    }
    function myform3() {
        var mydiv11 = document.getElementById("mydiv11").value;
        var mydiv12 = document.getElementById("mydiv12").value;
        var mydiv13 = document.getElementById("mydiv13").value;
        var mydiv14 = document.getElementById("mydiv14").value;
        var mydiv17 = document.getElementById("mydiv17").value;
        var mydiv18 = document.getElementById("mydiv18").value;
        var y = document.getElementById("myDIV3");
        var z = document.getElementById("myDIV4");
        if (mydiv11 !="" && mydiv12 !="" && mydiv13 !="" && mydiv14 !="" && mydiv17 !="" && mydiv18 !=""){
            if (y.style.display === "block") {
                y.style.display = "none";
                z.style.display = "block";
                return false;
            } else {
                y.style.display = "block";
                z.style.display = "none";
            }}
        else{
                alert('Isi Data Dengan Lengkap');
            }
        }
function myform4() {
var mydiv21 =  document.getElementById('mydiv21').value;
var mydiv22 =  document.getElementById('mydiv22').value;
var mydiv23 =  document.getElementById('mydiv23').value;
var mydiv24 =  document.getElementById('mydiv24').value;
var z = document.getElementById("myDIV4");
var a = document.getElementById("myDIV5");
if (mydiv21 !=""&&mydiv22 !=""&&mydiv23 !=""&&mydiv24 !=""){
        if (z.style.display === "block") {
            z.style.display = "none";
            a.style.display = "block";
            return false;
            
        } else {
            z.style.display = "block";
            a.style.display = "none";
        }}
    else{
        alert('Isi Data Dengan Lengkap');
    }
    }
function myform5() {
var ckin =  document.getElementById('ckin').value;
var inck =  document.getElementById('inck').value;
var a = document.getElementById("myDIV5");
var b = document.getElementById("myDIV6");
    if (a.style.display === "block") {
        a.style.display = "none";
        b.style.display = "block";
        return false;
        
    } else {
        a.style.display = "block";
        b.style.display = "none";
    }
    }
function myform6() {
var b = document.getElementById("myDIV6");
var c = document.getElementById("myDIV7");
    if (b.style.display === "block") {
        b.style.display = "none";
        c.style.display = "block";
        return false;
        
    } else {
        b.style.display = "block";
        c.style.display = "none";
    }
    }
function myform7() {
    var mydiv51 = document.getElementById("mydiv51").value;
    var mydiv52 = document.getElementById("mydiv52").value;
    var mydiv53 = document.getElementById("mydiv53").value;
    var mydiv54 = document.getElementById("mydiv54").value;
    var c = document.getElementById("myDIV7");
    var d = document.getElementById("myDIV8");
    if (mydiv51 !="" && mydiv52 !="" && mydiv53 !="" && mydiv54 !="" ) {
        if (c.style.display === "block") {
            c.style.display = "none";
            d.style.display = "block";
            return false;
            
        } else {
            c.style.display = "block";
            d.style.display = "none";
        }
    }
    else{
        alert('Isi Data Dengan Lengkap');
    }
    }
    
function myform8() {
var d = document.getElementById("myDIV8");
var e = document.getElementById("myDIV9");
    if (d.style.display === "block") {
        d.style.display = "none";
        e.style.display = "block";
        return false;
        
    } else {
        d.style.display = "block";
        e.style.display = "none";
    }
    }
function myform9() {
var mydiv64 = document.getElementById("mydiv64").value;
var mydiv66 = document.getElementById("mydiv66").value;
var e = document.getElementById("myDIV9");
var f = document.getElementById("myDIV10");
if(mydiv64 !=""&& mydiv66 !=""){
        if (e.style.display === "block") {
            e.style.display = "none";
            f.style.display = "block";
            return false;
            
        } else {
            e.style.display = "block";
            f.style.display = "none";
        }
    }else{
        alert('Isi Data Dengan Lengkap');
    }
    
    }
function myform10() {
var f = document.getElementById("myDIV10");
var g = document.getElementById("myDIV11");
    if (f.style.display === "block") {
        f.style.display = "none";
        g.style.display = "block";
        return false;
        
    } else {
        f.style.display = "block";
        g.style.display = "none";
    }
    }
function myform11() {
var mydiv92= document.getElementById("mydiv92").value; 
var mydiv93= document.getElementById("mydiv93").value; 
var mydiv94= document.getElementById("mydiv94").value; 
var f = document.getElementById("myDIV11");
var h = document.getElementById("myDIV12");
if(mydiv92!=""&& mydiv93!=""&& mydiv94!=""){
        if (f.style.display === "block") {
            f.style.display = "none";
            h.style.display = "block";
            return false;
            
        } else {
            f.style.display = "block";
            h.style.display = "none";
        }}
    else{
        alert('Isi Data Dengan Lengkap');
    }
    }
function myform12() {
var mydiv101 = document.getElementById("mydiv101").value;
var mydiv102 = document.getElementById("mydiv102").value;
var mydiv103 = document.getElementById("mydiv103").value;
var mydiv104 = document.getElementById("mydiv104").value;
var mydiv106 = document.getElementById("mydiv106").value;
var mydiv107 = document.getElementById("mydiv107").value;
var mydiv108 = document.getElementById("mydiv108").value;
var mydiv109 = document.getElementById("mydiv109").value;
var mydiv1010 = document.getElementById("mydiv1010").value;
var mydiv1011 = document.getElementById("mydiv1011").value;
var mydiv1012 = document.getElementById("mydiv1012").value;
var mydiv1013 = document.getElementById("mydiv1013").value;
var mydiv1014 = document.getElementById("mydiv1014").value;
var mydiv1015 = document.getElementById("mydiv1015").value;
var g = document.getElementById("myDIV12")
if (mydiv101 !="" &&    mydiv102 !="" && mydiv103 !="" && mydiv104 !="" && mydiv106 !="" && mydiv107 !="" && mydiv108 !="" && mydiv109 !="" && mydiv1010 !="" && mydiv1011 !="" && mydiv1012 !="" && mydiv1013 !="" && mydiv1014 !="" && mydiv1015 !=""  ) {
    

    if (g.style.display === "block") {
        g.style.display = "none";
    } else {
        g.style.display = "block";
    }}
    else{
        alert('Isi Data Dengan Lengkap');
        return false;
    }
    }

function validatein() {
    var y=document.getElementById("ckin");
    var x=document.getElementById("inck");
    if (x.disabled == false){
     x.disabled = true;}
    else{
    x.disabled = false;}
}
function validatein2() {
    var y=document.getElementById("ckin2");
    var x=document.getElementById("inck2");
    if (x.disabled == false){
     x.disabled = true;}
    else{
    x.disabled = false;}
}
function validatein3() {
    var y=document.getElementById("ckin3");
    var x=document.getElementById("inck3");
    if (x.disabled == false){
     x.disabled = true;}
    else{
    x.disabled = false;}
}
function validatein4() {
    var y=document.getElementById("ckin4");
    var x=document.getElementById("inck4");
    if (x.disabled == false){
     x.disabled = true;}
    else{
    x.disabled = false;}
}
function addinput() {
    var parent = document.getElementById("addinput");
    var x = document.createElement("INPUT");
    x.setAttribute("type", "text");
    x.setAttribute("id", "idpk");
    x.setAttribute("name", "pelaksana_pekerjaan[]");
    parent.appendChild(x);
}
function addcolumn(){
    var table = document.getElementById("table");
    var x = document.createElement("INPUT");
    var y = document.createElement("INPUT");
    var z = document.createElement("INPUT");
    x.setAttribute("type", "text");
    x.setAttribute("name", "langkah_pekerjaan[]");
    y.setAttribute("type", "text");
    y.setAttribute("name", "potensi_bahaya_dan_resiko[]");
    z.setAttribute("type", "text");
    z.setAttribute("name", "tindakan_pengendalian[]");
    var row = table.insertRow(2);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    cell1.appendChild(x);
    cell2.appendChild(y);
    cell3.appendChild(z);
}

