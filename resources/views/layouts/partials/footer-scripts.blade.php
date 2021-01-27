<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
<script type="text/javascript">

   $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $(".btn-submit").click(function(e) {


        e.preventDefault();
        var id = $('#movie-id').attr('data-id');
        var name = $('#movie-id').attr('data-name');
        var img = $('#movie-id').attr('data-image');
        $.ajax({
            type: 'POST',
            url: "{{ route('wl-update') }}",
            data: {
                id: id,
                title: name,
                image: img
            },

            success: function(data) {
                setInterval('location.reload()', 1000);
            },
            error: function(data){
                alert(error.failed);
            }

        });

    });

    $(document).ready( function () {
    $('#table-wl').DataTable({
        responsive: true
    });
} );

    </script>
