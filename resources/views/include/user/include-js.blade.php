

<script src="{{ userAsset('js/plugins.js')}}"></script>
<!-- Main JS -->
<script src="{{ userAsset('js/main.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" ></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    var Body = $('body');
</script>
