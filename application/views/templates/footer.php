</div>

</div>

</div>

<footer class="text-center py-3 bg-white border-top">

    Copyright © <?= date('Y'); ?>

    Sistem Informasi Klinik

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

    function waktu() {

        const sekarang = new Date();

        document.getElementById("jam").innerHTML =
            sekarang.toLocaleTimeString('id-ID');

        document.getElementById("tanggal").innerHTML =
            sekarang.toLocaleDateString('id-ID', {
                weekday: 'long',
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });

    }

    setInterval(waktu, 1000);

    waktu();

</script>

</body>

</html>