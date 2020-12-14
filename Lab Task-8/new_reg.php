<?php

$DonationErr = $StateErr = $CountryErr = $FnameErr = $LnameErr = $Address1Err = $Address2Err = $CityErr = $ZipcodeErr = $EmailErr = $companyErr= $faxErr = $phoneErr = $AmountErr = "";
$udonation = $userState = $UserCountry = $userFname = $userLname = $userAddress1 = $userAddress2 = $userCity = $userZipcode = $userEmail = $userAmount = "";


if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(empty($_POST["fname"])){
       $FnameErr = "First Name cannot be empty!";
     }else{
       $userFname = $_POST["fname"];
     }
     if(empty($_POST["lname"])){
          $LnameErr = "Last Name cannot be empty!";
        }else{
          $userLname =$_POST["lname"];
        }

        if(empty($_POST["company"])){
          $companyErr = "Company cannot be empty!";
        }else{
          $usercompany =$_POST["company"];
        }
        if(empty($_POST["add1"])){
             $address1Err = "First Address cannot be empty!";
           }else{
             $userAddress1 = $_POST["add1"];
           }
           if(empty($_POST["add2"])){
                $address2Err = "Must need second address";
              }else{
                $userAddress2 = $_POST["add2"];
              }
           if(empty($_POST["city"])){
                $CityErr = "City cannot be empty!";
              }else{
                $userCity = $_POST["city"];
              }
              if(empty($_POST["zcode"])){
                   $ZipcodeErr = "Zip code cannot be empty!";
                 }else{
                   $userZipcode = $_POST["zcode"];
                 }
                 if(empty($_POST["email"])){
                      $EmailErr = "Email cannot be empty!";
                    }else{
                      $userEmail = $_POST["email"];
                    }
                    if(empty($_POST["fax"])){
                      $faxErr = "Fax cannot be empty!";
                    }else{
                      $userFax = $_POST["fax"];
                    }

                    if(empty($_POST["phone"])){
                      $phoneErr = "Phone cannot be empty!";
                    }else{
                      $userphone = $_POST["phone"];
                    }

                    if(empty($_POST["amount"])){
                      $amountErr = "Amount cannot be empty!";
                    }else{
                      $userAmount = $_POST["phone"];
                    }
      if(empty($_POST["state"])){
      $StateErr = "State cannot be empty!";
      }else{
      $userState = $_POST["state"];
      }
    if(empty($_POST["country"])){
      $CountryErr = "Country cannot be empty!";
    }else{
      $UserCountry = $_POST["country"];
    }
    if(empty($_POST["donation"])){
      $DonationErr = "Donation must need";
    }else{
      $udonation = $_POST["donation"];
    }




}



?>


<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
    <title>Donates Required Information</title>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> -->

    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>


    
</head>

