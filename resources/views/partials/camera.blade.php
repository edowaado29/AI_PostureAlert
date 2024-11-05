<div class="p-2 max-w-xl max-h-max">
    <div class="flex items-center justify-between">
        <h1>Live Cam depan</h1>
        <button class="py-2 flex justify-center">
            <label class="inline-flex items-center cursor-pointer">
                <input id="cameraToggle" type="checkbox" value="" class="sr-only peer">
                <div
                    class="relative w-12 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                </div>
            </label>
        </button>
    </div>
    <video id="webcam1" class="w-full h-auto border-2 border-[#800F2F]" autoplay playsinline></video>
</div>

<style>
    #webcam1 {
        transform: scaleX(-1);
        /* Membalik tampilan secara horizontal */
    }
</style>

<script>
    let stream1 = null;

    async function startWebcam() {
        try {
            // Dapatkan daftar perangkat media
            const devices = await navigator.mediaDevices.enumerateDevices();
            const videoDevices = devices.filter(device => device.kind === 'videoinput');

            // Pastikan ada setidaknya satu webcam yang terdeteksi
            if (videoDevices.length < 1) {
                console.error("Webcam tidak ditemukan.");
                return;
            }

            // Akses webcam pertama
            stream1 = await navigator.mediaDevices.getUserMedia({
                video: {
                    deviceId: videoDevices[0].deviceId
                }
            });
            document.getElementById('webcam1').srcObject = stream1;

        } catch (err) {
            console.error("Error accessing webcam: " + err);
        }
    }

    function stopWebcam() {
        if (stream1) {
            stream1.getTracks().forEach(track => track.stop());
            document.getElementById('webcam1').srcObject = null;
            stream1 = null;
        }
    }

    // Event listener untuk checkbox
    document.getElementById('cameraToggle').addEventListener('change', function() {
        if (this.checked) {
            startWebcam();
        } else {
            stopWebcam();
        }
    });
</script>
