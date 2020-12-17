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
                            <li class="breadcrumb-item"><a href="">  المنتجات </a>
                            </li>
                            <li class="breadcrumb-item active">إضافة صور المنتج
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
                                <h4 class="card-title" id="basic-layout-form"> إضافة منتج  </h4>
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

                            <h4 class="form-section"><i class="ft-home"></i> صور  المنتج </h4>

                            <div class="card-content collapse show">
                                <form method="post" action="{{route('admin.product.image.store',['post' => $post])}}" enctype="multipart/form-data"
                                    class="dropzone" id="dropzone">
                                    @csrf
                                </form>

                            <div class="card-body">


                                                @if($post->images()->count() > 0)

                                                    <div class="row">
                                                        @foreach($post->images as $image)
                                                        <div class="col-md-2">
                                                            <div class="card">
                                                               <img
                                                                 src="{{$image->filename}}"
                                                                 class="rounded-circle height-150 width-150" alt="صوره المتجر">
                                                                    <div class="card-body">

                                                                    </div>
                                                                       <div class="card-footer">
                                                                         <form action="{{route('admin.product.image.destroy',['image' => $image])}}" method="POST">
                                                                          @csrf
                                                                             @method('delete')
                                                                              <button type="submit" class="btn btn-danger">Delete</button>
                                                                          </form>
                                                 </div>
                                                    </div>
                                                 </div>

                                                    @endforeach
                                                @else
                                                <p>error</p>
                                                @endif
                                                    </div>
                                                <div class="form-actions">
                                                    <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                        <i class="ft-x"></i> تراجع
                                                    </button>
                                            </form>

                                        </div>
                                    </div>
{{--                                     <form method="post" action="{{route('admin.product.images.stock')}}" enctype="multipart/form-data">
 --}}                                         {{-- <form method="post" action="{{route('admin.product.image.store',$id)}}" enctype="multipart/form-data"
                                                class="dropzone" id="dropzone">

                                              @csrf

                                             <input type="hidden" name="product_id" value="{{$id}}">

                                                <div class="form-body">

                                                    <div class="dz-message"> اضغط لادخال الصور</div>

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
                                    </form> --}}
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

@section('script')

    <script>
        Dropzone.options.dropzone = {
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            init:function(){
                this.on('success' , function(){
                    if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0){

                        console.log("finished")
                        location.reload()
                    }
                })
            }
        }

    </script>

{{-- <script type="text/javascript">
    Dropzone.options.dropzone =
     {
        maxFilesize: 12,
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
           return time+file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        timeout: 50000,
        removedfile: function(file)
        {
            var name = file.upload.filename;
            $.ajax({
                headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        },
                type: 'POST',
                url: '{{ url("image/delete") }}',
                data: {filename: name},
                success: function (data){
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },

        success: function(file, response)
        {
            console.log(response);
        },
        error: function(file, response)
        {
           return false;
        }
    };
</script> --}}

@endsection
