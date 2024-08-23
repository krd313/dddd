<!DOCTYPE html>
<html lang="en" data-menu-color="gradient">
@include('partials.head')

<body>

    <!-- Begin page -->
    <div id="wrapper">

        @include('partials.navside')

        <div class="content-page">


            @include('partials.navtop')


            <div class="content">
                <div class="container-fluid">

                    @yield('content')

                </div>
            </div>




            @include('partials.footer')
        </div>
    </div>
    @include('partials.script')

</body>

</html>