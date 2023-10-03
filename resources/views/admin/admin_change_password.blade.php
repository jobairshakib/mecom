<x-admin.layouts.admin_master>

    <main class="content">
        <div class="container-fluid p-0">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Admin Profile</div>
                <div class="breadcrumb-title pe-3">Change Password</div>

                <div class="ms-auto">

                </div>
            </div>
            <!--end breadcrumb-->
            <div class="container">
                <div class="main-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <form method="post" action="{{route('update.password')}}" enctype="multipart/form-data">
                                        @csrf
                                        {{-- {{ method_field('PUT') }} --}}

                                        @if(session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{session('status')}}
                                            </div>
                                        @elseif(session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{session('error')}}
                                        </div>
                                        @endif
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Old Password</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="password" class="form-control"
                                                    name="old_password"
                                                    @error('old_password') is-invalid
                                                        
                                                    @enderror
                                                    id="current_password" 
                                                    placeholder="Old Password" />
                                                    @error('old_password')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">New Password</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="password" class="form-control"
                                                    name="new_password"
                                                    @error('new_password') is-invalid
                                                        
                                                    @enderror
                                                    id="new_password" 
                                                    placeholder="New Password" />
                                                    @error('new_password')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Confirm New Password</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="password" class="form-control"
                                                    name="new_password_confirmation"
                                                    id="new_password_confirmation" 
                                                    placeholder="Confirm New Password" />
                                                    
                                            </div>
                                        </div>
                                       

                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <button type="submit" class="btn btn-success px-4">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-admin.layouts.admin_master>
