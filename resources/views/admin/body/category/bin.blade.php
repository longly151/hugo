@extends('admin.layouts.main')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Category Trash</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">pages</li>
            <li class="breadcrumb-item active">treeview</li>
        </ol>
    </div>
    <div>
        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i
                class="ti-settings text-white"></i></button>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{session('error')}}
            </div>
            @endif
            <!-- topCategories -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive m-t-40">
                        <h4 class="card-title">Top Category List</h4>
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Author</th>
                                    <th>Created At</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topCategories as $topCategory)
                                <tr>
                                    <td>{{$topCategory['name']}}</td>
                                    <td>{{$topCategory['author_fullname']}}</td>
                                    <td>{{$topCategory['created_at']}}</td>
                                    <td>
                                        @if ($topCategory['author_id'] ==
                                        session()->get('admin')['id']||session()->get('admin')['role']=='admin'||session()->get('admin')['role']=='moderator')
                                        <button data-id="{{ $topCategory['id'] }}" class="btn btn-success btn-xs restoreCategory">
                                            <i class="fas fa-recycle"></i> Restore </button>
                                        @if(session('admin')['role']=='admin')
                                        <button data-id="{{ $topCategory['id'] }}" type="button" class="btn btn-danger btn-xs completedDeleteCategory">
                                            <i class="far fa-trash-alt"></i> Completely Delete </button>
                                        @endif
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- categories -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive m-t-40">
                        <h4 class="card-title">Category List</h4>
                        <table id="myTable2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Parent Cate</th>
                                    <th>Author</th>
                                    <th>Created At</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category['name']}}</td>
                                    <td>{{array_key_exists("topCategory",$category) ? $category['topCategory']['name']:''}}</td>
                                    <td>{{$category['author_fullname']}}</td>
                                    <td>{{$category['created_at']}}</td>
                                    <td>
                                        @if ($category['author_id'] ==
                                        session()->get('admin')['id']||session()->get('admin')['role']=='admin'||session()->get('admin')['role']=='moderator')
                                        <button data-id="{{ $category['id'] }}" class="btn btn-success btn-xs restoreCategory">
                                            <i class="fas fa-recycle"></i> Restore </button>
                                        <button data-id="{{ $category['id'] }}" type="button" class="btn btn-danger btn-xs completedDeleteCategory">
                                            <i class="far fa-trash-alt"></i> Completely Delete </button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- subCategories -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive m-t-40">
                        <h4 class="card-title">Sub Category List</h4>
                        <table id="myTable3" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Parent Cate</th>
                                    <th>GrandParent Cate</th>
                                    <th>Author</th>
                                    <th>Created At</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subCategories as $subCategory)
                                <tr>
                                    <td>{{$subCategory['name']}}</td>
                                    <td>{{array_key_exists('category', $subCategory) ? $subCategory['category']['name']:''}}</td>
                                    <td>{{array_key_exists('topCategory', $subCategory) ? $subCategory['topCategory']['name']:''}}</td>
                                    <td>{{$subCategory['author_fullname']}}</td>
                                    <td>{{$subCategory['created_at']}}</td>
                                    <td>
                                        @if ($subCategory['author_id'] == session()->get('admin')['id']||session()->get('admin')['role']=='admin'||session()->get('admin')['role']=='moderator')
                                        <button data-id="{{ $subCategory['id'] }}" class="btn btn-success btn-xs restoreCategory">
                                            <i class="fas fa-recycle"></i> Restore </button>
                                        <button data-id="{{ $subCategory['id'] }}" type="button" class="btn btn-danger btn-xs completedDeleteCategory">
                                            <i class="far fa-trash-alt"></i> Completely Delete </button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
    </div>
</div>
@endsection

@section('pageScript')
<!-- This is data table -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#myTable').DataTable({
            'paging': false,
            'info': false,
        });
        $('#myTable2').DataTable({
            'paging': false,
            'info': false,
        });
        $('#myTable3').DataTable({
            'paging': false,
            'info': false,
        });
        $(document).ready(function () {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function (settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function (group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' +
                                group +
                                '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function () {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

</script>
@endsection
