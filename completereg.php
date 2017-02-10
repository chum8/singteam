<?php
require_once("lib-0.php");
load_it_all_up("Register");
//$current_hit = update_hits("audition");
$sta = new human();
$sta->initiate_mysql("");
$sta->update_hits("completereg", "direct");
if (isset($_GET['first_name']) and $_GET['first_name'] != "") $temp_first_name = $_GET['first_name']; else $temp_first_name = "guest";
if (isset($_GET['last_name']) and $_GET['last_name'] != "") $temp_last_name = " ".$_GET['last_name']; else $temp_last_name = "";
if (isset($_GET['gender']) and $_GET['gender'] != "") $temp_gender = $_GET['gender']; else $temp_gender = "";
if (isset($_GET['city']) and $_GET['city'] != "") $temp_city = $_GET['city']; else $temp_city = "";
if (isset($_GET['promo']) and $_GET['promo'] !="") $temp_promo = $_GET['promo']; else $temp_promo = "";
?>																				 
<body>
<div id="all">
<div id="content_background" class="content_centered"><br/>
<img src="1088/images/button-register.jpg" class="content_centered" / >

<div id="content_two_column_container">
<div class="left_column">
<img src="1088/images/photo-girl.jpg" class="bordered_image" />
</div><!--left_column-->

<div class="right_column"> 
<span class="emphasize">

<?php
echo "Welcome, <span class=\"red_it_up\">".$temp_first_name.$temp_last_name."!</span>";
?>

Thank you for your interest in SingTeam!  To finalize your registration process, please fill out this form.  After you have completed this form, you will be assigned a SingTeam ID and will be an official member of SingTeam America!<br/><br/>
I look forward to hearing you sing!<br/>
Best wishes,<br/>
<img src="1088/images/signature.jpg" class="content_centered"/>
</span>
</div><!--right_column-->
</div><!--two_column_container-->


<div id="content_two_column_container">
<div class="left_column">
This registration form is not a payment form.  You will pay the $27/month registration cost directly to your local SingTeam instructor.  If you are interested in SingTeam but don't want to commit to registration yet, you are welcome to come try us for free!  Please contact info@singteam.com or (402) 831 9555 for details.  SingTeam will never share your information with third parties.<br/><br/>
*Required field<br/>
<form action="submitregister.php" method="post" onSubmit="return validate(1, this)">
<!--hidden fields for variables 'first name' 'last name' 'phone 1' 'e-mail 1' 'gender' 'dob'-->
<input type="hidden" name="markettexti[]" /><input type="hidden" name="markettexti[]" /><input type="hidden" name="markettexti[]" /><input type="hidden" name="markettexti[]" /><input type="hidden" name="marketgenderi" /><input type="hidden" name="marketdobi[]"/><input type="hidden" name="marketdobi[]"/><input type="hidden" name="marketdobi[]"/>
<input type="hidden" name="persontexti[]" /><input type="hidden" name="persontexti[]" /><input type="hidden" name="persontexti[]" /><input type="hidden" name="persontexti[]" /><input type="hidden" name="persongenderi" /><input type="hidden" name="persondobi[]"/><input type="hidden" name="persondobi[]"/><input type="hidden" name="persondobi[]"/>
<!--hidden field for pointer person-->
<input type="hidden" name="markettexti[]"/>
<!--hidden field for id-->
<input type="hidden" name="persontexti[]" />
<!--hidden fields for 'id' 'pointer person' 'pointer division'-->
<input type="hidden" name="studenttexti[]" /><input type="hidden" name="studenttexti[]" /><input type="hidden" name="studenttexti[]" />

<div class="full_column">
<span class="emphasize">*Please select your county of residence.</span>
<select name="county" size="1">
<option value ="0"/>
<option value ="1">Adams</option>
<option value ="3">Buffalo</option>
<option value ="1">Clay</option>
<option value ="3">Franklin</option>
<option value ="2">Hall</option>
<option value ="2">Hamilton</option>
<option value ="3">Harlan</option>
<option value ="2">Howard</option>
<option value ="3">Kearney</option>
<option value ="1">Nuckolls</option>
<option value ="3">Phelps</option>
<option value ="1">Webster</option>
<option value = "4">none of the above!</option>
</select>
</div>
<div class="full_column"><br/>Your Name</div>
<div class="full_column">

