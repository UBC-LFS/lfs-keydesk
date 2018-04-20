<?php
  include("lfsmap1.html");
?>

<h1>Key Request Form LFS Visitors</h1>

<p>
<ul>
  <li>
  Key requisition is valid for thirty days from date of application.
  </li>
  <li>
  A refundable deposit is required for each key to a maximum of $80.00.
  </li>
  <li>
  UBC key control may require up to <b>one week</b> from the date they
  receive the key requisition to provide the requested key(s).  
  </li>
</p>

<br />
<hr />

<form id="form1" method="post" action="process.php">
  <table>
  <tr>
  <td>
  <label for="sname">Supervisor's Name </label>
  </td><td>
  <input type="text" required name="sname" maxlength="25" autofocus>
  </td>
  </tr><tr>
  <td>
  <label for="sposn">Supervisor's Position </label>
  </td><td>
  <input type="text" required name="sposn"  maxlength="25">
  </td>
  </tr><tr>
  <td>
  <label for="rname">Key Recipient's Name  </label>
  </td><td>
  <input type="text" required name="rname"  maxlength="25">
  </td>
  </tr><tr>
  <td>
  <label for="remail">Key Recipient's Email </label>
  </td><td>
  <input type="email" required name="remail" >
  </td>
  </tr><tr>
  <td>
  <label for="rposn">Key Recipient's Position  </label>
  </td><td>
  <input type="text" required name="rposn"  maxlength="25">
  </td>
  </tr><tr>
  <td>
  <label for="bldg">Building Name  </label>
  </td><td>
  <input type="text" required name="bldg"  maxlength="25">
  </td>
  </tr><tr>
  <td>
  <label for="rooms">Room(s) No. to be accessed  </label>
  </td><td>
  <input type="text" required name="rooms"  maxlength="25">
  </td>
  </tr><tr>
  <td colspan="2">
  <h3>For FNH Bookable rooms</h3>
  <p>
  Please supply the date and time of your booking. Only required for <b>FNH bookable</b> rooms.
  </td>
  </tr><tr>
  <td>
  <label for="fnhrmbk">Date and Time of FNH room booking : </label>
  </td><td>
  <input type="datetime-local" name="fnhrmbk">
  </td>
  </tr>
  </table>
  <p>
  <input type="submit" name="submit" value="Submit">
  <input type="reset" name="reset" value="Cancel">
  </p>
</form>

<br />
<hr />
<h3>Key Requisition Process</h3>
<p>
After this form has been submitted, it will be reviewed and confirmed with
your supervisor that the access requested is appropriate.
</p>
<p>
On success, a requisition will be made with the UBC Parking and Access Control
Services.  You will receive an email from them alerting you to pick up your
keys when they are ready.
</p>
<p>
This LFS key desk application form also sends you an email when you click on
submit.  If you have any questions regarding the key application, please reply
to this ticket.
</p>

<?php
  include("lfsfoot.html");
?>

</body>

</html>

