<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="ecommerce" activeItem="products" activeSubitem="products-list">
    </x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Products List"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header pb-0">
                            <div class="d-lg-flex">
                                <div>
                                    <h5 class="mb-0">All Products</h5>
                                    <!-- <p class="text-sm mb-0">
                                        A lightweight, extendable, dependency-free javascript HTML table plugin.
                                    </p> -->
                                </div>
                                <div class="ms-auto my-auto mt-lg-0 mt-4">                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="table-responsive">
                                <table class="table table-flush" id="products-list">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Product</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>SKU</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck1" checked>
                                                    </div>
                                                    <img class="w-10 ms-3"
                                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/adidas-hoodie.jpg"
                                                        alt="hoodie">
                                                    <h6 class="ms-3 my-auto">BKLGO Full Zip Hoodie</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Clothing</td>
                                            <td class="text-sm">$1,321</td>
                                            <td class="text-sm">243598234</td>
                                            <td class="text-sm">0</td>
                                            <td>
                                                <span class="badge badge-danger badge-sm">Out of Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">visibility</i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck3">
                                                    </div>
                                                    <img class="w-10 ms-3"
                                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/metro-chair.jpg"
                                                        alt="metro-chair">
                                                    <h6 class="ms-3 my-auto">Metro Bar Stool</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$99</td>
                                            <td class="text-sm">0134729</td>
                                            <td class="text-sm">978</td>
                                            <td>
                                                <span class="badge badge-success badge-sm">in Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">visibility</i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i
                                                        class="material-icons text-secondary position-relative text-lg">delete</i>
                                                </a>
                                            </td>
                                        </tr>                                    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Product</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>SKU</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-auth.footers.auth.footer></x-auth.footers.auth.footer>
        </div>
    </main>
    <x-plugins></x-plugins>
    <!--   Core JS Files   -->
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/datatables.js"></script>
    <script>
        if (document.getElementById('products-list')) {
            const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
                searchable: true,
                fixedHeight: false,
                perPage: 7
            });

            document.querySelectorAll(".export").forEach(function (el) {
                el.addEventListener("click", function (e) {
                    var type = el.dataset.type;

                    var data = {
                        type: type,
                        filename: "material-" + type,
                    };

                    if (type === "csv") {
                        data.columnDelimiter = "|";
                    }

                    dataTableSearch.export(data);
                });
            });
        };

    </script>
    @endpush
</x-page-template>
