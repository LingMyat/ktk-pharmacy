<x-app-layout>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create User</h4>
                <div class="col-lg-6 mb-7 right py-4 flex ml-auto">

                </div>
                <div class="table-responsive">
                    <!-- table table-striped -->
                    <form class="parsley-examples" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="userName">User Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" parsley-trigger="change" required
                                            placeholder="Enter user name" class="form-control" id="userName">
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                    <input type="email" name="email" parsley-trigger="change" required
                                            placeholder="Enter email" class="form-control" id="emailAddress">
                                </div>
                                <div class="form-group">
                                    <label for="pass1">Password<span class="text-danger">*</span></label>
                                    <input id="pass1" type="password" name="password" placeholder="Password" required
                                            class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                    <input data-parsley-equalto="#pass1" type="password" name="confirm-password" required
                                            placeholder="Password" class="form-control" id="passWord2">
                                </div>
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <h4 class="header-title mt-5 mt-sm-0">Assign Roles To User</h4>
                                <div class="mt-3">
                                    @foreach ($roles as $role)
                                        <div class="custom-control custom-checkbox">
                                            <input name="roles[]" type="checkbox" class="custom-control-input" id="role{{ $role->id }}" value="{{ $role->name }}">
                                            <label class="custom-control-label" for="role{{ $role->id }}">{{ $role->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center mt-3 mb-3">
                                    <a href="{{ route('user_list') }}" class="btn btn-light mx-2">Cancel</a>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
