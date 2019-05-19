$(document).ready(function(){
				$.ajax({
						url:"http://ideweb2.hh.se/~amikri19/project/dashboard/energy_data.php",
						method:"GET",
						success: function(data){
								console.log(data);

								var energy=[];
								var dates=[];
								for(var i in data)
								{
									energy.push(data[i].Energy);
									dates.push(data[i].Dates);
								}
								var datae = [
											{
											x: dates,
											y: energy,
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

