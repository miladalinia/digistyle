<!doctype html>
<html lang="en">
@include('admin::section.head')
@section('page_title','DigiStyle')
<body id="page-top">
<!-- Main Content -->
<div id="wrapper">
@include('admin::section.sidebar')
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            @include('admin::section.navbar')
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        @include('admin::section.footer')
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@include('admin::section.logout-modal')
<script src="/js/admin.js"></script>
@yield('extra-scripts')
</body>
</html>
