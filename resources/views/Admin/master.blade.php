<!doctype html>
<html lang="en">
@include('Admin.section.head')
@section('page_title','DigiStyle')
<body id="page-top">
<!-- Main Content -->
<div id="wrapper">
@include('Admin.section.sidebar')
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            @include('Admin.section.navbar')
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        @include('Admin.section.footer')
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@include('Admin.section.logout-modal')
<script src="/js/admin.js"></script>
@yield('extra-scripts')
</body>
</html>
