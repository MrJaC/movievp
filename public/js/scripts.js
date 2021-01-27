$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(".btn-submit").click(function(e) {

    e.preventDefault();

    var test = "blah blah";

    $.ajax({
        type: 'POST',
        url: "{{ route('watch-list-post') }}",
        data: { test: test },
        success: function(data) {
            alert(data.success);
        }
    });

});