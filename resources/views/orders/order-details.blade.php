<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="ecommerce" activeItem="orders" activeSubitem="order-details">
    </x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Order Details"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card mb-4">
                        <div class="card-header p-3 pb-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="w-50">
                                    <h6>Order Details</h6>
                                    <p class="text-sm mb-0">
                                        Order no. <b>{{ $order['id'] }}</b> from <b>{{ \Carbon\Carbon::parse($order['date_created'])->format('d.m.Y') }}</b>
                                    </p>                                    
                                </div>
                                <!-- <a href="javascript:;" class="btn bg-gradient-dark ms-auto mb-0">Invoice</a> -->
                            </div>
                        </div>
                        <div class="card-body p-3 pt-0">
                            <hr class="horizontal dark mt-0 mb-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="d-flex">
                                        <div>
                                            
                                        </div>
                                        <div>
                                            <h6 class="text-lg mb-0 mt-2">{{ $order['line_items'][0]['name'] ?? 'Product Name' }}</h6>
                                            @if (isset($order['date_completed']))
                                                <p class="text-sm mb-3">Order was delivered {{ \Carbon\Carbon::parse($order['date_completed'])->diffInDays(\Carbon\Carbon::now()) }} days ago.</p>
                                                <span class="badge badge-sm bg-gradient-success">Delivered</span>
                                            @else
                                                <p class="text-sm mb-3">Order is still processing.</p>
                                                <span class="badge badge-sm bg-gradient-warning">Processing</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr class="horizontal dark mt-4 mb-4">
                            <div class="row">
                                                               
                                <div class="col-lg-3 col-12 ms-auto">
                                    <h6 class="mb-3">Order Summary</h6>
                                    <div class="d-flex justify-content-between">
                                        <span class="mb-2 text-sm">Product Price:</span>
                                        <span class="text-dark font-weight-bold ms-2">${{ number_format($order['line_items'][0]['price'], 2) }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="mb-2 text-sm">Delivery:</span>
                                        <span class="text-dark ms-2 font-weight-bold">${{ number_format($order['shipping_total'], 2) }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-sm">Taxes:</span>
                                        <span class="text-dark ms-2 font-weight-bold">${{ number_format($order['total_tax'], 2) }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between mt-4">
                                        <span class="mb-2 text-lg">Total:</span>
                                        <span class="text-dark text-lg ms-2 font-weight-bold">${{ number_format($order['total'], 2) }}</span>
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
    @endpush
</x-page-template>
