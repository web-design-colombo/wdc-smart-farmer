<x-site-layout>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetables Name and Price</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>

.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
        </style>


</head>
    <body>

    <div class="container mt-5">
        <h2 class="mb-4">We Gives Best Price For You</h2>

        <!-- Vegetable Table -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Vegetable Name</th>
                    <th scope="col">Price (per Kg)</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Vegetable Rows -->

                @php
                $vegetables = json_decode($ads->vegetables, true);
                @endphp

                @if(is_array($vegetables) && count($vegetables) > 0)
                    @foreach ($vegetables as $vegetable)
                        <tr>
                            <td>{{ $vegetable['vegetable_name'] }}</td>
                            <td>Rs. {{ $vegetable['vegetable_price'] }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="2" class="text-green-600">No vegetables found</td>
                    </tr>
                @endif
            </tbody>
        </table>

    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
    </html>



    <div class="container">
        <div class="main-body">

              <!-- Breadcrumb -->
              <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url("/")}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav>
              <!-- /Breadcrumb -->

              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="{{ asset('uploads/shopads/' . $ads->image) }}" alt="Admin" class="rounded-circle" style="width: 150px; height:150px">
                        <div class="mt-3">
                          <h4>{{ $ads->user_name }}</h4>
                          <p class="text-secondary mb-1">{{ $ads->phone_number }}</p>

                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $ads->user_name }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Shop Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $ads->shop_name }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Shop Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $ads->shop_address }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mobile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $ads->phone_number }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">City</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $ads->city }}
                        </div>
                      </div>
                      <hr>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Description</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $ads->description }}
                        </div>
                      </div>
                      <hr>

                    </div>
                  </div>



                </div>
              </div>

            </div>
        </div>
        <section class="contact-us section" style="margin-top: -100px">
			<div class="container">

				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>{{ $ads->phone_number }}</h3>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont-google-map"></i>
								<div class="content">
									<h3>{{ $ads->shop_address }}</h3>
									<p>{{ $ads->city }}</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
									<h3>Mon - Sat: 8am - 5pm</h3>
									<p>Sunday Closed</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
					</div>
				</div>
			</div>
		</section>
</x-site-layout>
