<?php
// if(!empty($_POST['submit']))
// if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $con = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $career = $_POST['career'];
    $grad = $_POST['grad'];
    $gpa = $_POST['gpa'];
    $dep = $_POST['dep'];
    $uni = $_POST['uni'];
    $col = $_POST['col'];
    $cdep = $_POST['cdep'];
    $pyear = $_POST['pyear'];
    $cboard = $_POST['cboard'];
    $cres = $_POST['cres'];
    $schl = $_POST['schl'];
    $sdep = $_POST['sdep'];
    $spyear = $_POST['spyear'];
    $sboard = $_POST['sboard'];
    $sres = $_POST['sres'];
    // $filename = $_FILES["uploadfile"]["name"];
    
    // $tempname = $_FILES["uploadfile"]["tmp_name"];
    // $folder = "upload/".$filename;
    // move_uploaded_file($folder);
    
    require("fpdf/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();
    // $pdf->Image($filename,0,0);
    
    $pdf->SetFont("Arial","",16);
    $pdf->Cell(0,13,"Curriculum Vitae",1,1,'C');
    
    $pdf->Cell(30,12,"Full Name:",0,0);  
    $pdf->Cell(20,12,$name,0,1);  
    $pdf->Cell(30,12,"Contact:",0,0); 
    $pdf->Cell(20,12,$con,0,1); 
    $pdf->Cell(40,12,"Email Address:",0,0);  
    $pdf->Cell(20,12,$email,0,1);  
    $pdf->Cell(30,12,"Address:",0,0);  
    $pdf->Cell(20,12,$address,0,1);  
    $pdf->Cell(45,12,"Career Objective:",0,0); 
    $pdf->Cell(20,12,$career,0,1); 
    $pdf->Cell(30,12,"Graduation:",0,0);  
    $pdf->Cell(20,12,$grad,0,1);  
    $pdf->Cell(20,12,"GPA:",0,0);  
    $pdf->Cell(20,12,$gpa,0,1);  
    $pdf->Cell(33,12,"Department:",0,0);  
    $pdf->Cell(20,12,$dep,0,1);  
    $pdf->Cell(28,12,"University:",0,0);  
    $pdf->Cell(20,12,$uni,0,1);  
    $pdf->Cell(0,12,"College-",1,1,'C');  
    $pdf->Cell(22,12,"College:",0,0);  
    $pdf->Cell(20,12,$col,0,1);  
    $pdf->Cell(32,12,"Department:",0,0);  
    $pdf->Cell(20,12,$cdep,0,1);  
    $pdf->Cell(36,12,"Passing Year:",0,0);  
    $pdf->Cell(20,12,$pyear,0,1);  
    $pdf->Cell(20,12,"Board:",0,0);  
    $pdf->Cell(20,12,$cboard,0,1);  
    $pdf->Cell(20,12,"Result:",0,0);  
    $pdf->Cell(20,12,$cres,0,1);  
    $pdf->Cell(0,12,"School-",1,1,'C');  
    $pdf->Cell(20,12,"School:",0,0);  
    $pdf->Cell(20,12,$schl,0,1);  
    $pdf->Cell(32,12,"Department:",0,0);  
    $pdf->Cell(20,12,$sdep,0,1);  
    $pdf->Cell(36,12,"Passing Year:",0,0);  
    $pdf->Cell(20,12,$spyear,0,1);  
    $pdf->Cell(20,12,"Board:",0,0);  
    $pdf->Cell(20,12,$sboard,0,1);  
    $pdf->Cell(20,12,"Result:",0,0);  
    $pdf->Cell(20,12,$sres,0,1);  
    
    
    
    $pdf->Output();
}
?>
