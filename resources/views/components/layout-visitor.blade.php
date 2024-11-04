<head>
    @include('partials.head')
</head>

<body>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <nav>
        @include('partials.navbarCust')
    </nav>
    <div class="">
        {{ $slot }}
    </div>
</body>

</html>
