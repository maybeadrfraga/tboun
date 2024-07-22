<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="ecommerce" activeItem="orders" activeSubitem="order-list">
    </x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Order List"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="d-sm-flex justify-content-between">
                <!-- <div>
                    <a href="javascript:;" class="btn btn-icon bg-gradient-warning">
                        New order
                    </a>
                </div> -->
                <div class="d-flex">
                    <!-- <div class="dropdown d-inline">
                        <a href="javascript:;" class="btn btn-outline-dark dropdown-toggle " data-bs-toggle="dropdown"
                            id="navbarDropdownMenuLink2">
                            Filters
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3"
                            aria-labelledby="navbarDropdownMenuLink2" data-popper-placement="left-start">
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Status: Paid</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Status: Refunded</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Status: Canceled</a></li>
                            <li>
                                <hr class="horizontal dark my-2">
                            </li>
                            <li><a class="dropdown-item border-radius-md text-danger" href="javascript:;">Remove
                                    Filter</a></li>
                        </ul>
                    </div> -->
                    <button class="btn btn-icon btn-outline-dark ms-2 export" data-type="csv" type="button">
                        <i class="material-icons text-xs position-relative">archive</i>
                        Export CSV
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Orders Table</h5>
                            <p class="text-sm mb-0">
                                View all the orders from the previous year.
                            </p>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-flush" id="datatable-search">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Customer</th>
                                        <th>E-mail</th>
                                        <th>Product</th>
                                        <th>Revenue</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)   
                                        @if(auth()->user()->isAdmin())
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                       <!--  -->
                                                        <p class="text-xs font-weight-normal ms-2 mb-0">{{$order['id']}}</p>
                                                    </div>
                                                </td>
                                                <td class="font-weight-normal">
                                                    <span class="my-2 text-xs">{{ $order['date_created'] }}</span>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <div class="d-flex align-items-center">
                                                        @if ($order['status'] == 'processing')
                                                            <button
                                                                class="btn btn-icon-only btn-rounded btn-outline-warning mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                                    class="material-icons text-sm"
                                                                    aria-hidden="true">clear</i></button>
                                                        @elseif($order['status'] == 'completed')
                                                            <button
                                                                class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                                    class="material-icons text-sm"
                                                                    aria-hidden="true">done</i></button>
                                                        @else
                                                            <button
                                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                                    class="material-icons text-sm"
                                                                    aria-hidden="true">clear</i></button>
                                                            <span>{{ $order['status'] }}</span>
                                                                                                      </div>
                                                                                                      @endif
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <div class="d-flex align-items-center">
                                                        <!-- <img src="{{ asset('assets') }}/img/team-2.jpg"
                                                                    class="avatar avatar-xs me-2" alt="user image"> -->
                                                        <span>{{ $order['billing']['first_name'] }}
                                                            {{ $order['billing']['last_name'] }}</span>
                                                    </div>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    {{ $order['billing']['email']}}
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <span class="my-2 text-xs">{{ $order['line_items'][0]['name']}}</span>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <span class="my-2 text-xs">$ {{$order['total']}}</span>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <a href="{{ route('orders.show', $order['id']) }}" data-bs-toggle="tooltip" data-bs-original-title="View order">
                                                        <i class="material-icons text-secondary position-relative text-lg">visibility</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                        @if($order['billing']['email'] == auth()->user()->email)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">                                                        
                                                        <p class="text-xs font-weight-normal ms-2 mb-0">{{$order['id']}}</p>
                                                    </div>
                                                </td>
                                                <td class="font-weight-normal">
                                                    <span class="my-2 text-xs">{{ $order['date_created'] }}</span>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <div class="d-flex align-items-center">
                                                        @if ($order['status'] == 'processing')
                                                            <button
                                                                class="btn btn-icon-only btn-rounded btn-outline-warning mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                                    class="material-icons text-sm"
                                                                    aria-hidden="true">clear</i></button>
                                                        @elseif($order['status'] == 'completed')
                                                            <button
                                                                class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                                    class="material-icons text-sm"
                                                                    aria-hidden="true">done</i></button>
                                                        @else
                                                            <button
                                                                class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                                    class="material-icons text-sm"
                                                                    aria-hidden="true">clear</i></button>
                                                            <span>{{ $order['status'] }}</span>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <div class="d-flex align-items-center">
                                                        <!-- <img src="{{ asset('assets') }}/img/team-2.jpg"
                                                                    class="avatar avatar-xs me-2" alt="user image"> -->
                                                        <span>{{ $order['billing']['first_name'] }}
                                                            {{ $order['billing']['last_name'] }}</span>
                                                    </div>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    {{ $order['billing']['email']}}
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <span class="my-2 text-xs">{{ $order['line_items'][0]['name']}}</span>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <span class="my-2 text-xs">$ {{$order['total']}}</span>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <a href="{{ route('orders.show', $order['id']) }}" data-bs-toggle="tooltip" data-bs-original-title="View order">
                                                        <i class="material-icons text-secondary position-relative text-lg">visibility</i>
                                                    </a>
                                                </td>
                                            </tr>

                                        @endif
                                    @endforeach                                                                                                         
                                </tbody>
                            </table>
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
        <script src="{{ asset('assets') }}/js/plugins/datatables.js"></script>
        <script>
            const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
                searchable: true,
                fixedHeight: false
            });

            document.querySelectorAll(".export").forEach(function (el) {
                el.addEventListener("click", function (e) {
                    var type = el.dataset.type;

                    var data = {
                        type: type,
                        filename: "soft-ui-" + type,
                    };

                    if (type === "csv") {
                        data.columnDelimiter = "|";
                    }

                    dataTableSearch.export(data);
                });
            });
        </script>
    @endpush
</x-page-template>
