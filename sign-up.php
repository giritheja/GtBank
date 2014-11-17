<?php 
	session_start();
		
	?>
<html>
<head>
<?php 
if(isset($_SESSION['user']))
echo"<meta http-equiv=\"refresh\" content=\"0; url=./account.php\" />";
?>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<body>
<?php include'navigator.php';
?>
<div id="body">
		<div class="about">
			<h1>Signup</h1>

<?php 
if(isset($_POST['sign-up']))
{
	$con=mysqli_connect('localhost','root','','data');
			if(!(mysqli_connect_errno()))
			{$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			 $address=$_POST['address'];
			 $city=$_POST['city'];
			 $country=$_POST['country'];
			 mysqli_query($con,"INSERT INTO info(firstname,email,password) VALUES ('$fname','$email','$password')");
			 mysqli_query($con,"INSERT INTO info1(lastname,address,city,country) VALUES('$lname','$address','$city','$country')");
			 $con1=mysqli_connect('localhost','root','','history');
			 $dat=mysqli_query($con,"SELECT MAX(ID) AS data FROM info");
			 $data=mysqli_fetch_array($dat);
			 $d=$data['data'];
			 $q="CREATE TABLE h$d(PID INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(PID),date DATE,sender VARCHAR(20),amount INT)";
			 mysqli_query($con1,$q);
			 ?>
			 <div id="reg"><p>You have successfully registered.<br>
			Please <a href="log-in.php">Click Here</a> to Continue
			</div>
			</div>
			</div>
			<?php 
			}
			else
			{echo"problem".mysqli_connect_errno();
			}
		
 }
