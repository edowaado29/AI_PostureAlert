<div class="relative ">
    <video id="webcam1" class="shadow-lg mirror w-full 2xl:h-[800px] object-cover object-center border-2 border" autoplay playsinline></video>
    <div id="cameraText" class="absolute shadow-lg inset-0 flex justify-center items-center text-white font-bold text-2xl bg-black bg-opacity-50">Camera OFF</div>
</div>
<style>
    /* Class untuk efek cermin */
    .mirror {
        transform: scaleX(-1); /* Membalik tampilan secara horizontal */
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
            // Tampilkan teks saat kamera aktif
            document.getElementById('cameraText').style.display = 'none'; // Sembunyikan teks "Off Camera"

        } catch (err) {
            console.error("Error accessing webcam: " + err);
        }
    }

    function stopWebcam() {
        if (stream1) {
            stream1.getTracks().forEach(track => track.stop());
            document.getElementById('webcam1').srcObject = null;
            stream1 = null;
            // Tampilkan teks saat kamera mati
            document.getElementById('cameraText').style.display = 'flex'; // Tampilkan teks "Off Camera"
        }
    }

    // Fungsi untuk toggle on/off kamera
    function toggleCamera() {
        const cameraToggle = document.getElementById('cameraToggle');
        if (cameraToggle.checked) {
            startWebcam(); // Nyalakan kamera
        } else {
            stopWebcam(); // Matikan kamera
        }
    }

    // Otomatis memulai kamera saat halaman dimuat dan tombol dalam keadaan "on"
    document.addEventListener('DOMContentLoaded', function() {
        const cameraToggle = document.getElementById('cameraToggle');
        cameraToggle.checked = true;  // Menyetel checkbox ke posisi "checked"
        toggleCamera();  // Memulai kamera karena checkbox dalam keadaan "checked"
    });
</script>