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
		    				child_Name4: $("#childName7").val(),
		    				child_Gender4: $("#childGender7").val(),
		    				child_SSN4: $("#childSSN7").val(),
		    				child_Month4: $("#childMonth7").val(),
		    				child_Day4: $("#childDay7").val(),
		    				child_Year4: $("#childYear7").val(),
		    				child_Name4: $("#childName8").val(),
		    				child_Gender4: $("#childGender8").val(),
		    				child_SSN4: $("#childSSN8").val(),
		    				child_Month4: $("#childMonth8").val(),
		    				child_Day4: $("#childDay8").val(),
		    				child_Year4: $("#childYear8").val()
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