var data = {
  datasets: [{
    data: [150, 100, 75, 35],
    backgroundColor: [
      "#F7464A",
      "#46BFBD",
      "#ac39ac",
	  "#ffdb4d"]
  }],
  labels: [
    "ADMIN",
    "AUDIT OFFICER",
    "M-ASSISTANT",
	"USER"]
};

$(document).ready(
  function () {
    var canvas = document.getElementById("myChart");
    var ctx = canvas.getContext("2d");
    var myNewChart = new Chart(ctx, {
      type: 'pie',
      data: data,
	  options: {
        /* responsive: true, */
		pieceLabel: {
		mode: 'label',
		fontSize: 12,
		fontStyle: 'bold',
		fontFamily: '"Lucida Console", Monaco, monospace'
		},
        animation: {
            animateScale: true,
            animateRotate: true
        },
		legend: {
            display: false
         },
         tooltips: {
            enabled: false
         }
    }
    });

		
	canvas.onclick = function(evt) {
		document.getElementById('id01').style.display='block';
	};
		

  }
);
