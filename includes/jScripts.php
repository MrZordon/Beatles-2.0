 <script type="text/javascript">
	$(document).ready(function() 			
	{
		//##### Add record when Add Record Button is click #########
		$("#ChildrenSubmit").click(function (e) 
		{
			e.preventDefault();
			
		    var myData = {	child_Name1: $("#childName1").val(),
		    				child_Gender1: $("#childGender1").val(),
		    				child_SSN1: $("#childSSN1").val(),
		    				child_Month1: $("#childMonth1").val(),
		    				child_Day1: $("#childDay1").val(),
		    				child_Year1: $("#childYear1").val(),
		    				child_Name2: $("#childName2").val(),
		    				child_Gender2: $("#childGender2").val(),
		    				child_SSN2: $("#childSSN2").val(),
		    				child_Month2: $("#childMonth2").val(),
		    				child_Day2: $("#childDay2").val(),
		    				child_Year2: $("#childYear2").val(),
		    				child_Name3: $("#childName3").val(),
		    				child_Gender3: $("#childGender3").val(),
		    				child_SSN3: $("#childSSN3").val(),
		    				child_Month3: $("#childMonth3").val(),
		    				child_Day3: $("#childDay3").val(),
		    				child_Year3: $("#childYear3").val(),
		    				child_Name4: $("#childName4").val(),
		    				child_Gender4: $("#childGender4").val(),
		    				child_SSN4: $("#childSSN4").val(),
		    				child_Month4: $("#childMonth4").val(),
		    				child_Day4: $("#childDay4").val(),
		    				child_Year4: $("#childYear4").val(),
		    				child_Name5: $("#childName5").val(),
		    				child_Gender5: $("#childGender5").val(),
		    				child_SSN5: $("#childSSN5").val(),
		    				child_Month5: $("#childMonth5").val(),
		    				child_Day5: $("#childDay5").val(),
		    				child_Year5: $("#childYear5").val(),
		    				child_Name6: $("#childName6").val(),
		    				child_Gender6: $("#childGender6").val(),
		    				child_SSN6: $("#childSSN6").val(),
		    				child_Month6: $("#childMonth6").val(),
		    				child_Day6: $("#childDay6").val(),
		    				child_Year6: $("#childYear6").val(),
		    				child_Name7: $("#childName7").val(),
		    				child_Gender7: $("#childGender7").val(),
		    				child_SSN7: $("#childSSN7").val(),
		    				child_Month7: $("#childMonth7").val(),
		    				child_Day7: $("#childDay7").val(),
		    				child_Year7: $("#childYear7").val(),
		    				child_Name8: $("#childName8").val(),
		    				child_Gender8: $("#childGender8").val(),
		    				child_SSN8: $("#childSSN8").val(),
		    				child_Month8: $("#childMonth8").val(),
		    				child_Day8: $("#childDay8").val(),
		    				child_Year8: $("#childYear8").val(),
		    				child_Custody1: $("#childCustody1").val(),
		    				child_Custody2: $("#childCustody2").val(),
		    				child_Custody3: $("#childCustody3").val(),
		    				child_Custody4: $("#childCustody4").val(),
		    				child_Custody5: $("#childCustody5").val(),
		    				child_Custody6: $("#childCustody6").val(),
		    				child_Custody7: $("#childCustody7").val(),
		    				child_Custody8: $("#childCustody8").val()
		    				}; //build a post data structure
		    			
	    	jQuery.ajax(
	    	{
	    			type: "POST", // Post / Get method
	    			url: "includes/childrenAdd.php", //Where form data is sent on submission
	    			dataType:"text", // Data type, HTML, json etc.
	    			//Form variables
	    			data:myData,
	    			success:function(response)
	    			{
	    				$("#responds").append(response);
		  				},
				    	error:function (xhr, ajaxOptions, thrownError)
				    	{
				    		alert(thrownError);
		    			}
    			});
    		});
 
		});
	</script>
	
	<script type="text/javascript">
	$(document).ready(function() 			
	{
		//##### Add record when Add Record Button is click #########
		$("#AgencySubmit").click(function (e) 
		{
			e.preventDefault();
		    var myData = {	agency_Name: $("#agencyName").val(),
		    				agency_monthlyAmount: $("#agencymonthlyAmount").val(),
		    				agency_Name2: $("#agencyName2").val(),
		    				agency_monthlyAmount2: $("#agencymonthlyAmount2").val(),
		    				agency_totalIncome: $("#agencytotalIncome").val(),
		    				agency_rateOfPay: $("#agencyrateOfPay").val(),
		    				agency_workerName: $("#agencyworkerName").val(),
		    				agency_workerCity: $("#agencyworkerCity").val(),
		    				agency_workerPhoneNum: $("#agencyworkerPhoneNum").val()
		    				}; //build a post data structure
		    			
	    	jQuery.ajax(
	    	{
	    			type: "POST", // Post / Get method
	    			url: "includes/agencyAdd.php", //Where form data is sent on submission
	    			dataType:"text", // Data type, HTML, json etc.
	    			//Form variables
	    			data:myData,
	    			success:function(response)
	    			{
	    				$("#responds").append(response);
		  				},
				    	error:function (xhr, ajaxOptions, thrownError)
				    	{
				    		alert(thrownError);
		    			}
    			});
    		});
 
		});
	</script>
	
