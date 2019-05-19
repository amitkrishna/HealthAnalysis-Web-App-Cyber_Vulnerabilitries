$(document).ready(function(){
				$.ajax({
						url:"http://ideweb2.hh.se/~amikri19/project/dashboard/indoor_temp_data.php",
						method:"GET",
						success: function(data){
								console.log(data);

								var i_temp=[];
								var dates=[];
								for(var i in data)
								{
									i_temp.push(data[i].Indoor_Temp);
									dates.push(data[i].Dates);
								}
								var datae = [
											{
											x: dates,
											y: i_temp,
											type: 'line'
											}
											];
								var TESTER = document.getElementById('graphCanvas');
								
								

								Plotly.plot(TESTER, datae,{ 
									margin: { t: 0 } }, {showSendToCloud:true} );
								//Plotly.newplot(TESTER,datae,layout);
								console.log(Plotly.BUILD);
						}
						,	
						error : function(data) {
								console.log(data);
			}
	});
});