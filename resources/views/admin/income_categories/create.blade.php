<!DOCTYPE html>
<html lang="en">
@include('body.head')
@include('body.header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('body.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="container">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex">
                        <h6 class="m-0 font-weight-bold text-primary">
                            {{ __('Create income category') }}
                        </h6>
                        <div class="ml-auto">
                            <a href="{{ route('admin.income_categories.index') }}" class="btn btn-primary">
                                <span class="icon text-white-50">
                                    <i class="fa fa-home"></i>
                                </span>
                                <span class="text">{{ __('Go Back') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.income_categories.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input class="form-control" id="name" type="text" name="name"
                                            value="{{ old('name') }}">
                                        @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pt-4">
                                <button class="btn btn-primary" type="submit" name="submit">{{ __('Save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('body.footer')

</html>