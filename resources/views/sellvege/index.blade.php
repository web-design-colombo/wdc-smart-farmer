<x-site-layout>

    <!--Page Header Start-->
    <section class="page-header clearfix"
        style="background-image: url(https://pixydrops.com/agriox/assets/images/backgrounds/page-header-bg.jpg);">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="https://pixydrops.com/agriox/index-main.html">Home</a></li>
                    <li><a href="https://pixydrops.com/agriox/shop.html">Sell Product</a></li>

                </ul>
                <h2>Sell Product</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->





    <section class="checkout-page">
        <div class="auto-container">
            <p class="checkout-page__returning">Returning Customer? <a
                    href="login">Click here to Login</a></p>
            <div class="row">
                <h3 class="checkout__title">Add Product</h3><!-- /.checkout__title -->
                <div class="comment-one__form">
                    <form action="{{ url('product-addfarmer') }}" method="POST" enctype="multipart/form-data"
                        class="bg-white rounded-lg overflow-hidden shadow-md px-8 pt-6 pb-8 mb-4 ml-10 mr-10">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="comment-form__input-box">

                                    <input type="text" id="name" name="name" placeholder="First Name">
                                </div><!-- /.comment-form__input-box -->
                            </div>
                            <div class="col-md-6">
                                <div class="comment-form__input-box">
                                    <input type="text" id="small_description" name="small_description"
                                        placeholder="Small Description About Product">
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-6">
                                <div class="comment-form__input-box">
                                    <textarea id="description" name="description" placeholder="Description"></textarea>
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="comment-form__input-box">
                                    <input type="text" id="selling_price" name="original_price" placeholder="Price">
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                                <div class="comment-form__input-box relative">
                                    <input type="file" id="image" name="image" class="hidden">
                                    <label for="image" id="uploadLabel"
                                        class="cursor-pointer h-10 flex items-center justify-center px-4 bg-gray-50 text-gray-700 border border-gray-300 rounded-md hover:bg-gray-100 focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 transition-all duration-300">
                                        <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        Upload Image
                                    </label>
                                    <span id="fileName"
                                        class="absolute bottom-0 left-0 w-full text-sm text-gray-500 mt-1"></span>
                                </div>
                            </div>

                            <script>
                                document.getElementById('image').addEventListener('change', function(e) {
                                    const fileInput = e.target;
                                    const fileNameDisplay = document.getElementById('fileName');
                                    const uploadLabel = document.getElementById('uploadLabel');

                                    if (fileInput.files.length > 0) {
                                        const fileName = fileInput.files[0].name;
                                        fileNameDisplay.textContent = fileName;
                                        fileNameDisplay.classList.add('text-green-500');
                                        uploadLabel.classList.remove('bg-gray-50', 'hover:bg-gray-100', 'text-gray-700', 'border-gray-300');
                                        uploadLabel.classList.add('bg-green-500', 'hover:bg-green-600', 'text-white', 'border-green-500');
                                        uploadLabel.innerHTML = `
                                            <svg class="h-5 w-5 mr-2 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            ${fileName}`;
                                    } else {
                                        fileNameDisplay.textContent = '';
                                        fileNameDisplay.classList.remove('text-green-500');
                                        uploadLabel.classList.remove('bg-green-500', 'hover:bg-green-600', 'text-white',
                                            'border-green-500');
                                        uploadLabel.classList.add('bg-gray-50', 'hover:bg-gray-100', 'text-gray-700', 'border-gray-300');
                                        uploadLabel.innerHTML = `
                                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            Upload Image`;
                                    }
                                });
                            </script>


                            <div class="col-md-12">
                                <div class="comment-form__input-box">
                                    <select class="form-select mt-4 pt-2" name="cate_id"
                                        aria-label="Default select example">
                                        <option value="">Select a Category</option>
                                        @foreach ($category as $Category)
                                            <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                                        @endforeach
                                    </select>
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->
                            <div class="col-md-12">
                                <div class="comment-form__input-box">
                                    <input type="text" id="qty_id" name="qty_id" placeholder="Enter quantity ">
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->
                            {{-- button for submit --}}
                            <div class="col-md-12">
                                <div class="comment-form__input-box">
                                    <button type="submit" class="thm-btn">Submit</button>
                                </div><!-- /.comment-form__input-box -->
                            </div><!-- /.col-md-12 -->

                        </div><!-- /.row -->

                    </form><!-- /.comment-form -->

                </div><!-- /.comment-one__form -->

            </div><!-- /.row -->

        </div><!-- /.container -->
    </section><!-- /.checkout-page -->


</x-site-layout>
