<x-layoutAdmin>
    <div>
        <p class="text-2xl font-bold text-[#A4133C] pb-4 ">Controller</p>
    </div>
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-4">
        <div class="xl:col-span-9">
            <div class=" w-full gap-4 ">
                <div class=" flex">
                    <div
                        class="w-full space-y-4 lg:space-y-0 shadow-lg h-full border p-4 grid grid-cols-1 lg:grid-cols-11">
                        <div class="lg:col-span-3 px-4">

                            <h2 class="text-lg font-bold text-gray-700 mb-2">Mode Pengaturan</h2>

                            <div class="flex items-center py-2 ">
                                <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                                    class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                <label for="default-radio-2"
                                    class="ms-2 text-sm font-medium text-gray-900 ">Automatic</label>
                            </div>
                            <div class="flex items-center py-2 ">
                                <input id="default-radio-1" type="radio" value="" name="default-radio"
                                    class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                <label for="default-radio-1"
                                    class="ms-2 text-sm font-medium text-gray-900 ">Manual</label>
                            </div>
                        </div>

                        <div class="lg:col-span-1 relative line-clamp-1 flex items-center justify-center">
                            <div class="h-full w-px bg-gray-400"></div> <!-- Garis vertikal -->
                        </div>


                        <div class="lg:col-span-3">
                            <div class="row-auto">
                                <div class="w-auto items-center px-4 lg:px-0">
                                    <label for="time"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                        time:</label>

                                    <div class="max-w-full pb-2">

                                        <select id="countries"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option value="" selected>Custom</option>
                                            <option value="US">10 Minute</option>
                                            <option value="US">20 Minute</option>
                                        </select>
                                    </div>

                                    <div class="flex w-full" onclick="document.getElementById('time').focus()">
                                        <input type="time" id="time"
                                            class="flex w-full justify-center items-center rounded-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 text-sm border-gray-300"
                                            required>
                                    </div>

                                </div>

                                <div id="dropdown-duration"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-36 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdown-duration-button">
                                        <li>
                                            <button type="button"
                                                class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                role="menuitem">
                                                Custom
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button"
                                                class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                role="menuitem">
                                                20 Minute
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button"
                                                class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                role="menuitem">
                                                10 Minute
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>


                        <div class="lg:col-span-1 relative line-clamp-1 flex items-center justify-center">
                            <div class="h-full w-px bg-gray-400"></div> <!-- Garis vertikal -->
                        </div>

                        <div class="lg:col-span-3 flex justify-center items-center">

                            <button class="py-2 flex justify-center">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input id="cameraToggle" type="checkbox" class="sr-only peer"
                                        onchange="toggleCamera()" checked>
                                    <div
                                        class="relative w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                    </div>
                                </label>
                            </button>
                            <p class="pl-2">
                                ON Camera
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-4 ">
                    @include('partials.camera')
                </div>
            </div>

            <div>

            </div>

        </div>
        <div class="xl:col-span-3">

            <section class="h-full grid grid-rows-2 grid-flow-col gap-4">
                <!-- Table 1: Report Real Time POSTURE -->
                <div class="shadow-lg border rounded-lg">
                    <h2 class="uppercase py-2 px-8 flex justify-center items-center font-bold bg-gray-100">
                        Report Real Time DISTANCE
                    </h2>
                    <table class="w-full text-sm text-gray-500 text-center border-collapse">
                        <thead class="text-base text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-4 border">Time</th>
                                <th scope="col" class="px-6 py-4 border">Distance</th>
                            </tr>
                        </thead>
                    </table>
                    <!-- Div wrapper for scrolling -->
                    <div class="relative overflow-x-auto max-h-64 overflow-y-auto">
                        <table class="w-full text-sm text-gray-500 text-center border-collapse">
                            <tbody>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.23</td>
                                    <td class="px-6 py-4 text-red-600 font-semibold">Good</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.25</td>
                                    <td class="px-6 py-4 text-green-600 font-semibold">Bad</td>
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
                            </tr>
                        </thead>
                    </table>
                    <!-- Div wrapper for scrolling -->
                    <div class="relative overflow-x-auto max-h-64 overflow-y-auto">
                        <table class="w-full text-sm text-gray-500 text-center border-collapse">
                            <tbody>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.23</td>
                                    <td class="px-6 py-4 text-red-600 font-semibold">Too Close</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.25</td>
                                    <td class="px-6 py-4 text-green-600 font-semibold">Safe</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.23</td>
                                    <td class="px-6 py-4 text-red-600 font-semibold">Too Close</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.25</td>
                                    <td class="px-6 py-4 text-green-600 font-semibold">Safe</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.23</td>
                                    <td class="px-6 py-4 text-red-600 font-semibold">Too Close</td>
                                </tr>
                                <tr class="bg-white border-b text-sm uppercase">
                                    <td class="px-6 py-4 text-slate-700">15.25</td>
                                    <td class="px-6 py-4 text-green-600 font-semibold">Safe</td>
                                </tr>
                                <!-- Tambahkan baris lain untuk simulasi overflow -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>



        </div>
    </div>

</x-layoutAdmin>
