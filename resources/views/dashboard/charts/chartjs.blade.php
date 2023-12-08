<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kumpulan Chart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0 mt-4">
          <div class="card">
            <div class="card-body">
                <div id="container1"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0 mt-4">
            <div class="card">
                <div class="card-body">
                    <div id="container2"></div>
                </div>
            </div>
        </div>  
    </div>
    <div class="col mt-4">
        <div class="card">
          <div class="card-body">
            <figure class="highcharts-figure-bar">
              <div id="container3"></div>
              <div id="sliders">
                  <table>
                      <tr>
                          <td><label for="alpha">Alpha Angle</label></td>
                          <td><input id="alpha" type="range" min="0" max="45" value="15"/> <span id="alpha-value" class="value"></span></td>
                      </tr>
                      <tr>
                          <td><label for="beta">Beta Angle</label></td>
                          <td><input id="beta" type="range" min="-45" max="45" value="15"/> <span id="beta-value" class="value"></span></td>
                      </tr>
                      <tr>
                          <td><label for="depth">Depth</label></td>
                          <td><input id="depth" type="range" min="20" max="100" value="50"/> <span id="depth-value" class="value"></span></td>
                      </tr>
                  </table>
              </div>
            </figure>
          </div>
        </div>
    </div>
</div>
    
<script type="text/javascript">

    $(function(){
        Highcharts.chart('container1', {
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
        
    })

    $(function(){
        Highcharts.chart('container2', {
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
        
    })

    $(function(){
        const chart = new Highcharts.Chart('container3', {
            chart: {
                renderTo: 'container',
                type: 'column',
                options3d: {
                    enabled: true,
                    alpha: 15,
                    beta: 15,
                    depth: 50,
                    viewDistance: 25
                }
            },
            xAxis: {
                categories: ['2006', '2007', '2005', '2004', '2003']
            },
            yAxis: {
                title: {
                    enabled: false
                }
            },
            tooltip: {
                headerFormat: '<b>{point.key}</b><br>',
                pointFormat: 'Siswa: {point.y}'
            },
            title: {
                text: 'Presentase Tahun Kelahiran Siswa',
                align: 'center'
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    depth: 25
                }
            },
            series: [{
                data: [6, 4, 3, 2, 1],
                colorByPoint: true
            }]
        });

        function showValues() {
            document.getElementById('alpha-value').innerHTML = chart.options.chart.options3d.alpha;
            document.getElementById('beta-value').innerHTML = chart.options.chart.options3d.beta;
            document.getElementById('depth-value').innerHTML = chart.options.chart.options3d.depth;
        }

        // Activate the sliders
        document.querySelectorAll('#sliders input').forEach(input => input.addEventListener('input', e => {
            chart.options.chart.options3d[e.target.id] = parseFloat(e.target.value);
            showValues();
            chart.redraw(false);
        }));

        showValues();

    })
</script>

</body>
</html>