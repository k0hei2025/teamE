      <html>
      <head></head>
      <body>
        <form method="post" action="http://localhost/vaishnavi1/includes/docreg.php" enctype="multipart/form-data">

                
    <table style="border-right: black thin solid; border-top: black thin solid; border-left: black thin solid;
        border-bottom: black thin solid; height: 10px" width="780">
        <tbody><tr>
            <td style="width: 125px;" valign="top" align="left">
                <span id="ctl00_ContentPlaceHolder1_Label4" style="display:inline-block;font-family:Arial;font-size:Smaller;width:100%;">* Gender:</span></td>
            <td style="width: 500px; height: 24px; text-align: left"><table id="ctl00_ContentPlaceHolder1_rbGender" border="0" style="font-family:Tahoma;font-size:Smaller;height:29px;width:125px;">
	<tbody><tr>
		<td><input id="ct100_ContentPlaceHolder_rbGender_0" type="radio" name="Gender" value="Male" checked="checked"><label for="ctl00_ContentPlaceHolder1_rbGender_0">Male</label></td><td><input id="ctl00_ContentPlaceHolder1_rbGender_1" type="radio" name="Gender" value="Female" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$rbGender$1\&#39;,\&#39;\&#39;)&#39;, 0)"><label for="ctl00_ContentPlaceHolder1_rbGender_1">Female</label></td>
	</tr>
</tbody></table>&nbsp;
            </td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator1" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please Select Gender</span></td>
        </tr>
        <tr>
            <td style="width: 125px;" align="left">
                <span id="ctl00_ContentPlaceHolder1_Label1" style="display:inline-block;font-family:Arial;font-size:Smaller;width:100%;">* Caste:</span></td>
            <td style="width: 500px; height: 24px; text-align: left">
                <select name="Caste" id="ctl00_ContentPlaceHolder1_ddCaste" style="font-family:Tahoma;width:300px;">
	<option selected="selected" value="0">- Select -</option>
	<option value="GENERAL">General</option>
	<option value="SC/ST">SC/ST</option>
	<option value="EWS">EWS</option>
	<option value="OBC">OBC</option>

</select>
            </td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator25" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please Select Caste</span></td>
        </tr>
        <tr>
            <td style="width: 125px;" valign="top" align="left">
                <span id="ctl00_ContentPlaceHolder1_Label5" style="display:inline-block;font-family:Arial;font-size:Smaller;width:100%;">* Religion:</span>
            </td><td style="width: 500px; height: 24px; text-align: left">
                <table id="ctl00_ContentPlaceHolder1_rbReligion" border="0" style="font-family:Tahoma;font-size:Smaller;height:29px;width:144px;">
	<tbody><tr>
		<td><input id="ctl00_ContentPlaceHolder1_rbReligion_0" type="radio" name="Religion" value="hindu"><label for="ctl00_ContentPlaceHolder1_rbReligion_0">hindu</label></td></tr>
        <td><input id="ctl00_ContentPlaceHolder1_rbReligion_1" type="radio" name="Religion" value="christian"><label for="ctl00_ContentPlaceHolder1_rbReligion_1">christian</label></td></tr>
        <td><input id="ctl00_ContentPlaceHolder1_rbReligion_1" type="radio" name="Religion"value="muslim"><label for="ctl00_ContentPlaceHolder1_rbReligion_1">muslim</label></td></tr>
        <td><input id="ctl00_ContentPlaceHolder1_rbReligion_1" type="radio" name="Religion" value="Punjabi"><label for="ctl00_ContentPlaceHolder1_rbReligion_1">Punjabi</label></td>
	</tr>
