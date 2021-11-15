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
                                <li class="breadcrumb-item active">الاخبار الجديدهه
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
                                    <h4 class="card-title">جميع الاخبار </h4>
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
                                <div class="table-responsive">
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table   class="table display nowrap table-striped table-bordered">
                                            <thead>
                                            <tr>

                                                <th>الرقم </th>
                                                <th> عنوان الوظيفة</th>
                                                <th>اسم الوظيفة بالعربي </th>
                                                <th>اسم الوظيفة بالانجليزي </th>



                                                <th> متطلبات الوظيفه بالعربي</th>
                                                <th>  متطلبات الوظيفه بالانجليزي</th>

                                                <th>  الموقع بالعربي </th>
                                                <th>  الموقع بالانجليزي </th>

                                                <th>الصوره</th>

                                                <th> الاجرات</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($jobs)
                                            @foreach($jobs as $key=> $Job)
                                                <tr>

                                                    <td>{{$key+1}}</td>
                                                    <td>{{$Job->title_ar}}</td>
                                                    <td>{{$Job->title_en}}</td>
                                                    <td  >{{$Job->requirements_ar}}</td>
                                                    <td  >{{$Job->requirements_en}}</td>
                                                    <td>{{$Job->location_ar}}</td>
                                                    <td>{{$Job->location_en}}</td>
                                                    <td>   <img style="width: 150px; height: 100px;" src= "{{asset($Job -> image) }}"></td >


                                                    <td>

                                                        <div class="btn-group" role="group"aria-label="Basic example">
                                                            <a href="{{route('admin.Jobs.edit',$Job->id)}}"
                                                               class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                            <a href="{{route('admin.Jobs.delete',$Job->id)}}"
                                                               class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>

                                                            <a href="{{route('admin.Jobs.details',$Job->id)}}" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"><span>عرض التقدمين</span></a>




                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
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