@extends('sharing.master')
@section('content')
    <!-- start Navication -->
    <div id="" class="header pb-5">
        @include('layouts.navigation')
    </div>
    <!-- end Navication -->
    <!-- Start Welcome -->
    <div class="home-content overflow-hidden">
        <div class="row ">
            <div class="col-md-6 p-0 d-flex align-items-md-center">
                <div class="box text-center text-md-start ps-md-5 d-flex flex-column gap-4">
                    <div class="tessst"></div>
                    <h1 class="fs-1 fw-bold">Welcome to Lab Nerd</h1>
                    {{-- <span class="fw-bold mb-3 mt-3 d-block"></span> --}}
                    <p class="m-auto m-md-0 ">
                        We are using technology to build a 3D laboratory
                        which anable any one from any place any time
                        to do their scientific experiments
                    </p>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="box-image">
                </div>
            </div>
        </div>
    </div>
    {{-- end Welcome --}}
@stop
