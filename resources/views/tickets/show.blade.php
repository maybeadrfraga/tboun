<x-page-template bodyClass='g-sidenav-show  bg-gray-200'>
    <x-auth.navbars.sidebar activePage="ecommerce" activeItem="orders" activeSubitem="order-details">
    </x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Tickets"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h1>{{ $ticket->title }}</h1>
                            <p class="text-muted">Status: {{ $ticket->status }}</p>
                        </div>
                        <div class="card-body">
                            <p>{{ $ticket->description }}</p>
                            <p class="text-muted">Created by: {{ $ticket->user->name }}</p>
                        </div>
                    </div>

                    <h2 class="mt-4">Responses</h2>
                    @foreach ($ticket->responses as $response)
                        <div class="card mb-3 {{ $response->user->is_admin ? 'bg-light' : '' }}">
                            <div class="card-body">
                                <p>{{ $response->response }}</p>
                                <p class="text-muted">By: {{ $response->user->name }}
                                    {{ $response->user->is_admin ? '(Admin)' : '' }}</p>
                            </div>
                        </div>
                    @endforeach

                    <div class="card mt-4">
                        <div class="card-body">
                            <form action="{{ route('tickets.responses.store', $ticket) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="response">Your Response</label>
                                    <textarea class="form-control" id="response" name="response" rows="3"
                                        required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Response</button>
                            </form>
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