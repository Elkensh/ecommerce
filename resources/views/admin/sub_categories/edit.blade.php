@extends('layouts.admin')

@section('content')

﻿ <div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href=""> الاقسام الفرعيه </a>
                            </li>
                            <li class="breadcrumb-item active">تعديل - {{$sub_categories->name}}
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
                                <h4 class="card-title" id="basic-layout-form"> تعديل قسم فرعى </h4>
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
                                <form class="form" action="{{route('admin.subCategories.update',$sub_categories->id)}}" method="POST"
                                          enctype="multipart/form-data">
                                          @csrf
                                            <div class="form-group">
                                                <div class="text-center">
                                                    <img
                                                    src="{{$sub_categories->photo}}"
                                                    class="rounded-circle height-150" alt="صوره القسم">

                                                </div>
                                            </div>
                                            <input name="old_photo" value="{{$sub_categories->photo}}" type="hidden"> {{-- for delete file of photo --}}


                                            <input name="id" value="{{$sub_categories->id}}" type="hidden"> {{-- for validation --}}


                                        <div class="form-group">
                                            <label> صوره القسم </label>
                                            <label id="projectinput7" class="file center-block">
                                                <input type="file" id="file" name="photo">
                                                <span class="file-custom"></span>
                                            </label>
                                            @error('photo')
                                            <span class="text-danger">{{$message}} </span>
                                            @enderror
                                         </div>

                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-home"></i> بيانات  القسم </h4>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput2"> أختر القسم </label>
                                                    <select name="category_id" class="select2 form-control">
                                                        <optgroup label="من فضلك أختر القسم ">
                                                            @if($categories && $categories -> count() > 0)
                                                                @foreach($categories as $category)
                                                                    <option
                                                                        value="{{$category -> id }}"
                                                                        @if($sub_categories ->mainCategory_id == $category -> id) selected @endif>
                                                                        {{$category ->name}}</option>
                                                                @endforeach
                                                            @endif
                                                        </optgroup>
                                                    </select>
                                                    @error('category_id')
                                                    <span class="text-danger"> {{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <label for="projectinput1"> اسم القسم {{__('messages.'.$sub_categories->translation_lang)}}</label>
                                                        <input type="text" value="{{$sub_categories->name}}" id="name"
                                                               class="form-control"
                                                               placeholder=""
                                                               name="category[0][name]">
                                                               @error("category.0.name")
                                                                <span class="text-danger">{{$message}} </span>
                                                               @enderror

                                                     </div>
                                                </div>

                                                <div class="col-md-6 hidden">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> أختصار اللغة {{__('messages.'.$sub_categories->translation_lang)}}</label>
                                                        <input type="text" value="{{$sub_categories->translation_lang}}" id="abbr"
                                                               class="form-control"
                                                               placeholder=""
                                                               name="category[0][abbr]">
                                                               @error("category.0.abbr")
                                                               <span class="text-danger">{{$message}} </span>
                                                              @enderror
                                                     </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox"  value="1" name="category[0][active]"
                                                               id="switcheryColor4"
                                                               class="switchery" data-color="success"
                                                              @if($sub_categories->active == 1) checked @endif/>
                                                        <label for="switcheryColor4"
                                                               class="card-title ml-1">الحالة{{__('messages.'.$sub_categories->translation_lang)}} </label>

                                                               @error("category.0.active")
                                                               <span class="text-danger">{{$message}} </span>
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
                                                <i class="la la-check-square-o"></i> تعديل
                                            </button>
                                        </div>
                                </form>

                                    <ul class="nav nav-tabs">
                                    @isset($sub_categories->categories)
                                        @foreach ($sub_categories->categories as $index => $transltion)
                                        <li class="nav-item  @if($index == 0) active @endif">
                                          <a class="nav-link " id="baseLable-tab1" data-toggle="tab" aria-controls="tabLable1"
                                        href="#tabLable1{{$index}}"
                                        @if($index == 0) aria-expanded="true" @endif>
                                        {{$transltion->translation_lang}}</a>
                                        </li>
                                        @endforeach
                                    @endisset
                                       </ul>

                                    <div class="tab-content px-1 pt-1">

                                        @isset($sub_categories->categories)
                                        @foreach ($sub_categories->categories as $index => $transltion)

                                        <div role="tabpanel" class="tab-pane  @if($index == 0) active @endif" id="tabLable1{{$index}}" aria-expanded="true"
                                            aria-labelledby="baseLable-tab1">

                                            <form class="form" action="{{route('admin.subCategories.update',$transltion->id)}}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-body">
                                                    <input name="id" value="{{$transltion->id}}" type="hidden"> {{-- for validation --}}

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                            <label for="projectinput1"> اسم القسم {{__('messages.'.$transltion->translation_lang)}}</label>
                                                                <input type="text" value="{{$transltion->name}}" id="name"
                                                                        class="form-control"
                                                                        placeholder=""
                                                                        name="category[0][name]">
                                                                        @error("category.0.name")
                                                                        <span class="text-danger">{{$message}} </span>
                                                                        @enderror

                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 hidden">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> أختصار اللغة {{__('messages.'.$transltion->translation_lang)}}</label>
                                                                <input type="text" value="{{$transltion->translation_lang}}" id="abbr"
                                                                        class="form-control"
                                                                        placeholder=""
                                                                        name="category[0][abbr]">
                                                                        @error("category.0.abbr")
                                                                        <span class="text-danger">{{$message}} </span>
                                                                        @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group mt-1">
                                                                <input type="checkbox"  value="1" name="category[0][active]"
                                                                    id="switcheryColor4"
                                                                    class="switchery" data-color="success"
                                                                    @if($transltion->active == 1) checked @endif/>
                                                                <label for="switcheryColor4"
                                                                    class="card-title ml-1">الحالة{{__('messages.'.$transltion->translation_lang)}} </label>

                                                                    @error("category.0.active")
                                                                    <span class="text-danger">{{$message}} </span>
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
                                                    <i class="la la-check-square-o"></i> تعديل
                                                    </button>
                                                </div>

                                            </form>

                                        </div>
                                        @endforeach
                                        @endisset

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
main_category_create.txt
Displaying main_category_create.txt.
@endsection
