<x-admin.layouts.admin_master>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">Latest Projects</h5>
                    <h5 class="pull-right"><a href="{{route('brands.create')}}">Create Brand</a></h5>
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
                        @foreach ($brands as $key=>$brand)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td class="d-none d-xl-table-cell">{{$brand->brand_name}}</td>
                            <td ><img src="{{asset($brand->brand_image)}}" alt="brand_img" style="width: 70px;height:70px"></td>
                            {{-- <td><a href="{{route('products.show', ['product'=>$product->id])}}">Show</a> | Edit | Delete</td> --}}
                            <td>

                                <a class="btn btn-primary" href="{{route('brands.show', ['brand'=>$brand->id])}}">Show </a>
                                <a class="btn btn-success" href="{{route('brands.edit', ['brand'=>$brand->id])}}">Edit </a>
                                {{-- <a class="btn btn-danger" href="{{route('brands.destroy', ['brand'=>$brand->id])}}">Delete</a> --}}
                                <form style="display: inline" action="{{route('brands.destroy', ['brand'=>$brand->id])}}" method="post">
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