</tbody></table>
            </td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator3" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please Select Religion</span></td>
        </tr>
            <td style="width: 175px; height: 16px;">
                </td>
        </tr>
        <tr>
            
        <tr>
            <td style="width: 125px" valign="top" align="left">
                 <span id="ctl00_ContentPlaceHolder1_Label15" style="display:inline-block;font-family:Arial;font-size:Smaller;width:100%;">* Marital Status:</span></td>
            <td style="width: 500px; text-align: left; height: 24px;">
                <table id="ctl00_ContentPlaceHolder1_rbMaritalStatus" border="0" style="font-family:Tahoma;font-size:Smaller;width:342px;">
	<tbody><tr>
		<td><input id="ctl00_ContentPlaceHolder1_rbMaritalStatus_0" type="radio" name="MaritalStatus" value="Un Married" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$rbMaritalStatus$0\&#39;,\&#39;\&#39;)&#39;, 0)"><label for="ctl00_ContentPlaceHolder1_rbMaritalStatus_0">Unmarried</label></td><td><input id="ctl00_ContentPlaceHolder1_rbMaritalStatus_1" type="radio" name="MaritalStatus
            " value="Divorced" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$rbMaritalStatus$1\&#39;,\&#39;\&#39;)&#39;, 0)"><label for="ctl00_ContentPlaceHolder1_rbMaritalStatus_1">Divorced</label></td><td><input id="ctl00_ContentPlaceHolder1_rbMaritalStatus_2" type="radio" name="MaritalStatus" value="Widow" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$rbMaritalStatus$2\&#39;,\&#39;\&#39;)&#39;, 0)"><label for="ctl00_ContentPlaceHolder1_rbMaritalStatus_2">Widow</label></td>
        </tr>
</tbody></table></td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator5" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;display:none;">Please Select Marital Status</span></td>
        </tr>
        <tr>
            <td style="width: 125px" align="left">
                </td>
            <td style="width: 500px; text-align: left; height: 24px;">
                </td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_fvChildernNumber" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;display:none;">Please Select Childern Number</span></td>
        </tr>
        <tr>
            <td style="width: 125px" valign="top" align="left">
                </td>
            <td style="width: 500px; text-align: left; height: 24px;" valign="top">
                </td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_fvChildernLiving" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please Select Childern Living</span></td>
        </tr>
        <tr>
            <td style="width: 125px" align="left">
                <span style="font-family: Arial"><span id="ctl00_ContentPlaceHolder1_Label2" style="display:inline-block;font-family:Arial;font-size:Smaller;width:100%;">* Name:</span></span></td>
            <td style="width: 500px; text-align: left; height: 24px;" valign="top">
                <input name ="Name" type="text" id="ctl00_ContentPlaceHolder1_txtName" style="font-family:Tahoma;width:300px;"></td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator10" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please fill Name</span></td>
        </tr>
        <tr>
            <td style="width: 125px;" valign="top" align="left">
                <span id="ctl00_ContentPlaceHolder1_Label3" style="display:inline-block;font-family:Arial;font-size:Smaller;width:100%;">* Age:</span></td>
            <td style="width: 500px; height: 24px; text-align: left" valign="top">
                <select name="Age" id="ctl00_ContentPlaceHolder1_ddAge" style="width:120px;">
	<option value="- Select -">- Select -</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="30">30</option>
	<option value="31">31</option>
	<option value="32">32</option>
	<option value="33">33</option>
	<option value="34">34</option>
	<option value="35">35</option>
	<option value="36">36</option>
	<option value="37">37</option>
	<option value="38">38</option>
	<option value="39">39</option>
	<option value="40">40</option>
	<option value="41">41</option>
	<option value="42">42</option>
	<option value="43">43</option>
	<option value="44">44</option>
	<option value="45">45</option>
	<option value="46">46</option>
	<option value="47">47</option>
	<option value="48">48</option>
	<option value="49">49</option>
	<option value="50">50</option>
	<option value="51">51</option>
	<option value="52">52</option>
	<option value="53">53</option>
	<option value="56">56</option>
	<option value="57">57</option>
	<option value="58">58</option>
	<option value="59">59</option>
	<option value="60">60</option>