<span class="five">
Prefix<br/>
<input type="text" name="persontexti[]" size="2" maxlength="4"/></span>
<span class="five">
*First<br/>
<?php 
if ($temp_first_name !="guest") echo "<input type=\"text\" name=\"shtexti[]\" value=\"".$temp_first_name."\"size=\"6\" maxlength=\"30\"/>";
else echo "<input type=\"text\" name=\"shtexti[]\" size=\"6\" maxlength=\"30\"/>";
?>
</span>
<span class="five">
Middle<br/>
<input type="text" name="persontexti[]" size="6" maxlength="30"/></span>
<span class="five">
*Last<br/>
<?php 
if ($temp_last_name !="") echo "<input type=\"text\" name=\"shtexti[]\" value=\"".$temp_last_name."\"size=\"6\" maxlength=\"30\"/>";
else echo "<input type=\"text\" name=\"shtexti[]\" size=\"6\" maxlength=\"30\"/>";
?>
</span>
<span class="five">
Suffix<br/>
<input type="text" name="persontexti[]" size="2" maxlength="4"/></span>
</div><!--full_column-->


<div class="full_column"><span class="four"><br/>
Birth Month<br/>
<select name="shdobi[]" size="1">
<option value ="0"/>
<option value ="1">January</option>
<option value ="2">February</option>
<option value ="3">March</option>
<option value ="4">April</option>
<option value ="5">May</option>
<option value ="6">June</option>
<option value ="7">July</option>
<option value ="8">August</option>
<option value ="9">September</option>
<option value ="10">October</option>
<option value ="11">November</option>
<option value ="12">December</option>
</select>
</span><span class="four"><br/>
Date<br/>
<select name="shdobi[]" size="1">
<option value ="0"/>
<option value ="1">1</option>
<option value ="2">2</option>
<option value ="3">3</option>
<option value ="4">4</option>
<option value ="5">5</option>
<option value ="6">6</option>
<option value ="7">7</option>
<option value ="8">8</option>
<option value ="9">9</option>
<option value ="10">10</option>
<option value ="11">11</option>
<option value ="12">12</option>
<option value ="13">13</option>
<option value ="14">14</option>
<option value ="15">15</option>
<option value ="16">16</option>
<option value ="17">17</option>
<option value ="18">18</option>
<option value ="19">19</option>
<option value ="20">20</option>
<option value ="21">21</option>
<option value ="22">22</option>
<option value ="23">23</option>
<option value ="24">24</option>
<option value ="25">25</option>
<option value ="26">26</option>
<option value ="27">27</option>
<option value ="28">28</option>
<option value ="29">29</option>
<option value ="30">30</option>
<option value ="31">31</option>
</select>
</span><span class="four"><br/>
Year<br/>
<select name="shdobi[]" size="1">
<option value ="0"/>
<option value ="15">2006</option>
<option value ="14">2005</option>
<option value ="13">2004</option>
<option value ="12">2003</option>
<option value ="11">2002</option>
<option value ="10">2001</option>
<option value ="9">2000</option>
<option value ="8">1999</option>
<option value ="7">1998</option>
<option value ="6">1997</option>
<option value ="5">1996</option>
<option value ="4">1995</option>
<option value ="3">1994</option>
<option value ="2">1993</option>
<option value ="1">1992</option>
<option value ="0">1991</option>
<option value ="-1">1990</option>
<option value ="-2">1989</option>
<option value ="-3">1988</option>
<option value ="-4">1987</option>
<option value ="-5">1986</option>
<option value ="-6">1985</option>
<option value ="-7">1984</option>
<option value ="-8">1983</option>
<option value ="-9">1982</option>
<option value ="-10">1981</option>
<option value ="-11">1980</option>
<option value ="-12">1979</option>
<option value ="-13">1978</option>
<option value ="-14">1977</option>
<option value ="-15">1976</option>
<option value ="-16">1975</option>
<option value ="-17">1974</option>
<option value ="-18">1973</option>
<option value ="-19">1972</option>
<option value ="-20">1971</option>
<option value ="-21">1970</option>
<option value ="-22">1969</option>
<option value ="-23">1968</option>
<option value ="-24">1967</option>
<option value ="-25">1966</option>
<option value ="-26">1965</option>
<option value ="-27">1964</option>
<option value ="-28">1963</option>
<option value ="-29">1962</option>
<option value ="-30">1961</option>
<option value ="-31">1960</option>
<option value ="-32">1959</option>
<option value ="-33">1958</option>
<option value ="-34">1957</option>
<option value ="-35">1956</option>
<option value ="-36">1955</option>
<option value ="-37">1954</option>
<option value ="-38">1953</option>
<option value ="-39">1952</option>
<option value ="-40">1951</option>
<option value ="-41">1950</option>
<option value ="-42">1949</option>
<option value ="-43">1948</option>
<option value ="-44">1947</option>
<option value ="-45">1946</option>
<option value ="-46">1945</option>
<option value ="-47">1944</option>
<option value ="-48">1943</option>
<option value ="-49">1942</option>
<option value ="-50">1941</option>
<option value ="-51">1940</option>
<option value ="-52">1939</option>
<option value ="-53">1938</option>
<option value ="-54">1937</option>
<option value ="-55">1936</option>
<option value ="-56">1935</option>
<option value ="-57">1934</option>
<option value ="-58">1933</option>
<option value ="-59">1932</option>
<option value ="-60">1931</option>
<option value ="-61">1930</option>
<option value ="-62">1929</option>
<option value ="-63">1928</option>
<option value ="-64">1927</option>
<option value ="-65">1926</option>
<option value ="-66">1925</option>
<option value ="-67">1924</option>
<option value ="-68">1923</option>
<option value ="-69">1922</option>
<option value ="-70">1921</option>
<option value ="-71">1920</option>
<option value ="-72">1919</option>
<option value ="-73">1918</option>
<option value ="-74">1917</option>
<option value ="-75">1916</option>
<option value ="-76">1915</option>
<option value ="-77">1914</option>
<option value ="-78">1913</option>
<option value ="-79">1912</option>
<option value ="-80">1911</option>


