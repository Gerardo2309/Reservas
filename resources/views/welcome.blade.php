<x-guest-layout>
    @if (Route::has('login'))
    <div class="fixed top-0 right-0 p-6 text-right z-50">
        @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
        @endauth
    </div>
@endif
    @livewire('welcome.welcome-index')
</x-guest-layout>