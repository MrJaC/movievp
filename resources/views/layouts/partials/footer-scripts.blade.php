<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script type="text/javascript">

   $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $(".btn-submit").click(function(e) {


        e.preventDefault();
        var id = $('#movie-id').attr('data-id');

        $.ajax({
            type: 'POST',
            url: "{{ route('wl-update') }}",
            data: { id: id },

            success: function(data) {
                alert(data.success);
            }
        });

    });


    </script>
