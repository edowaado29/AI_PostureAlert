<x-layoutadmin>

    <div class="grid grid-cols-7 gap-2">
        <div class="col-span-5">
            <section id="status" class="border border-spacing-2 rounded-md">
                @include('partials.chart.Data')
            </section>
        </div>
        <div class="col-span-2">


            @include('partials.table')

        </div>
    </div>
    <div class="grid grid-cols-2 gap-2 mt-4">
        <div class="grid grid-cols-2 gap-2">
            <div class="border border-spacing-2 rounded-md">
                @include('partials.chart.linePosture')
            </div>
            <div class="border border-spacing-2 rounded-md">
                @include('partials.chart.columnDurasi')
            </div>
        </div>
        <div>

        </div>
    </div>

</x-layoutadmin>
