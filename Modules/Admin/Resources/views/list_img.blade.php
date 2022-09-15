@include('admin::Header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<main>
    <div class="container-fluid px-4">
        <div class="card shadow-lg" style="margin:30px">
            <div class="card-body">
                <ol class="breadcrumb mb-4" style="background-color:lightgreen">
                    <li class="breadcrumb-item active">Dashboard/Profile</li>
                </ol>
            </div>
        </div>
        <div class="card shadow-lg" style="margin:30px">
            <div class="card-body">
                <div id="data"></div>
            </div>
        </div>

    </div>
</main>
@include('admin::footer')
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
$(document).ready(function() {
    function get_image() {
        count = 0;
        $.ajax({
            type: 'get',
            url: "{{route('get_img')}}",
            success: function(data) {
                console.log(data);
                html =
                    '<table class="table table-striped table-success text-center"><thead><th>Id</th><th>Image</th><th>Action</th></thead><tbody>';
                $(data).each(function(index, value) {
                    html += '<tr><td>' + ++count +
                        '</td><td><img class="img-thumbnail" src="../uploads/' + value
                        .image +
                        '" height="50px" width="50px" alt="empty"/></td><td><button class="btn btn-outline-danger delete" id="' +
                        value.id + '">Delete</button></td></tr>';
                });
                html += "</tbody></table>";
                $("#data").html(html);
            }
        });
    }
    get_image();

    $(document).on('click', '.delete', function() {
        d_id = this.id;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'post',
            url: "{{route('delete_img')}}",
            data: {
                id: d_id,
            },
            success: function(data) {
                console.log(data);
                if (data == "true") {
                    get_image();
                    //alert('true');
                } else {
                    alert('somthing went wrong...try again..');
                }
            }
        });
    })
});
</script>