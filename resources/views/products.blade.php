@extends('layouts.products')
@push('css_lib')

@endpush
@section('content')



    <!-- Titlebar
================================================== -->
    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Listings</h2><span>Contact Information</span>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Listings</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="row">


            <div class="col-md-12">

                <!-- Sorting - Filtering Section -->

                <!-- Sorting - Filtering Section / End -->

                <div class="row">
                    @livewire('product-list')
                </div>





            </div>

        </div>
    </div>



@endsection
@push('scripts_lib')

@endpush
@push('scripts')
@endpush
