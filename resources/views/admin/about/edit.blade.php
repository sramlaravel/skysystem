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
                                <li class="breadcrumb-item"><a href="{{route('admin.languages')}}"> أللغات </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل لغة
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
                                    <h4 class="card-title" id="basic-layout-form">من نحن </h4>
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
                                        <form class="form" action="{{route('admin.about.update',$abouts -> id)}}"
                                              method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>بيانات الاسلايدات </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> العنوان بالعربي </label>
                                                            <input type="text" id="name"
                                                                   class="form-control"
                                                                   value="{{$abouts -> title_ar}}"
                                                                   placeholder="ادخل اسم اللغة  "
                                                                   name="title_ar">
                                                            @error('title_ar')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> العنوان بالانجليزي </label>
                                                            <input type="text" id="name"
                                                                   class="form-control"
                                                                   value="{{$abouts -> title_en}}"
                                                                   placeholder="ادخل اسم اللغة  "
                                                                   name="title_en">
                                                            @error('title_en')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label for="projectinput1"> الوصف بالعربي </label>

                                                    <textarea class="form-control"
                                                              value="{{Request::old('description_ar')}}"
                                                              id="placeTextarea" rows="3" name="description_ar"
                                                              type="text"
                                                              placeholder="ادخل الوصف.">{{$abouts -> description_ar}}</textarea>
                                                    @error('description_ar')
                                                    <span class="text-danger">{{$message}} </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="projectinput1"> الوصف بالانجليزي </label>

                                                    <textarea class="form-control"
                                                              value="{{Request::old('description_en')}}"
                                                              id="placeTextarea" rows="3" name="description_en"
                                                              type="text"
                                                              placeholder="ادخل الوصف.">{{$abouts -> description_en}}</textarea>
                                                    @error('description_en')
                                                    <span class="text-danger">{{$message}} </span>
                                                    @enderror
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label> صوره الاسلايد </label>
                                                            <label id="projectinput7" class="file center-block">
                                                                <input type="file" id="file" name="image">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                            @error('image')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <div class="text-center">
                                                                    <img src="{{asset($abouts -> image)}}" class="rounded-circle  height-150" style="" alt="صورة الوكيل  ">
                                                                </div>
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


                                                {{--<div class="row">--}}
                                                {{--<div class="col-md-6">--}}
                                                {{--<div class="form-group mt-1">--}}
                                                {{--<input type="checkbox"  value="1" name="statu"--}}
                                                {{--id="switcheryColor4"--}}
                                                {{--class="switchery" data-color="success"--}}


                                                {{--@if($slider -> statu  ==1 )--}}
                                                {{--checked > @endif--}}

                                                {{--<label for="switcheryColor4"--}}
                                                {{--class="card-title ml-1">الحالة </label>--}}

                                                {{--@error('statu')--}}
                                                {{--<span class="text-danger">{{$message}}</span>--}}
                                                {{--@enderror--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> تحديث
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