</select></span><span class="four"><br/>
*Gender<br/>
<select name="shgenderi[]" size="1">
<?php
if ($temp_gender == "f") { ?>
<option value ="2">F</option>
<option value ="1">M</option>
<?php } else if ($temp_gender == "m") { ?>
<option value ="1">M</option>
<option value ="2">F</option>
<?php } else { ?>
<option value ="0"/>
<option value ="1">M</option>
<option value ="2">F</option>
<?php } ?>
</select></span>
</div><!--full_column-->

<div class="full_column"><br/>
Social Security # (optional)<br/>
<input type="text" name="persontexti[]" size="9" maxlength="9"/>
</div><!--full_column-->

<div class="full_column">
<span class="two"><br/>*Primary phone # <input type="text" name="shtexti[]" size="14" maxlength="14"/></span>
<span class="two"><br/>*Primary e-mail <input type="text" name="shtexti[]" size="21" maxlength="45"/></span>
</div><!--full_column-->

<div class="full_column">
<input type="checkbox" name="personchecki[]" value="0" />My SingTeam instructor may send text messages to my primary phone # to contact me about important SingTeam matters</div><!--full_column-->

<div class="full_column">
<span class="two"><br/>Secondary contact phone # <input type="text" name="persontexti[]" size="14" maxlength="14"/></span>
<span class="two"><br/>Secondary e-mail <input type="text" name="persontexti[]" size="21" maxlength="45"/></span>
</div><!--full_column-->

<div class="full_column">
<input type="checkbox" name="personchecki[]" value="1" />My SingTeam instructor may send text messages to my secondary phone # to contact me about important SingTeam matters<br/><br/>

<span class="red_it_up">SingTeam<span class="super_script">TM</span> will never share your phone # or e-mail address with third parties.</span>
<br/></div><!--full_column-->

<div class="full_column"><br/>
Website<br/>
<input type="text" name="persontexti[]" size="36" maxlength="60" /><br/></div><!--full_column-->

