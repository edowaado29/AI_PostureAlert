<x-layoutAdmin>
    <div class="p-6">
        <!-- Header -->
        <div>
            <p class="text-2xl font-bold text-[#A4133C] pb-4">Controller</p>
        </div>

        <!-- Grid Container -->
        <div class="row">
            <!-- Pengaturan Mode Section -->


        </div>

        <!-- Camera Section -->
        <div class="mt-6 shadow-lg border rounded-lg p-6 bg-white grid grid-cols-10 gap-4">
            <div class="shadow-lg border rounded-lg p-6 bg-white flex justify-center col-span-4">
                <div class="">
                    <div class="p-6 bg-white">
                        <h2 class="text-lg font-bold text-gray-700 text-center mb-4">Mode Pengaturan</h2>
                        <div class="flex items-center justify-center pb-4 space-x-2">
                            <!-- Button START -->
                            <button type="button"
                                class="text-white font-semibold text-sm bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-4 focus:ring-green-300 rounded-lg px-6 py-2">
                                START
                            </button>
                            <!-- Button END -->
                            <button type="button"
                                class="text-white font-semibold text-sm bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-lg px-6 py-2">
                                END
                            </button>
                        </div>
                        <!-- Status Section -->
                    </div>
                    <h2 class=" text-gray-700 text-center mb-4 font-semibold">Status</h2>
                    <div class="grid grid-cols-2 gap-2 text-xl font-bold text-gray-600 space-x-2">
                        <div>
                            <ul class="space-y-2">
                                <li class="text-gray-800">Posture </li>
                                <li class="text-gray-800">Setting Time </li>
                                <li class="text-gray-800">Bad Posture Duration </li>
                                <li class="text-gray-800">Rest Time </li>
                                <li class="text-gray-800">Distance </li>
                                <li class="text-gray-800">Status </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="space-y-2">
                                <li class="text-gray-800">: GOOD</li>
                                <li class="text-gray-800">: 10:30 AM </li>
                                <li class="text-gray-800">: 5 min</li>
                                <li class="text-gray-800">: 15 min</li>
                                <li class="text-gray-800">: 1.2 meters</li>
                                <li class="text-green-500 font-bold">: Active</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-6">

                <div class="container">
                    <div class="justify-center flex items-center">
                        <video id="webcam1"
                            class="shadow-lg mirror w-full h-[600px] object-cover object-center border" autoplay
                            playsinline></video>
                    </div>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", async () => {
                        const videoElement = document.getElementById("webcam1");

                        try {
                            // Meminta akses ke kamera
                            const stream = await navigator.mediaDevices.getUserMedia({
                                video: true, // Menentukan bahwa hanya video yang diakses
                                audio: false // Tidak mengakses audio
                            });

                            // Menampilkan stream pada elemen video
                            videoElement.srcObject = stream;

                        } catch (error) {
                            console.error("Gagal mengakses kamera:", error);
                            alert("Gagal mengakses kamera. Pastikan izin telah diberikan dan perangkat mendukung kamera.");
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</x-layoutAdmin>
