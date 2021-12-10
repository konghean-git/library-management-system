@extends("layouts.master")

@section('page_title')
ទំព័រសមាជិក
@endsection


@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title font-size-sidebar font-moulpoli">បញ្ជីសមាជិក</h4>
            <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item font-hanuman"><a href="{{route('home',app()->getLocale())}}">ទំព័រដើម</a></li>
                        <li class="breadcrumb-item font-hanuman active" aria-current="page">
                            បញ្ជីសមាជិក
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
                <form class="form d-flex">
                    <div class="row w-100 border pt-3">
                        <div class="form-group row col-md-3 search-block">
                            <label for="fname" class="col-sm-2 font-sidebar text-end control-label col-form-label"> {{__('Code')}}</label>
                            <div class="col-sm-10 code_main_block">
                                <input type="text" id="search_code" name="search_code" class="form-control font-sidebar" placeholder="{{ __('Enter Code') }}" />
                                <div class="code_search_block d-none">
                                    <a class="search_code_result btn btn-sm bg-light w-100 text-start">RRLM0001</a>
                                    <a class="search_code_result btn btn-sm bg-light w-100 text-start">RRLM0002</a>
                                    <a class="search_code_result btn btn-sm bg-light w-100 text-start">RRLM0003</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row col-md-3 search-block">
                            <label for="fname" class="col-sm-2 font-sidebar text-end control-label col-form-label"> {{__('Name')}}</label>
                            <div class="col-sm-10">
                                <input type="text" name="search_name" class="form-control font-sidebar" placeholder="{{ __('Enter Name') }}" />
                            </div>
                        </div>
                        <div class="form-group row col-md-3 search-block">
                            <label for="lname" class="col-sm-2 font-sidebar text-end control-label col-form-label"> {{__('Type')}}</label>
                            <div class="col-sm-10">
                                <input type="text" name="search_department" class="form-control font-sidebar" placeholder="{{ __('Enter Type') }}" />
                            </div>
                        </div>
                        <div class="col-md-3 p-0">
                            <button type="button" class="btn btn-info text-white btn-md font-sidebar">
                                <i class="mdi mdi-magnify"></i> {{__('Search')}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="table-responsive mt-2">
                <table id="zero_config" class="table table-bordered">
                    <thead>
                        <tr class="bg-light">
                            <th class="font-hanuman card-title"> {{__('Code')}}</th>
                            <th class="font-hanuman card-title"> {{__('Khmer Name')}}</th>
                            <th class="font-hanuman card-title"> {{__('Latin Name')}}</th>
                            <th class="font-hanuman card-title"> {{__('Gender')}}</th>
                            <th class="font-hanuman card-title"> {{__('Type')}}</th>
                            <th class="font-hanuman card-title"> {{__('Contact')}}</th>
                            <th class="font-hanuman card-title"> {{__('Email')}}</th>
                            <th class="font-hanuman card-title"> {{__('Actions')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->code}}</td>
                            <td class="font-hanuman">{{$user->khmer_name}}</td>
                            <td>{{$user->latin_name}}</td>
                            <td class="font-hanuman">{{__($user->gender)}}</td>
                            <td class="font-hanuman">{{$user->department_name}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->email}}</td>
                            <td>
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
                    <tfoot>
                        <tr>
                            <th class="font-hanuman card-title fs-5">កូដ</th>
                            <th class="font-hanuman card-title fs-5">ឈ្មោះ</th>
                            <th class="font-hanuman card-title fs-5">ប្រភេទសមាជិក</th>
                            <th class="font-hanuman card-title fs-5">លេខទូរស័ព្ទ</th>
                            <th class="font-hanuman card-title fs-5">អ៊ីមែល</th>
                            <th class="font-hanuman card-title fs-5">សកម្មភាព</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<script>
    $("#zero_config").DataTable();

    $(document).ready(function() {

        $('#search_code').focus(function() {
            $('.code_search_block').addClass('d-block');
            $('.code_search_block').removeClass('d-none');
        })
        $('#search_code').blur(function() {
            // $('.code_search_block').removeClass('d-block');
            $('.code_search_block').addClass('d-none');
            if ($('.search_code_result').clicked = true) {
                console.log('A click')
            } else {
                console.log('Other click')
            }
        })

        // $('.search_code_result').click(function() {
        //     console.log($(this).text())
        //     $('.code_search_block').removeClass('d-block');
        //     $('.code_search_block').addClass('d-none');
        // })

    })
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