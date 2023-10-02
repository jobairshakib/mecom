
<x-admin.layouts.admin_master>

    {{-- <div class="row">
    <div class="col-sm-6 offset-sm-3">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header d-flex justify-content-center">
                <a href="{{route('categories.index')}}" class="btn btn-secondary btn-sm">List</a>
                <h5 class="ps-2 fw-bold">Create Categories</h5>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Title</dt>
                    <dd class="col-sm-9">{{$category->title}}</dd>

                    <dt class="col-sm-3">Description</dt>
                    <dd class="col-sm-9">
                        {{$category->description}}
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div> --}}
<div class="col-12 col-lg12 col-xxl-9 d-flex">
    <div class="card flex-fill">
        <div class="card-header">
            show slider
            <a class="btn btn-info" href="{{route('sliders.index')}}">List</a>
            <div class="row mb-3"><h2 class="col-sm-3">Slider Title:</h2> <h2 class="col-sm-9">{{$slider->slider_title}}</h2></div>
            <div class="row mb-3"><h2 class="col-sm-3">Short Title:</h2> <h2 class="col-sm-9">{{$slider->short_title}}</h2></div>
            <div class="row"><h2 class="col-sm-3">Image:</h2><div class="col-sm-9"> <img src="{{asset($slider->slider_image)}}" alt="slider_image" width="200px" height="250px"></div></h2></div>
        </div>
    </div>
</div>
</x-admin.layouts.admin_master>

