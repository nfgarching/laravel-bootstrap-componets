<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="favicon.ico" rel="icon">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <!-- Nav tabs -->
                <div class="position-sticky pt-3 sidebar-sticky">
                    <h6>
                        <span>
                            <x-nav.link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav.link>
                        </span>
                    </h6>
                    <hr>
                    <x-sidebar>
                        <x-sidebar.link route="startpage" />
                        @if (Route::has('documents.index'))
                            <x-sidebar.link route="documents.index" />
                        @endif
                        @if (Route::has('names.index'))
                            <x-sidebar.link route="names.index" />
                        @endif
                        @if (Route::has('registers.index'))
                            <x-sidebar.link route="registers.index" />
                        @endif
                        <hr>
                        <x-sidebar.link route="testform" />
                        <x-sidebar.link route="testpage" />
                        <x-sidebar.link route="testtable" />
                        <x-sidebar.link route="testing" target="_blank" />
                    </x-sidebar>
                    <hr>
                    <center><i class="bi bi-c-circle"></i> {{ date('Y') }}</center>
                    <br>
                </div>
            </nav>
            <!--Container Main start-->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <br>
                <!-- Main Header -->
                @if (isset($header))
                    {{ $header }}
                @endif
                <!-- Main Content -->
                {{ $slot }}
                <!-- Main Footer -->
                @if (isset($footer))
                    {{ $footer }}
                @endif
            </main>
            <!--Container Main end-->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    @stack('scripts')

</body>

</html>
