<div class="row">
<style>
    .gray-style .main-search-input-item {
        border-color: #e0e0e000;
    }
    input, input[type="text"], input[type="password"], input[type="email"], input[type="number"], textarea, select {
        height: 47px;
    }
</style>
    <!-- Search -->
    <div class="col-md-12">
        <div class="main-search-input gray-style margin-top-0 margin-bottom-10">

            <div class="main-search-input-item">
                <input wire:model.live="search" type="text" placeholder="What are you looking for?">

            </div>


            <div class="main-search-input-item">
                <select wire:model.live="selectedItem" data-placeholder="All Categories" class="chosen-selects">
                    <option value="">All Categories</option>
                    @foreach($category as $k => $val)
                        <option value="{{$val->id}}">{{$val->category_name}}</option>
                    @endforeach
                </select>
            </div>

        </div>
    </div>
    <!-- Search Section / End -->


@foreach ($products as $item)
    <!-- Listing Item -->
        <div class="col-lg-4 col-md-6">
            <a href="{{ route('view', ['id' => $item->id]) }}" class="listing-item-container compact">
                <div class="listing-item">
                    @if (Storage::disk('public')->exists($item->logo))
                        <img src="{{ Storage::url($item->logo) }}"
                             alt="{{ $item->company_name }}">
                    @else
                        <img src="{{ asset('img/logo.png') }}"
                             alt="{{ $item->company_name }}">
                    @endif
                    <div class="listing-badge now-open">Now Open</div>

                    <div class="listing-item-content">
                        {{--                        <div class="numerical-rating" data-rating="5"></div>--}}
                        <h3>{{$item->company_name}} <i class="verified-icon"></i></h3>
                        <span>{{$item->address}}</span>
                    </div>
                    <span class="like-icon"></span>
                </div>
            </a>
        </div>
        <!-- Listing Item / End -->
@endforeach


<!-- Pagination -->
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <!-- Pagination -->
            <div class="pagination-container margin-top-20 margin-bottom-40">
                <nav class="pagination">

                    @if ($products->lastPage() > 1)
                        <ul>
                            {{-- Previous Page Link with Left Arrow Icon --}}
                            @if ($products->onFirstPage())
                                <li><a href="#" class="current-page"><i class="sl sl-icon-arrow-left"></i></a></li>
                            @else
                                <li><a wire:click="previousPage" href="javascript:void(0)"><i
                                            class="sl sl-icon-arrow-left"></i></a></li>
                            @endif


                            {{-- Display up to 3 pages --}}
                            @foreach ($products->getUrlRange($products->currentPage(), min($products->lastPage(), $products->currentPage() + 2)) as $page => $url)
                                <li><a wire:click="gotoPage({{ $page }})" href="javascript:void(0)">{{ $page }}</a></li>
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($products->hasMorePages())
                                <li><a wire:click="nextPage" href="javascript:void(0)"><i
                                            class="sl sl-icon-arrow-right"></i></a></li>
                            @else
                                <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                            @endif
                        </ul>
                    @endif

                </nav>
            </div>
        </div>
    </div>
    <!-- Pagination / End -->

</div>

