<script type="module">
    import Swal from '/node_modules/sweetalert2/dist/sweetalert2.esm.all.min.js'

    @if (session()->has('swal'))
    Swal.fire(@json(session('swal')));
    @endif

    document.addEventListener('swal', function (e) {
        Swal.fire(e.detail[0]);
    });
</script>