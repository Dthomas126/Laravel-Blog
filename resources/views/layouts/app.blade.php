@include('inc.header')
    
    <div id="app">

        @include('inc.navbar')

        <main class="py-4">

            @yield('content')
            
        </main>


    </div>
@include('inc.footer')