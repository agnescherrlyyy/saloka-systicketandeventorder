var options = {
  series: [{
    name: 'IT',
    data: [31, 40, 28, 51, 42, 109, 100, 0, 0, 0, 0, 0] 
  }, {
    name: 'Rimba',
    data: [11, 32, 45, 32, 34, 52, 41, 0, 0, 0, 0, 0]
  }, {
    name: 'Shop 89',
    data: [15, 11, 32, 18, 9, 62, 21, 0, 0, 0, 0, 0]
  }],
  chart: {
    height: 350,
    type: 'area'
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'smooth'
  },
  xaxis: {
    type: 'category',
    categories: [
      "2023-01-01", "2023-02-01", "2023-03-01", "2023-04-01", "2023-05-01", "2023-06-01",
      "2023-07-01", "2023-08-01", "2023-09-01", "2023-10-01", "2023-11-01", "2023-12-01"
    ],
    labels: {
      formatter: function (value, timestamp) {
        // Ubah format tanggal menjadi nama bulan
        const date = new Date(value);
        const month = date.toLocaleString('id-ID', { month: 'long' });
        return month;
      }
    }
  },
  tooltip: {
    x: {
      format: 'dd/MM/yy HH:mm'
    },
  },
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();