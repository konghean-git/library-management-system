@extends("layouts.master")

@section('page_title')
{{__('Create ')}}{{__('Members')}}
@endsection


@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title font-size-sidebar font-moulpoli">{{ __('Create ') }}{{ __('Members') }}</h4>
            <div class="ms-auto text-end d-md-block d-none">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item font-hanuman"><a href="{{route('home',app()->getLocale())}}">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item font-hanuman"><a href="{{route('user.index',app()->getLocale())}}">{{ __('Members List') }}</a></li>
                        <li class="breadcrumb-item font-hanuman active" aria-current="page">
                            {{ __('Create ') }}{{ __('Members') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="card">

        <form action="{{route('user.create_submit',app()->getLocale())}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="card-body">
                <h5 class="card-title font-hanuman">{{ __("Member Information") }}</h5>
                <div class="row mt-4">
                    <div class="col-md-8 font-hanuman">
                        <div class="form-group row">
                            <label class="col-md-3 mt-1" for="code">{{__('Code')}}<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" id="code" name="code" value="{{ old('code')}}" class="form-control @error('code') border-danger @enderror " autocomplete="on" placeholder="{{__('Enter ')}}{{__('Code')}}" />
                                @error('code')
                                <div class="text-danger" style="font-size: 11px;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 mt-1" for="khmer_name">{{__('Khmer Name')}}<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" id="khmer_name" value="{{ old('khmer_name')}}" name="khmer_name" class="form-control @error('khmer_name') border-danger @enderror" placeholder="{{__('Enter ')}}{{__('Khmer Name')}}" />
                                @error('khmer_name')
                                <div class="text-danger" style="font-size: 11px;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 mt-1" for="latin_name">{{__('Latin Name')}}<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" id="latin_name" name="latin_name" value="{{ old('latin_name')}}" class="form-control @error('latin_name') border-danger @enderror" placeholder="{{__('Enter ')}}{{__('Latin Name')}}" />
                                @error('latin_name')
                                <div class="text-danger" style="font-size: 11px;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 mt-1">{{__('Gender')}}<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <select id="gender" name="gender" class="select2 form-select" style="width: 100%; height: 36px;">
                                    <option value="" hidden selected disabled>{{__('Select ')}}{{__('Gender')}}</option>
                                    <option value="Male">{{__('Male')}}</option>
                                    <option value="Female">{{__('Female')}}</option>
                                    <option value="Other">{{__('Others')}}</option>
                                </select>
                                @error('gender')
                                <div class="text-danger" style="font-size: 11px;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 mt-1">{{__('Department')}}<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <select id="department_id" name="department_id" value="{{ old('department_id')}}" class="select2 form-select shadow-none" style="width: 100%; height: 36px">
                                    <option value="" hidden selected disabled>{{__('Select ')}}{{__('Department')}}</option>
                                    @foreach($departments as $dep)
                                    <option value="{{ $dep->id }}">{{__($dep->name)}}</option>
                                    @endforeach
                                </select>
                                @error('department_id')
                                <div class="text-danger" style="font-size: 11px;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 mt-1" for="date_of_birth">{{__('Date of Birth')}}<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth')}}" class="form-control @error('date_of_birth') border-danger @enderror" autocomplete="off" placeholder="yyyy-mm-dd" />
                                @error('date_of_birth')
                                <div class="text-danger" style="font-size: 11px;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 mt-1" for="contact">{{__('Contact')}}<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" id="contact" name="contact" value="{{ old('contact')}}" class="form-control @error('contact') border-danger @enderror" autocomplete="off" placeholder="{{__('Enter ')}}{{__('Contact')}}" />
                                @error('contact')
                                <div class="text-danger" style="font-size: 11px;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 mt-1" for="address">{{__('Address')}}<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" id="address" name="address" value="{{ old('address')}}" class="form-control @error('address') border-danger @enderror" autocomplete="off" placeholder="{{__('Enter ')}}{{__('Address')}}" />
                                @error('address')
                                <div class="text-danger" style="font-size: 11px;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 mt-1" for="email">{{__('Email')}}</label>
                            <div class="col-md-9">
                                <input type="email" id="email" name="email" value="{{ old('email')}}" class="form-control @error('email') border-danger @enderror" autocomplete="off" placeholder="{{__('Enter ')}}{{__('Email')}}" />
                                @error('email')
                                <div class="text-danger" style="font-size: 11px;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 font-hanuman">
                        <div class="form-group row">
                            <label class="col-md-3 mt-1">{{__('Photo')}}<span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <div class="show-img">
                                    <img id="review-img" class="rounded" src="{{asset('storage/images/user.jpg')}}" alt="user-profile" style="width: 200px;">
                                </div>
                                <div class="custom-file mt-3">
                                    <input type="file" class="custom-file-input" id="photo" name="photo" />
                                    @error('photo')
                                    <div class="text-danger mt-2" style="font-size: 11px;">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <div class="comment-footer">
                        <span class="text-muted float-end"> </span>
                        <button type="submit" class="btn btn-success btn-sm text-white">
                            Save
                        </button>
                        <a href="{{route('user.create',app()->getLocale())}}" class="btn btn-cyan btn-sm text-white">
                            Clear
                        </a>
                        <a href="{{route('user.index',app()->getLocale())}}" class="btn btn-danger btn-sm text-white">
                            Cancel
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection


@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/libs/select2/dist/css/select2.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" />
@endsection




@section('script')

<script src="{{asset('assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/libs/select2/dist/js/select2.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<script>
    $('.select2').select2();
    $("#date_of_birth").datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',
        todayHighlight: true,
    });

    $(document).ready(function() {
        $("#photo").change(function() {
            readURL(this);
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#review-img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection