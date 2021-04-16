<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/preview-equation/default/pages_blank_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Nov 2019 09:20:59 GMT -->
@include('layouts.assets-admin.head')
<body class="default-sidebar">
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>


  @include('layouts.assets-admin.header-mobile')

    @include('layouts.assets-admin.header')

    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>



        @include('layouts.assets-admin.sidebar')


        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        @yield('header')
                    </div>
                </div>
                @yield('content')
            </div>
        </div>

    </div>

    @include('layouts.assets-admin.footer')
    @include('layouts.assets-admin.js')
    @include('sweetalert::alert')
    @yield('js')

</body>

<!-- Mirrored from designreset.com/preview-equation/default/pages_blank_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Nov 2019 09:20:59 GMT -->
</html>
