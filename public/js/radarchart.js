var options = {
    series: [{
    name: 'Series 1',
    data: [120, 50, 30, 40, 100, 20],
    }],
        chart: {
        height: 350,
        type: 'radar',
    },
    xaxis: {
        categories: ['11.00 - 13.00', '13.00 - 15.00', '15.00 - 17.00', '17.00 - 19.00', '19.00 - 21.00', '09.00 - 11.00'],
    }
};

var chart = new ApexCharts(document.querySelector("#chartradar"), options);
chart.render();