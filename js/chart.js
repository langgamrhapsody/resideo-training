var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
  type: "doughnut",
  data: {
    datasets: [
      {
        data: [80, 7, 13],
        backgroundColor: [
          "rgba(0, 112, 201, 255)",
          "rgba(75,154,217,255)",
          "rgba(153,198,233,255)",
        ],
        borderColor: [
          "rgb(255,255,255)",
          "rgb(255,255,255)",
          "rgb(255,255,255)",
        ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    cutout: 100,
    responsive: false,
  },
});
