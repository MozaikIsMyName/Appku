Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Presentase Asal Kota Siswa',
        align: 'center'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Asal Kota',
        data: [
            ['Malang', 4],
            ['Cilacap', 3],
            ['Bandung', 2],
            ['Jakarta', 2],
            {
            },
            ['Bekasi', 2],
            ['Aceh', 2],
            ['Kediri', 1]
        ]
    }]
});

