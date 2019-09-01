var radar;
var dataset;
var dimensioni;

function radarStart(){
  'use strict';

  	radar = new Chart(document.getElementById("radar-chart"), {
  		type: 'radar',
 			data: {
    			labels: [
    				"Programmazione Web",
    				"Blockchain",
    				"UI/UX Design",
    				"Social-Media Marketing",
    				"People-Oriented",
            "Intelligenza Artificiale",
            "Resilienza",
            "Mindset"
    				],
    			datasets: [
    				{
        				label: "You",
        				fill: true,
        				backgroundColor: "rgba(100,255,100, 0.5)",
        				borderColor: "#004d00",
        				pointBorderColor: "#fff",
                borderWidth: 1.7,
        				pointBackgroundColor: "#004d00",
        				data: []
      			}
    			]
  		},
  		options: {
  			legend:{
  				display: false
  			},
    			title: {
      			display: false,
      			text: 'Competenze - Radar'
    			}
  		}
	});

  dimensioni = radar.data.labels.length;

  dataset = radar.data.datasets[0].data;

  const max = 20;

  setInterval( function(){
    for ( var i = 0; i < dimensioni; i++ ){
      dataset[i] = Math.floor(Math.random() * Math.floor(max));
    }
    radar.update();
  }, 2000);
}