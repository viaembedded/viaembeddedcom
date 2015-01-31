<?php
/*
 *
 * The template for displaying all product pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package VIA Embedded
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
 			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			<?php endwhile; // end of the loop. ?>
<a name="vepdContact"></a>
<form name="contactForm" class="formformat" id="contactForm" data-parsley-validate data-parsley-excluded="input[type=button], input[type=submit], input[type=reset], input[type=hidden], [disabled], :hidden">
  <input type="hidden" name="real_message" value="">
  <input type="hidden" name="hidWays" value="">
  <input type="hidden" name="hidAppType" value="">
  <input id="userType" name="userType" type="hidden" value="8">
  <input id="txtUserType" name="txtUserType" type="hidden" value="N/A">
  <input id="appType" name="appType" type="hidden" value="11">
  <input id="txtAppType" name="txtAppType" type="hidden" value="N/A">
  <input id="productLine" name="productLine" type="hidden" value="2">


  <fieldset>
    <legend>Contact information</legend>
    <ol>
      <li>
	<label for="firstName">First Name<em>*</em></label>
	<input id="firstName" name="firstName" required>
      </li>
      <li>
	<label for="lastName">Last Name<em>*</em></label>
	<input id="lastName" name="lastName" required>
      </li>
      <li>
	<label for="companyName">Company Name<em>*</em></label>
	<input name="companyName" id="companyName" required>
      </li>
      <li>
	<label for="webSite">Company Website</label>
	<input type="url" name="webSite" id="webSite" data-parsley-trigger="change" >
      </li>
      <li>
	<label for="department">Department</label>
	<input name="department" id="department">
      </li>
      <li>
	<label for="jobTitle">Job Title</label>
	<input type="text" id="jobTitle" name="jobTitle">
      </li>
      <li>
	<label for="email">Email<em>*</em></label>
	<input type="email" name="email" id="email" required>
      </li>
      <li>
	<label for="telephone">Telephone<em>*</em></label>
	<input name="tel" id="telephone" required>
      </li>
      <li>
	<label for="cityName">City<em>*</em></label>
        <input name="cityName" id="cityName" required>
      </li>
      <li>
	<label for="countryId">Country<em>*</em></label><br>
	<select id="countryId" name="countryId" required>
          <option value="4/Albania">Albania</option>
          <option value="5/Algeria">Algeria</option>
          <option value="7/Angola">Angola</option>

                                  <option value="8/Arabia">Arabia</option>

                                  <option value="9/Argentina">Argentina</option>

                                  <option value="10/Armenia">Armenia</option>

                                  <option value="11/Australia">Australia</option>

                                  <option value="12/Austria">Austria</option>

                                  <option value="13/Azerbaijan">Azerbaijan</option>

                                  <option value="14/Bahrain">Bahrain</option>

                                  <option value="15/Belarus">Belarus</option>

                                  <option value="16/Belgium">Belgium</option>

                                  <option value="130/Belize">Belize</option>

                                  <option value="17/Benin">Benin</option>

                                  <option value="141/Bolivia">Bolivia</option>

                                  <option value="18/Bosnia and Herzegowina">Bosnia and Herzegowina</option>

                                  <option value="19/Botswana">Botswana</option>

                                  <option value="142/Brazil">Brazil</option>

                                  <option value="20/Brunei Darussalam">Brunei Darussalam</option>

                                  <option value="21/Bulgaria">Bulgaria</option>

                                  <option value="22/Burkina Faso">Burkina Faso</option>

                                  <option value="23/Burundi">Burundi</option>

                                  <option value="24/Cambodia">Cambodia</option>

                                  <option value="25/Cameroon">Cameroon</option>

                                  <option value="3/Canada">Canada</option>

                                  <option value="26/Central African Republic">Central African Republic</option>

                                  <option value="27/Chad">Chad</option>

                                  <option value="143/Chile">Chile</option>

                                  <option value="2/China">China</option>

                                  <option value="144/Colombia">Colombia</option>

                                  <option value="28/Congo">Congo</option>

                                  <option value="131/Costa Rica">Costa Rica</option>

                                  <option value="29/Cote d’Ivoire">Cote d’Ivoire</option>

                                  <option value="30/Croatia (Hrvatska)">Croatia (Hrvatska)</option>

                                  <option value="139/Cuba">Cuba</option>

                                  <option value="31/Cyprus">Cyprus</option>

                                  <option value="33/Czech Republic">Czech Republic</option>

                                  <option value="34/Denmark">Denmark</option>

                                  <option value="35/Djibouti">Djibouti</option>

                                  <option value="140/Dominican Republic">Dominican Republic</option>

                                  <option value="145/Ecuador">Ecuador</option>

                                  <option value="36/Egypt">Egypt</option>

                                  <option value="132/El Salvador">El Salvador</option>

                                  <option value="37/Eritrea">Eritrea</option>

                                  <option value="38/Estonia">Estonia</option>

                                  <option value="39/Ethiopia">Ethiopia</option>

                                  <option value="146/Falkland Islands">Falkland Islands</option>

                                  <option value="40/Finland">Finland</option>

                                  <option value="41/France">France</option>

                                  <option value="147/French Guiana (France)">French Guiana (France)</option>

                                  <option value="42/Gabon">Gabon</option>

                                  <option value="43/Gambia">Gambia</option>

                                  <option value="44/Georgia">Georgia</option>

                                  <option value="45/Germany">Germany</option>

                                  <option value="46/Ghana">Ghana</option>

                                  <option value="47/Gibraltar">Gibraltar</option>

                                  <option value="48/Greece">Greece</option>

                                  <option value="133/Guatemala">Guatemala</option>

                                  <option value="49/Guinea">Guinea</option>

                                  <option value="50/Guinea - Bissau">Guinea - Bissau</option>

                                  <option value="148/Guyana">Guyana</option>

                                  <option value="138/Haiti">Haiti</option>

                                  <option value="134/Honduras">Honduras</option>

                                  <option value="240/Hong Kong">Hong Kong</option>

                                  <option value="51/Hungary">Hungary</option>

                                  <option value="52/Iceland">Iceland</option>

                                  <option value="53/India">India</option>

                                  <option value="54/Indonesia">Indonesia</option>

                                  <option value="55/Iran">Iran</option>

                                  <option value="56/Iraq">Iraq</option>

                                  <option value="220/Ireland">Ireland</option>

                                  <option value="57/Israel">Israel</option>

                                  <option value="58/Italy">Italy</option>

                                  <option value="59/Japan">Japan</option>

                                  <option value="60/Jordan">Jordan</option>

                                  <option value="61/Kazakhstan">Kazakhstan</option>

                                  <option value="62/Kenya">Kenya</option>

                                  <option value="63/Korea">Korea</option>

                                  <option value="64/Kuwait">Kuwait</option>

                                  <option value="65/Kyrgyzstan Azerbaijan">Kyrgyzstan Azerbaijan</option>

                                  <option value="66/LaoPDR">LaoPDR</option>

                                  <option value="67/Latvia">Latvia</option>

                                  <option value="68/Lebanon">Lebanon</option>

                                  <option value="69/Lesotho">Lesotho</option>

                                  <option value="70/Liberia">Liberia</option>

                                  <option value="71/Libya">Libya</option>

                                  <option value="72/Lithuania">Lithuania</option>

                                  <option value="73/Luxembourg">Luxembourg</option>

                                  <option value="241/Macau">Macau</option>

                                  <option value="74/Macedonia">Macedonia</option>

                                  <option value="75/Malawi">Malawi</option>

                                  <option value="76/Malaysia">Malaysia</option>

                                  <option value="77/Mali">Mali</option>

                                  <option value="78/Mauritania">Mauritania</option>

                                  <option value="250/Mauritius">Mauritius</option>

                                  <option value="137/Mexico">Mexico</option>

                                  <option value="79/Moldova">Moldova</option>

                                  <option value="160/Monaco">Monaco</option>

                                  <option value="80/Morocco">Morocco</option>

                                  <option value="81/Mozambique">Mozambique</option>

                                  <option value="82/Myanmar">Myanmar</option>

                                  <option value="83/Netherlands">Netherlands</option>

                                  <option value="84/New Zealand">New Zealand</option>

                                  <option value="135/Nicaragua">Nicaragua</option>

                                  <option value="85/Niger">Niger</option>

                                  <option value="86/Nigeria">Nigeria</option>

                                  <option value="87/Norway">Norway</option>

                                  <option value="88/Oman">Oman</option>

                                  <option value="200/Pakistan">Pakistan</option>

                                  <option value="89/Palestine">Palestine</option>

                                  <option value="136/Panama">Panama</option>

                                  <option value="149/Paraguay">Paraguay</option>

                                  <option value="150/Peru">Peru</option>

                                  <option value="90/Philippines">Philippines</option>

                                  <option value="91/Poland">Poland</option>

                                  <option value="92/Portugal">Portugal</option>

                                  <option value="93/Qatar">Qatar</option>

                                  <option value="94/Romania">Romania</option>

                                  <option value="95/Russia">Russia</option>

                                  <option value="96/Rwanda">Rwanda</option>

                                  <option value="210/Saudi Arabia">Saudi Arabia</option>

                                  <option value="97/Senegal">Senegal</option>

                                  <option value="230/Serbia">Serbia</option>

                                  <option value="98/Sierra Leone">Sierra Leone</option>

                                  <option value="99/Singapore">Singapore</option>

                                  <option value="100/Slovakia">Slovakia</option>

                                  <option value="101/Slovenia">Slovenia</option>

                                  <option value="102/Somalia">Somalia</option>

                                  <option value="103/South Africa">South Africa</option>

                                  <option value="104/Spain">Spain</option>

                                  <option value="190/Sri Lanka">Sri Lanka</option>

                                  <option value="105/Sudan">Sudan</option>

                                  <option value="151/Suriname">Suriname</option>

                                  <option value="106/Swaziland">Swaziland</option>

                                  <option value="107/Sweden">Sweden</option>

                                  <option value="108/Switzerland">Switzerland</option>

                                  <option value="109/Syria">Syria</option>

                                  <option value="110/Taiwan">Taiwan</option>

                                  <option value="111/Tajikistan">Tajikistan</option>

                                  <option value="112/Tanzania">Tanzania</option>

                                  <option value="113/Thailand">Thailand</option>

                                  <option value="114/Togo">Togo</option>

                                  <option value="115/Tunisia">Tunisia</option>

                                  <option value="116/Turkey">Turkey</option>

                                  <option value="118/Turkmenistan">Turkmenistan</option>

                                  <option value="119/Uganda">Uganda</option>

                                  <option value="120/Ukraine">Ukraine</option>

                                  <option value="121/United Arab Emirates">United Arab Emirates</option>

                                  <option value="122/United Kingdom">United Kingdom</option>

                                  <option value="152/Uruguay">Uruguay</option>

                                  <option value="1/USA">USA</option>

                                  <option value="123/Uzbekistan">Uzbekistan</option>

                                  <option value="153/Venezuela">Venezuela</option>

                                  <option value="124/Vietnam">Vietnam</option>

                                  <option value="125/Western Sahara">Western Sahara</option>

                                  <option value="126/Yemen">Yemen</option>

                                  <option value="127/Yugoslavia">Yugoslavia</option>

                                  <option value="128/Zambia">Zambia</option>

                                  <option value="129/Zimbabwe">Zimbabwe</option>

                                  <option value="170/zc">zc</option>

                                  <option value="262/Western Samoa">Western Samoa</option>

                                  <option value="310/VW-Taiwan">VW-Taiwan</option>

                                  <option value="323/VW-USA">VW-USA</option>

                                  <option value="322/VW-China-South">VW-China-South</option>

                                  <option value="321/VW-China-East">VW-China-East</option>

                                  <option value="320/VW-China-North">VW-China-North</option>

                                  <option value="280/Puerto Rico">Puerto Rico</option>

                                  <option value="300/Montenegro">Montenegro</option>

                                  <option value="290/Bangladesh">Bangladesh</option>

                                  <option value="270/Liechtenstein">Liechtenstein</option>

                                  <option value="260/Tuvalu">Tuvalu</option>

                                  <option value="261/COCOS Islands">COCOS Islands</option>

                                </select>
      </li>
      <li id="spaState" class="sectionShow">
      </li>
    </ol>
  </fieldset>

  <fieldset>
    <legend>Inquiry</legend>
    <ol>
      <li>
	<fieldset>
	  <legend>You need to contact<em>*</em></legend>
	  <label><input name="contactId" type="radio" id="contactSales" value="1/Sales Contact" checked> Sales</label>
	  <label><input name="contactId" type="radio" id="contactTechnician" value="2/Technician Contact" id="contactIdTechnician"> Technical support</label>
	</fieldset>
      </li>
      <li>
	<label for="mb">Product of interest<em>*</em></label><br>
	<select id="mb" name="mb" required>
	  <option value="-1" selected="selected">Please Select a Product</option>
          <option value="EPIA-M720/1590" style="background-color:#FFFDE5;">EPIA-M720</option>
          <option value="EPIA-M830/1190" style="background-color:#FFFDE5;">EPIA-M830</option>
          <option value="EPIA-M840/1230" style="background-color:#FFFDE5;">EPIA-M840</option>
          <option value="EPIA-M850/1290" style="background-color:#FFFDE5;">EPIA-M850</option>
          <option value="EPIA-M860/1510" style="background-color:#FFFDE5;">EPIA-M860</option>
          <option value="EPIA-M900/1550" style="background-color:#FFFDE5;">EPIA-M900</option>
          <option value="EPIA-M910/1810" style="background-color:#FFFDE5;">EPIA-M910</option>
          <option value="EPIA-M920/1893" style="background-color:#FFFDE5;">EPIA-M920</option>
          <option value="EPIA-N800/1030" style="background-color:#FFFDE5;">EPIA-N800</option>
          <option value="EPIA-P720/950" style="background-color:#FFFDE5;">EPIA-P720</option>
          <option value="EPIA-P820/1050" style="background-color:#FFFDE5;">EPIA-P820</option>
          <option value="EPIA-P830/1310" style="background-color:#FFFDE5;">EPIA-P830</option>
          <option value="EPIA-P900/1670" style="background-color:#FFFDE5;">EPIA-P900</option>
          <option value="EPIA-P910/1950" style="background-color:#FFFDE5;">EPIA-P910</option>
          <option value="VAB-1000 (Pico-ITX)/2190" style="background-color:#FFFDE5;">VAB-1000 (Pico-ITX)</option>
          <option value="VAB-600 (Pico-ITX)/2070" style="background-color:#FFFDE5;">VAB-600 (Pico-ITX)</option>
          <option value="VAB-800 (Pico-ITX)/1930" style="background-color:#FFFDE5;">VAB-800 (Pico-ITX)</option>
          <option value="VAB-820 (Pico-ITX)/2150" style="background-color:#FFFDE5;">VAB-820 (Pico-ITX)</option>
          <option value="VB7008/1591" style="background-color:#FFFDE5;">VB7008</option>
          <option value="VB7009/1770" style="background-color:#FFFDE5;">VB7009</option>
          <option value="VB8004/1530" style="background-color:#FFFDE5;">VB8004</option>
          <option value="VE-900/1730" style="background-color:#FFFDE5;">VE-900</option>
          <option value="VNT9271 USB Module / Dongle/1891" style="background-color:#FFFDE5;">VNT9271 USB Module / Dongle</option>
          <option value="VNT9485 MiniPCIe Module/1892" style="background-color:#FFFDE5;">VNT9485 MiniPCIe Module</option>
          <option value="VT6070/2090" style="background-color:#FFFDE5;">VT6070</option>
          <option value="AMOS-3001 (Pico-ITX)/1051" style="background-color:#FFE5E5;">AMOS-3001 (Pico-ITX)</option>
          <option value="AMOS-3002 (Pico-ITX)/1870" style="background-color:#FFE5E5;">AMOS-3002 (Pico-ITX)</option>
          <option value="AMOS-3003 (Pico-ITX)/2210" style="background-color:#FFE5E5;">AMOS-3003 (Pico-ITX)</option>
          <option value="AMOS-5000 (EITX-3000)/990" style="background-color:#FFE5E5;">AMOS-5000 (EITX-3000)</option>
          <option value="AMOS-5001 (EITX-3001)/1490" style="background-color:#FFE5E5;">AMOS-5001 (EITX-3001)</option>
          <option value="AMOS-5002 (EITX-3002)/1690" style="background-color:#FFE5E5;">AMOS-5002 (EITX-3002)</option>
          <option value="AMOS-5210 (Kiosk)/1251" style="background-color:#FFE5E5;">AMOS-5210 (Kiosk)</option>
          <option value="AMOS-800 (Pico-ITX, ARM based)/2030" style="background-color:#FFE5E5;">AMOS-800 (Pico-ITX, ARM based)</option>
          <option value="AMOS-820 (Pico-ITX, ARM based)/2170" style="background-color:#FFE5E5;">AMOS-820 (Pico-ITX, ARM based)</option>
          <option value="ART-3000 (Automation)/1110" style="background-color:#FFE5E5;">ART-3000 (Automation)</option>
          <option value="ART-5450 (Fleet Management)/1430" style="background-color:#FFE5E5;">ART-5450 (Fleet Management)</option>
          <option value="ARTiGO A1150 (Pico-ITX)/1650" style="background-color:#FFE5E5;">ARTiGO A1150 (Pico-ITX)</option>
          <option value="ARTiGO A1200/1850" style="background-color:#FFE5E5;">ARTiGO A1200</option>
          <option value="ARTiGO A1250 (Pico-ITX)/1990" style="background-color:#FFE5E5;">ARTiGO A1250 (Pico-ITX)</option>
          <option value="ARTiGO A1300/2230" style="background-color:#FFE5E5;">ARTiGO A1300</option>
          <option value="ARTiGO A800 (Pico-ITX, ARM based)/2050" style="background-color:#FFE5E5;">ARTiGO A800 (Pico-ITX, ARM based)</option>
          <option value="ARTiGO A900 (Pico-ITX, ARM based)/2251" style="background-color:#FFE5E5;">ARTiGO A900 (Pico-ITX, ARM based)</option>
          <option value="VIPRO VP7710/890" style="background-color:#FFE5E5;">VIPRO VP7710</option>
	  <option value="VIPRO VP7910/2110" style="background-color:#FFE5E5;">VIPRO VP7910</option>
	  <option value="Viega Tablet/2310" style="background-color:#FFE5E5;">Viega Tablet</option>
          <option value="ALMA-3000 Series/2010" style="background-color:#E5FFE5;">ALMA-3000 Series</option>
          <option value="VID-1000 Series (Open frame)/1410" style="background-color:#E5FFE5;">VID-1000 Series (Open frame)</option>
          <option value="VID-2000 Series/1411" style="background-color:#E5FFE5;">VID-2000 Series</option>
          <option value="CX700M (Single-Chip)/1610" style="background-color:#FFF3E5;">CX700M (Single-Chip)</option>
          <option value="VIA C7&lt;sup&gt;®&lt;/sup&gt;/1371" style="background-color:#FFF3E5;">VIA C7®</option>
	  <option value="VIA Eden® ULV Fanless/1372" style="background-color:#FFF3E5;">VIA Eden® ULV Fanless</option>
          <option value="VIA Eden® X2 (Dual Core)/910" style="background-color:#FFF3E5;">VIA Eden® X2 (Dual Core)</option>
          <option value="VIA Nano® E-Series/1370" style="background-color:#FFF3E5;">VIA Nano® E-Series</option>
          <option value="VIA Nano® X2 E-Series (Dual Core)/1373" style="background-color:#FFF3E5;">VIA Nano® X2 E-Series (Dual Core)</option>
          <option value="VIA QuadCore E-Series/1830" style="background-color:#FFF3E5;">VIA QuadCore E-Series</option>
          <option value="VX11 Media System Processor/1951" style="background-color:#FFF3E5;">VX11 Media System Processor</option>
          <option value="VX800 (Single-Chip)/1393" style="background-color:#FFF3E5;">VX800 (Single-Chip)</option>
          <option value="VX855 (Single-Chip)/1391" style="background-color:#FFF3E5;">VX855 (Single-Chip)</option>
          <option value="VX900/H (Single-Chip)/1392" style="background-color:#FFF3E5;">VX900/H (Single-Chip)</option>
          <option value="COMe-8X80 (Basic, Type 2)/1271" style="background-color:#E5F9FF;">COMe-8X80 (Basic, Type 2)</option>
          <option value="COMe-8X90 (Basic, Type 6)/1571" style="background-color:#E5F9FF;">COMe-8X90 (Basic, Type 6)</option>
          <option value="COMe-8X91 (Mini, Type 10)/1710" style="background-color:#E5F9FF;">COMe-8X91 (Mini, Type 10)</option>
          <option value="COMe-8X92 (Compact, Type 6)/1790" style="background-color:#E5F9FF;">COMe-8X92 (Compact, Type 6)</option>
          <option value="COMe-9X90 (Basic, Type 6)/2130" style="background-color:#E5F9FF;">COMe-9X90 (Basic, Type 6)</option>
          <option value="ETX-8X90/1970" style="background-color:#E5F9FF;">ETX-8X90</option>
          <option value="ALTA DS 2/2250">ALTA DS 2</option>
          <option value="ALTA DS System/1910">ALTA DS System</option>
          <option value="AMOS-1000 (Mini-ITX) (EOL)/930" style="background-color:#EDEDED;">AMOS-1000 (Mini-ITX) (EOL)</option>
          <option value="AMOS-2000 (Nano-ITX) (EOL)/931" style="background-color:#EDEDED;">AMOS-2000 (Nano-ITX) (EOL)</option>
          <option value="AMOS-3000 (Pico-ITX) (EOL)/870" style="background-color:#EDEDED;">AMOS-3000 (Pico-ITX) (EOL)</option>
          <option value="AMOS-5110 (POI, Digital Signage) (EOL)/1252" style="background-color:#EDEDED;">AMOS-5110 (POI, Digital Signage) (EOL)</option>
          <option value="AMOS-5430 (Fleet Management) (EOL)/1250" style="background-color:#EDEDED;">AMOS-5430 (Fleet Management) (EOL)</option>
	  <option value="ARTiGO A1000 (Pico-ITX) (EOL)/1352" style="background-color:#EDEDED;">ARTiGO A1000 (Pico-ITX) (EOL)</option>
	  <option value="ARTiGO A1100 (Pico-ITX) (EOL)/1351" style="background-color:#EDEDED;">ARTiGO A1100 (Pico-ITX) (EOL)</option>
	  <option value="ARTiGO A2000 (2-Bay, Nano-ITX) (EOL)/1470" style="background-color:#EDEDED;">ARTiGO A2000 (2-Bay, Nano-ITX) (EOL)</option>
          <option value="CN700 North Bridge (EOL)/1631" style="background-color:#EDEDED;">CN700 North Bridge (EOL)</option>
          <option value="CN896 North Bridge (EOL)/1630" style="background-color:#EDEDED;">CN896 North Bridge (EOL)</option>
          <option value="COME7N80 (EOL)/1270" style="background-color:#EDEDED;">COME7N80 (EOL)</option>
          <option value="EITX-3000/810" style="background-color:#EDEDED;">EITX-3000</option>
          <option value="EITX-3001/1210" style="background-color:#EDEDED;">EITX-3001</option>
          <option value="EITX-3002/1570" style="background-color:#EDEDED;">EITX-3002</option>
          <option value="EPIA (EOL)/21" style="background-color:#EDEDED;">EPIA (EOL)</option>
          <option value="EPIA CL-Series Mini-ITX Board (EOL)/181" style="background-color:#EDEDED;">EPIA CL-Series Mini-ITX Board (EOL)</option>
          <option value="EPIA CN (EOL)/400" style="background-color:#EDEDED;">EPIA CN (EOL)</option>
          <option value="EPIA EK-Series Mini-ITX Board (EOL)/420" style="background-color:#EDEDED;">EPIA EK-Series Mini-ITX Board (EOL)</option>
          <option value="EPIA EN (EOL)/399" style="background-color:#EDEDED;">EPIA EN (EOL)</option>
          <option value="EPIA EX (EOL)/450" style="background-color:#EDEDED;">EPIA EX (EOL)</option>
          <option value="EPIA LN (EOL)/473" style="background-color:#EDEDED;">EPIA LN (EOL)</option>
          <option value="EPIA LT (EOL)/510" style="background-color:#EDEDED;">EPIA LT (EOL)</option>
          <option value="EPIA M (EOL)/81" style="background-color:#EDEDED;">EPIA M (EOL)</option>
          <option value="EPIA MII-Series Mini-ITX Board (EOL)/202" style="background-color:#EDEDED;">EPIA MII-Series Mini-ITX Board (EOL)</option>
          <option value="EPIA ML (EOL)/301" style="background-color:#EDEDED;">EPIA ML (EOL)</option>
          <option value="EPIA MS-Series Mini-ITX Board (EOL)/281" style="background-color:#EDEDED;">EPIA MS-Series Mini-ITX Board (EOL)</option>
          <option value="EPIA N (EOL)/221" style="background-color:#EDEDED;">EPIA N (EOL)</option>
          <option value="EPIA NL (EOL)/361" style="background-color:#EDEDED;">EPIA NL (EOL)</option>
          <option value="EPIA NR (EOL)/530" style="background-color:#EDEDED;">EPIA NR (EOL)</option>
          <option value="EPIA NX (EOL)/470" style="background-color:#EDEDED;">EPIA NX (EOL)</option>
          <option value="EPIA PD-Series Mini-ITX Board (EOL)/241" style="background-color:#EDEDED;">EPIA PD-Series Mini-ITX Board (EOL)</option>
          <option value="EPIA PE (EOL)/451" style="background-color:#EDEDED;">EPIA PE (EOL)</option>
          <option value="EPIA PX (EOL)/472" style="background-color:#EDEDED;">EPIA PX (EOL)</option>
          <option value="EPIA SN (EOL)/550" style="background-color:#EDEDED;">EPIA SN (EOL)</option>
          <option value="EPIA SP-Series Mini-ITX Board (EOL)/261" style="background-color:#EDEDED;">EPIA SP-Series Mini-ITX Board (EOL)</option>
          <option value="EPIA TC-Series Mini-ITX Board (EOL)/201" style="background-color:#EDEDED;">EPIA TC-Series Mini-ITX Board (EOL)</option>
          <option value="EPIA V-Series Mini-ITX Board (EOL)/141" style="background-color:#EDEDED;">EPIA V-Series Mini-ITX Board (EOL)</option>
          <option value="EPIA-M700 (EOL)/670" style="background-color:#EDEDED;">EPIA-M700 (EOL)</option>
          <option value="EPIA-M800 (EOL)/1010" style="background-color:#EDEDED;">EPIA-M800 (EOL)</option>
          <option value="EPIA-N700 (EOL)/710" style="background-color:#EDEDED;">EPIA-N700 (EOL)</option>
          <option value="EPIA-P700 (EOL)/690" style="background-color:#EDEDED;">EPIA-P700 (EOL)</option>
          <option value="EPIA-P710 (EOL)/730" style="background-color:#EDEDED;">EPIA-P710 (EOL)</option>
          <option value="I/O Cards: EMIO-3110 (EOL)/1130" style="background-color:#EDEDED;">I/O Cards: EMIO-3110 (EOL)</option>
          <option value="I/O Cards: EMIO-3210/1131" style="background-color:#EDEDED;">I/O Cards: EMIO-3210</option>
          <option value="I/O Cards: EMIO-3430 (EOL)/1150" style="background-color:#EDEDED;">I/O Cards: EMIO-3430 (EOL)</option>
          <option value="I/O Cards: EMIO-3450/1450" style="background-color:#EDEDED;">I/O Cards: EMIO-3450</option>
          <option value="IVP-7500 (EOL)/790" style="background-color:#EDEDED;">IVP-7500 (EOL)</option>
          <option value="M&#39;SERV S2100 (2-Bay, Nano-ITX) (EOL)/1350" style="background-color:#EDEDED;">M'SERV S2100 (2-Bay, Nano-ITX) (EOL)</option>
          <option value="MMC7000 (EOL)/591" style="background-color:#EDEDED;">MMC7000 (EOL)</option>
          <option value="NAB 7400 / 7410 (EOL)/590" style="background-color:#EDEDED;">NAB 7400 / 7410 (EOL)</option>
          <option value="NAB7500 (EOL)/570" style="background-color:#EDEDED;">NAB7500 (EOL)</option>
          <option value="NAS7040 (EOL)/750" style="background-color:#EDEDED;">NAS7040 (EOL)</option>
          <option value="NAS7800 Board (EOL)/850" style="background-color:#EDEDED;">NAS7800 Board (EOL)</option>
          <option value="NFR7500 (1U) (EOL)/341" style="background-color:#EDEDED;">NFR7500 (1U) (EOL)</option>
          <option value="NSD7200 (2-Bay) (EOL)/22" style="background-color:#EDEDED;">NSD7200 (2-Bay) (EOL)</option>
          <option value="NSD7800 (8-Bay, Desktop) (EOL)/101" style="background-color:#EDEDED;">NSD7800 (8-Bay, Desktop) (EOL)</option>
          <option value="NSR7800 (8-Bay, 2U) (EOL)/471" style="background-color:#EDEDED;">NSR7800 (8-Bay, 2U) (EOL)</option>
          <option value="QSM-8Q90/1572" style="background-color:#EDEDED;">QSM-8Q90</option>
          <option value="VB6002 Mini-ITX Board (EOL)/430" style="background-color:#EDEDED;">VB6002 Mini-ITX Board (EOL)</option>
          <option value="VB7001 (EOL)/490" style="background-color:#EDEDED;">VB7001 (EOL)</option>
          <option value="VB7002 (EOL)/630" style="background-color:#EDEDED;">VB7002 (EOL)</option>
          <option value="VB7007 (EOL)/770" style="background-color:#EDEDED;">VB7007 (EOL)</option>
          <option value="VB8001 (EOL)/711" style="background-color:#EDEDED;">VB8001 (EOL)</option>
          <option value="VB8002 (EOL)/830" style="background-color:#EDEDED;">VB8002 (EOL)</option>
          <option value="VB8003 (EOL)/970" style="background-color:#EDEDED;">VB8003 (EOL)</option>
          <option value="VIPRO VP7806 (EOL)/1170" style="background-color:#EDEDED;">VIPRO VP7806 (EOL)</option>
          <option value="VIPRO VP7815 (EOL)/1171" style="background-color:#EDEDED;">VIPRO VP7815 (EOL)</option>
          <option value="VNT6656 USB Module / Dongle (EOL)/1890" style="background-color:#EDEDED;">VNT6656 USB Module / Dongle (EOL)</option>
          <option value="VT-310DP Mini-ITX Board (EOL)/321" style="background-color:#EDEDED;">VT-310DP Mini-ITX Board (EOL)</option>
          <option value="eH1 (EOL)/1330" style="background-color:#EDEDED;">eH1 (EOL)</option>
          <option value="vmpc vm7700 (EOL)/891" style="background-color:#EDEDED;">vmpc vm7700 (EOL)</option>
	</select> &nbsp;or fill in other&nbsp;:&nbsp;
	<input type="text" id="txtInProductModel" name="txtInProductModel" data-parsley-conditionalrequired='["[name=\"mb\"]", "-1"]' data-parsley-validate-if-empty data-parsley-success-class="" data-parsley-conditionalrequired-message="Please specify if you did not choose from the list!">
      </li>
      <li>
	<label for="AppType">You are developing for this kind of application<em>*</em></label><br>
	<p>
	  <input value="1" type="checkbox" name="AppType" id="AppType1" data-parsley-mincheck="1" data-parsley-error-message="Please select at least 1" data-parsley-trigger="change" required><label for="AppType1">Digital Signage</label>
	  <nobr><input value="2" type="checkbox" name="AppType" id="AppType2"><label for="AppType2">Thin Client</label></nobr>
	  <nobr><input value="4" type="checkbox" name="AppType" id="AppType4"><label for="AppType4">Network Application</label></nobr>
          <nobr><input value="6" type="checkbox" name="AppType" id="AppType6"><label for="AppType6">POS</label></nobr>
          <nobr><input value="9" type="checkbox" name="AppType" id="AppType9"><label for="AppType9">Arcade Game (Gaming)</label></nobr>
          <nobr><input value="10" type="checkbox" name="AppType" id="AppType10"><label for="AppType10">Medical</label></nobr>
          <nobr><input value="7" type="checkbox" name="AppType" id="AppType7"><label for="AppType7">Kiosk</label></nobr>
          <nobr><input value="12" type="checkbox" name="AppType" id="AppType12"><label for="AppType12">Automation</label></nobr>
          <nobr><input value="13" type="checkbox" name="AppType" id="AppType13"><label for="AppType13">Transportation</label></nobr>
          <nobr><input value="14" type="checkbox" name="AppType" id="AppType14"><label for="AppType14">ATM</label></nobr>
          <nobr><input value="15" type="checkbox" name="AppType" id="AppType15"><label for="AppType15">NVR/Surveillance</label></nobr>
          <nobr><input value="16" type="checkbox" name="AppType" id="AppType16"><label for="AppType16">Healthcare</label></nobr>
          <nobr><input value="17" type="checkbox" name="AppType" id="AppType17"><label for="AppType17">Video Wall</label></nobr>
          <nobr><input value="18" type="checkbox" name="AppType" id="AppType18"><label for="AppType18">In-vehicle entertainment</label></nobr><br>
          <nobr><input value="11" type="checkbox" name="AppType" id="AppTypeOther"><label for="AppTypeOther">Other:</label>
	    <input id="AppType_text11" name="AppType_text11" value="" data-parsley-conditionalchecked='AppTypeOther' data-parsley-validate-if-empty data-parsley-success-class="" data-parsley-conditionalchecked-message='Please specify if you selected "Other"!'></nobr>
	</p>
      </li>
      <li class=hidden id="showBoughtFromInfo">
	<label for="boughtFrom">Retailer or distributor you got your item from</label>
	<input name="boughtFrom" id="boughtFrom">
      </li>
      <li class="hidden" id="showcpuInfo">
	<label for="cpu">CPU</label>
	<input name="cpu" id="cpu">
      </li>
      <li class="hidden" id="showosInfo">
	<label for="os">Operating System</label>
	<input id="os" name="os">
      </li>
      <li class="hidden" id="showmemInfo">
	<label for="memBrand">Memory Brand</label>
	<input id="memBrand" name="memBrand"></br>
	<label for="memSpeed">Memory Speed</label>
	<input id="memSpeed" name="memSpeed"></br>
      </li>
      <li class="hidden" id="showvideoInfo">
         <label for="video">Video card</label>
	 <input name="video" id="video">
      </li>
      <li>
	<label for="message">Message<em>*</em></label>
	<textarea name="message" id="message" placeholder="How may we help?" required data-parsley-minlength="20" data-parsley-error-message="Please add your message!"></textarea>
      </li>
    </ol>
  </fieldset>

  <fieldset>
    <legend>Analytics</legend>
    <ol>
      <li>
	<fieldset>
	  <legend>How did you get to this website?</legend>
	  <input name="howToGetThisWebsite" type="radio" id="comeAd" value="369">&nbsp;<label for>Online advertisement</label>
	  <input name="howToGetThisWebsite" type="radio" id="comeSearch" value="367">&nbsp;<label for="comeSearcg">Search</label>
	  <input name="howToGetThisWebsite" type="radio" id="comeMte" value="371">&nbsp;<label for="comeMte"> Mte magazine</label>
	  <input name="howToGetThisWebsite" type="radio" id="comeEecat" value="926">&nbsp;<label for="comeEecat"> eecatalog.com</label><br>
	  <input name="howToGetThisWebsite" type="radio" id="comeOther" value="374" checked>&nbsp;<label for="comeOther">Other:&nbsp;<input name="howToGetThisWebsiteOther" id="howToGetThisWebsiteOther" type="text" class="form-control" value="" maxlength="30" title="Maximum of 30 characters only" data-parsley-conditionalrequired='["[name=\"howToGetThisWebsite\"]:checked", "374"]' data-parsley-validate-if-empty data-parsley-success-class="" data-parsley-conditionalrequired-message='Please specify if you chose "Other"!'/></label>
	</fieldset>
      </li>
    </ol>
  </fieldset>

  <input name="button" type="submit" class="" id="submit" value="Submit">
</form>

&nbsp;<br>
&nbsp;<br>
&nbsp;<br>
&nbsp;<br>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
