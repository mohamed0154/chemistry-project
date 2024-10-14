<!DOCTYPE html>
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

</html>
