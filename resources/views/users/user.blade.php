@extends("layouts.master")

@section('page_title')
ទំព័រសមាជិក
@endsection


@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title font-size-sidebar font-moulpoli">{{ __('Members List') }}</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item font-hanuman"><a href="{{route('home',app()->getLocale())}}">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item font-hanuman active" aria-current="page">
                            {{ __('Members List') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3 px-3">
                <button type="button" class="btn btn-success text-white btn-md font-sidebar">
                    <i class="mdi mdi-plus"></i> {{__('Add New')}}
                </button>

                <div class="">

                    <button type="button" class="btn btn-info text-white btn-md font-sidebar">
                        <i class="mdi mdi-arrow-down-bold"></i> {{__('Import')}}
                    </button>
                    <button type="button" class="btn btn-info text-white btn-md font-sidebar">
                        <i class="mdi mdi-arrow-up-bold"></i> {{__('Export')}}
                    </button>
                </div>

            </div>
            <div class="px-3">
                <form method="POST" class="form d-flex">
                    <div class="row w-100 border pt-3">
                        <div class="form-group row col-md-3 search-block">
                            <label for="fname" class="col-sm-3 font-sidebar text-end control-label col-form-label"> {{__('Code')}}</label>
                            <div class="col-sm-9 code_main_block">
                                <input type="text" id="search_code" name="search_code" class="form-control font-sidebar" placeholder="{{ __('Enter ') }}{{ __('Code') }}" />
                                <!-- <div class="code_search_block d-none">
                                    <a class="search_code_result btn btn-sm bg-light w-100 text-start">RRLM0001</a>
                                    <a class="search_code_result btn btn-sm bg-light w-100 text-start">RRLM0002</a>
                                    <a class="search_code_result btn btn-sm bg-light w-100 text-start">RRLM0003</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="form-group row col-md-3 search-block">
                            <label for="fname" class="col-sm-3 font-sidebar text-end control-label col-form-label"> {{__('Name')}}</label>
                            <div class="col-sm-9">
                                <input type="text" id="search_name" name="search_name" class="form-control font-sidebar" placeholder="{{ __('Enter ') }}{{ __('Name') }}" />
                            </div>
                        </div>
                        <div class="form-group row col-md-4 search-block">
                            <label for="lname" class="col-sm-3 font-sidebar text-end control-label col-form-label"> {{__('Department')}}</label>
                            <div class="col-sm-8">
                                <input type="text" id="search_department" name="search_department" class="form-control font-sidebar" placeholder="{{ __('Enter ') }}{{ __('Department') }}" />
                            </div>
                        </div>
                        <div class="col-md-2 p-0">
                            <button id="btnSearch" type="button" class="btn btn-info text-white btn-md font-sidebar">
                                <i class="mdi mdi-magnify"></i> {{__('Search')}}
                            </button>
                            <a href="{{route('user.index',app()->getLocale())}}" id="btnClearSearch" class="btn d-none btn-info text-white btn-md font-sidebar">
                                <i class="mdi mdi-delete-empty"></i> {{__('Clear')}}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="table-responsive mt-2">
                <table id="datatables" class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="font-hanuman card-title"> {{__('Code')}}</th>
                            <th scope="col" class="font-hanuman card-title"> {{__('Khmer Name')}}</th>
                            <th scope="col" class="font-hanuman card-title"> {{__('Latin Name')}}</th>
                            <th scope="col" class="font-hanuman card-title"> {{__('Gender')}}</th>
                            <th scope="col" class="font-hanuman card-title"> {{__('Department')}}</th>
                            <th scope="col" class="font-hanuman card-title"> {{__('Contact')}}</th>
                            <th scope="col" class="font-hanuman card-title"> {{__('Email')}}</th>
                            <th scope="col" class="font-hanuman card-title"> {{__('Actions')}}</th>
                        </tr>
                    </thead>
                    <tbody id="dynamic-row">
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->code}}</td>
                            <td class="font-hanuman">{{$user->khmer_name}}</td>
                            <td class="font-hanuman">{{$user->latin_name}}</td>
                            <td class="font-hanuman">{{__($user->gender)}}</td>
                            <td class="font-hanuman">{{$user->department_name}}</td>
                            <td class="font-hanuman">{{$user->phone}}</td>
                            <td class="font-hanuman">{{$user->email}}</td>
                            <td class="font-hanuman">
                                <a href="" title="មើល" class="btn btn-success text-white btn-sm font-sidebar">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                <a href="" title="កែប្រែ" class="btn btn-info text-white btn-sm font-sidebar">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a href="" title="លុប" class="btn btn-danger text-white btn-sm font-sidebar">
                                    <i class="mdi mdi-delete"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="ui-paginate">
                {{$users->links('vendor.pagination.bootstrap-4')}}
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function() {

        var locale = $("#getLocale").val();
        $("#datatables").DataTable({
            "ordering": false
        });
        $('#datatables_info').addClass('d-none');
        $('#datatables_paginate').addClass('d-none');

        // Event Filter Function
        $('#btnSearch').click(function() {
            switchPaginationUI();
            var user_code = $('#search_code').val();
            var user_name = $('#search_name').val();
            var user_department = $('#search_department').val();

            if (user_code != "" || user_name != "" || user_department != "") {

                $.ajax({
                    method: 'POST',
                    url: "{{route('users.filter'," + locale + ")}}",
                    dataType: 'json',
                    data: {
                        '_token': '{{csrf_token()}}',
                        user_code: user_code,
                        user_name: user_name,
                        user_department: user_department,
                        // branches: branches
                    },
                    success: function(res) {
                        console.log(res);
                        filterToTable(res);

                    },
                    error: function() {
                        console.log('Error')
                    }
                });
                $('#btnClearSearch').removeClass('d-none');
            } else {
                console.log("Please enter your search");
            }
        });

        // Event Filter Funcion
        $('#btnClearSearch').click(function() {
            $('#btnClearSearch').addClass('d-none');
            $('#search_code').val("");
            $('#search_name').val("");
            $('#search_department').val("");
        })

    });

    function filterToTable(res) {
        var tableRow = '';
        $('#dynamic-row').html('');
        if (res.length > 0) {
            $.each(res, function(index, value) {
                tableRow = '<tr>' +
                    '<td class="font-hanuman">' + value.code + '</td>' +
                    '<td class="font-hanuman">' + value.khmer_name + '</td>' +
                    '<td class="font-hanuman">' + value.latin_name + '</td>' +
                    '<td class="font-hanuman">' + value.gender + '</td>' +
                    '<td class="font-hanuman">' + value.department_name + '</td>' +
                    '<td class="font-hanuman">' + value.phone + '</td>' +
                    '<td class="font-hanuman">' + value.email + '</td>' +
                    '<td>' +
                    '<a href="" title="មើល" class="btn btn-success text-white btn-sm font-sidebar">' +
                    '<i class="mdi mdi-eye"></i></a>' +
                    '<a href="" title="កែប្រែ" class="btn btn-info text-white btn-sm mx-md-1 font-sidebar">' +
                    '<i class="mdi mdi-pencil"></i></a>' +
                    '<a href="" title="លុប" class="btn btn-danger text-white btn-sm font-sidebar">' +
                    '<i class="mdi mdi-delete"></i></a>' +
                    '</td></tr>';
                $('#dynamic-row').append(tableRow);
                console.log(value);
            });
            console.log(res);


        } else {
            tableRow =
                '<tr><td align="center" colspan="7">Search Not Found</td></tr>';
            $('#dynamic-row').append(tableRow);
        }
    }

    function switchPaginationUI() {
        $('#datatables_info').removeClass('d-none');
        $('#datatables_paginate').removeClass('d-none');
        $('.ui-paginate').addClass('d-none');
    }
</script>
@endsection


@section('style')
<link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet" />

<style>
    .dataTables_filter,
    .dataTables_length {
        display: none;
    }

    .code_main_block {
        position: relative;
    }

    .code_search_block {
        position: absolute;
        padding: 5px;
        background-color: white;
        width: 100%;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        z-index: 99;

    }

    .search-block a {
        background-color: turquoise;
        margin-bottom: 2px;
    }
</style>
@endsection