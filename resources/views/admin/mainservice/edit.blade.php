@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.mainservice')}}"> الخدمات </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل الخدمه
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> إضافه الخدمه  </h4>
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
                                    <div class="card-body">
                                        <form class="form" action="{{route('admin.mainservice.update',$services->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>بيانات الخدمات </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> العنوان </label>
                                                            <input type="text"  id="name"
                                                                   class="form-control"
                                                                   value="{{$services -> title}}"
                                                                   placeholder="ادخل اسم اللغة  "
                                                                   name="title">
                                                            @error('title')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> وصف العنوان </label>
                                                            <input type="text"  id="name"
                                                                   class="form-control"
                                                                   value="{{$services -> title_desc}}"
                                                                   placeholder="ادخل اسم اللغة  "
                                                                   name="title_desc">
                                                            @error('title_desc')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                    <div class="form-group">
                                                        <label for="projectinput1"> المودل </label>
                                                        <input type="text"  id="name"
                                                               class="form-control"
                                                               value="{{$services -> model}}"
                                                               placeholder="ادخل اسم اللغة  "
                                                               name="model">
                                                        @error('model')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>


                                                <div class="form-group">
                                                    <label for="projectinput1"> شرح الموضوع </label>

                                                    <textarea    class="form-control"      id="placeTextarea" rows="3"  name="description" type="text"   placeholder="ادخل الوصف."    >{{$services -> description}}</textarea>
                                                    @error('description')
                                                    <span class="text-danger">{{$message}} </span>
                                                    @enderror
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label> صوره الخدمه </label>
                                                            <label id="projectinput7" class="file center-block">
                                                                <input type="file" id="file" name="image">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                            @error('image')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="text-center">
                                                                <img src="{{asset($services -> image)}}"
                                                                     class="rounded-circle  height-150"
                                                                     alt="صورة الخدمه  ">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{--<div class="row">--}}

                                                {{--<div class="col-md-6">--}}
                                                {{--<div class="form-group">--}}
                                                {{--<label for="projectinput2"> الاتجاة </label>--}}
                                                {{--<select name="direction" class="select2 form-control">--}}
                                                {{--<optgroup label="من فضلك أختر اتجاه اللغة ">--}}
                                                {{--<option value="rtl" @if($language ->direction == 'rtl' ) selected @endif>من اليمين الي اليسار</option>--}}
                                                {{--<option value="ltr" @if($language ->direction == 'ltr') selected @endif>من اليسار الي اليمين</option>--}}
                                                {{--</optgroup>--}}
                                                {{--</select>--}}
                                                {{--@error('direction')--}}
                                                {{--<span class="text-danger">{{$message}}</span>--}}
                                                {{--@enderror--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="1" name="statu"
                                                                   id="switcheryColor4"
                                                                   class="switchery" data-color="success"

                                                                   @if($services -> statu  ==1 )
                                                                   checked >
                                                            @endif

                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1">الحالة </label>

                                                            @error('statu')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i>  تحديث
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@endsection
