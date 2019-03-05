@extends('admin.layouts.main')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Manage Category</h3>
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
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage Category</h4>
                    <div class="row">
                        <div class="col-sm-3">
                            <h2>Search</h2>
                            <!-- <form> -->
                            <div class="form-group">
                                <label for="input-search" class="sr-only">Search Tree:</label>
                                <input type="input" class="form-control" id="input-search" placeholder="Type to search..."
                                    value="">
                            </div>
                            <div class="checkbox checkbox-info">
                                <input type="checkbox" class="checkbox" id="chk-ignore-case" value="false">
                                <label for="chk-ignore-case">Ignore Case</label>
                            </div>
                            <div class="checkbox checkbox-info">
                                <input type="checkbox" class="checkbox" id="chk-exact-match" value="false">
                                <label for="chk-exact-match">Exact Match</label>
                            </div>
                            <div class="checkbox checkbox-info">
                                <input type="checkbox" class="checkbox" id="chk-reveal-results" value="false">
                                <label for="chk-reveal-results">Reveal Results</label>
                            </div>
                            <button type="button" class="btn btn-success" id="btn-search">Search</button>
                            <button type="button" class="btn btn-default" id="btn-clear-search">Clear</button>
                            <!-- </form> -->
                        </div>
                        <div class="col-sm-6">
                            <h2>Tree</h2>
                            <div id="treeview-searchable" class=""></div>
                        </div>
                        <div class="col-sm-3">
                            <h2>Results</h2>
                            <div id="search-output"></div>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <a href="/admin/category/edit/{{$topCategory['id']}}" class="btn btn-primary btn-xs">
                                            <i class="fa fa-folder"></i> Edit </a>
                                        <button data-id="{{ $topCategory['id'] }}" type="button" class="btn btn-danger btn-xs deleteCategory">
                                            <i class="far fa-trash-alt"></i> Delete </button>
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
                                    <th>Parent Category</th>
                                    <th>Author</th>
                                    <th>Created At</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topCategories as $topCategory)
                                @foreach ($topCategory['categories'] as $category)
                                <tr>
                                    <td>{{$category['name']}}</td>
                                    <td>{{$topCategory['name']}}</td>
                                    <td>{{$category['author_fullname']}}</td>
                                    <td>{{$category['created_at']}}</td>
                                    <td>
                                        @if ($category['author_id'] ==
                                        session()->get('admin')['id']||session()->get('admin')['role']=='admin'||session()->get('admin')['role']=='moderator')
                                        <a href="/admin/category/edit/{{$category['id']}}" class="btn btn-primary btn-xs">
                                            <i class="fa fa-folder"></i> Edit </a>
                                        <button data-id="{{ $category['id'] }}" type="button" class="btn btn-danger btn-xs deleteCategory">
                                            <i class="far fa-trash-alt"></i> Delete </button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
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
                                @foreach ($topCategories as $topCategory)
                                @foreach ($topCategory['categories'] as $category)
                                @foreach ($category['subCategories'] as $subCategory)
                                <tr>
                                    <td>{{$subCategory['name']}}</td>
                                    <td>{{$category['name']}}</td>
                                    <td>{{$topCategory['name']}}</td>
                                    <td>{{$subCategory['author_fullname']}}</td>
                                    <td>{{$subCategory['created_at']}}</td>
                                    <td>
                                        @if ($subCategory['author_id'] ==
                                        session()->get('admin')['id']||session()->get('admin')['role']=='admin'||session()->get('admin')['role']=='moderator')
                                        <a href="/admin/category/edit/{{$subCategory['id']}}" class="btn btn-primary btn-xs">
                                            <i class="fa fa-folder"></i> Edit </a>
                                        <button data-id="{{ $subCategory['id'] }}" type="button" class="btn btn-danger btn-xs deleteCategory">
                                            <i class="far fa-trash-alt"></i> Delete </button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @endforeach
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
<script src="/public/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- Treeview Plugin JavaScript -->
<script src="plugins/bootstrap-treeview-master/dist/bootstrap-treeview.min.js"></script>

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