else
{ ?>

<form action="sign-up.php" method="post" id="reg1" align="center">
<br>
FirstName<input type="text" name="fname" required><br>
LastName<input type="text" name="lname" required><br>
Email<input type="email" name="email" required><br>
Password<input type="password" name="password" required><br>
Address<input type="text" name="address" required><br>
City<input type="text" name="city" required><br>
			Country<select name="country" value="country"><option value="0">-- Choose Country --</option>
			<option value="6" name="al">Albania</option>
			<option value="7" name="dz">Algeria</option>
			<option value="9" name="ad">Andorra</option>
			<option value="10" name="ao">Angola</option>
			<option value="11" name="ai">Anguilla</option>
			<option value="13" name="ag">Antigua And Barbuda</option>
			<option value="14" name="ar">Argentina</option>
			<option value="15" name="am">Armenia</option>
			<option value="16" name="aw">Aruba</option>
			<option value="17" name="au">Australia</option>
			<option value="18" name="at">Austria</option>
			<option value="19" name="az">Azerbaijan Republic</option>
			<option value="20" name="bs">Bahamas</option>
			<option value="21" name="bh">Bahrain</option>
			<option value="22" name="bd">Bangladesh</option>
			<option value="23" name="bb">Barbados</option>
			<option value="25" name="be">Belgium</option>
			<option value="26" name="bz">Belize</option>
			<option value="27" name="bj">Benin</option>
			<option value="28" name="bm">Bermuda</option>
			<option value="29" name="bt">Bhutan</option>
			<option value="30" name="bo">Bolivia</option>
			<option value="31" name="ba">Bosnia and Herzegovina</option>
			<option value="32" name="bw">Botswana</option>
			<option value="33" name="br">Brazil</option>
			<option value="35" name="bn">Brunei</option>
			<option value="36" name="bg">Bulgaria</option>
			<option value="38" name="bf">Burkina Faso</option>
			<option value="40" name="bi">Burundi</option>
			<option value="41" name="kh">Cambodia</option>
			<option value="2" name="ca">Canada</option>
			<option value="43" name="cv">Cape Verde</option>
			<option value="44" name="ky">Cayman Islands</option>
			<option value="47" name="cl">Chile</option>
			<option value="48" name="cn">China</option>
			<option value="51" name="co">Colombia</option>
			<option value="52" name="km">Comoros</option>
			<option value="54" name="ck">Cook Islands</option>
			<option value="55" name="cr">Costa Rica</option>
			<option value="57" name="hr">Croatia</option>
			<option value="248" name="cw">Curacao</option>
			<option value="59" name="cy">Cyprus</option>
			<option value="60" name="cz">Czech Republic</option>
			<option value="53" name="cd">Democratic Republic of the Congo</option>
			<option value="61" name="dk">Denmark</option>
			<option value="62" name="dj">Djibouti</option>
			<option value="63" name="dm">Dominica</option>
			<option value="64" name="do">Dominican Republic</option>
			<option value="66" name="ec">Ecuador</option>
			<option value="67" name="eg">Egypt</option>
			<option value="68" name="sv">El Salvador</option>
			<option value="71" name="ee">Estonia</option>
			<option value="72" name="et">Ethiopia</option>
			<option value="73" name="fk">Falkland Islands</option>
			<option value="74" name="fo">Faroe Islands</option>
			<option value="179" name="kn">Federation of Saint Kitts and Nevis</option>
			<option value="75" name="fj">Fiji</option>
			<option value="76" name="fi">Finland</option>
			<option value="77" name="fr">France</option>
			<option value="78" name="gf">French Guiana</option>
			<option value="79" name="pf">French Polynesia</option>
			<option value="80" name="ga">Gabon Republic</option>
			<option value="81" name="gm">Gambia</option>
			<option value="83" name="ge">Georgia</option>
			<option value="84" name="de">Germany</option>
			<option value="85" name="gh">Ghana</option>
			<option value="86" name="gi">Gibraltar</option>
			<option value="87" name="gr">Greece</option>
			<option value="88" name="gl">Greenland</option>
			<option value="89" name="gd">Grenada</option>
			<option value="90" name="gp">Guadeloupe</option>
			<option value="92" name="gt">Guatemala</option>
			<option value="94" name="gn">Guinea</option>
			<option value="95" name="gw">Guinea-Bissau</option>
			<option value="96" name="gy">Guyana</option>
			<option value="97" name="ht">Haiti</option>
			<option value="98" name="hn">Honduras</option>
			<option value="99" name="hk">Hong Kong</option>
			<option value="100" name="hu">Hungary</option>
			<option value="101" name="is">Iceland</option>
			<option value="1" name="in">India</option>
			<option value="102" name="id">Indonesia</option>
			<option value="105" name="ie">Ireland</option>
			<option value="106" name="il">Israel</option>
			<option value="107" name="it">Italy</option>
			<option value="108" name="jm">Jamaica</option>
			<option value="109" name="jp">Japan</option>
			<option value="110" name="jo">Jordan</option>
			<option value="111" name="kz">Kazakhstan</option>
			<option value="112" name="ke">Kenya</option>
			<option value="113" name="ki">Kiribati</option>
			<option value="116" name="kw">Kuwait</option>
			<option value="117" name="kg">Kyrgyzstan</option>
			<option value="118" name="la">Laos</option>
			<option value="119" name="lv">Latvia</option>
			<option value="121" name="ls">Lesotho</option>
			<option value="124" name="li">Liechtenstein</option>
			<option value="125" name="lt">Lithuania</option>
			<option value="126" name="lu">Luxembourg</option>
			<option value="127" name="mo">Macau</option>
			<option value="128" name="mk">Macedonia</option>
			<option value="129" name="mg">Madagascar</option>
			<option value="130" name="mw">Malawi</option>
			<option value="131" name="my">Malaysia</option>
			<option value="132" name="mv">Maldives</option>
			<option value="133" name="ml">Mali</option>
			<option value="134" name="mt">Malta</option>
			<option value="136" name="mq">Martinique</option>
			<option value="137" name="mr">Mauritania</option>
			<option value="138" name="mu">Mauritius</option>
			<option value="139" name="yt">Mayotte</option>
			<option value="140" name="mx">Mexico</option>
			<option value="142" name="md">Moldova</option>
			<option value="143" name="mc">Monaco</option>
			<option value="144" name="mn">Mongolia</option>
			<option value="244" name="me">Montenegro</option>
			<option value="145" name="ms">Montserrat</option>
			<option value="146" name="ma">Morocco</option>
			<option value="147" name="mz">Mozambique</option>
			<option value="148" name="na">Namibia</option>
			<option value="149" name="nr">Nauru</option>
			<option value="150" name="np">Nepal</option>
			<option value="151" name="nl">Netherlands</option>
			<option value="152" name="an">Netherlands Antilles</option>
			<option value="153" name="nc">New Caledonia</option>
			<option value="154" name="nz">New Zealand</option>
			<option value="155" name="ni">Nicaragua</option>
			<option value="156" name="ne">Niger</option>
			<option value="157" name="ng">Nigeria</option>
			<option value="158" name="nu">Niue</option>
			<option value="159" name="nf">Norfolk Island</option>
			<option value="161" name="no">Norway</option>
			<option value="162" name="om">Oman</option>
			<option value="163" name="pk">Pakistan</option>
			<option value="165" name="pa">Panama</option>
			<option value="166" name="pg">Papua New Guinea</option>
			<option value="167" name="py">Paraguay</option>
			<option value="168" name="pe">Peru</option>
			<option value="169" name="ph">Philippines</option>
			<option value="170" name="pn">Pitcairn Islands</option>
			<option value="171" name="pl">Poland</option>
			<option value="172" name="pt">Portugal</option>
			<option value="174" name="qa">Qatar</option>
			<option value="241" name="cg">Republic of the Congo</option>
			<option value="175" name="re">Reunion</option>
			<option value="176" name="ro">Romania</option>
			<option value="177" name="ru">Russia</option>
			<option value="180" name="lc">Saint Lucia</option>
			<option value="198" name="pm">Saint Pierre and Miquelon</option>
			<option value="181" name="vc">Saint Vincent and the Grenadines</option>
			<option value="182" name="ws">Samoa</option>
			<option value="183" name="sm">San Marino</option>
			<option value="184" name="st">Sao Tome and Principe</option>
			<option value="185" name="sa">Saudi Arabia</option>
			<option value="186" name="sn">Senegal</option>
			<option value="245" name="rs">Serbia</option>
			<option value="187" name="sc">Seychelles</option>
			<option value="189" name="sg">Singapore</option>
			<option value="190" name="sk">Slovakia</option>
			<option value="191" name="si">Slovenia</option>
			<option value="192" name="sb">Solomon Islands</option>
			<option value="194" name="za">South Africa</option>
			<option value="115" name="kr">South Korea</option>
			<option value="195" name="es">Spain</option>
			<option value="196" name="lk">Sri Lanka</option>
			<option value="197" name="sh">St. Helena</option>
			<option value="200" name="sr">Suriname</option>
			<option value="201" name="sj">Svalbard and Jan Mayen Islands</option>
			<option value="202" name="sz">Swaziland</option>
			<option value="203" name="se">Sweden</option>
			<option value="204" name="ch">Switzerland</option>
			<option value="206" name="tw">Taiwan</option>
			<option value="207" name="tj">Tajikistan</option>
			<option value="208" name="tz">Tanzania</option>
			<option value="209" name="th">Thailand</option>
			<option value="210" name="tg">Togo</option>
			<option value="212" name="to">Tonga</option>
			<option value="213" name="tt">Trinidad and Tobago</option>
			<option value="214" name="tn">Tunisia</option>
			<option value="215" name="tr">Turkey</option>
			<option value="216" name="tm">Turkmenistan</option>
			<option value="217" name="tc">Turks and Caicos Islands</option>
			<option value="218" name="tv">Tuvalu</option>
			<option value="219" name="ug">Uganda</option>
			<option value="220" name="ua">Ukraine</option>
			<option value="221" name="ae">United Arab Emirates</option>
			<option value="222" name="gb">United Kingdom</option>
			<option value="3" name="us">United States</option>
			<option value="223" name="uy">Uruguay</option>
			<option value="224" name="uz">Uzbekistan</option>
			<option value="225" name="vu">Vanuatu</option>
			<option value="226" name="va">Vatican City State</option>
			<option value="227" name="ve">Venezuela</option>
			<option value="228" name="vn">Vietnam</option>
			<option value="229" name="vg">Virgin Islands (British)</option>
			<option value="231" name="wf">Wallis and Futuna Islands</option>
			<option value="232" name="eh">Western Sahara</option>
			<option value="234" name="zm">Zambia</option>

		</select><br>
		
		<p>By clicking Sign-Up, you accept<br>the terms and conditions of GTB<br>
		and declare that you are above 18 years.<br>
		<input type="submit" name="sign-up" value="Sign Up">
		</form>
		</div>
		</div>
		<?php
		}
		include'footer.php';
		?>