</select></td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator11" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please Select Age</span></td>
        </tr>
        <tr>
            <td style="width: 125px;" valign="top" align="left">
                <span id="ctl00_ContentPlaceHolder1_Label12" style="display:inline-block;font-family:Arial;font-size:Smaller;width:100%;">* Height:</span></td>
            <td style="width: 500px; height: 16px; text-align: left" valign="top">
                <select name="Height" id="ctl00_ContentPlaceHolder1_ddHeight" style="width:120px;">
	<option value="- Select -">- Select -</option>
	<option value="4 Feet 0 Inch">4 Feet 0 Inch</option>
	<option value="4 Feet 1 Inch">4 Feet 1 Inch</option>
	<option value="4 Feet 2 Inch">4 Feet 2 Inch</option>
	<option value="4 Feet 3 Inch">4 Feet 3 Inch</option>
	<option value="4 Feet 4 Inch">4 Feet 4 Inch</option>
	<option value="4 Feet 5 Inch">4 Feet 5 Inch</option>
	<option value="4 Feet 6 Inch">4 Feet 6 Inch</option>
	<option value="4 Feet 7 Inch">4 Feet 7 Inch</option>
	<option value="4 Feet 8 Inch">4 Feet 8 Inch</option>
	<option value="4 Feet 9 Inch">4 Feet 9 Inch</option>
	<option value="4 Feet 11 Inch">4 Feet 11 Inch</option>
	<option value="5 Feet 0 Inch">5 Feet 0 Inch</option>
	<option value="5 Feet 1 Inch">5 Feet 1 Inch</option>
	<option value="5 Feet 2 Inch">5 Feet 2 Inch</option>
	<option value="5 Feet 3 Inch">5 Feet 3 Inch</option>
	<option value="5 Feet 4 Inch">5 Feet 4 Inch</option>
	<option value="5 Feet 5 Inch">5 Feet 5 Inch</option>
	<option value="5 Feet 6 Inch">5 Feet 6 Inch</option>
	<option value="5 Feet 7 Inch">5 Feet 7 Inch</option>
	<option value="5 Feet 8 Inch">5 Feet 8 Inch</option>
	<option value="5 Feet 9 Inch">5 Feet 9 Inch</option>
	<option value="5 Feet 10 Inch">5 Feet 10 Inch</option>
	<option value="5 Feet 11 Inch">5 Feet 11 Inch</option>
	<option value="6 Feet 0 Inch">6 Feet 0 Inch</option>
	<option value="6 Feet 1 Inch">6 Feet 1 Inch</option>
	<option value="6 Feet 2 Inch">6 Feet 2 Inch</option>
	<option value="6 Feet 3 Inch">6 Feet 3 Inch</option>
	<option value="6 Feet 4 Inch">6 Feet 4 Inch</option>
	<option value="6 Feet 5 Inch">6 Feet 5 Inch</option>
	<option value="6 Feet 6 Inch">6 Feet 6 Inch</option>
	<option value="6 Feet 7 Inch">6 Feet 7 Inch</option>
	<option value="6 Feet 8 Inch">6 Feet 8 Inch</option>
	<option value="6 Feet 9 Inch">6 Feet 9 Inch</option>
	<option value="6 Feet 10 Inch">6 Feet 10 Inch</option>
	<option value="6 Feet 11 Inch">6 Feet 11 Inch</option>
	<option value="7 Feet 0 Inch">7 Feet 0 Inch</option>
	<option value="7 Feet 1 Inch">7 Feet 1 Inch</option>
	<option value="7 Feet 2 Inch">7 Feet 2 Inch</option>

</select></td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator12" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please Select Height</span></td>
        </tr>
        
        
        <tr>
            <td style="width: 125px" valign="top" align="left">
                <span id="ctl00_ContentPlaceHolder1_Label13" style="display:inline-block;font-family:Arial;font-size:Smaller;height:37px;width:100%;"><br>* Education:</span></td>
            <td style="width: 500px; text-align: left; height: 24px;" valign="top">
                <textarea name="Education" rows="2" cols="20" id="ctl00_ContentPlaceHolder1_txtEducation" style="font-family:Tahoma;height:81px;width:450px;"></textarea></td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator15" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please fill Education</span></td>
        </tr>
        <tr>
            <td style="width: 125px" valign="top" align="left">
                <span id="ctl00_ContentPlaceHolder1_Label18" style="display:inline-block;font-family:Arial;font-size:Smaller;height:31px;width:100%;">* Job/Work in:</span></td>
            <td style="width: 500px; text-align: left; height: 24px;" valign="top">
                <table id="ctl00_ContentPlaceHolder1_rbJobType" border="0" style="font-family:Tahoma;font-size:Smaller;height:2px;width:471px;">
	<tbody><tr>
		<td><input id="ctl00_ContentPlaceHolder1_rbJobType_0" type="radio" name="JobType" value="Goverment" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$rbJobType$0\&#39;,\&#39;\&#39;)&#39;, 0)"><label for="ctl00_ContentPlaceHolder1_rbJobType_0">Goverment</label></td><td><input id="ctl00_ContentPlaceHolder1_rbJobType_1" type="radio" name="JobType" value="Contract" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$rbJobType$1\&#39;,\&#39;\&#39;)&#39;, 0)"><label for="ctl00_ContentPlaceHolder1_rbJobType_1">Contract</label></td><td><input id="ctl00_ContentPlaceHolder1_rbJobType_2" type="radio" name="JobType" value="Private" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$rbJobType$2\&#39;,\&#39;\&#39;)&#39;, 0)"><label for="ctl00_ContentPlaceHolder1_rbJobType_2">Private</label></td><td><input id="ctl00_ContentPlaceHolder1_rbJobType_3" type="radio" name="JobType" value="Business" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$rbJobType$3\&#39;,\&#39;\&#39;)&#39;, 0)"><label for="ctl00_ContentPlaceHolder1_rbJobType_3">Business</label></td><td><input id="ctl00_ContentPlaceHolder1_rbJobType_4" type="radio" name="JobType" value="Defence" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$rbJobType$4\&#39;,\&#39;\&#39;)&#39;, 0)"><label for="ctl00_ContentPlaceHolder1_rbJobType_4">Defence</label></td><td><input id="ctl00_ContentPlaceHolder1_rbJobType_5" type="radio" name="JobType" value="Not Working" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$rbJobType$5\&#39;,\&#39;\&#39;)&#39;, 0)"><label for="ctl00_ContentPlaceHolder1_rbJobType_5">Not Working</label></td>
	</tr>
