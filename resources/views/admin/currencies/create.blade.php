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
                            {{ __('Create currency') }}
                        </h6>
                        <div class="ml-auto">
                            <a href="{{ route('admin.currencies.index') }}" class="btn btn-primary">
                                <span class="icon text-white-50">
                                    <i class="fa fa-home"></i>
                                </span>
                                <span class="text">{{ __('Go Back') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.currencies.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="title">title</label>
                                        <input class="form-control" id="title" type="text" name="title"
                                            value="{{ old('title') }}">
                                        @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="symbol">symbol</label>
                                        <input class="form-control" id="symbol" type="text" name="symbol"
                                            value="{{ old('symbol') }}">
                                        @error('symbol')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="money_format_thousands">money_format_thousands</label>
                                        <input class="form-control" id="money_format_thousands" type="text"
                                            name="money_format_thousands" value="{{ old('money_format_thousands') }}">
                                        @error('money_format_thousands')<span
                                        class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="money_format_decimal">money_format_decimal</label>
                                        <input class="form-control" id="money_format_decimal" type="text"
                                            name="money_format_decimal" value="{{ old('money_format_decimal') }}">
                                        @error('money_format_decimal')<span
                                        class="text-danger">{{ $message }}</span>@enderror
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