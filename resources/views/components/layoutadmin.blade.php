<head>
    @include('partials.head')
</head>

<body class="bg-rose-50">
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    {{-- NAVBAR --}}
    @include('partials.navbarAdmin')
    {{-- SIDEBAR --}}
    @include('partials.sidebarAdmin')
    <div class="p-4 sm:ml-64 mt-14 bg-[#]">
        <div class="px-4 pb-4 ">
            <div class="pb-4">
                {{ $slot }}
            </div>
            <div class="pt-4">

                @include('partials.footerAdmin')
            </div>
        </div>
    </div>
</body>

</html>
