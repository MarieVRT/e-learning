@extends('layouts.template')

@section('title')

    <h1 class="mb-0 text-center"> Vos statistiques </h1>

@endsection

@section('content')

<div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([

                [' ', 'Global', 'Moi' ],
                @foreach ($advancement as $a)// On parcourt les catégories
                    @foreach ($advancement_all as $aa)
                    @if($aa->language_id == $a->language_id)
                [ '{{ $aa->name }}', {{ $aa->pts}}, {{ $a->points }} ],
                @endif
                @endforeach
                @endforeach
            ]);

            var options = {
                chart: {
                    title: 'Moyenne des notes par langage - vos notes'},
                bars: 'vertical', // Direction "verticale" pour les bars
                backgroundColor : '#FDF7F9',
                chartArea : {
                    backgroundColor: '#FDF7F9'
                },
                colors: ['#E77C99', '#f12a62']
            };

            var chart = new google.charts.Bar(document.getElementById('mon-chart'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>

        <div id="mon-chart" style="height: 500px; width: 800px; margin: 50px 0 50px 200px;" ></div>


</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
</script>
@endsection
