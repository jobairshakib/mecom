<x-admin.layouts.admin_master>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">Latest Projects</h5>
                    <h5 class="pull-right"><a href="{{route('categories.create')}}">Create Category</a></h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                    <tr>
                        <th>#SL</th>
                        <th>Name</th>
                        <th>Picture</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key=>$category)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td class="d-none d-xl-table-cell">{{$category->category_name}}</td>
                            <td ><img src="{{asset($category->category_image)}}" alt="category_img" style="width: 70px;height:70px"></td>
                            {{-- <td><a href="{{route('products.show', ['product'=>$product->id])}}">Show</a> | Edit | Delete</td> --}}
                            <td>

                                <a class="btn btn-primary" href="{{route('categories.show', ['category'=>$category->id])}}">Show </a>
                                <a class="btn btn-success" href="{{route('categories.edit', ['category'=>$category->id])}}">Edit </a>
                                {{-- <a class="btn btn-danger" href="{{route('categories.destroy', ['category'=>$category->id])}}">Delete</a> --}}
                                <form style="display: inline" action="{{route('categories.destroy', ['category'=>$category->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('are you really want to delete this')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin.layouts.admin_master>