<script>
    $(function () {
        <?php
            echo "var topCategories = ". json_encode($topCategories). ";\n";
            echo "var sessionId = ".session()->get('admin')['id'].";\n";
            echo "var sessionRole = '".session()->get('admin')['role']."';\n";
        ?>
        var defaultData = {
            length: 0,
            addElem: function addElem(elem) {
                // obj.length is automatically incremented 
                // every time an element is added.
                [].push.call(this, elem);
            }
        };
        // Let's add some empty objects just to illustrate.
        // defaultData.addElem({});

        topCategories.forEach(function (topCategory, index) {
            var topCategoriesCount = topCategory['categories'].length;
            var option = '';
                var topCategoryData = {
                    text: `<span> ${topCategory['name']}</span>`,
                    href: '#parent' + (index + 1),
                    tags: ['0'],
                    // option: option
                }
            var categoriesData = {
                length: 0,
                addElem: function addElem(elem) {
                    [].push.call(this, elem);
                }
            };
            if (topCategory['categories'].length > 0) {
                topCategory['categories'].forEach(function (category, index) {
                    topCategoriesCount += category['subCategories'].length;
                    var categoryData = {
                        text: `<span> ${category['name']}</span>`,
                        href: '#child' + (index + 1),
                        tags: [`${category['subCategories'].length}`],
                    }
                    var subCategoriesData = {
                        length: 0,
                        addElem: function addElem(elem) {
                            [].push.call(this, elem);
                        }
                    }
                    if (category['subCategories'].length > 0) {
                        category['subCategories'].forEach(function (subCategory, index) {
                            var subCategoryData = {
                                text: `<span> ${subCategory['name']}</span>`,
                                href: '#grandchild' + (index + 1),
                                tag: ['0'],
                            }
                            subCategoriesData.addElem(subCategoryData);
                        });
                    }
                    if (subCategoriesData.length > 0) categoryData.nodes =
                        subCategoriesData;
                    categoriesData.addElem(categoryData);
                });
            }
            if (categoriesData.length > 0) topCategoryData.nodes = categoriesData;
            topCategoryData.tags = [`${topCategoriesCount}`];
            defaultData.addElem(topCategoryData);
        });
        var alternateData = [{
                text: 'Parent 1',
                tags: ['2'],
                nodes: [{
                        text: 'Child 1',
                        tags: ['3'],
                        nodes: [{
                                text: 'Grandchild 1',
                                tags: ['6']
                            },
                            {
                                text: 'Grandchild 2',
                                tags: ['3']
                            }
                        ]
                    },
                    {
                        text: 'Child 2',
                        tags: ['3']
                    }
                ]
            },
            {
                text: 'Parent 2',
                tags: ['7']
            },
            {
                text: 'Parent 3',
                icon: 'glyphicon glyphicon-earphone',
                href: '#demo',
                tags: ['11']
            },
            {
                text: 'Parent 4',
                icon: 'glyphicon glyphicon-cloud-download',
                href: '/demo.html',
                tags: ['19'],
                selected: true
            },
            {
                text: 'Parent 5',
                icon: 'glyphicon glyphicon-certificate',
                color: 'pink',
                backColor: 'red',
                href: 'http://www.tesco.com',
                tags: ['available', '0']
            }
        ];

        var $searchableTree = $('#treeview-searchable').treeview({
            levels: 1,
            // enableLinks: true,
            selectedBackColor: "#03a9f3",
            onhoverColor: "rgba(0, 0, 0, 0.05)",
            expandIcon: 'ti-plus',
            collapseIcon: 'ti-minus',
            nodeIcon: 'fa fa-folder',
            data: defaultData,
            // onNodeSelected: function (event, node) {
            //         $('#search-output').html('<p>' + node.text + ' was selected</p>');
            //     },
            // onNodeUnselected: function (event, node) {
            //     $('#search-output').html('<p>' + node.text + ' was unselected</p>');
            // }
            // <a style="z-index:1000;"href="/admin/category/edit/{{${topCategory["id"]}}" class="btn btn-primary btn-xs">
            //         <i class="fa fa-folder"></i> Edit </a>
            //     <button data-id="${topCategory["id"]}" type="button" class="btn btn-danger btn-xs deleteTag">
            //         <i class="far fa-trash-alt"></i> Delete </button>
        });

        var search = function (e) {
            var pattern = $('#input-search').val();
            var options = {
                ignoreCase: $('#chk-ignore-case').is(':checked'),
                exactMatch: $('#chk-exact-match').is(':checked'),
                revealResults: $('#chk-reveal-results').is(':checked')
            };
            var results = $searchableTree.treeview('search', [pattern, options]);

            var output = '<p>' + results.length + ' matches found</p>';
            $.each(results, function (index, result) {
                output += '<p>- ' + result.text + '</p>';
            });
            $('#search-output').html(output);
        }

        $('#btn-search').on('click', search);
        $('#input-search').on('keyup', search);

        $('#btn-clear-search').on('click', function (e) {
            $searchableTree.treeview('clearSearch');
            $('#input-search').val('');
            $('#search-output').html('');
        });


        var initSelectableTree = function () {
            return $('#treeview-selectable').treeview({
                data: defaultData,
                multiSelect: $('#chk-select-multi').is(':checked'),
                onNodeSelected: function (event, node) {
                    $('#selectable-output').prepend('<p>' + node.text + ' was selected</p>');
                },
                onNodeUnselected: function (event, node) {
                    $('#selectable-output').prepend('<p>' + node.text +
                        ' was unselected</p>');
                }
            });
        };
        var $selectableTree = initSelectableTree();

        var findSelectableNodes = function () {
            return $selectableTree.treeview('search', [$('#input-select-node').val(), {
                ignoreCase: false,
                exactMatch: false
            }]);
        };
        var selectableNodes = findSelectableNodes();

        $('#chk-select-multi:checkbox').on('change', function () {
            console.log('multi-select change');
            $selectableTree = initSelectableTree();
            selectableNodes = findSelectableNodes();
        });

        // Select/unselect/toggle nodes
        $('#input-select-node').on('keyup', function (e) {
            selectableNodes = findSelectableNodes();
            $('.select-node').prop('disabled', !(selectableNodes.length >= 1));
        });

        $('#btn-select-node.select-node').on('click', function (e) {
            $selectableTree.treeview('selectNode', [selectableNodes, {
                silent: $('#chk-select-silent').is(':checked')
            }]);
        });

        $('#btn-unselect-node.select-node').on('click', function (e) {
            $selectableTree.treeview('unselectNode', [selectableNodes, {
                silent: $('#chk-select-silent').is(':checked')
            }]);
        });

        $('#btn-toggle-selected.select-node').on('click', function (e) {
            $selectableTree.treeview('toggleNodeSelected', [selectableNodes, {
                silent: $('#chk-select-silent').is(':checked')
            }]);
        });



        var $expandibleTree = $('#treeview-expandible').treeview({
            data: defaultData,
            onNodeCollapsed: function (event, node) {
                $('#expandible-output').prepend('<p>' + node.text + ' was collapsed</p>');
            },
            onNodeExpanded: function (event, node) {
                $('#expandible-output').prepend('<p>' + node.text + ' was expanded</p>');
            }
        });

        var findExpandibleNodess = function () {
            return $expandibleTree.treeview('search', [$('#input-expand-node').val(), {
                ignoreCase: false,
                exactMatch: false
            }]);
        };
        var expandibleNodes = findExpandibleNodess();

        // Expand/collapse/toggle nodes
        $('#input-expand-node').on('keyup', function (e) {
            expandibleNodes = findExpandibleNodess();
            $('.expand-node').prop('disabled', !(expandibleNodes.length >= 1));
        });

        $('#btn-expand-node.expand-node').on('click', function (e) {
            var levels = $('#select-expand-node-levels').val();
            $expandibleTree.treeview('expandNode', [expandibleNodes, {
                levels: levels,
                silent: $('#chk-expand-silent').is(':checked')
            }]);
        });

        $('#btn-collapse-node.expand-node').on('click', function (e) {
            $expandibleTree.treeview('collapseNode', [expandibleNodes, {
                silent: $('#chk-expand-silent').is(':checked')
            }]);
        });

        $('#btn-toggle-expanded.expand-node').on('click', function (e) {
            $expandibleTree.treeview('toggleNodeExpanded', [expandibleNodes, {
                silent: $('#chk-expand-silent').is(':checked')
            }]);
        });

        // Expand/collapse all
        $('#btn-expand-all').on('click', function (e) {
            var levels = $('#select-expand-all-levels').val();
            $expandibleTree.treeview('expandAll', {
                levels: levels,
                silent: $('#chk-expand-silent').is(':checked')
            });
        });

        $('#btn-collapse-all').on('click', function (e) {
            $expandibleTree.treeview('collapseAll', {
                silent: $('#chk-expand-silent').is(':checked')
            });
        });



        var $checkableTree = $('#treeview-checkable').treeview({
            data: defaultData,
            showIcon: false,
            showCheckbox: true,
            onNodeChecked: function (event, node) {
                $('#checkable-output').prepend('<p>' + node.text + ' was checked</p>');
            },
            onNodeUnchecked: function (event, node) {
                $('#checkable-output').prepend('<p>' + node.text + ' was unchecked</p>');
            }
        });

        var findCheckableNodess = function () {
            return $checkableTree.treeview('search', [$('#input-check-node').val(), {
                ignoreCase: false,
                exactMatch: false
            }]);
        };
        var checkableNodes = findCheckableNodess();

        // Check/uncheck/toggle nodes
        $('#input-check-node').on('keyup', function (e) {
            checkableNodes = findCheckableNodess();
            $('.check-node').prop('disabled', !(checkableNodes.length >= 1));
        });

        $('#btn-check-node.check-node').on('click', function (e) {
            $checkableTree.treeview('checkNode', [checkableNodes, {
                silent: $('#chk-check-silent').is(':checked')
            }]);
        });

        $('#btn-uncheck-node.check-node').on('click', function (e) {
            $checkableTree.treeview('uncheckNode', [checkableNodes, {
                silent: $('#chk-check-silent').is(':checked')
            }]);
        });

        $('#btn-toggle-checked.check-node').on('click', function (e) {
            $checkableTree.treeview('toggleNodeChecked', [checkableNodes, {
                silent: $('#chk-check-silent').is(':checked')
            }]);
        });

        // Check/uncheck all
        $('#btn-check-all').on('click', function (e) {
            $checkableTree.treeview('checkAll', {
                silent: $('#chk-check-silent').is(':checked')
            });
        });

        $('#btn-uncheck-all').on('click', function (e) {
            $checkableTree.treeview('uncheckAll', {
                silent: $('#chk-check-silent').is(':checked')
            });
        });



        var $disabledTree = $('#treeview-disabled').treeview({
            data: defaultData,
            onNodeDisabled: function (event, node) {
                $('#disabled-output').prepend('<p>' + node.text + ' was disabled</p>');
            },
            onNodeEnabled: function (event, node) {
                $('#disabled-output').prepend('<p>' + node.text + ' was enabled</p>');
            },
            onNodeCollapsed: function (event, node) {
                $('#disabled-output').prepend('<p>' + node.text + ' was collapsed</p>');
            },
            onNodeUnchecked: function (event, node) {
                $('#disabled-output').prepend('<p>' + node.text + ' was unchecked</p>');
            },
            onNodeUnselected: function (event, node) {
                $('#disabled-output').prepend('<p>' + node.text + ' was unselected</p>');
            }
        });

        var findDisabledNodes = function () {
            return $disabledTree.treeview('search', [$('#input-disable-node').val(), {
                ignoreCase: false,
                exactMatch: false
            }]);
        };
        var disabledNodes = findDisabledNodes();

        // Expand/collapse/toggle nodes
        $('#input-disable-node').on('keyup', function (e) {
            disabledNodes = findDisabledNodes();
            $('.disable-node').prop('disabled', !(disabledNodes.length >= 1));
        });

        $('#btn-disable-node.disable-node').on('click', function (e) {
            $disabledTree.treeview('disableNode', [disabledNodes, {
                silent: $('#chk-disable-silent').is(':checked')
            }]);
        });

        $('#btn-enable-node.disable-node').on('click', function (e) {
            $disabledTree.treeview('enableNode', [disabledNodes, {
                silent: $('#chk-disable-silent').is(':checked')
            }]);
        });

        $('#btn-toggle-disabled.disable-node').on('click', function (e) {
            $disabledTree.treeview('toggleNodeDisabled', [disabledNodes, {
                silent: $('#chk-disable-silent').is(':checked')
            }]);
        });

        // Expand/collapse all
        $('#btn-disable-all').on('click', function (e) {
            $disabledTree.treeview('disableAll', {
                silent: $('#chk-disable-silent').is(':checked')
            });
        });

        $('#btn-enable-all').on('click', function (e) {
            $disabledTree.treeview('enableAll', {
                silent: $('#chk-disable-silent').is(':checked')
            });
        });
    });

</script>

@endsection
