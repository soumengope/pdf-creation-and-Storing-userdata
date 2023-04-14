<?php
    include_once 'conn.php';
    require('fpdf/fpdf.php');
    
    if(!empty($_POST['submit'])){
        $name = strtolower($_POST['fullName']);
        $phone = strtolower($_POST['phoneNum']);
        $email = strtolower($_POST['email']);
        $city = strtolower($_POST['city']);

        if(!empty($name)){
            if(!empty($phone)){
                if(!empty($email)){
                    if(!empty($city)){
                        if( (strlen($name) > 15) || (strlen($phone) > 15) || (strlen($email) > 25) || (strlen($city) > 15)){
                            echo 'sorry max length';
                        }else{
                            $sql = "SELECT email FROM userdata WHERE email='$email'";
                            $result = mysqli_query($conn,$sql);
                            if ($result->num_rows > 0) {
                                echo "This Email is alredy exists";
                            }else{
                                $sql = "INSERT INTO userdata(fullName,phoneNumber,email,city)VALUES('$name','$phone','$email','$city');";
                                $result = mysqli_query($conn,$sql);
                                //adding pdf object
                                $pdf = new FPDF();
                                //creating an empty pdf page
                                $pdf -> AddPage();

                                // SetFont( font-style, (B=bold,I=italic) , font-size )
                                $pdf -> SetFont('Arial','B',15);
                                //Cell( width , height , heading , border , (next item in new line=1) , alignment(L=left,R=right,C=center) )
                                $pdf -> Cell(0,10,'ASMensou',1,1,'C'); 

                                $pdf -> Cell(45,10,"Full Name",1,0,'C');
                                $pdf -> Cell(40,10,"Phone",1,0,'C');
                                $pdf -> Cell(65,10,"Email",1,0,'C');
                                $pdf -> Cell(40,10,"City",1,1,'C');

                                $pdf -> SetFont('Arial','B',12);
                                $pdf -> Cell(45,10,$name,1,0,'C');
                                $pdf -> Cell(40,10,$phone,1,0,'C');
                                $pdf -> Cell(65,10,$email,1,0,'C');
                                $pdf -> Cell(40,10,$city,1,1,'C');

                                //auto download
                                $file = time() .'.pdf';
                                $pdf -> output($file,'D');
                                
                                $pdf -> output();
                            }

                        } 
                    }
                }
            }
        }

    }
?>