$(document).ready(function(){
				$.ajax({
						url:"http://ideweb2.hh.se/~amikri19/project/dashboard/no_steps_data.php",
						method:"GET",
						success: function(data){
								console.log(data);

								var steps=[];
								var dates=[];
								for(var i in data)
								{
									steps.push(data[i].Steps_per_day);
									dates.push(data[i].Dates);
								}
								var datae = [
											{
											x: dates,
											y: steps,
											type: 'bar'
											}
											];
								var TESTER = document.getElementById('graphCanvas');
								
								/*var layout = {
											title: {
													text:'Steps Per Day',
													font: {
													family: 'Courier New, monospace',
													size: 24
													},
											xref: 'paper',
											x: 0.05,
											},
											xaxis: {
													title: {
													  text: 'Date of Input',
													  font: {
														family: 'Courier New, monospace',
														size: 18,
														color: '#7f7f7f'
													  }
													},
												  },
												  yaxis: {
													title: {
													  text: 'Steps Per Day',
													  font: {
														family: 'Courier New, monospace',
														size: 18,
														color: '#7f7f7f'
													  }
													}
												  };*/

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

