<x-site-layout>

    <div class="container py-5">
        <!-- For Demo Purpose-->
        <header class="text-center mb-5">
            <h1 class="display-4 font-weight-bold">Look At The Best Buyers Here.</h1>
            <p class="font-italic text-muted mb-0">Browse through our diverse range of buyers in this section.</p>
        </header>

        {{-- filtering system Filter City, Vegetable with filter button --}}

        <div class="row pb-5 mb-4">

            @foreach ($ads as $ad)
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <!-- Card-->
                    <div class="card rounded shadow-sm border-0">
                        <div class="card-body p-4"><a href="{{ url('viewadds/' . $ad->id) }}"><img
                                    src="{{ asset('uploads/shopads/' . $ad->image) }}" alt=""
                                    class="img-fluid d-block mx-auto mb-3"></a>
                            <h5> <a href="{{ url('viewadds/' . $ad->id) }}" class="text-dark">Name:
                                    {{ $ad->user_name }}</a></h5>
                            <p class="small text-muted font-italic">Shop Name: {{ $ad->user_name }}</p>
                            <p class="small text-muted font-italic">City: {{ $ad->user_name }}</p>

                            {{-- <ul class="list-inline small">
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Spacer to create space between content and footer -->
        <div style="height: 200px;"></div>
    </div>

</x-site-layout>
