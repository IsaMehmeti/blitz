@extends('layouts.app')

@section('page_name', __('Customer'))

@section('custom_header')
    <link rel="stylesheet" href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" />
@endsection

@section('content')
<div class="col-lg-8 col-xl-8 ">
    <div class="col-lg-12">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
                    </div>

                    <h2 class="card-title">{{__('Customer')}}</h2>
                </header>
                <div class="card-body" style="display: block;">
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-sm-right pt-2">Full Name</label>
                        <div class="col-sm-4">
                            <input type="text" name="name" class="form-control" disabled required value="{{$customer->name.' '.$customer->surname}}"  >
                        </div>
                        <label class="col-sm-2 control-label text-sm-right pt-2">Sex</label>
                        <div class="col-sm-3">
                            <input type="text" name="name" class="form-control" disabled required value="{{$customer->sex}}"  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-sm-right pt-2">Mobil</label>
                        <div class="col-sm-3">
                            <input type="text" name="name" class="form-control" disabled required value="{{$customer->mobil}}"  >
                        </div>
                        <label class="col-sm-2 control-label text-sm-right pt-2">Addres</label>
                        <div class="col-sm-5">
                            <input type="text" name="name" class="form-control" disabled required value="{{$customer->addres}}"  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-sm-right pt-2">Plz</label>
                        <div class="col-sm-3">
                            <input type="text" name="name" class="form-control" disabled required value="{{$customer->plz}}"  >
                        </div>
                        <label class="col-sm-2 control-label text-sm-right pt-2">Ort</label>
                        <div class="col-sm-5">
                            <input type="text" name="name" class="form-control" disabled required value="{{$customer->ort}}"  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-sm-right pt-2">Company Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" disabled required value="{{$customer->company_name}}"  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-sm-right pt-2">Email</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" disabled required value="{{$customer->email}}"  >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 control-label text-sm-right pt-2">Created by Agent </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" disabled value="{{$customer->created_by_agent}}">
                        </div>
                    </div>
                </div>
            </section>


    </div>


</div>
@endsection

@section('custom_footer')

    <script src="{{asset('vendor/autosize/autosize.js')}}"></script>
    <script src="{{asset('vendor/jquery-validation/jquery.validate.js')}}"></script>
    <script src="{{asset('vendor/pnotify/pnotify.custom.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
    <script src="{{asset('js/examples/examples.wizard.js')}}"></script>

@endsection
