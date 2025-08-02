<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script type="module">
    const swalData = @json(session('swal', null));
    if (swalData) Swal.fire(swalData);

    window.addEventListener('swal', e => Swal.fire(e.detail[0]));
</script>
