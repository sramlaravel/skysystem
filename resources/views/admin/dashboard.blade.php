
@extends('layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div id="crypto-stats-3" class="row">
                    <div class="col-xl-3 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>أجمالي المبيعات </h4>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>$9,980</h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="btc-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>أجمالي الطلبات</h4>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>$944</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="eth-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>عدد المنتجات </h4>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>{{\App\Models\admin::count()}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="xrp-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>عدد العملاء</h4>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>{{\App\Models\admin::count()}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="xrp-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Candlestick Multi Level Control Chart -->

                <!-- Sell Orders & Buy Order -->
                <div class="row match-height">
                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
                                <h4 class="card-title">أحدث الطلبات </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th>رقم الطلب</th>
                                            <th> اسم العميل</th>
                                            <th>الايميل</th>
                                            <th>رقم التللفون</th>
                                            <th>الرساله</th>
                                            <th>الاجراء</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($contacts)
                                        @foreach($contacts as $key=> $contact)
                                        <tr class="bg-success bg-lighten-5">
                                            <td>{{$key+1}}</td>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->phone}}</td>
                                            <td>{{$contact->message}}</td>

                                            <td>

                                                <div class="btn-group" role="group"
                                                       aria-label="Basic example">
                                                    <a href="{{route('admin.dashboard.delete',$contact -> id)}}"
                                                       class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>



                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endisset

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="col-12 col-xl-4">--}}
                        {{--<div class="card">--}}
                            {{--<div class="card-header">--}}
                                {{--<h4 class="card-title">اخر التقيمات</h4>--}}
                                {{--<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>--}}
                                {{--<div class="heading-elements">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="card-content">--}}
                                {{--<div class="table-responsive">--}}
                                    {{--<table class="table table-de mb-0">--}}
                                        {{--<thead>--}}
                                        {{--<tr>--}}
                                            {{--<th> العميل</th>--}}
                                            {{--<th>المنتج</th>--}}
                                            {{--<th>التقييم </th>--}}
                                        {{--</tr>--}}
                                        {{--</thead>--}}
                                        {{--<tbody>--}}
                                        {{--<tr class="bg-danger bg-lighten-5">--}}
                                            {{--<td>احمد امام</td>--}}
                                            {{--<td><i class="cc BTC-alt"></i> ساعه يد</td>--}}
                                            {{--<td> 5 </td>--}}
                                        {{--</tr>--}}

                                        {{--</tbody>--}}
                                    {{--</table>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <!--/ Sell Orders & Buy Order -->

            </div>
        </div>
    </div>

@stop
