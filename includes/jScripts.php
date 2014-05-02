 <script type="text/javascript">
	$(document).ready(function() 			
	{
		//##### Add record when Add Record Button is click #########
		$("#ChildrenSubmit").click(function (e) 
		{
			e.preventDefault();
			var data1 = $("#childName").val();
			var data2 = $("#childName1").val();
			var data3 = $("#childName2").val();
			var data4 = $("#childName3").val();
			var data5 = $("#childName4").val();
			
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
		    				child_Year4: $("#childYear4").val()
		    				}; //build a post data structure
		    				
		    alert("The Vars are " + data1 + "," + data2 + "," + data3 + "," + data4 + "," + data5 + ".");
	    
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