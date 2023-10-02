
<x-admin.layouts.admin_master>

<div class="col-12 col-lg12 col-xxl-9 d-flex">
    <div class="card flex-fill">
        <div class="card-header">
            show Category
            <a class="btn btn-info" href="{{route('categories.index')}}">List</a>
            <div class="row mb-3"><h2 class="col-sm-3">Title:</h2> <h2 class="col-sm-9">{{$category->category_name}}</h2></div>
            <div class="row"><h2 class="col-sm-3">Image:</h2><div class="col-sm-9"> <img src="{{asset($category->category_image)}}" alt="category_image" width="200px" height="250px"></div></h2></div>
        </div>
    </div>
</div>
</x-admin.layouts.admin_master>

