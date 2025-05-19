@extends('sharing.master')
@section('title','Home')
@section('navbar')

<!-- start Navication -->
<div id="" class="header pb-5">
    @include('layouts.navigation')
</div>
<!-- end Navication -->

@endsection
@section('content')
    <!-- Start Home -->
    <div class="home-content overflow-hidden">
        <div class="row ">
            <div class="col-md-6 p-0 d-flex align-items-md-center">
                <div class="box text-center text-md-start ps-md-5">

                    <h1 class="">Let's Learn</h1>
                    <span class="fw-bold mb-3 mt-3 d-block">From Here!</span>
                    <p class="m-auto m-md-0 ">
                        Explore the reactions of elements and compounds
                        and discover the amazing chemical phenomena
                        through our engaging and interactive experiments
                    </p>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="box-image">
                </div>
            </div>
        </div>
    </div>
    {{-- end Home --}}
@stop
