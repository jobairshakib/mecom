<x-admin.layouts.admin_master>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">Latest Projects</h5>
                    <h5 class="pull-right"><a href="{{route('sliders.create')}}">Create Slider</a></h5>
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
                        @foreach ($sliders as $key=>$slider)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td class="d-none d-xl-table-cell">{{$slider->slider_title}}</td>
                            <td ><img src="{{asset($slider->slider_image)}}" alt="slider_img" style="width: 70px;height:70px"></td>
                            {{-- <td><a href="{{route('products.show', ['product'=>$product->id])}}">Show</a> | Edit | Delete</td> --}}
                            <td>

                                <a class="btn btn-primary" href="{{route('sliders.show', ['slider'=>$slider->id])}}">Show </a>
                                <a class="btn btn-success" href="{{route('sliders.edit', ['slider'=>$slider->id])}}">Edit </a>
                                {{-- <a class="btn btn-danger" href="{{route('sliders.destroy', ['slider'=>$slider->id])}}">Delete</a> --}}
                                <form style="display: inline" action="{{route('sliders.destroy', ['slider'=>$slider->id])}}" method="post">
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
