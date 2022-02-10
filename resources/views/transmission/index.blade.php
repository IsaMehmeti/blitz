@extends('layouts.app')

@section('page_name', __('Transmissions'))

@section('custom_header')
    <link rel="stylesheet" href="{{asset('vendor/select2/css/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/datatables/media/css/dataTables.bootstrap4.css')}}" />
@endsection

@section('content')
        <section class="card">

            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                    <a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
                </div>

                <h2 class="card-title">{{__('Transmissions')}}   <a href="{{route('create.lead')}}" class="btn btn-sm btn-dark">{{__('Upload a Lead')}}   <i class="fas fa-plus"></i></a></h2>
            </header>
            <div class="card-body">
                <table class="table table-bordered table-striped mb-0" id="datatable-editable">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Transmitted Leads</th>
                        <th>Failed Leads</th>
                        <th>User</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($transmissions as $transmission)
                        <td><a data-toggle="tooltip" title="" href="{{route('transmission.show', $transmission->id)}}" data-original-title="{{__('Details')}}"> {{$transmission->name}}</a></td>
                        <td> {{$transmission->leads ? $transmission->leads->where('status', true)->count() : ''}}</td>
                        <td> {{$transmission->leads ? $transmission->leads->where('status', false)->count() : ''}}</td>
                        <td> {{$transmission->user ? $transmission->user->name :  ''}}</td>
                        <td class="actions">
                            <a data-toggle="tooltip" title="" href="{{route('transmission.show', $transmission->id)}}" data-original-title="{{__('See more')}}"  class="delete on-default"><i class="fas fa-file-alt"></i></a>
                            @if($transmission->file)
                                <a data-toggle="tooltip" title="" href="{{route('transmission.download', $transmission->files->id)}}" data-original-title="{{__('Download')}}"  class="delete on-default"><i class="fas fa-download"></i></a>
                            @endif
                        </td>
                    </tr>
                    @empty
                        <tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">{{__('No data available in table')}}</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </section>
@endsection

@section('custom_footer')
    <script src="{{asset('vendor/select2/js/select2.js')}}"></script>
    <script src="{{asset('vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/examples/examples.datatables.editable.js')}}"></script>
    <script>

        function destroy(id){
            $("#"+id).click();
        }

    </script>

@endsection
