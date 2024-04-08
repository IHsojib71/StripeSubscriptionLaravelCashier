<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're subscribed to premium!") }}


                    @if (auth()->user()->subscribedToPrice('price_1P3DSuAWgNaQX7iRpRopbR2Q', 'prod_PszRI3l8j5z1hz'))
                        <p>£4.99/Month</p>
                    @endif
                    @if (auth()->user()->subscribedToPrice('price_1P3DSuAWgNaQX7iRE11NfQf0', 'prod_PszRI3l8j5z1hz'))
                    <p>£34.99/Year</p>
                    @endif
                    @if (auth()->user()->subscribedToPrice('price_1P3DSuAWgNaQX7iRvNyUKIia', 'prod_PszRI3l8j5z1hz'))
                    <p>£174.99/Lifetime</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

