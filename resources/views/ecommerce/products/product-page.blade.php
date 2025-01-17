<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="ecommerce" activeItem="products" activeSubitem="product-page">
    </x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Product Page"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4">Product Details</h5>
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 text-center">
                                    <img class="w-100 border-radius-lg shadow-lg mx-auto"
                                        src="{{ asset('assets') }}/img/products/product-details-1.jpg" alt="chair">
                                    <div class="my-gallery d-flex mt-4 pt-2" itemscope
                                        itemtype="http://schema.org/ImageGallery">
                                        <figure itemprop="associatedMedia" itemscope
                                            itemtype="http://schema.org/ImageObject">
                                            <a href="{{ asset('assets') }}/img/products/product-details-2.jpg"
                                                itemprop="contentUrl" data-size="500x600">
                                                <img class="w-100 min-height-100 max-height-100 border-radius-lg shadow"
                                                    src="{{ asset('assets') }}/img/products/product-details-2.jpg"
                                                    alt="Image description" />
                                            </a>
                                        </figure>
                                        <figure class="ms-3" itemprop="associatedMedia" itemscope
                                            itemtype="http://schema.org/ImageObject">
                                            <a href="{{ asset('assets') }}/img/products/product-details-3.jpg"
                                                itemprop="contentUrl" data-size="500x600">
                                                <img class="w-100 min-height-100 max-height-100 border-radius-lg shadow"
                                                    src="{{ asset('assets') }}/img/products/product-details-3.jpg"
                                                    itemprop="thumbnail" alt="Image description" />
                                            </a>
                                        </figure>
                                        <figure class="ms-3" itemprop="associatedMedia" itemscope
                                            itemtype="http://schema.org/ImageObject">
                                            <a href="{{ asset('assets') }}/img/products/product-details-4.jpg"
                                                itemprop="contentUrl" data-size="500x600">
                                                <img class="w-100 min-height-100 max-height-100 border-radius-lg shadow"
                                                    src="{{ asset('assets') }}/img/products/product-details-4.jpg"
                                                    itemprop="thumbnail" alt="Image description" />
                                            </a>
                                        </figure>
                                        <figure class="ms-3" itemprop="associatedMedia" itemscope
                                            itemtype="http://schema.org/ImageObject">
                                            <a href="{{ asset('assets') }}/img/products/product-details-5.jpg"
                                                itemprop="contentUrl" data-size="500x600">
                                                <img class="w-100 min-height-100 max-height-100 border-radius-lg shadow"
                                                    src="{{ asset('assets') }}/img/products/product-details-5.jpg"
                                                    itemprop="thumbnail" alt="Image description" />
                                            </a>
                                        </figure>
                                    </div>
                                    <!-- Root element of PhotoSwipe. Must have class pswp. -->
                                    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                                        <!-- Background of PhotoSwipe.
