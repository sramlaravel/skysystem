@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href=""> الاقسام الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item active">إضافة قسم رئيسي
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
                                    <h4 class="card-title" id="basic-layout-form"> إضافة قسم رئيسي </h4>
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
                                        <form class="form" action="{{route('admin.items.store')}}"  method="POST"  enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-body">


                                                <h4 class="form-section">
                                                    <i class="ft-home"></i> بيانات القسم </h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput2"> أختر القسم </label>
                                                            <select name="item_id" class="select2 form-control">
                                                                <optgroup label="من فضلك أختر القسم ">
                                                                    @if($categories && $categories -> count() > 0)

                                                                        @foreach($categories as $category)

                                                                            <option
                                                                                    value="{{$category -> id }}">{{$category -> name_ar}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </optgroup>
                                                            </select>
                                                            @error('item_id')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> اسم الصنف - بالعربي  </label>
                                                                    <input type="text" value="" id="title_ar"
                                                                           class="form-control"
                                                                           placeholder="  "
                                                                           name="title_ar">
                                                                    @error("title_ar")
                                                                    <span class="text-danger">  هذا الحقل مطلوب</span>
                                                                    @enderror
                                                                </div>

                                                            </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> اسم الصنف -بالانجليزي   </label>
                                                                <input type="text" value="" id="title_en"
                                                                       class="form-control"
                                                                       placeholder="  "
                                                                       name="title_en">
                                                                @error("title_en")
                                                                <span class="text-danger">  هذا الحقل مطلوب</span>
                                                                @enderror
                                                            </div>

                                                        </div>

                                                </div>

                                                </div>
                                                    <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">

                                                                    <div class="form-group">
                                                                        <label for="projectinput1"> الوصف بالعربي </label>

                                                                        <textarea  class="form-control"      id="placeTextarea" rows="3"  name="description_ar" type="text"   placeholder="ادخل الوصف."    >{{Request::old('description_ar')}}</textarea>
                                                                        @error('description_ar')
                                                                        <span class="text-danger">{{$message}} </span>
                                                                        @enderror
                                                                    </div>

                                                                    @error("description_ar")
                                                                    <span class="text-danger"> هذا الحقل مطلوب</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">

                                                                <div class="form-group">
                                                                    <label for="projectinput1"> الوصف بالانجليزي </label>

                                                                    <textarea  class="form-control"      id="placeTextarea" rows="3"  name="description_en" type="text"   placeholder="ادخل الوصف."    >{{Request::old('description_en')}}</textarea>
                                                                    @error('description_en')
                                                                    <span class="text-danger">{{$message}} </span>
                                                                    @enderror
                                                                </div>

                                                                @error("description_en")
                                                                <span class="text-danger"> هذا الحقل مطلوب</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  السعر  </label>
                                                            <input type="number" value="" id="price"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   name="price">
                                                            @error("price")
                                                            <span class="text-danger">  هذا الحقل مطلوب</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                    <label> صوره النظام </label>
                                                    <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="image">
                                                    <span class="file-custom"></span>
                                                    </label>
                                                    @error('image')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                    </div>

                                                </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label> صوره التفاصيل  </label>
                                                            <label id="projectinput7" class="file center-block">
                                                                <input type="file" id="file" name="image1">
                                                                <span class="file-custom"></span>
                                                            </label>
                                                            @error('image1')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>

                                                        </div>





                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
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
