  
<?php
     // Variables used in this
     $sessionId=$_GET["sessionId"];
     $serviceCode=$_GET["serviceCode"];
     $custPhoneNo=$_GET["custPhoneNo"];
     $input=$_POST["input"];

     // We use the explode function t split the string text response into an array
     $string_explode=explode("*",$input);

     $level=count($string_explode);

     // Entry User Interface - 0
     if($input==""){
          $response="CON Welcome To Optica Eye Care\n";
          $response.="\n";
          $response.="1. CONTINUE";
          
     // Name Capture Interface - 1 
     }else if($string_explode[0]==1 && $level==1){
          $response="CON Select the City or Town:";
          $response.="1. Nairobi\n";
          $response.="2. Eldoret\n";
          $response.="3. Kakamega\n";
          $response.="4. Kericho\n";
          $response.="5. Kisii\n";
          $response.="6. Kisumu\n";
          $response.="7. Machakos\n";
          $response.="8. Malindi\n";
          $response.="9. Meru\n";

     // Province Interface - 1*name
     }else if($string_explode[1]==1 && $level==2){
          $response="CON Select Nearest Optica:\n";
          $response.="1. York House-Moi Avenue\n";
          $response.="2. Optica House-Moi Avenue\n";
          $response.="3. Sarova Stanley Hotel\n";
          $response.="4. Jubilee Insurance-Kaunda Street\n";
          $response.="5. Two Rivers Mall\n";
          $response.="6. Garden City Mall\n";
          $response.="7. Thika Road Mall";

     // Location Interface -1*name*1
     }else if($string_explode[0]==1 && !($string_explode[1]=="") && !($string_explode[2]=="") && $level==3){
          $response="CON Enter Appointment Date:\n";
          $response.="Date Format: DD-MM-YYYY\n";

     //The service request, is based on the location selected on Input 1*1 above or any location selected - 1*name*1*1
     }else if($string_explode[0]==1 && !($string_explode[1]=="") && !($string_explode[2]=="") && !($string_explode[3]=="") && $level==4){
          $response="CON Select Time Range:\n";
          $response.="1. 10am to 11am\n";
          $response.="2. 11am to 12pm\n";
          $response.="3. 12pm to 1pm\n";
          $response.="4. 12pm to 1pm\n";
          $response.="5. 1pm to 2pm\n";
          $response.="6. 2pm to 3pm\n";
          $response.="7. 3pm to 4pm\n";
          $response.="8. 4pm to 5:30pm";

     }else if($string_explode[0]==1 && !($string_explode[1]=="") && !($string_explode[2]=="") && !($string_explode[3]=="") && !($string_explode[4]=="") && $level==5){
          $response="CON Select Gender:\n";
          $response.="1. Female\n";
          $response.="2. Male";

     }else if($string_explode[0]==1 && !($string_explode[1]=="") && !($string_explode[2]=="") && !($string_explode[3]=="") && !($string_explode[4]=="") && !($string_explode[5]=="") && $level==6){
          $response="CON Enter Your Name:\n";
          $name="";

     }else if($string_explode[0]==1 && !($string_explode[1]=="") && !($string_explode[2]=="") && !($string_explode[3]=="") && !($string_explode[4]=="") && !($string_explode[5]=="") && !($string_explode[6]=="") && $level==7){
          $response="CON Enter Your Phone Number:\n";
          $phoneNo="";

     }else if($string_explode[0]==1 && !($string_explode[1]=="") && !($string_explode[2]=="") && !($string_explode[3]=="") && !($string_explode[4]=="") && !($string_explode[5]=="") && !($string_explode[6]=="") && !($string_explode[7]=="") &&  $level==8){
          $response="CON Preferred Mode of payment.\n";
          $response.="1. CASH\n";
          $response.="2. MPESA\n";
          $response.="3. INSURANCE";
          
     }else if($string_explode[0]==1 && !($string_explode[1]=="") && !($string_explode[2]=="") && !($string_explode[3]=="") && !($string_explode[4]=="") && !($string_explode[5]=="") && !($string_explode[6]=="") && !($string_explode[7]=="") && !($string_explode[8]=="") &&  $level==9){
          $response="END Thank you for requesting an appointment with us.\n";
          $response.="Ticket: ".$ticketNo;
          
     }

?>