<script type="text/javascript">
	$(document).ready(function() 			
	{
		//##### Add record when Add Record Button is click #########
		$("#MedicalSubmit").click(function (e) 
		{
			e.preventDefault();
			alert("medicaladd");
		    var myData = {	docName_Medical: $("#docNameMedical").val(),
		    				docPhoneNum_Medical: $("#docPhoneNumMedical").val(),
		    				docStreetAddress_Medical: $("#docStreetAddressMedical").val(),
		    				docCity_Medical: $("#docCityMedical").val(),
		    				docState_Medical: $("#docStateMedical").val(),
		    				docZip_Medical: $("#docZipMedical").val(),
		    				medsYN_Medical: $("#medsYNMedical").val(),
		    				medsName1_Medical: $("#medsName1Medical").val(),
		    				medsDosage1_Medical: $("#medsDosage1_Medical").val(),
		    				medsWhen1_Medical: $("#medsWhen1Medical").val(),
		    				medsName2_Medical: $("#medsName2Medical").val(),
		    				medsDosage2_Medical: $("#medsDosage2Medical").val(),
		    				medsWhen2_Medical: $("#medsWhen2Medical").val(),
		    				allergiesYN_Medical: $("#allergiesYNMedical").val(),
		    				seizersYN_Medical: $("#seizersYNMedical").val(),
		    				clientYN_Medical: $("#clientYNMedical").val(),
		    				dmhName_Medical: $("#dmhNameMedical").val()
		    				}; //build a post data structure
		    			
	    	jQuery.ajax(
	    	{
	    			type: "POST", // Post / Get method
	    			url: "includes/medicalAdd.php", //Where form data is sent on submission
	    			dataType:"text", // Data type, HTML, json etc.
	    			//Form variables
	    			data:myData,
	    			success:function(response)
	    			{
	    				$("#responds").append(response);
		  				},
				    	error:function (xhr, ajaxOptions, thrownError)
				    	{
				    		alert(thrownError);
		    			}
    			});
    		});
 
		});
	</script>
	
<script type="text/javascript">
	$(document).ready(function() 			
	{
		//##### Add record when Add Record Button is click #########
		$("#CriminalSubmit").click(function (e) 
		{
			e.preventDefault();
			alert("criminaladd");
		    var myData = {	$incarceration_YN: $("#incarcerationYN").val(),
		    				$incarceration_Loc: $("#incarcerationLoc").val(),
		    				$incarceration_Charges: $("#incarcerationCharges").val(),
		    				$incarceration_Start: $("#incarcerationStart").val(),
		    				$incarceration_End: $("#incarcerationEnd").val(),
		    				$incarceration_Reason: $("#incarcerationReason").val(),
		    				$institutionalized_YN: $("#institutionalizedYN").val(),
		    				$institution_Name: $("#institutionName").val(),
		    				$institution_Start: $("#institutionStart").val(),
		    				$institution_End: $("#institutionEnd").val(),
		    				$institution_Reason: $("#institutionReason").val()
		    				}; //build a post data structure
		    			
	    	jQuery.ajax(
	    	{
	    			type: "POST", // Post / Get method
	    			url: "includes/criminalAdd.php", //Where form data is sent on submission
	    			dataType:"text", // Data type, HTML, json etc.
	    			//Form variables
	    			data:myData,
	    			success:function(response)
	    			{
	    				$("#responds").append(response);
		  				},
				    	error:function (xhr, ajaxOptions, thrownError)
				    	{
				    		alert(thrownError);
		    			}
    			});
    		});
 
		});
	</script>
	