</tbody></table></td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator16" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please Select Job</span></td>
        </tr>
        <tr>
            <td style="width: 125px;" valign="middle" align="left">
                </td>
            <td style="width: 500px; text-align: left; height: 24px;" valign="top">
                </td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator17" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please Fill Job Detail</span></td>
        </tr>
        <tr>
            <td style="width: 125px" valign="top" align="left">
                <span id="ctl00_ContentPlaceHolder1_Label16" style="display:inline-block;font-family:Arial;font-size:Smaller;width:100%;">Monthly Income:</span></td>
            <td style="width: 500px; text-align: left; height: 24px;" valign="top">
                <input name="MonthlyIncome" type="text" id="ctl00_ContentPlaceHolder1_txtIncome" style="font-family:Tahoma;width:181px;"></td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator18" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please Fill Monthly Income</span></td>
        </tr>
        
        <tr>
            <td style="width: 125px" align="left">
                <span id="ctl00_ContentPlaceHolder1_Label26" style="display:inline-block;font-family:Arial;font-size:Smaller;height:29px;width:100%;">* House:</span></td>
            <td style="width: 500px; text-align: left; height: 24px;" valign="top">
                <table id="ctl00_ContentPlaceHolder1_rbHouse" border="0" style="font-family:Tahoma;font-size:Smaller;height:29px;width:186px;">
	<tbody><tr>
		<td><input id="ctl00_ContentPlaceHolder1_rbHouse_0" type="radio" name="House" value="Own"><label for="ctl00_ContentPlaceHolder1_rbHouse_0">Own</label></td><td><input id="ctl00_ContentPlaceHolder1_rbHouse_1" type="radio" name="House" value="Rental"><label for="ctl00_ContentPlaceHolder1_rbHouse_1">Rental</label></td><td><input id="ctl00_ContentPlaceHolder1_rbHouse_2" type="radio" name="House" value="Official"><label for="ctl00_ContentPlaceHolder1_rbHouse_2">Official</label></td>
	</tr>
</tbody></table></td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator22" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please Select your House Type</span></td>
        </tr>
        <tr>
            <td style="width: 125px;" valign="top" align="left">
                <span id="ctl00_ContentPlaceHolder1_Label29" style="display:inline-block;font-family:Arial;font-size:Smaller;height:29px;width:100%;">* Address:</span></td>
            <td style="width: 500px; height: 24px; text-align: left" valign="top">
                <textarea name="Address" rows="2" cols="20" id="ctl00_ContentPlaceHolder1_txtAddress" style="font-family:Tahoma;height:63px;width:450px;"></textarea></td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator23" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please fill in your Address</span></td>
        </tr>
        <tr>
            <td style="width: 125px;" valign="top" align="left">
                <span id="ctl00_ContentPlaceHolder1_Label31" style="display:inline-block;font-family:Arial;font-size:Smaller;height:width:100%;">* Region:</span></td>
            <td style="width: 500px; height: 24px; text-align: left" valign="top">

                <select name="Region" id="ctl00_ContentPlaceHolder1_txtCity" style="width:120px;">

