$(document).ready(function(){
				$.ajax({
						url:"http://ideweb2.hh.se/~amikri19/project/dashboard/b_time_data.php",
						method:"GET",
						success: function(data){
								console.log(data);

								var b_time=[];
								var dates=[];
								for(var i in data)
								{
									b_time.push(data[i].Bedtime);
									dates.push(data[i].Dates);
								}
								var datae = [
											{
											x: dates,
											y: b_time,
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

