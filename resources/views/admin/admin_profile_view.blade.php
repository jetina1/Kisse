<!DOCTYPE html>
<html lang="en">
@include('body.head')
@include('body.header')

<body>
    <div class="main-wrapper">
        <div class="page-wrapper">

            <div class="page-content">


                <div class="row profile-body">
                    <!-- left wrapper start -->
                    <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                        <div class="card rounded">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-2">

                                    <div>
                                        <img class="wd-100 rounded-circle"
                                            src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/' . $profileData->photo) : url('upload/default_images/no_image.jpg') }}"
                                            alt="profile">
                                        <span class="h4 ms-3 ">{{ $profileData->username }}</span>
                                    </div>

                                </div>

                                <div class="mt-3">
                                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                                    <p class="text-muted">{{ $profileData->name }}</p>
                                </div>
                                <div class="mt-3">
                                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                                    <p class="text-muted">{{ $profileData->email }}</p>
                                </div>
                                <div class="mt-3">
                                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                                    <p class="text-muted">{{ $profileData->phone }}</p>
                                </div>
                                <div class="mt-3">
                                    <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                                    <p class="text-muted">{{ $profileData->address }}</p>
                                </div>
                                <div class="mt-3 d-flex social-links">
                                    <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                        <i data-feather="github"></i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                        <i data-feather="twitter"></i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                        <i data-feather="instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- left wrapper end -->
                    <!-- middle wrapper start -->
                    <div class="col-md-8 col-xl-8 middle-wrapper">
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Update Admin Profile </h6>
                                    <form method="POST" action="{{ route('admin.profile.store') }}" class="forms-sample"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <!-- <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control"
                                                id="exampleInputUsername1" autocomplete="off"
                                                value="{{ $profileData->username }}">
                                        </div> -->
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name </label>
                                            <input type="text" name="name" class="form-control"
                                                id="exampleInputUsername1" autocomplete="off"
                                                value="{{ $profileData->name }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email </label>
                                            <input type="email" name="email" class="form-control"
                                                id="exampleInputUsername1" autocomplete="off"
                                                value="{{ $profileData->email }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="currency_id" class="form-label">Currency</label>
                                            <select name="tittle" class="form-control" id="title">
                                                <option value="">Select Currency</option>
                                                @foreach($currencies as $currency)
                                                    <option value="{{ $currency->id }}" {{ $profileData->currency_id == $currency->id ? 'selected' : '' }}>
                                                        {{ $currency->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <!-- <label for="exampleInputEmail1" class="form-label">Address </label> -->
                                            <input type="hidden" name="currency->id" class="form-control"
                                                id="currency->id" autocomplete="off"
                                                value="{{ $profileData->currency->id }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Photo </label>
                                            <input class="form-control" name="photo" type="file" id="image">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label"> </label>
                                            <img id="showImage" class="wd-80 rounded-circle"
                                                src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/' . $profileData->photo) : url('upload/admin_images/no_image.jpg') }}"
                                                alt="profile">
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Save Changes </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- middle wrapper end -->
                    <!-- right wrapper start -->

                    <!-- right wrapper end -->
                </div>

            </div>
        </div>
    </div>
</body>
@include('body.footer')
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f8ff;
        /* Light blue background */
        color: #333;
        margin: 0;
        padding: 0;
    }

    .main-wrapper {
        padding: 20px;
    }

    .page-wrapper {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* .profile-body {
        display: flex;
        gap: 20px;
    } */

    .card {
        background-color: white;
        /* White background for the card */
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .card-body {
        padding: 20px;
    }

    /* .card-title {
        color: #0044cc;
        /* Blue title */
    /* font-weight: bold;
    margin-bottom: 20px;
    } */


    h6.card-title {
        font-size: 18px;
    }

    /* label.form-label {
        color: #0044cc;
        Blue labels
        font-weight: bold;
        margin-bottom: 5px;
    } */

    /* .form-control {
        border: 1px solid #0044cc;
        Blue borders for input fields
        border-radius: 5px;
        padding: 10px;
        background-color: #e6f0ff;
        Light blue background for inputs
        color: #333;
    } */

    /* .btn-primary {
        background-color: #0044cc;
        border-color: #0044cc;
        color: white;
    } */

    .btn-primary:hover {
        background-color: #003399;
        border-color: #003399;
    }

    .social-links a {
        border: 1px solid #0044cc;
        color: #0044cc;
        border-radius: 50%;
    }

    .social-links a:hover {
        background-color: #0044cc;
        color: white;
    }

    .wd-100 {
        width: 100px;
    }

    .wd-80 {
        width: 80px;
    }

    img {
        border-radius: 50%;
    }

    .text-muted {
        color: #666;
    }

    .mt-3 {
        margin-top: 1rem;
    }

    /* .me-2 {
        margin-right: 0.5rem;
    } */
</style>