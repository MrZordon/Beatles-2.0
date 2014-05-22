<?php	
	/* JavaScripts Page
	 * 
	 *	This is a massive javascripts file page.  Basically this is all the
	 *  AJAX java we use to pass the information around with out leaving a
	 *  modal.  The reason we have to use AJAX is that if we were to use a
	 *  typcial form there would have to be an action request.  This request
	 *  would then have change the page, even if we were to leave the page and
	 *  go back to the one we were on the modal would disapear, further losing
	 *  all the data someone just went to insert. As a result we have a AJAX
	 *  JS script that will handle all this for us.
	 * 
	 *  HOW It Works
	 * 
	 *  We call the ready function.  The function waits for the ID of something
	 *  to be clicked.  In this case the ID of a save button at the bottom of
	 *  our somewhat "shadow" form.
	 * 
	 *  From there we save all the data in a variable.  The data must be saved
	 *  in a name value format.  So it should look like:
	 * 
	 *  { fieldName : value , fieldName2: value2 ... etc }
	 * 
	 *  it is typically a set of name value pairs.
	 * 
	 *  After all the name value pairs are set up in the data variable you call
	 *  the jQuery.ajax.  This ensures it knows what it is using.
	 * 
	 *  We must then declare how we want to pass the data, usually via a POST or
	 *  a Get. Think REST API.
	 * 
	 *  The datatype is actually important, if you are passing in text and numeric
	 *  values this should always be set to text. The same goes if you are passing
	 *  something around that is in a JSON format.
	 * 
	 *  Then the data.
	 * 
	 *  Also specify what happens on a success and a failure.  You can add HTML and
	 *  CSS classes to stylize errors.  Unfortunately we did not have the time to do
	 *  this for everything so its up to who takes this over next.
	 * 
	 *  TODOS
	 *  Add format and text maybe even a script if data is not entered correctly.
	 */
?>	 


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
		    var myData = {	residentDegree_Education: $("#residentDegree").val(),
		    				continueEdYN_Education: $("#continueEdYN").val(),
		    				futureEdu_Education: $("#futureEdu").val()
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
