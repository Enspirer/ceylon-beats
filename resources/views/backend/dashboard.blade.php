@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <body style="height: 400px; margin: 0">

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="container" style="padding-top: 10px;padding-bottom: 10px;">
                    <h3>Total Sales</h3>
                    <h2>01</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="container" style="padding-top: 10px;padding-bottom: 10px;">
                    <h3>Number of Orders</h3>
                    <h2>22</h2>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="container" style="padding-top: 10px;padding-bottom: 10px;">
                    <h3>Number of Orders</h3>
                    <h2>22</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="container" style="padding-top: 10px;padding-bottom: 10px;">
                    <h3>Number of Orders</h3>
                    <h2>22</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="card">

        <div id="container" style="height: 400px"></div>

        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
    </div>
.




    <script type="text/javascript">
        var dom = document.getElementById("container");
        var myChart = echarts.init(dom);
        var app = {};

        var option;



        option = {
            xAxis: {
                type: 'category',
                data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: [120, 200, 150, 80, 70, 110, 130],
                type: 'bar',
                showBackground: true,
                backgroundStyle: {
                    color: 'rgba(180, 180, 180, 0.2)'
                }
            }]
        };

        if (option && typeof option === 'object') {
            myChart.setOption(option);
        }

    </script>
@endsection
