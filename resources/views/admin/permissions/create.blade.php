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
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create permission') }}</h1>
                    <a href="{{ route('admin.permissions.index') }}"
                        class="btn btn-primary btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Content Row -->
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.permissions.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">{{ __('Title') }}</label>
                                <input type="text" class="form-control" id="title" placeholder="{{ __('Title') }}"
                                    name="title" value="{{ old('title') }}" />
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
                        </form>
                    </div>
                </div>


                <!-- Content Row -->

            </div>
        </div>
    </div>
</body>
@include('body.footer')
</html>