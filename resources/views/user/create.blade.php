@extends('layouts.app')

@section('page_name', __('Create User'))

@section('custom_header')
    <link rel="stylesheet" href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" />
@endsection

@section('content')
    <div class="col-lg-8 col-xl-6 ">

        <div class="col-lg-12">
            <form id="form" action="{{route('user.store')}}" class="form-horizontal" method="POST">
                @csrf
                @method('POST')
                <section class="card">
                    <header class="card-header">
                        <div class="card-actions">
                            <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                            <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
                        </div>

                        <h2 class="card-title">{{__('Create User')}}</h2>
                    </header>
                    <div class="card-body" style="display: block;">
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">{{__('Full Name:')}}<span class="required">*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="name" class="form-control" placeholder="{{__('Name Surname:')}}" required value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">E-mail: <span class="required">*</span></label>
                            <div class="col-sm-7">
                                <div class="input-group">
													<span class="input-group-prepend">
														<span class="input-group-text">
															<i class="fas fa-envelope"></i>
														</span>
													</span>
                                    <input type="email" name="email" class="form-control" placeholder="email@email.com" required value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="col-sm-9">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 control-label text-sm-right pt-2">Password: </label>
                            <div class="col-sm-6">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer" style="display: block;">
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                                <button type="reset" class="btn btn-default">{{__('Reset')}}</button>
                            </div>
                        </div>
                    </footer>
                </section>
            </form>



        </div>


    </div>
@endsection

@section('custom_footer')
    <script>

        $( document ).ready(function() {
            var locale = '{{ config('app.locale') }}';
            var message = "This field is required."
            if (locale == 'sq'){
                message = "Kjo fushe nuk mund te jete e zbrazet";
            }else if(locale == 'sr'){
                message = "Ovo polje je obavezno.";
            }
            $.extend($.validator.messages, {
                required: message,
            });
        });
    </script>
    <script src="{{asset('vendor/autosize/autosize.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
    <script src="{{asset('vendor/jquery-validation/jquery.validate.js')}}"></script>
    <script src="{{asset('vendor/pnotify/pnotify.custom.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
    <script src="{{asset('js/examples/examples.wizard.js')}}"></script>

@endsection
