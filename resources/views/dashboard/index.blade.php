@extends('dashboard.layouts.main2')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">Dashboard</h2>
</div>

@include('dashboard.charts.box')

@include('dashboard.charts.chartjs')

@endsection