@extends('layouts.app')

@section('page_name', __('Upload File'))

@section('custom_header')
    <link rel="stylesheet" href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/pnotify/pnotify.custom.css')}}">
@endsection

@section('content')
            <section class="card col-md-8 card-dark m-auto">
                    <form class="form-horizontal form-bordered" method="POST" action="{{route('store.lead')}}" enctype="multipart/form-data">
                    @csrf
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
                    </div>

                    <h2 class="card-title">{{__('Upload File')}}</h2>
                </header>
                <div class="card-body">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2">{{__('Upload Lead')}}</label>
                            <div class="col-lg-6">
                                <div class="fileupload fileupload-new"  data-provides="fileupload"><input type="hidden" >
                                    <div class="input-append">
                                        <div class="uneditable-input">
                                            <i class="fas fa-file fileupload-exists"></i>
                                            <span class="fileupload-preview"></span>
                                        </div>
                                        <span id="clearbtn" class="btn btn-default btn-file">
                                            <span class="fileupload-exists">{{__('Change')}}</span>
                                            <span class="fileupload-new">{{__('Choose')}}</span>
                                            <input id="input" type="file" name="file" required>
                                        </span>
                                        <a href="#" id="dismiss" class="btn btn-default fileupload-exists" data-dismiss="fileupload">{{__('Remove')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- progress-bar --}}
                    <div class="progress progress-xs progress-half-rounded m-2 light">
                        <div class="progress-bar progress-bar-dark" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" >
                            60%
                        </div>
                    </div>
                    {{-- end:progress-bar--}}
                </div>
                <div class="card-footer">
                <ul class="pager">
                    <li class="finish float-right">
                        <button id="butoni" type="submit" class="btn btn-default">{{__('Finish')}}</button>
                    </li>
                </ul>
                </div>
                    </form>
            </section>
@endsection

@section('custom_footer')
     <script src="{{asset('vendor/autosize/autosize.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
    <script src="{{asset('vendor/jquery-validation/jquery.validate.js')}}"></script>
    <script src="{{asset('vendor/pnotify/pnotify.custom.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
    <script src="{{asset('js/examples/examples.wizard.js')}}"></script>
     <script src="{{asset('vendor/pnotify/pnotify.custom.js')}}"></script>
{{--     <script src="{{asset('js/examples/examples.notifications.js')}}"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"  crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('#clearbtn').on('click', function (){
            $('.progress-bar').css("width", '0%');
            $('.progress-bar').html('0%');
        });
            var SITEURL = "{{URL('/')}}";
            $(function () {
                $(document).ready(function () {
                    // var bar = $('.bar');
                    var percent = $('.progress-bar');
                    $('form').ajaxForm({
                        beforeSend: function () {
                            var percentVal = '0%';
                            // bar.width(percentVal)
                            percent.css("width", percentVal);
                            percent.html(percentVal);
                        },
                        uploadProgress: function (event, position, total, percentComplete) {
                            var percentVal = percentComplete + '%';
                            percent.css("width", percentVal);
                            percent.html(percentVal);
                        },
                        complete: function (xhr) {
                            //check for errors-validation
                            if (xhr.status == 422){
                                percent.css("width", '0%');
                                percent.html('0%');
                                errors = xhr.responseJSON.errors.file;
                                for( var i=0; i<=errors.length-1; i++){
                                 new PNotify({
                                    title:  'Error',
                                    text: errors[i],
                                    type: 'error'
                                });
                                }
                            }else if(xhr.status == 200){
                                new PNotify({
                                    title:  '{{__('Success')}}',
                                    text: '{{__('Uploaded Successfully')}}',
                                    type: 'success'
                                });
                            var percentVal = '100%';
                            percent.css("width", percentVal);
                            percent.html(percentVal);
                            }
                            $("#input").val(null);
                            $('#dismiss').trigger('click');
                        }
                    });
                });
            });
        </script>
@endsection
