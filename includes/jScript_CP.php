 <!-- Javascript that allows the appears and disappearence
			 of html based on its ID
		-->
		<script type="text/javascript">
			    
		    function toggle_visibility(id) 
		    {	
			       	var e = document.getElementById(id);
			       	if(e.style.display == 'none')
			           	e.style.display = 'block';
			          	
		    }
		</script>
		<script type="text/javascript">
            var counter = 0;

            function moreFields() 
            {
                counter++;
                var newFields = document.getElementById("childrenHidden").cloneNode(true);
                newFields.id = '';
                newFields.style.display = 'block';
                var newField = newFields.childNodes;
                
                if (counter > 8)
                {
                	alert("A maximum of 8 children is allowed")
                }
                else
                {
                	for (var i=0;i<newField.length;i++) 
	                {
	                    var theName = newField[i].name
						var theId = newField[i].id
	                    if (theName)
						{
	                       	newField[i].name = theName + counter;
							newField[i].id = theId + counter;
						}
	                }
					
					var insertHere = document.getElementById("childrenPrinted");
                	insertHere.parentNode.insertBefore(newFields,insertHere);
                }
                
			}

            window.onload = moreFields;
		</script>
 
 <script type="text/javascript">
	$(document).ready(function() 			
	{
		//##### Add record when Add Record Button is click #########
		$("#ChildrenSubmit").click(function (e) 
		{
			alert('WHY');
		
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
	    			url: "includes/childrenAdd_CP.php", //Where form data is sent on submission
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
		$("#IncarcerationSubmit").click(function (e) 
		{
			e.preventDefault();
			alert("incarcerationadd");
		    var myData = {	$incarceration_YN: $("#incarcerationYN").val(),
		    				$incarceration_Loc: $("#incarcerationLoc").val(),
		    				$incarceration_Charges: $("#incarcerationCharges").val(),
		    				$incarceration_Start: $("#incarcerationStart").val(),
		    				$incarceration_End: $("#incarcerationEnd").val(),
		    				$institutionalized_YN: $("#institutionalizedYN").val(),
		    				$institution_Name: $("#institutionName").val(),
		    				$institution_Start: $("#institutionStart").val(),
		    				$institution_End: $("#institutionEnd").val(),
		    				$institution_Reason: $("#institutionReason").val()
		    				}; //build a post data structure

	    	jQuery.ajax(
	    	{
	    			type: "POST", // Post / Get method
	    			url: "includes/criminalAdd_CP.php", //Where form data is sent on submission
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
			alert("employee");
		    var myData = {	current_Employment: $("#currentEmployment").val(),
		    				companyName_Employment: $("#companyNameEmployment").val(),
		    				managerName_Employment: $("#managerNameEmployment").val(),
		    				managerPhoneNum_Employment: $("#managerPhoneNumEmployment").val(),
		    				hoursFrom_Employment: $("#hoursFromEmployment").val(),
		    				hoursTo_Employment: $("#hoursToEmployment").val(),
		    				rateOfPay_Employment: $("#rateOfPayEmployment").val(),
		    				income_Employment: $("#incomeEmployment").val()
		    				}; //build a post data structure

	    	jQuery.ajax(
	    	{
	    			type: "POST", // Post / Get method
	    			url: "includes/employmentAdd_CP.php", //Where form data is sent on submission
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
		    				continueEd_Education: $("#continueEdEducation").val(),
		    				futureEdu_Education: $("#futurePlansEducation").val()
		    				}; //build a post data structure

	    	jQuery.ajax(
	    	{
	    			type: "POST", // Post / Get method
	    			url: "includes/educationAdd_CP.php", //Where form data is sent on submission
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
		$("#DomesticSubmit").click(function (e) 
		{
			e.preventDefault();
			alert("Domestic");
		    var myData = {	violenceYN_Domestic: $("#violenceYNDomestic").val(),
		    				safetyYN_Domestic: $("#safetyYNDomestic").val(),
		    				restrainingOrderYN_Domestic: $("#restrainingOrderYNDomestic").val(),
							perpName_Domestic: $("#perpNameDomestic").val(),
							familyDetails_Domestic: $("#familyDetailsDomestic").val(),
							homelessDetails_Domestic: $("#homelessDetailsDomestic").val(),
							housingDetails_Domestic: $("#housingDetailsDomestic").val(),
							livedAloneYN_Domestic: $("#livedAloneYNDomestic").val(),
							rentYN_Domestic: $("#rentYNDomestic").val(),
							landlordComments_Domestic: $("#landlordCommentsDomestic").val()
		    				}; //build a post data structure

	    	jQuery.ajax(
	    	{
	    			type: "POST", // Post / Get method
	    			url: "includes/domesticAdd_CP.php", //Where form data is sent on submission
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
		    		$("#GenericSubmit").click(function (e) 
		    		{
		    			e.preventDefault();
						//alert('GENERIC');
		    			
		    			// Make sure the residents first name is filled out
					    if($("#firstNameGeneric").val()==='')
					    {
					    	alert("Please enter the resident's first name!");
					    	return false;
					    }
					    
					    // Make sure the residents last name is filled out
					    if($("#lastNameGeneric").val()==='')
					    {
					    	alert("Please enter the resident's last name!");
					    	return false;
					    }
					    
					    // Make sure the residents gender is filled out
					    if($("#genderGeneric").val()==='')
					    {
					    	alert("Please enter the resident's gender!");
					    	return false;
					    }
					    
					    // Make sure the residents SSN is filled out
					    if($("#ssnGeneric").val()==='')
					    {
					    	alert("Please enter the resident's Social Security Number!");
					    	return false;
					    }
					    var myData = {	first_NameGeneric: $("#firstNameGeneric").val(),
					    				middleInitial_Generic: $("#middleInitialGeneric").val(),
					    				last_NameGeneric: $("#lastNameGeneric").val(),
					    				gender_Generic: $("#genderGeneric").val(),
					    				ssn_Generic: $("#ssnGeneric").val(),
					    				cellPhone_Generic: $("#cellPhoneGeneric").val(),
					    				residentType_Generic: $("#residentTypeGeneric").val(),
					    				currentResident_Generic: $("#currentResidentGeneric").val(),
					    				monthDOB_Generic: $("#monthDOBGeneric").val(),
					    				dayDOB_Generic: $("#dayDOBGeneric").val(),
					    				yearDOB_Generic: $("#yearDOBGeneric").val()}; //build a post data structure
				    
				    	jQuery.ajax(
				    	{
				    			type: "POST", // Post / Get method
				    			url: "includes/genericAdd_CP.php", //Where form data is sent on submission
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
