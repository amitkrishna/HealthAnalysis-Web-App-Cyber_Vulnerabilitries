$(document).ready(function(){
				$.ajax({
						url:"http://ideweb2.hh.se/~amikri19/project/dashboard/w_dist_data.php",
						method:"GET",
						success: function(data){
								console.log(data);

								var w_dist=[];
								var dates=[];
								for(var i in data)
								{
									w_dist.push(data[i].Walking_dist);
									dates.push(data[i].Dates);
								}
								var datae = [
											{
											x: dates,
											y: w_dist,
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

