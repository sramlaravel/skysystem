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
                                <li class="breadcrumb-item"><a href="{{route('admin.Jobs')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">الوظائف الشاغرة
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
                                    <h4 class="card-title">جميع الوظائف الشاغره</h4>
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
                                            <tr>

                                                <th> عنوان الوظيفة</th>
                                                <th>الاسم</th>
                                                <th> العمر </th>
                                                <th>المؤهل</th>
                                                <th>الايميل</th>
                                                <th>التلفون</th>
                                                <th>العنوان</th>
                                                <th>الكفائات والخبرات</th>
                                                <th>السيفي</th>
                                                <th> الاجرات</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($newsDetail)
                                                @foreach($newsDetail as $applyer)
                                                    <tr>
                                                        <td> {{$applyer ->title}}</td>

                                                        <td> {{$applyer ->name}} </td >
                                                            <td >{{$applyer ->age}}</td>
                                                        <td  >{{$applyer ->degree}}</td>
                                                        <td  >{{$applyer ->email}}</td>

                                                        <td  >{{$applyer ->phone}}</td>
                                                        <td  >{{$applyer ->address}}</td>
                                                        <td style="width:50%;" >{{$applyer ->skills}}</td>
                                                        <td  >{{$applyer ->cv}}</td>
                                                        <td>

                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                {{--<a href="{{route('admin.Jobs.edit',$Job->id)}}"--}}
                                                                   {{--class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>--}}


                                                                {{--<a href="{{route('admin.Jobs.delete',$Job->id)}}"--}}
                                                                   {{--class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>--}}
                                                                <a href="{{route('admin.Jobs.getDownload',$applyer->cv)}}" class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"><span>Downloads</span></a>




                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>

                                        <div class="justify-content-center d-flex">
                                            {{--{{$newsDetail->links()}}--}}
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
