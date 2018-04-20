<?php

// Exit if user browsed to this form by accident
if (!$_POST['submit'] == 'submit')
{
    header("Location: index.php");
    exit;
}
else
{

  // Sanitise the POST vars
    $email = htmlspecialchars($_POST['remail']);
    $rname = htmlspecialchars($_POST['rname']);
    $sname = htmlspecialchars($_POST['sname']);
    $sposn = htmlspecialchars($_POST['sposn']);
    $rposn = htmlspecialchars($_POST['rposn']);
    $rappt = htmlspecialchars($_POST['rappt']);
    $bldg = htmlspecialchars($_POST['bldg']);
    $rooms = htmlspecialchars($_POST['rooms']);
    $fnhrmbk = htmlspecialchars($_POST['fnhrmbk']);
  // Set the RT queue Name
    $to = "keydesk@landfood.ubc.ca";

  // Build the email contents
    $headers = "From: ".$rname." <".$email.">";

    $subject = "New key Request from ".$rname;

    $message = "Date of Request: ".date("F, j, Y, g:i a")."\n\n";


    if ($_POST['remid'])
    {
      $emid = htmlspecialchars($_POST['remid']);
      $message .= "Applicant Type: UBC EMPLOYEE.\n\n";
      $message .= "Employee ID: ".$emid."\n";
    }
    elseif ($_POST['rstudnum'])
    {
      $studnum = htmlspecialchars($_POST['rstudnum']);
      $message .= "Applicant Type:  UBC STUDENT.\n\n";
      $message .= "Student number: ".$studnum."\n";
      $message .= "Student Appointment: ".$rappt."\n";
    }
    else
    {
      $message .= "Applicant Type:  UBC VISITOR.\n\n";
    } 

    $message .= "Requestor's Name: ".$rname."\n";
    $message .= "Requestor's Email: ".$email."\n";
    $message .= "Requestor's Position: ".$rposn."\n\n";
    $message .= "Supervisor's Name: ".$sname."\n\n";
    $message .= "Supervisor's Position: ".$sposn."\n\n";
    $message .= "Building Name: ".$bldg."\n";
    $message .= "Rooms to access: ".$rooms."\n";
    $message .= "FNH bookable room: ".$fnhrmbk."\n";


  // Send the message
    mail($to, $subject, $message, $headers);

  // Redirect to output completion note
    header("Location: thankyou.php");
    exit;
}

?>