<option value="-Select-">-select state-</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select></td>
            <td style="width: 175px; height: 16px;">
                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator4" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please fill region Name</span></td>
        </tr>
    
        <tr>
            <td style="width: 125px" align="left">
                <span id="ctl00_ContentPlaceHolder1_Label33" style="display:inline-block;font-family:Arial;fontsize:Smaller;height:29px;width:100%;">E-Mail:</span></td>
            <td style="width: 500px; text-align: left; height: 24px;">
                <input name="Email" type="text" id="ctl00_ContentPlaceHolder1_txtMail" style="font-family:Tahoma;width:450px;"></td>
            <td style="width: 175px; height: 16px;">
                </td>
        </tr>
        <tr>
            <td colspan="3" align="left" style="width: 125px">
                &nbsp;<table style="border-right: black thick solid; border-top: black thick solid; border-left: black thick solid;
        border-bottom: black thick solid; height: 10px" width="780">
                    <tbody><tr>
                        <td style="width: 125px" valign="top">
                        </td>
                        <td style="width: 540px">
                            <img id="ctl00_ContentPlaceHolder1_Image1" src="./Registration FREE_files/RegistrationFiller.jpg" style="border-width:0px;"></td>
                        <td style="width: 200px">
                        </td>
                    </tr>
                    
                        <td style="width: 200px">
                            <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator30" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;display:none;">Please Select Relation</span></td>
                    </tr>
                    <tr>
                    <td style="width: 125px">
                            <span id="ctl00_ContentPlaceHolder1_Label32" style="display:inline-block;font-family:Arial;font-size:Smaller;height:31px;width:100%;">* Name:</span>
                        </td>
                        <td style="width: 540px">
                            <input name="loginname" type="text" id="ctl00_ContentPlaceHolder1_txtFillerName" style="font-family:Tahoma;width:300px;"></td>
                        <td style="width: 200px">
                            <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator26" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;display:none;">Please fill Your Name</span></td>
                    </tr>
                    <tr>
                        <td style="width: 125px" valign="top">
                            <span id="ctl00_ContentPlaceHolder1_Label35" style="display:inline-block;font-family:Arial;font-size:Smaller;height:31px;width:100%;">* Phone Number:</span>
                        </td>
                        <td style="width: 540px" valign="top">
                            <input name="phoneno" type="text" id="ctl00_ContentPlaceHolder1_txtFillerPhone" style="font-family:Tahoma;width:300px;">
                        </td>
                        <td style="width: 200px">
                            <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator32" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please fill Phone Number</span></td>
                    </tr>
                    <tr>
                        <td style="width: 125px">
                            <span style="font-family: Arial">
                                <span id="ctl00_ContentPlaceHolder1_Label36" style="display:inline-block;font-family:Arial;font-size:Smaller;height:31px;width:100%;">* Password:</span></span></td>
                        <td style="width: 540px" valign="top">
                            <input name="Password" type="password" id="ctl00_ContentPlaceHolder1_txtFillerPassword" style="font-family:Tahoma;width:187px;"></td>
                        <td style="width: 200px">
                            <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator2" style="display:inline-block;color:Red;font-family:Tahoma;font-size:Smaller;width:100%;visibility:hidden;">Please fill Password</span></td>
                    </tr>
                    <tr>
                        <td style="width: 125px">
                            <span style="font-family: Arial"></span>
                        </td>
                        <td style="width: 540px">
                        </td>
                        <td style="width: 200px">
                            </td>
                    </tr>
                    <tr>
                        <td style="width: 125px">
                            <span style="font-family: Arial"></span>
                        </td>
                        <td style="width: 540px">
                            <span style="font-family: Arial"></span><span style="font-family: Arial">
                                <table width="100%">
                                    <tbody><tr>
                                        <td style="width: 100px">
                                        </td>
                                        <td style="width: 100px; text-align: center">
               <input type="file" name="image"/>
                <input type="submit" name="Submit" value="Submit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnSubmit&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_ContentPlaceHolder1_btnSubmit" style="width:132px;"></td>
                                        <td style="width: 100px">
                                        </td>
                                    </tr>
                                </tbody></table>
                            </span>
                        </td>
                        <td style="width: 200px">
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
    </tbody></table>

    </td>
  </form>
</body>
</html>