<div class="full_column">
<span class="four"><br/>
*Street<br/>
<input type="text" name="persontexti[]" size="36" maxlength="75" /></span>
<span class="four"><br/>
*City<br/>
<?php
echo "<input type=\"text\" name=\"persontexti[]\" size=\"20\" maxlength=\"30\" value=\"".$temp_city."\" \>"; ?>
</span>
<span class="four"><br/>
*State<br/>
<input type="text" name="persontexti[]" size="14" maxlength="14" value="Nebraska" /></span>
<span class="four"><br/>
*Zip<br/>
<input type="text" name="persontexti[]" size="10" maxlength="10" /></span>
</div><!--full_column-->

<div class="full_column"><span class="emphasize"><br/>If you are under age 18, enter the first and last name of at least one parent or guardian.</span></div><!--full_column-->
<div class="mini_column">Parent or Guardian #1<br/><input type="text" name="markettexti[]" size="24" maxlength="30"/><br/><input type="checkbox" name="studentchecki[]" value="0" />This person is a guardian<br/></div><!--mini_column-->
<div class="mini_column">Parent or Guardian #2<br/><input type="text" name="markettexti[]" size="24" maxlength="30"/><br/><input type="checkbox" name="studentchecki[]" value="1" />This person is a guardian<br/></div><!--mini_column-->


<div class="full_column"><br/>
How did you hear about us?
<select name="marketselecti[]" size="1">
<option value="0" />
<option value="Stumbled across website">Stumbled across website</option>
<option value="Word of mouth">Word of mouth</option>
<option value="Newspaper ad">Newspaper ad</option>
<option value="Local parade">Local parade</option>
<option value="Web ad">Web ad</option>
<option value="Other">Other</option></select>
</div><br/><br/>
<img src="1088/images/stalogo.jpg" class="content_centered_pad" />
</div><!--left_column-->

<div class="right_column">
<div class="full_column"><br/>
Do you consider yourself to be an introvert or an extrovert?<br/>
<select name="marketselecti[]" size="1">
<option value="0" />
<option value="introvert">Introvert</option>
<option value="extrovert">Extrovert</option>
<option value="both">A little of both</option>
<option value="unsure">Unsure</option>
</select>
</div>
<div class="full_column"><br/>
Are you, or have you, been involved in any of the following?<br/>  Check all that apply:<br />
<div class="full_column"><span class="four">
<input type="checkbox" name="marketchecki[]" value="0" />Theater</span><span class="four">
<input type="checkbox" name="marketchecki[]" value="1" />Dance</span><span class="four">
<input type="checkbox" name="marketchecki[]" value="2" />AP classes</span><span class="four">
<input type="checkbox" name="marketchecki[]" value="3" />Choir</span></div><div class="full_column"><span class="four">
<input type="checkbox" name="marketchecki[]" value="4" />Band</span><span class="four">
<input type="checkbox" name="marketchecki[]" value="5" />4-H</span><span class="four">
<input type="checkbox" name="marketchecki[]" value="6" />FFA</span><span class="four">
<input type="checkbox" name="marketchecki[]" value="7" />FBLA</span></div><div class="full_column"><span class="four">
<input type="checkbox" name="marketchecki[]" value="8" />SIFE</span><span class="four">
<input type="checkbox" name="marketchecki[]" value="9" />Awana</span></div><div class="full_column">
<input type="checkbox" name="marketchecki[]" value="10" />Sports<span class="nudge_text">Which sport(s)? <input type="text" name="markettexti[]" size="22" maxlength="60"/></span><br/>
<input type="checkbox" name="marketchecki[]" value="11" />Other<span class="nudge_text">Please specify:  <input type="text" name="markettexti[]" size="22" maxlength="60"/></span></div>
</div>

<div class="full_column"><br />
Which of these internet sites do you visit frequently?<br/>  Check all that apply:<br />
<div class="full_column"><span class="three">
<input type="checkbox" name="marketchecki[]" value="12" />YouTube</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="13" />Facebook</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="14" />Twitter</span></div><div class="full_column"><span class="three">
<input type="checkbox" name="marketchecki[]" value="15" />MySpace</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="16" />Wikipedia</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="17" />Google</span></div><div class="full_column"><span class="three">
<input type="checkbox" name="marketchecki[]" value="18" />Yahoo</span></div><div class="full_column">
<input type="checkbox" name="marketchecki[]" value="19" />Other<span class="nudge_text">Please specify:  <input type="text" name="markettexti[]" size="24" maxlength="60"/></span></div>
</div>

