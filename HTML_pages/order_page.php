
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<title>Bestel Nu</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
<link rel="stylesheet" type="text/css" href="../css/detail.css" >

</head>
<body>
<div id="doc" class="yui-t1">
 <!-- Menu -->
 <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../index.html">Home</a>
  <a href="about.html">Contact & About</a>
  <a href="admin_login.html">Admin login</a>
  <a><u>Product</u></a>
</div>
  <div id="bd">
    <div id="yui-main">
      <div class="yui-b">
        <div class="content">       <div class="grid-container">
          <div style="float: left;">
         <form method="POST">
           <fieldset>
             <legend><strong>personal details</strong></legend>
             <span>
              <em>*first name</em>
              <input tabindex="number" id="fnaam" name="fnaam" required style="height: 20px; float: right;" placeholder="first name">
             </span>
             <br>
             <br>
             <span>
              <em>*last name</em>
              <input tabindex="number" id="achternaam" name="achternaam" required style="height: 20px; float: right;" placeholder="last name">
             </span>
            <br>
             <br>
            <em>*email</em>
            <input tabindex="number" id="email" name="email" inputmode="email" required style="height: 20px; float: right;" placeholder="email">
            <br>
            <br>
            <span>
              <em>phone number</em>
              <input tabindex="number" inputmode="tel" id="telefoon" name="telefoon" required style="height: 20px; float: right;" placeholder="+1 18484929">
             </span>
             <br>
            </fieldset>
            <br>
            <fieldset>
              <legend><strong>delivery adress</strong></legend>
              <span>
               <em>*adress</em>
               <input tabindex="number" id="stad" name="stad" required style="height: 20px; float: right;" placeholder="city">
               <br>
               <br>
               <input tabindex="number" id="adr" name="adr" required style="height: 20px; float: right;" placeholder="PizzaStreet 17">
              </span>
              <br>
              <br>
              <span>
               <em>*postal code</em>
               <input tabindex="number" id="postcode" name="postcode" required style="height: 20px; float: right;" placeholder="1234 AB">
              </span>
             <br>
             </fieldset>
             <br>
             <fieldset>
              <legend><strong>payament</strong></legend>
              <list></list>
              <span>
                <em>*method</em>
                <select tabindex="number" id="payment" name="payment" required name="cars" id="cars" style="float: right; height: 25px; width: 177px;">
                  <option value="credit_card">credit card</option>
                  <option value="paypal">PayPal</option>
                  <option value="IDeal">IDeal</option>
                </select>
              </span>
              <br>
              <br>
               <em>*IBAN (other)</em>
               <input tabindex="number" id="iban" name="iban" style="height: 20px; float: right;" placeholder="(iban) ES7921000813610123456789">
             </fieldset>
            <hr>
            <button id="submit" style="height: 50px; width: 709px;">place order</button>
          </div>
        </form>
        </div></div>
      </div>
    </div>
    <div class="yui-b">
      <div id="secondary">
        <ul>    
            <strong style="font-size: x-large;">Your order:</strong>
            <img src="../img/cinema.png" class="none" height="75" width="75" alt="pizza">
            <br>
            <em>Cinema Ticket</em>
            <br>
            <strong>x1</strong>
            <br>
            <hr>
            <em>total:</em>
            <br>
            <strong>$10,50,-</strong>
      </ul></div>
    </div>
  </div>
  <div id="ft">
    <div id="result">
    <?php

// $_POST is een PHP variabele die form-gegevens opslaat.
// We kunnen controleren of een formulier verzonden is 
//   door het aantal items in $_POST te tellen.
if( count($_POST) > 0 ){
	
	// Vang de gegevens van het formulier op in variabelen.
	$naam = $_POST['fnaam'];
  $achternaam = $_POST['achternaam'];
	$email = $_POST['email'];
	$adres = $_POST['adr'];
  $stad = $_POST['stad'];
  $postcode = $_POST['postcode'];
  $payment = $_POST['payment'];
  $telefoon = $_POST['telefoon'];
  $iban = $_POST['iban'];
	// This is where your magic happens....
	echo "<br><br>";
	
	if(!empty($naam))
	{
		echo "<p class='result'>Voornaam: $naam, </p>";
	}
	else
	{
		echo "<p class='result'>Geen naam ingevult! </p>";
  }
  if(!empty($achternaam))
	{
		echo "<p class='result'>Voornaam: $achternaam, </p>";
	}
	else
	{
		echo "<p class='result'>Geen naam ingevult! </p>";
  }
  if(!empty($email))
	{
		echo "<p class='result'>Email: $email, </p>";
	}
	else
	{
		echo "<p class='result'>Geen email ingevult! </p>";
  }
  if(!empty($adres))
	{
		echo "<p class='result'>Adres: $adres, </p>";
  }
	else
	{
		echo "<p class='result'>Geen adres ingevult! </p>";
  }
  if(!empty($stad))
	{
		echo "<p class='result'>Stad: $stad, </p>";
	}
	else
	{
		echo "<p class='result'>Geen stad ingevult! </p>";
  }
  if(!empty($postcode))
	{
		echo "<p class='result'>Postcode: $postcode, </p>";
	}
	else
	{
		echo "<p class='result'>Geen postcode ingevult! </p>";
  }
  if(!empty($telefoon))
	{
		echo "<p class='result'>Postcode: $telefoon, </p>";
	}
	else
	{
		echo "<p class='result'>Geen telefoon ingevult! </p>";
  }
  if(!empty($payment))
	{
		echo "<p class='result'>Payment method: $payment, </p>";
	}
	else
	{
		echo "<p class='result'>Geen payment method ingevult! </p>";
  }
  if(!empty($iban))
	{
		echo "<p class='result'>Card nummer: $iban, </p>";
	}
	else
	{
		echo "<p class='result'>Geen IBAN nummer.</p>";
	}
}
?>
    </div>
  </div>
</div>
<script src="../js/detail.js"></script>
</body>
</html>
