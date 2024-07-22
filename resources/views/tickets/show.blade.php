<x-page-template bodyClass='g-sidenav-show bg-gray-200'>
    <x-auth.navbars.sidebar activePage="tickets" activeItem="list" activeSubitem="ticket-list">
    </x-auth.navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <x-auth.navbars.navs.auth pageTitle="Ticket Details"></x-auth.navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">{{ $ticket->title }}</h5>
                    <p class="text-sm mb-0">Status: {{ $ticket->status }}</p>
                </div>
                <div class="card-body">
                    <p>{{ $ticket->description }}</p>
                    <h2 class="mt-4">Responses</h2>
                    @foreach ($ticket->responses as $response)
                        <div class="card mb-3 {{ $response->user->is_admin ? 'bg-success' : '' }}">
                            <div class="card-body">
                                <p>{{ $response->response }}</p>
                                <p class="text-muted">By: {{ $response->user->name }}
                                    {{ $response->user->is_admin ? '(Admin)' : '' }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <x-auth.footers.auth.footer></x-auth.footers.auth.footer>
        </div>
    </main>
    <x-plugins></x-plugins>
</x-page-template>
