@extends('layouts.app')

@section('page_name', __('File Storage'))

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

                <h2 class="card-title">{{__('File Storage')}}   <a href="{{url('/file/create')}}" class="btn btn-sm btn-dark">{{__('Create File')}}   <i class="fas fa-plus"></i></a>
</h2>

            </header>
            <div class="card-body">
                <table class="table table-bordered table-striped mb-0" id="datatable-editable">
                    <thead>
                    <tr>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Size')}}</th>
                        <th>{{__('Uploaded Date')}}</th>
                        <th>{{__('Actions')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($files as $file)
                        <tr data-item-id="{{$file->id}}" role="row" class="odd">
                        <td class="sorting_1"><a data-toggle="tooltip" title="" href="{{route('download.image', $file->id)}}" data-original-title="{{__('Download')}}"> {{$file->originalName}} </a></td>
                        <td>{{$file->filesize}} {{__('bytes')}}</td>
                        <td>{{date("d-m-Y", strtotime($file->created_at))}}</td>
                        <td class="actions">
                            <form id="delete-form {{$file->id}}" class="hidden" action="{{route('delete.image', $file->id)}}" method="POST">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="hidden" id="{{$file->id}}"></button>
                            </form>
                            <a data-toggle="tooltip" title="" href="{{route('download.image', $file->id)}}" data-original-title="{{__('Download')}}"  class="delete on-default"><i class="fas fa-download"></i>
                            <a  onclick="destroy({{$file->id}})" data-toggle="tooltip" title="" href="#" data-original-title="{{__('Delete')}}" class="delete on-default"><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @empty
                        <tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">{{__('No data available in table')}}</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </section>
@endsection

@section('custom_footer')
    <script>
    function destroy(id){
            $("#"+id).click();
        }
    </script>
    <script src="{{asset('vendor/select2/js/select2.js')}}"></script>
    <script src="{{asset('vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/examples/examples.datatables.editable.js')}}"></script>
@endsection
