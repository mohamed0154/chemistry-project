@extends('sharing.master')
@section('content')
    <div class="profile">
        <div class="profile-nav d-flex">
            <div class="logo  d-flex align-items-center ">
                <img class="image-fluid" src="images/logo.png" alt="">
                <span class="d-block ps-2">LAB NERD</span>
            </div>
            <a href="{{ route('users.home') }}" class="btn btn-outline-dark ms-auto d-md-none">
                <i class="fa-solid fa-house fs-1"></i>
            </a>
        </div>
        {{-- end profile-nav --}}
        {{-- content --}}
        <div class="content row m-0">
            <div class="col-lg-4 col-md-5 p-0 side-profile text-white text-center ">
                <div class="edit-profile-image d-flex flex-column align-items-center gap-4 justify-content-md-center">
                    <div class="profile-photo "></div>
                    <form action="" class="w-100 ">
                        <input type="submit" class="form-control m-auto fs-4 fw-700 rounded-5" value="Edit Profile">
                    </form>
                </div>
                <div class="back-home d-none d-md-block">
                    <a href="{{ route('users.home') }}"
                        class="d-block mt-5 fs-3 m-auto p-4 pt-2 pb-2 rounded-5 text-black text-decoration-none">
                        <i class="fa-solid fa-house fs-1 d-block mt-1"></i>
                        Home
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 profile-inform pe-0">
                <div class="inform mt-4">
                    <h1>Account Information</h1>
                    <div class="inform-data   p-4 ps-3 pe-3 pb-2">
                        <div class="box-inform  d-flex justify-content-between p-2">
                            <span>First name :</span><span>Mohamed fouad mohamed</span>
                        </div>
                        <div class="box-inform  d-flex justify-content-between p-2">
                            <span>second name :</span><span>valu</span>
                        </div>
                        <div class="box-inform  d-flex justify-content-between p-2">
                            <span>Eamil :</span><span>valu</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="change-pass mt-4">
                    <h3>Change Your Password</h3>
                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul>

                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach

                            </ul>

                        </div>

                    @endif
                    <form action="{{ route('users.profile-update') }}" method='post' class="p-4 ps-3 pe-3">
                        @csrf
                        @method('put')
                        <div class="input-group  d-flex justify-content-between p-2">
                            <label for="" class="w-50">Current Password</label>
                            <input type="password" name="current_password" id="" class=" form-control rounded-1">
                        </div>
                        <div class="input-group  d-flex justify-content-between p-2">
                            <label for="" class="w-50">New Password</label>
                            <input type="password" name="password" id="" class=" form-control rounded-1">
                        </div>
                        <div class="input-group  d-flex justify-content-between p-2 ">
                            <label for="" class="w-50">Confirm Password</label>
                            <input type="password" name="password_confirmation" id=""
                                class=" form-control rounded-1">
                        </div>
                        <div class="input-group buttons d-flex justify-content-end p-2">
                            <input type="submit" value="Update" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>


@stop








{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <link rel="stylesheet" href="./CSS/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar-top">
        <ul>
            <li>
                <img src="./images/logo.png" style="width: 40px; margin-right: 10px;"> </a>
            </li>
            <li>
                <h3>LAB NERD</h3>
            </li>
        </ul>
        <!-- End -->
    </div>

    <!-- Sidenav -->
    <div class="sidenav">
        @if (isset($user_data) && $user_data->photo != null)
        <form method="POST" action="{{ route('user.photo') }}" enctype="multipart/form-data">
            @csrf
            <div class="profile">
                <img src="./images/profiles/{{ $user_data->photo }}" alt="" width="100" height="100">
            </div>

            <div class="sidenav-url">
                <div class="url">
                    <input  type="file" name="photo"  class="active" id="uploadBtn">
                    <label for="uploadBtn" class="file_label"><i class="fa-solid fa-upload"></i>Upload</label>
                    <button type="submit" class="active">Edit Profile</button>
                    <br><br>
                </div>
                <hr><br>
                <div class="url">
                    <a href="{{ route('welcome_users') }}"><img src="./images/home.png" style="width:40px;"><br>HOME</a>
                </div>
            </div>
        </form>
        @else
        <form method="POST" action="{{ route('user.photo') }}" enctype="multipart/form-data">
            @csrf
            <div class="profile">
                <img src="./images/profile.png" alt="" width="100" height="100">
            </div>

            <div class="sidenav-url">
                <div class="url">
                    <input  type="file" name="photo"  class="active" id="uploadBtn">
                    <label for="uploadBtn" class="file_label"><i class="fa-solid fa-upload"></i>Upload</label>
                    <button type="submit" class="active">Add</button>
                    <br><br>
                </div>
                <hr><br>
                <div class="url">
                    <a href="{{ route('welcome_users') }}"><img src="./images/home.png" style="width:40px;"><br>HOME</a>
                </div>
            </div>
        </form>
        @endif
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="mainP">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('edit.profile') }}" method="POST">

                <table>
                    <tbody>
                        <h2 style="padding-top: 10px;">Account Information</h2>



                        @if (isset($user_data) && $user_data != null)
                            <tr>
                                <td>Name</td>
                                <td>
                                    {{ $user_data->username }}
                                </td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>
                                    {{ $user_data->email }}
                                </td>
                            </tr>
                        @endif

                        <br>
                        <tr>
                            <td style="font-weight: bold;">Change Your Password</td>
                        </tr>


                            @csrf
                            <tr>
                                <td>current password</td>
                                <td><input name="currentPass" type=""></input></td>
                            </tr>
                            @error('currentPass')
                            <small class="form-text text-danger">{{ $message }}</small>
                           @enderror

                            <tr>
                                <td>New Password</td>
                                <td><input name="newPass" type=""></input></td>
                            </tr>
                            @error('newPass')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror

                            <tr>
                                <td>Repeat password</td>
                                <td><input name="confirmPass" type=""></input></td>
                            </tr>
                            @error('confirmPass')
                            <small class="form-text text-danger">{{ $message }}</small>
                           @enderror

                    </tbody>

                </table>
                <button style="float: right;background-color: rgba(82, 199, 228, 0.589);" name="update"><b>Update</b></button>
                <button style="float: right;"><b>Cancle</b></button>
                </form>
            </div>
        </div>
        </div>
        <!-- End -->
</body>

</html> --}}
