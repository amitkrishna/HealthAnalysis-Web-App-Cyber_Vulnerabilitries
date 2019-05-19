$(document).ready(function(){
				$.ajax({
						url:"http://ideweb2.hh.se/~amikri19/project/dashboard/get_up_time_data.php",
						method:"GET",
						success: function(data){
								console.log(data);

								var g_time=[];
								var dates=[];
								for(var i in data)
								{
									g_time.push(data[i].GetupTime);
									dates.push(data[i].Dates);
								}
								var datae = [
											{
											x: dates,
											y: g_time,
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