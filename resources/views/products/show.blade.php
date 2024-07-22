<!-- resources/views/product/show.blade.php -->

<x-page-template bodyClass='g-sidenav-show bg-gray-200'>
    <x-auth.navbars.sidebar activePage="ecommerce" activeItem="products" activeSubitem="product-page" />
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-auth.navbars.navs.auth pageTitle="Product Page" />
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4">Product Details</h5>
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 text-center">
                                    <img class="w-100 border-radius-lg shadow-lg mx-auto"
                                        src="{{ $product['images'][0]['src'] }}" alt="{{ $product['name'] }}">
                                    <div class="my-gallery d-flex mt-4 pt-2" itemscope
                                        itemtype="http://schema.org/ImageGallery">
                                        @foreach($product['images'] as $image)
                                            <figure itemprop="associatedMedia" itemscope
                                                itemtype="http://schema.org/ImageObject">
                                                <a href="{{ $image['src'] }}" itemprop="contentUrl" data-size="500x600">
                                                    <img class="w-100 min-height-100 max-height-100 border-radius-lg shadow"
                                                        src="{{ $image['src'] }}" itemprop="thumbnail"
                                                        alt="{{ $product['name'] }}" />
                                                </a>
                                            </figure>
                                        @endforeach
                                    </div>
                                    <!-- PhotoSwipe markup here -->
                                </div>
                                <div class="col-lg-5 mx-auto">
                                    <h3 class="mt-lg-0 mt-4">{{ $product['name'] }}</h3>
                                    <div class="rating">
                                        <!-- Rating logic here -->
                                    </div>
                                    <br>
                                    <h6 class="mb-0 mt-3">Price</h6>
                                    <h5>${{ $product['price'] }}</h5>
                                    <span class="badge badge-success">In Stock</span>
                                    <br>
                                    <label class="mt-4">Description</label>
                                    <ul>
                                        {{ $product['description'] }}
                                    </ul>
                                    <!-- Select options and Add to cart button here -->
                                    <a href="https://shishacoin.io/product/{{ $product['slug'] }}"
                                        class="btn btn-primary mt-4" target="_blank">Buy Now</a>
                                </div>
                            </div>
                            <!-- Other Products section here -->
                        </div>
                    </div>
                </div>
            </div>
            <x-auth.footers.auth.footer />
        </div>
    </main>
    <style>
        .btn-check:focus+.btn-primary,
        .btn-primary:focus {
            color: #000;
            background-color: #fb8c00;
            border-color: #fb8c00;
            /* box-shadow: 0 0 0 0.2rem rgba(198, 26, 84, 0.5); */
        }
    </style>
    <x-plugins />
    @push('js')
        <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="{{ asset('assets') }}/js/plugins/choices.min.js"></script>
        <script src="{{ asset('assets') }}/js/plugins/photoswipe.min.js"></script>
        <script src="{{ asset('assets') }}/js/plugins/photoswipe-ui-default.min.js"></script>
        <script>
            // Initialization code for PhotoSwipe and other scripts
        </script>
    @endpush
</x-page-template>