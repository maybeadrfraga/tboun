<x-page-template bodyClass='g-sidenav-show bg-gray-200'>
    <x-auth.navbars.sidebar activePage="tickets" activeItem="list" activeSubitem="ticket-list">
    </x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Ticket List"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Tickets Table</h5>
                            <p class="text-sm mb-0">
                                View all the tickets.
                            </p>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-flush" id="datatable-search">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        @if(auth()->user()->isAdmin())
                                            <th>Customer</th>
                                            <th>E-mail</th>
                                        @endif
                                        <th>Date Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $ticket)   
                                        @if(auth()->user()->isAdmin() || $ticket->user->email == auth()->user()->email)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">                                                       
                                                        <p class="text-xs font-weight-normal ms-2 mb-0">{{ $ticket->id }}</p>
                                                    </div>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <span class="my-2 text-xs">{{ $ticket->title }}</span>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <div class="d-flex align-items-center">
                                                        <span class="text-uppercase">{{ $ticket->status }}</span>
                                                    </div>
                                                </td>
                                                @if(auth()->user()->isAdmin())
                                                    <td class="text-xs font-weight-normal">
                                                        <div class="d-flex align-items-center">
                                                            <span>{{ $ticket->user->name }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-xs font-weight-normal">
                                                        {{ $ticket->user->email }}
                                                    </td>
                                                @endif
                                                <td class="text-xs font-weight-normal">
                                                    <span class="my-2 text-xs">{{ $ticket->created_at }}</span>
                                                </td>
                                                <td class="text-xs font-weight-normal">
                                                    <a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-sm btn-primary">View</a>
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
                        filename: "material-" + type,
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
