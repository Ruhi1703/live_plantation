@include('admin::Header')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<style>
@media screen and(min-width:500px){.contr{
    margin:30px;
}}
</style>
</head>

<body>
    <main>
        <div class="container-fluid px-4">
            <div class="card shadow-lg contr" >
                <div class="card-body">
                    <ol class="breadcrumb mb-4" style="background-color:lightgreen">
                        <li class="breadcrumb-item active">Dashboard/Message</li>
                    </ol>
                </div>
            </div>
            <div class="card shadow-lg contr">

                <div class="card-body">
                    <h3>User Messages</h3>
                    <hr>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-bordered user_datatable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="container">

    </div>
</body>
<script type="text/javascript">
$(function() {
    var table = $('.user_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.index') }}",
        columns: [{
                data: 'name',
                name: 'name'
            },
            {
                data: 'mobile',
                name: 'mobile'
            },
            {
                data: 'message',
                name: 'message'
            },

            {
                data: 'date',
                name: 'date'
            },
            // {
            //     data: 'action',
            //     name: 'action',
            //     orderable: false,
            //     searchable: false
            // },
        ]
    });
});
</script>

</html>
@include('admin::footer')