<div class="full_column"><br/>
Which of these hobbies do you enjoy?<br/>  Check all that apply:<br />
<div class="full_column"><span class="three">
<input type="checkbox" name="marketchecki[]" value="20" />Video Games</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="21" />Board Games</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="22" />Movies</span></div><div class="full_column"><span class="three">
<input type="checkbox" name="marketchecki[]" value="23" />Programming</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="24" />Woodworking</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="25" />Leatherworking</span></div><div class="full_column"><span class="three">
<input type="checkbox" name="marketchecki[]" value="26" />Carpentry</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="27" />Photography</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="28" />Sewing</span></div><div class="full_column"><span class="three">
<input type="checkbox" name="marketchecki[]" value="29" />Knitting</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="30" />Graphic Design</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="31" />Art/Drawing</span></div><div class="full_column"><span class="three">
<input type="checkbox" name="marketchecki[]" value="32" />Theater/Drama</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="33" />Farming</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="34" />Gardening</span></div><div class="full_column"><span class="three">
<input type="checkbox" name="marketchecki[]" value="35" />Livestock</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="36" />Mechanical</span><span class="three">
<input type="checkbox" name="marketchecki[]" value="37" />Writing</span></div><div class="full_column">
<input type="checkbox" name="marketchecki[]" value="38" />Other<span class="nudge_text">Please specify:  <input type="text" name="markettexti[]" size="24" maxlength="60"/></span></div>
</div>

<div class="full_column"><br />
Which of these teams within SingTeam<span class="super_script">TM</span> would you like to be on?<br/>  Check all that apply:<br />
<span class="red_it_up"><span class="emphasize">
<input type="checkbox" name="marketchecki[]" value="39" />Dance Team.</span></span>Choreographs and performs dance routines for your team.  Set up and tear down at rehearsals and team events.<br/><span class="red_it_up"><span class="emphasize">
<input type="checkbox" name="marketchecki[]" value="40" />Spirit Team.</span></span>Help name your team.  Come up with team cheers.  Promote team spirit.<br/><span class="red_it_up"><span class="emphasize">
<input type="checkbox" name="marketchecki[]" value="41" />Music Team.</span></span> Lead your team musically.  Help other teammates learn notes, rhythms and words.<br/><span class="red_it_up"><span class="emphasize">
<input type="checkbox" name="marketchecki[]" value="42" />Promotions Team.</span></span> Promote your team in the community. Sell advertising to local businesses. Speak to local newspapers.<br/><span class="red_it_up"><span class="emphasize">
<input type="checkbox" name="marketchecki[]" value="43" />Design Team.</span></span>Come up with a visual look for your team, including team colors, team logo, and team fashion.<br/>
</div>

<div class="full_column"><span class="red_it_up"><span class="emphasize">
<input type="checkbox" name="marketchecki[]" value="44" />I would like to be considered for Team Captain.</span></span>
</div>

<div class="full_column"><br/>
If you have any musical experience, please describe it here.  It can include experience singing, in choir, in band, playing piano, or anything related to music.<br />
<textarea name="markettexti[]" cols="45" rows="3" maxlength="150" wrap="soft"></textarea>
</div>

<div class="full_column"><br/>
Briefly tell us, in your own words, why you would be a great addition to your local SingTeam<span class="super_script">TM</span>!<br />
<textarea name="markettexti[]" cols="45" rows="3" maxlength="150" wrap="soft"></textarea>
</div>

<div class="full_column"><br/>
Got a promotion code?  Enter it here!
<?php 
echo "<input type=\"text\" name=\"markettexti[]\" size=\"8\" maxlength=\"10\" value=\"".$temp_promo."\" /><br/>"; 
?>
<input type="image" name="submit_form" src="1088/images/button-register-2.jpg" value="Join Now!" class="image_cushion" />

</div>
</div><!--right_column-->

</form>


</div><!--two_column_container-->

</div><!--content_background-->
</div><!--all-->
</body>
</html>
