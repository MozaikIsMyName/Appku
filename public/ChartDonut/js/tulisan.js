// Data retrieved from https://olympics.com/en/olympic-games/beijing-2022/medals
Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    title: {
        text: 'Presentase Jenis Kelamin Siswa',
        align: 'center'
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
        name: 'Jumlah Siswa',
        data: [
            ['Laki-Laki', 10],
            ['Perempuan', 6]
        ]
    }]
});