<body style="background-color:#ebebeb">

    <form action="data_reg.php" method="POST">

        <div>


            <table align="center">
                <tr>

                    <td align="left" colspan=""="2">
                        <h1 style="color:red"><b>Donor Informations</b></h1>
                    </td>
                </tr>

                <tr>
                    <td align="right"> <label> <b>First Name </b> </label> </td>
                    <td> <input type="text" name="fname" value="" required > <span style="color:red"> <?php echo $FnameErr; ?> </td>
                </tr>

                <tr>
                    <td align="right"> <label> <b>Last Name </b> </label> </td>
                    <td> <input type="text" name="lname" value="" required> <span style="color:red"> <?php echo $LnameErr; ?> </td>
                </tr>

                <tr>
                    <td align="right"> <label> <b>Company </b> </label> </td>
                    <td> <input type="text" name="company" value="" Required> <span style="color:red"> <?php echo $companyErr; ?> </td>
                </tr>

                <tr>
                    <td align="right"> <label> <b>Address 1 </b> </label> </td>
                    <td> <input type="text" name="add1" value="" required> <span style="color:red"> <?php echo $Address1Err; ?> </td>
                </tr>

                <tr>
                    <td align="right"> <label> <b>Address 2 </b> </label> </td>
                    <td> <input type="text" name="add2" value="">  <span style="color:red"> <?php echo $Address2Err; ?> </td>
                </tr>

                <tr>
                    <td align="right"> <label> <b>City </b> </label> </td>
                    <td> <input type="text" name="city" value="" required > <span style="color:red"> <?php echo $CityErr; ?> </td>
                </tr>

                <tr>
                    <td align="right"> <label><b>State <b /></label> </td>
                    <td>
                        <select name="state" id="state" required>
                            <option value=""  disabled selected>Select a State...</option>
                            <option value="Newyork" <?php if($userState == "newyork") echo "selected"; ?>>New york</option>
                            <option value="London" <?php if($userState == "london") echo "selected"; ?>>London</option>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td align="right"> <label> <b>Zip Code </b> </label> </td>
                    <td> <input type="number" name="zcode" value="" required> <?php echo $ZipcodeErr; ?> </td>
                </tr>

                <tr>
                    <td align="right"> <label align="right"><b>Country </b></label> </td>
                    <td>
                        <select name="country" required>
                            <option value="" disabled selected>Select a Country...</option>
                            <option name="bd" value="Bangladesh" <?php if($UserCountry == "bd") echo "selected"; ?>>Bangladesh</option>
                            <option name="ind" value="India" <?php if($UserCountry == "ind") echo "selected"; ?>>India</option>
                            <option name="pak" value="Pakistan" <?php if($UserCountry == "pak") echo "selected"; ?>>Pakistan</option>

                        </select>
                    </td>
                </tr>


                <tr>
                    <td align="right"> <label><b>Phone </b></label> </td>
                    <td><input type="number" name="phone" value="" min="1" required> <?php echo $phoneErr; ?> </td>
                </tr>
                

                <tr>
                    <td align="right"> <label><b>Fax </b></label> </td>
                    <td> <input type="text" name="fax" value="" required> <span style="color:red"> <?php echo $faxErr; ?> </td>
                </tr>

                <tr>
                    <td align="right"> <label><b>E-mail </b></label> </td>
                    <td> <input type="text" name="email" value="" required> <span style="color:red"> <?php echo $EmailErr; ?> </td>
                </tr>

                <tr>
                    <td align="right"> <label> <b>Donation Amount </b> </label> </td>
                    <td> <input type="radio" name="donation" value="none" checked required> none
                        <input type="radio" name="donation" value="60" id="fifty" checked required> $60
                        <input type="radio" name="donation" value="85" id="seventyfive" checked required> $85
                        <input type="radio" name="donation" value="200" id="hundread" checked required> $200
                        <input type="radio" name="donation" value="350" id="twofifty" checked required> $350
                        <input type="radio" name="donation" value="none" checked required> others

                    </td>
                </tr>

                <tr>
                    <td align="right"> <label>(Check a button or type in your amount)</label> </td>
                    <td> <label> <b>Other Amount </b>$</label>
                        <input type="number" name="amount" id="amou" value="" > <span style="color:red" > <?php echo $AmountErr; ?>  </td>
                </tr>

                <tr>
                    <td align="right"><b> <label>Recurring Donation </label></b> </td>
                    <td>
                        <input type="checkbox" value=""> I am interested in giving a regular basis.

                    </td>
                </tr>

                <tr>
                    <td align="right"> <label>(Check if yes)</label> </td>
                </tr>

                <tr>
                    <td></td>
                    <td> <label> Monthly Credit Card $</label>
                        <input type="number" name="amount" value=""> For <input type="number" value=""> Months</td>
                </tr>





                <tr>
                    <td align="left" colspan=""="2">
                        <h1 style="color:red"><b>Honorarium and Memorial Donation Information</b></h1>
                    </td>
                </tr>


                <tr>
                    <td align="right"> <label> <b>I would like to make this <br> donation </b></label> </td>
                    <td> <input type="radio" name="honor" value=""> To Honor
                    </td>
                </tr>


                <tr>
                    <td></td>
                    <td> <input type="radio" name="honor" value=""> In Memory Of
                    </td>
                </tr>

                <tr>
                    <td align="right"> <label> <b>Name </b> </label> </td>
                    <td> <input type="text" name="name" value=""> </td>
                </tr>

                <tr>
                    <td align="right"> <label> <b>Acknowledge Donation to</b> </label> </td>
                    <td> <input type="text" name="Acknowledge" value=""> </td>
                </tr>

                <tr>
                    <td align="right"> <label> <b>Address </b> </label> </td>
                    <td> <input type="text" name="add" value=""> </td>
                </tr>

                <tr>
                    <td align="right"> <label> <b>City </b> </label> </td>
                    <td> <input type="text" name="city" value=""> </td>
                </tr>

                <tr>
                    <td align="right"> <label><b>State <b /></label> </td>
                    <td>
                        <select name="State">
                            <option value="" disabled selected>Select a State...</option>
                            <option value="newyork">New york</option>
                            <option value="london">London</option>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td align="right"> <label> <b>Zip </b> </label> </td>
                    <td> <input type="number" name="zip" value=""> </td>
                </tr>

                <tr>
                    <td align="left" colspan=""="2">
                        <h1 style="color:red"><b>Additional Information</b></h1>
                    </td>
                </tr>

                <tr>
                    <td align="left" colspan=""=""><label>Please enter your name, company or organization as you would
                            like it to appear in our publications: </label> </td>
                </tr>


                <tr>
                    <td align="right"> <label> <b>Name </b> </label> </td>
                    <td> <input type="text" name="name" value=""> </td>
                </tr>


                <tr>
                    <td align="left" colspan="">
                        <input type="checkbox" value=""> I would like my gift to remain anonymous.
                    </td>
                </tr>
                <tr>
                    <td align="left" colspan="">
                        <input type="checkbox" value=""> My employer offers a matching gift program.I will mail the
                        matching gift form.
                    </td>
                </tr>

                <tr>
                    <td align="left" colspan="">
                        <input type="checkbox" value=""> Please save the cost of acknowledging this gift by not mailing
                        a thank you letter.
                    </td>
                </tr>


                <tr>
                    <td align="right"><label><b>Comments </b><br>
                            (please type any question or feedback <br>here)
                        </label> </td>
                    <td> <textarea name="comments" rows="4" cols="80"></textarea> </td>
                </tr>

                <tr>
                    <td align="right"><label><b>How may we contact you?</b></label></td>
                    <td><input type="checkbox" value=""> E-mail</td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="checkbox" value=""> Postal Mail</td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="checkbox" value=""> Telephone</td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="checkbox" value=""> Fax</td>
                </tr>

                <tr>
                    <td align="left" colspan=""=""><label>I would like to receive newsletters and Information about
                            special events by: </label> </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" value=""> E-mail</td>
                </tr>


                <tr>
                    <td></td>
                    <td><input type="checkbox" value=""> Postal Mail</td>
                </tr>

                <tr>
                    <td align="left" colspan=""><input type="checkbox" value=""> I would like information about
                        volunteerning with the</td>
                </tr>

                <tr>
                    <td align="left" colspan="2"><input type="text" name="Vname" value=""></td>
                </tr>
                <tr>
                    <td align="right"> <input type="submit" name="Reset" value="Reset"> </td>
                    <td align="left"> <input type="submit" name="Continue" value="Continue"> </td>
                </tr>

            </table>
        </div>

    </form>
      <script>
$(document).ready(function(){
  $("#fifty").click(function(){
    $("#amou").val(60);
    $( "#amou" ).prop( "disabled", true );
  });
  $("#seventyfive").click(function(){
    $("#amou").val(85);
    $( "#amou" ).prop( "disabled", true );
  });
  $("#hundread").click(function(){
    $("#amou").val(200);
    $( "#amou" ).prop( "disabled", true );
  });
  $("#twofifty").click(function(){
    $("#amou").val(350);
    $( "#amou" ).prop( "disabled", true );
  });
});
</script>

  

    



</body>

</html>
