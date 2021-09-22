@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> الاخبار الرئيسية </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">اسعار العملات
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">اسعار العملات في صنعاء وعدن</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')

                                <div class="card-content collapse show">

                                    <div class="card-body card-dashboard">

                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <thead class="">
                                            <h2 class="card-title" style="text-align: center;font-weight: bold;color:#0B7CC5">اسعار العملات في صنعاء </h2>
                                            <tr>

                                                <th> اسم العملة</th>
                                                <th>الصوره</th>
                                                <th>سعر البيع</th>
                                                <th>سعر الشراء</th>

                                                <th>النوع</th>
                                                <th>الحاله</th>
                                                <th>الدوله</th>
                                                <th> الاجرات</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($sana)
                                                @foreach($sana as $Job)
                                                    <tr>
                                                        <td> {{$Job ->cur_name}}</td>

                                                        <td>   <img style="width: 15px; height: 15px;" src= "{{asset('theme/img/'.$Job ->imagee) }}"></td >
                                                            <td style="width:50%;">{{$Job ->cur_sell}}</td>
                                                        <td  >{{$Job ->cur_buy}}</td>

                                                        <td style="width:50%;">{{$Job ->stutes}}</td>
                                                        <td>   <img style="width: 15px; height: 15px;" src= "{{asset('theme/img/'.$Job ->stutes) }}"></td >
                                                        <td  >{{$Job ->zone}}</td>




                                                        <td>

                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.currency.edit',$Job->id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                                <a href="{{route('admin.currency.delete',$Job->id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>

                                                                {{--<a href="{{route('admin.Jobs.details',$Job->cur_id)}}" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"><span>عرض التقدمين</span></a>--}}




                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>

                                        <div class="justify-content-center d-flex">
                                            {{$sana ->links()}}
                                        </div>
                                    </div>
                                </div>








                                <div class="card-content collapse show">

                                    <div class="card-body card-dashboard">
                                        <table
                                                class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <thead class="">
                                            <h4 class="card-title" style="text-align: center;font-weight: bold;color: #0B7CC5  ">اسعار العملات في عدن </h4>
                                            <tr>

                                                <th> اسم العملة</th>
                                                <th>الصوره</th>
                                                <th>سعر البيع</th>
                                                <th>سعر الشراء</th>

                                                <th>النوع</th>
                                                <th>الحاله</th>
                                                <th>الدوله</th>
                                                <th> الاجرات</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($aden)
                                            @foreach($aden as $Job)
                                                <tr>
                                                    <td> {{$Job ->cur_name}}</td>

                                                    <td>   <img style="width: 15px; height: 15px;" src= "{{asset('theme/img/'.$Job ->imagee) }}"></td >
                                                    <td style="width:50%;">{{$Job ->cur_sell}}</td>
                                                    <td  >{{$Job ->cur_buy}}</td>

                                                    <td style="width:50%;">{{$Job ->stutes}}</td>
                                                    <td>   <img style="width: 15px; height: 15px;" src= "{{asset('theme/img/'.$Job ->stutes) }}"></td >
                                                    <td  >{{$Job ->zone}}</td>




                                                    <td>

                                                        <div class="btn-group" role="group"
                                                             aria-label="Basic example">
                                                            <a href="{{route('admin.currency.edit',$Job->id)}}"
                                                               class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                            <a href="{{route('admin.currency.delete',$Job->id)}}"
                                                               class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>

                                                            {{--<a href="{{route('admin.Jobs.details',$Job->cur_id)}}" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"><span>عرض التقدمين</span></a>--}}




                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @endisset


                                            </tbody>
                                        </table>

                                        <div class="justify-content-center d-flex">
                                            {{$aden ->links()}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
