<x-layoutAdmin>
    <div>
        <p class="text-2xl font-bold text-[#A4133C] pb-4 ">Controller</p>
    </div>
    <div class=" flex-col-reverse 2xl:flex-col flex 2xl:grid 2xl:grid-cols-12 gap-4">
        <div class="xl:col-span-3 border ">
            <section class="h-full p-4 space-y-4">
                <div class="hidden 2xl:block shadow-lg border rounded-lg p-4">
                    <h2 class="text-lg font-bold text-gray-700 pb-2  flex justify-center items-center">Mode Pengaturan
                    </h2>
                    <div
                        class=" flex items-center space-x-4  justify-center ">

                        <div class="flex justify-center items-center">
                            <button type="button"
                                class="text-white h-full font-semibold text-sm bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-4 focus:ring-green-300 rounded-lg px-4 py-1.5 text-center">
                                <!-- Run Icon -->
                                START
                            </button>
                        </div>
                        <div class="flex justify-center items-center">
                            <button type="button"
                                class="text-white h-full font-semibold text-sm bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-lg px-4 py-1.5 text-center">
                                <!-- End Icon -->
                                END
                            </button>
                        </div>

                    </div>
                </div>


                <!-- Table 2: Report Real Time DISTANCE -->
                <div class="shadow-lg border rounded-lg">
                    <h2 class="uppercase py-2 px-8 flex justify-center items-center font-bold bg-gray-100">
                        Report Real Time POSTURE
                    </h2>
                    <table class="w-full text-sm text-gray-500 text-center border-collapse">
                        <thead class="text-base text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-4 border">Time</th>
                                <th scope="col" class="px-6 py-4 border">Status</th>
                            </tr>
                        </thead>
                    </table>
                    <!-- Div wrapper for scrolling -->
                    <div class="relative overflow-x-auto max-h-52 overflow-y-auto">
                        <table class="w-full text-sm text-gray-500 text-center border-collapse">
                            <tbody>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.23</td>
                                    <td class="px-6 py-4 text-red-600 font-semibold">BAD</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.25</td>
                                    <td class="px-6 py-4 text-green-600 font-semibold">GOOD</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.23</td>
                                    <td class="px-6 py-4 text-red-600 font-semibold">BAD</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.25</td>
                                    <td class="px-6 py-4 text-green-600 font-semibold">GOOD</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.23</td>
                                    <td class="px-6 py-4 text-red-600 font-semibold">BAD</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.25</td>
                                    <td class="px-6 py-4 text-green-600 font-semibold">GOOD</td>
                                </tr>
                                <!-- Tambahkan baris lain untuk simulasi overflow -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Table 2: Report Real Time DISTANCE -->
                <div class="shadow-lg border rounded-lg">
                    <h2 class="uppercase py-2 px-8 flex justify-center items-center font-bold bg-gray-100">
                        Report Real Time DISTANCE
                    </h2>
                    <table class="w-full text-sm text-gray-500 text-center border-collapse">
                        <thead class="text-base text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-4 border">Time</th>
                                <th scope="col" class="px-6 py-4 border">Distance</th>
                                <th scope="col" class="px-6 py-4 border">Status</th>
                            </tr>
                        </thead>
                    </table>
                    <!-- Div wrapper for scrolling -->
                    <div class="relative overflow-x-auto max-h-52 overflow-y-auto">
                        <table class="w-full text-sm text-gray-500 text-center border-collapse">
                            <tbody>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.23</td>
                                    <td class="px-6 py-4 text-slate-700 font-semibold">32 cm</td>
                                    <td class="px-6 py-4 text-red-600 font-semibold">BAD</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.25</td>
                                    <td class="px-6 py-4 text-slate-700 font-semibold">56 cm</td>
                                    <td class="px-6 py-4 text-green-600 font-semibold">GOOD</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.23</td>
                                    <td class="px-6 py-4 text-slate-700 font-semibold">76 cm</td>
                                    <td class="px-6 py-4 text-red-600 font-semibold">BAD</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.25</td>
                                    <td class="px-6 py-4 text-slate-700 font-semibold">56 cm</td>
                                    <td class="px-6 py-4 text-green-600 font-semibold">GOOD</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.23</td>
                                    <td class="px-6 py-4 text-slate-700 font-semibold">23 cm</td>
                                    <td class="px-6 py-4 text-red-600 font-semibold">BAD</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.25</td>
                                    <td class="px-6 py-4 text-slate-700 font-semibold">59 cm</td>
                                    <td class="px-6 py-4 text-green-600 font-semibold">GOOD</td>
                                </tr>
                                <!-- Tambahkan baris lain untuk simulasi overflow -->
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>

        <div class="xl:col-span-9">
            <div class=" w-full gap-4 ">
                <div class="2xl:hidden shadow-lg border rounded-lg p-4">
                    <h2 class="text-lg font-bold text-gray-700 pb-2  flex justify-center items-center">Mode Pengaturan
                    </h2>
                    <div
                        class=" flex items-center space-x-4   justify-center  2xl:grid 2xl:grid-cols-2 2xl:space-x-0 2xl:space-y-2 ">

                        <div class="flex justify-center items-center">
                            <button type="button"
                                class="text-white h-full font-semibold text-sm bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-4 focus:ring-green-300 rounded-lg px-4 py-1.5 text-center">
                                <!-- Run Icon -->
                                START
                            </button>
                        </div>
                        <div class="flex justify-center items-center">
                            <button type="button"
                                class="text-white h-full font-semibold text-sm bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-lg px-4 py-1.5 text-center">
                                <!-- End Icon -->
                                END
                            </button>
                        </div>


                        

                    </div>
                </div>
                <div class="mt-4 p-4 2xl:mt-0 2xl:p-0 border shadow-xl 2xl:border-0 2xl:shadow-none">

                    @include('partials.camera')
                </div>

            </div>



        </div>

    </div>

</x-layoutAdmin>