It's a separate element, as animating opacity is faster than rgba(). -->
                                        <div class="pswp__bg"></div>
                                        <!-- Slides wrapper with overflow:hidden. -->
                                        <div class="pswp__scroll-wrap">
                                            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                                            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                                            <div class="pswp__container">
                                                <div class="pswp__item"></div>
                                                <div class="pswp__item"></div>
                                                <div class="pswp__item"></div>
                                            </div>
                                            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                            <div class="pswp__ui pswp__ui--hidden">
                                                <div class="pswp__top-bar">
                                                    <!--  Controls are self-explanatory. Order can be changed. -->
                                                    <div class="pswp__counter"></div>
                                                    <button
                                                        class="btn btn-white btn-sm pswp__button pswp__button--close">Close
                                                        (Esc)</button>
                                                    <button
                                                        class="btn btn-white btn-sm pswp__button pswp__button--fs">Fullscreen</button>
                                                    <button
                                                        class="btn btn-white btn-sm pswp__button pswp__button--arrow--left">Prev
                                                    </button>
                                                    <button
                                                        class="btn btn-white btn-sm pswp__button pswp__button--arrow--right">Next
                                                    </button>
                                                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                                                    <!-- element will get class pswp__preloader--active when preloader is running -->
                                                    <div class="pswp__preloader">
                                                        <div class="pswp__preloader__icn">
                                                            <div class="pswp__preloader__cut">
                                                                <div class="pswp__preloader__donut"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                                    <div class="pswp__share-tooltip"></div>
                                                </div>
                                                <div class="pswp__caption">
                                                    <div class="pswp__caption__center"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 mx-auto">
                                    <h3 class="mt-lg-0 mt-4">Minimal Bar Stool</h3>
                                    <div class="rating">
                                        <i class="material-icons text-lg">grade</i>
                                        <i class="material-icons text-lg">grade</i>
                                        <i class="material-icons text-lg">grade</i>
                                        <i class="material-icons text-lg">grade</i>
                                        <i class="material-icons text-lg">star_outline</i>
                                    </div>
                                    <br>
                                    <h6 class="mb-0 mt-3">Price</h6>
                                    <h5>$1,419</h5>
                                    <span class="badge badge-success">In Stock</span>
                                    <br>
                                    <label class="mt-4">Description</label>
                                    <ul>
                                        <li>The most beautiful curves of this swivel stool adds an elegant touch to
                                            any environment</li>
                                        <li>Memory swivel seat returns to original seat position</li>
                                        <li>Comfortable integrated layered chair seat cushion design</li>
                                        <li>Fully assembled! No assembly required</li>
                                    </ul>
                                    <div class="row mt-4">
                                        <div class="col-lg-5 mt-lg-0 mt-2">
                                            <label class="ms-0">Frame Material</label>
                                            <select class="form-control" name="choices-material" id="choices-material">
                                                <option value="Choice 1" selected="">Wood</option>
                                                <option value="Choice 2">Steel</option>
                                                <option value="Choice 3">Aluminium</option>
                                                <option value="Choice 4">Carbon</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-5 mt-lg-0 mt-2">
                                            <label class="ms-0">Color</label>
                                            <select class="form-control" name="choices-colors" id="choices-colors">
                                                <option value="Choice 1" selected="">White</option>
                                                <option value="Choice 2">Gray</option>
                                                <option value="Choice 3">Black</option>
                                                <option value="Choice 4">Blue</option>
                                                <option value="Choice 5">Red</option>
                                                <option value="Choice 6">Pink</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2">
                                            <label class="ms-0">Quantity</label>
                                            <select class="form-control" name="choices-quantity" id="choices-quantity">
                                                <option value="Choice 1" selected="">1</option>
                                                <option value="Choice 2">2</option>
                                                <option value="Choice 3">3</option>
                                                <option value="Choice 4">4</option>
                                                <option value="Choice 5">5</option>
                                                <option value="Choice 6">6</option>
                                                <option value="Choice 7">7</option>
                                                <option value="Choice 8">8</option>
                                                <option value="Choice 9">9</option>
                                                <option value="Choice 10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-5">
                                            <button class="btn bg-gradient-primary mb-0 mt-lg-auto w-100" type="button"
                                                name="button">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12">
                                    <h5 class="ms-3">Other Products</h5>
                                    <div class="table table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Product</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Price</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        Review</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Availability</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Id</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-chair.jpg"
                                                                    class="avatar avatar-md me-3" alt="table image">
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">Christopher Knight Home
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-sm text-secondary mb-0">$89.53</p>
                                                    </td>
                                                    <td>
                                                        <div class="rating ms-lg-n4">
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">star_outline</i>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-sm">
                                                        <div class="progress mx-auto">
                                                            <div class="progress-bar bg-gradient-success"
                                                                role="progressbar" style="width: 80%" aria-valuenow="80"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span class="text-secondary text-sm">230019</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/chair-pink.jpg"
                                                                    class="avatar avatar-md me-3" alt="table image">
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">Bar Height Swivel Barstool
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-sm text-secondary mb-0">$99.99</p>
                                                    </td>
                                                    <td>
                                                        <div class="rating ms-lg-n4">
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">grade</i>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-sm">
                                                        <div class="progress mx-auto">
                                                            <div class="progress-bar bg-gradient-success"
                                                                role="progressbar" style="width: 90%" aria-valuenow="90"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span class="text-secondary text-sm">87120</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/chair-steel.jpg"
                                                                    class="avatar avatar-md me-3" alt="table image">
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">Signature Design by Ashley
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-sm text-secondary mb-0">$129.00</p>
                                                    </td>
                                                    <td>
                                                        <div class="rating ms-lg-n4">
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">star_outline</i>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-sm">
                                                        <div class="progress mx-auto">
                                                            <div class="progress-bar bg-gradient-warning"
                                                                role="progressbar" style="width: 60%" aria-valuenow="60"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span class="text-secondary text-sm">412301</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/chair-wood.jpg"
                                                                    class="avatar avatar-md me-3" alt="table image">
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">Modern Square</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-sm text-secondary mb-0">$59.99</p>
                                                    </td>
                                                    <td>
                                                        <div class="rating ms-lg-n4">
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">grade</i>
                                                            <i class="material-icons text-lg">grade</i>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-sm">
                                                        <div class="progress mx-auto">
                                                            <div class="progress-bar bg-gradient-warning"
                                                                role="progressbar" style="width: 40%" aria-valuenow="40"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span class="text-secondary text-sm">001992</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-auth.footers.auth.footer></x-auth.footers.auth.footer>
        </div>
    </main>
    <x-plugins></x-plugins>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/choices.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/photoswipe.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/photoswipe-ui-default.min.js"></script>
    <script>
        

    </script>
    @endpush
</x-page-template>
