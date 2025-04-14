<x-layouts.test>

    <x-slot name="header">
        <h2>{{ __('Testpage') }}</h2>
        <hr>
    </x-slot>

    <div class="container">

        <div class="row">

            <div class="col-xl-6">

                <x-card>

                    <x-slot name="headerLeft">
                        Testing Livewire
                    </x-slot>

                    @livewire('counter')

                </x-card>

                <center>{{ date('H:i:s') }}</center>

            </div>

            <div class="col-xl-6">

                ...

            </div>

        </div>

    </div>

</x-layouts.test>
