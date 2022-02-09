<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success text-center">
                    <strong>{{session('status')}}</strong>
                </div>
            @endif
            @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        <strong>{{session('error')}}</strong>
                    </div>
            @endif
            @if (session('danger'))
                <div class="alert alert-danger text-center">
                    <strong> {{session('danger')}}</strong>
                </div>
            @endif
            @if (session('info'))
                <div class="alert alert-info">
                    <strong> {{session('info')}}</strong>
                </div>
            @endif
            @if (session('alert-info'))
                <div class="alert alert-info alert-with-icon" data-notify="container">
                    <i class="material-icons" data-notify="icon">notifications</i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                    <span data-notify="message">{{session('alert-info')}}</span>
                </div>
            @endif
            @if (session('alert-success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b></b> {{session('alert-success')}}</span>
                </div>
            @endif
            @if (session('warning'))
                <div class="alert alert-warning text-center">
                    {{session('warning')}}
                </div>
            @endif
        <!-- MailChimp -->
            @if (session('status-MailChimp'))
                <div class="alert alert-success text-center">
                    {{session('status')}}
                </div>
            @endif
            @if (session('error-MailChimp'))
                <div class="alert alert-danger text-center">
                    {{session('error')}}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger text-center">
                        @foreach ($errors->all() as $error)
                            <strong>{{ $error }}</strong>
                        @if($errors->count() > 1)<br>
                        @endif
                        @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
