<!-- resources/views/products/index.blade.php -->

<x-page-template bodyClass='g-sidenav-show bg-gray-200'>
    <x-auth.navbars.sidebar activePage="ecommerce" activeItem="products" activeSubitem="products-list"/>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Products List"/>
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
                                        @foreach($products as $product)
                                        <tr>
                                            <td>
                                                <div class="d-flex">                                                   
                                                    <img class="w-10 ms-0" src="{{ $product['images'][0]['src'] ?? 'default.jpg' }}" alt="{{ $product['name'] }}">
                                                    <h6 class="ms-3 my-auto">{{ $product['name'] }}</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">{{ $product['categories'][0]['name'] ?? 'Uncategorized' }}</td>
                                            <td class="text-sm">{{ $product['price'] }}</td>
                                            <td class="text-sm">{{ $product['sku'] }}</td>
                                            <td class="text-sm">{{ $product['stock_quantity'] }}</td>
                                            <td>
                                                @if($product['stock_status'] === 'instock')
                                                    <span class="badge badge-success badge-sm">In Stock</span>
                                                @else
                                                    <span class="badge badge-danger badge-sm">Out of Stock</span>
                                                @endif
                                            </td>
                                            <td class="text-sm">
                                                <a href="{{ route('product.show', $product['id']) }}" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                                    <i class="material-icons text-secondary position-relative text-lg">visibility</i>
                                                </a>                                               
                                            </td>
                                        </tr>
                                        @endforeach
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
            <x-auth.footers.auth.footer/>
        </div>
    </main>
    <x-plugins/>
    <!-- Core JS Files -->
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
        }
    </script>
    @endpush
</x-page-template>
