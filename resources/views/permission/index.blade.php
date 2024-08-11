@extends('layouts.app')
@section('style')
    <!-- INTERNAL Data table css -->
    <link href="{{ asset('assets') }}/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />
    <!-- INTERNAL Sweet Alert2 css -->
    <link href="{{ asset('assets') }}/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="container" style="margin-top: 5%">
    <h1>Permission</h1>
    {{-- @can('product-create') --}}
    <div class="pull-right" style="margin-top: -60px">
        <a class="btn btn-success" href="{{ route('permission.create') }}"> Create New Permission</a>
    </div>
    {{-- @endcan --}}
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th width="200px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection

@section('script')
<script src="{{ asset('assets') }}/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/js/dataTables.bootstrap4.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/responsive.bootstrap4.min.js"></script>
<!-- sweet alert -->
<script src="{{ asset('assets') }}/admin/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script>
        $(function() {

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('permission.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                order: [[0, 'desc']]
            });

        });
    </script>
@endsection
