$(document).ready(function(){
				$.ajax({
						url:"http://ideweb2.hh.se/~amikri19/project/dashboard/sleep_time_data.php",
						method:"GET",
						success: function(data){
								console.log(data);

								var hrs=[];
								var dates=[];
								for(var i in data)
								{
									hrs.push(data[i].SleepTime);
									dates.push(data[i].Dates);
								}
								var datae = [
											{
											x: dates,
											y: hrs,
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

