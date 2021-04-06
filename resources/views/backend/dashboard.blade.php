@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <body style="height: 400px; margin: 0">

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="container" style="padding-top: 10px;padding-bottom: 10px;">
                    <h3>Total Sales</h3>
                    <h2>USD {{number_format($total_sales,2)}}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="container" style="padding-top: 10px;padding-bottom: 10px;">
                    <h3>Number of Orders</h3>
                    <h2>{{$numberof_orders}}</h2>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="container" style="padding-top: 10px;padding-bottom: 10px;">
                    <h3>Sold Music Items</h3>
                    <h2>{{$invoice_item}}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="container" style="padding-top: 10px;padding-bottom: 10px;">
                    <h3>Users Count</h3>
                    <h2>{{$user_count}}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6"> <br>
                <h2>Sales This Week</h2>
                <div id="container" style="height: 400px"></div>
            </div>
        </div>


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
                data: [
                    @foreach($orderDays as $orderSalesI)
                    "{{$orderSalesI->days}}",
                    @endforeach

                ]
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: [
                    @foreach($orderDays as $orderSales)
                    {{$orderSales->sums.','}}
                    @endforeach
                ],
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