<script type="text/javascript">
	$(document).ready(function() 			
	{
		//##### Add record when Add Record Button is click #########
		$("#EmploymentSubmit").click(function (e) 
		{
			e.preventDefault();
			alert("emoployee");
		    var myData = {	current_Employment: $("#currentEmployment").val(),
		    				companyName_Employment: $("#companyNameEmployment").val(),
		    				managerName_Employment: $("#managerNameEmployment").val(),
		    				managerPhoneNum_Employment: $("#managerPhoneNumEmployment").val(),
		    				hoursFrom_Employment: $("#hoursFromEmployment").val(),
		    				hoursTo_Employment: $("#hoursToEmployment").val(),
		    				rateOfPay_Employment: $("#rateOfPayEmployment").val(),
		    				income_Employment: $("#incomeEmployment").val(),
		    				goals_Employment: $("#goalsEmployment").val()
		    				}; //build a post data structure
		    			
	    	jQuery.ajax(
	    	{
	    			type: "POST", // Post / Get method
	    			url: "includes/employmentAdd.php", //Where form data is sent on submission
	    			dataType:"text", // Data type, HTML, json etc.
	    			//Form variables
	    			data:myData,
	    			success:function(response)
	    			{
	    				$("#responds").append(response);
		  				},
				    	error:function (xhr, ajaxOptions, thrownError)
				    	{
				    		alert(thrownError);
		    			}
    			});
    		});
 
		});
	</script>
	
<script type="text/javascript">
	$(document).ready(function() 			
	{
		//##### Add record when Add Record Button is click #########
		$("#VehichleSubmit").click(function (e) 
		{
			e.preventDefault();
			alert("vehichleadd");
		    var myData = {	registrationName_Vehichle: $("#registrationNameVehichle").val(),
		    				licenseNum_Vehichle: $("#licenseNumVehichle").val(),
		    				state_Vehichle: $("#stateVehichle").val(),
		    				make_Vehichle: $("#makeVehichle").val(),
		    				color_Vehichle: $("#colorVehichle").val(),
		    				model_Vehichle: $("#modelVehichle").val(),
		    				oln_Vehichle: $("#olnVehichle").val()
		    				}; //build a post data structure
		    			
	    	jQuery.ajax(
	    	{
	    			type: "POST", // Post / Get method
	    			url: "includes/vehichleAdd.php", //Where form data is sent on submission
	    			dataType:"text", // Data type, HTML, json etc.
	    			//Form variables
	    			data:myData,
	    			success:function(response)
	    			{
	    				$("#responds").append(response);
		  				},
				    	error:function (xhr, ajaxOptions, thrownError)
				    	{
				    		alert(thrownError);
		    			}
    			});
    		});
 
		});
	</script>
	
<script type="text/javascript">
	$(document).ready(function() 			
	{
		//##### Add record when Add Record Button is click #########
		$("#EducationSubmit").click(function (e) 
		{
			e.preventDefault();
			alert("education");
		    var myData = {	residentDegree_Education: $("#residentDegreeEducation").val(),
		    				continueEdYN_Education: $("#continueEdEducation").val(),
		    				futureEdu_Education: $("#futurePlansEducation").val()
		    				}; //build a post data structure
		    			
	    	jQuery.ajax(
	    	{
	    			type: "POST", // Post / Get method
	    			url: "includes/educationAdd.php", //Where form data is sent on submission
	    			dataType:"text", // Data type, HTML, json etc.
	    			//Form variables
	    			data:myData,
	    			success:function(response)
	    			{
	    				$("#responds").append(response);
		  				},
				    	error:function (xhr, ajaxOptions, thrownError)
				    	{
				    		alert(thrownError);
		    			}
    			});
    		});
 
		});
	</script>
