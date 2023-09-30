@extends('layouts.list')
@push('css_lib')

@endpush
@section('content')


    <!-- Content
    ================================================== -->
    <div class="fs-container">

        <div class="fs-inner-container content">
            <div class="fs-content">

                <!-- Search -->
                <section class="search">

                    <div class="row">
                        <div class="col-md-12">

                            <!-- Row With Forms -->
                            <div class="row with-forms">

                                <!-- Main Search Input -->
                                <div class="col-fs-12">
                                    <div class="input-with-icon location">
                                        <div id="autocomplete-container" data-autocomplete-tip="type and hit enter">
                                            <input id="autocomplete-input" type="text" placeholder="Location">
                                        </div>
                                        <a href="#"><i class="fa fa-map-marker"></i></a>
                                    </div>
                                </div>


                                <form action="{{ route('list') }}" id="searchForm" method="GET">
                                <!-- Main Search Input -->
                                <div class="col-fs-6">

                                        <div class="input-with-icon">
                                            <i class="sl sl-icon-magnifier"></i>
                                            <input type="text" name="query" placeholder="What are you looking for?"
                                                   value="{{ request('query') }}"/>
                                        </div>
                                </div>



                                <!-- Filters -->
                                <div class="col-md-6">

                                    <!-- Panel Dropdown / End -->
                                    <div class="panel-dropdown">
                                        <a href="#">Categories</a>
                                        <div class="panel-dropdown-content checkboxes categories">

                                            <!-- Checkboxes -->
                                            <div class="row">
                                                @foreach ($category as $key => $category)
                                                    <div class="col-md-4">
                                                        <input id="check-{{$key}}" value="{{$category->id}}" type="checkbox" name="check[]"
                                                               @if (in_array($category->id, request()->input('check', [])))
                                                               checked
                                                            @endif
                                                        >
                                                        <label for="check-{{$key}}">{{$category->category_name}}</label>
                                                    </div>
                                                    @if (($key + 1) % 6 == 0)
                                            </div>
                                            <div class="row">
                                                @endif
                                                @endforeach
                                            </div>


                                            <!-- Buttons -->
                                            <div class="panel-buttons">
                                                <button class="panel-cancel">Cancel</button>
                                                <button class="panel-apply">Apply</button>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Panel Dropdown / End -->
                                    <button class="button border with-icon" id="searchSubmit" type="button">Search</button>
                                </div>
                                <!-- Filters / End -->

                                </form>
                            </div>
                            <!-- Row With Forms / End -->

                        </div>
                    </div>

                </section>
                <!-- Search / End -->

                <section class="listings-container margin-top-30">
                    <!-- Sorting / Layout Switcher -->
                    <div class="row fs-switcher">
                        <div class="col-md-6">
                            <!-- Showing Results -->
                            <p class="showing-results">{{$total}} Results Found </p>
                        </div>
                    </div>

                    <!-- Listings -->
                    <div class="row fs-listings">
                    @foreach ($listings as $listing)
                        <!-- Listing Item -->
                            <div class="col-lg-12 col-md-12">
                                <div class="listing-item-container list-layout" data-marker-id="{{ $listing->id }}">
                                    <a href="" class="listing-item">
                                    {{--                                        <a href="{{ route('listings.show', ['listing' => $listing->id]) }}" class="listing-item">--}}
                                    <!-- Image -->
                                        <div class="listing-item-image">
                                            @if (Storage::disk('public')->exists($listing->logo))
                                                <img src="{{ Storage::url($listing->logo) }}"
                                                     alt="{{ $listing->company_name }}">
                                            @else
                                                <img src="{{ asset('img/logo.png') }}"
                                                     alt="{{ $listing->company_name }}">
                                            @endif
                                            <span class="tag">{{ $listing->category->category_name }}</span>
                                        </div>
                                        <!-- Content -->
                                        <div class="listing-item-content">
                                            <div
                                                class="listing-badge {{ $listing->status === 'open' ? 'now-open' : 'now-open' }}">
                                                {{ $listing->status === 'open' ? 'Now Open' : 'Now Open' }}
                                            </div>
                                            <div class="listing-item-inner">

                                                <h3>{{ $listing->company_name }} <i class="verified-icon"></i></h3>
                                                <span>{{ $listing->address }}</span>
                                                <div class="star-rating" data-rating="{{ $listing->rating }}">
                                                    <div class="rating-counter">({{ $listing->reviews }} reviews)</div>
                                                </div>
                                            </div>
                                            <span class="like-icon"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Listing Item / End -->
                        @endforeach
                    </div>
                    <!-- Listings Container / End -->

                    <!-- Pagination Container -->
                    <div class="pagination-container margin-top-15 margin-bottom-40">
                        <nav class="pagination">
                            <ul>

                            @foreach ($listings as $listing)
                                <!-- Display listing data -->
                                @endforeach

                                {{ $listings->appends(request()->query())->links() }}

                            </ul>
                        </nav>
                    </div>

                    <!-- Pagination Container / End -->
                </section>


            </div>
        </div>
        <div class="fs-inner-container map-fixed">

            <!-- Map -->
            <div id="map-container">
                <div id="map" data-map-scroll="true">
                    <!-- map goes here -->
                </div>
            </div>

        </div>
    </div>

@endsection
@push('scripts_lib')
    <script>
        // Get the form element and the submit button element
        const form = document.getElementById('searchForm');
        const searchSubmitButton = document.getElementById('searchSubmit');

        // Add a click event listener to the button
        searchSubmitButton.addEventListener('click', function () {
            // Submit the form when the button is clicked
            form.submit();
        });
    </script>
@endpush
@push('scripts')
@endpush
