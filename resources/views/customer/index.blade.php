@extends('layouts.app')

@section('page_name', __('Customers'))

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

                <h2 class="card-title">{{__('Customers')}}  </h2>
            </header>
            <div class="card-body">
                <table class="table table-bordered table-striped mb-0" id="datatable-editable">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Company Name</th>
                        <th>Mobil</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($customers as $customer)
                        <td><a data-toggle="tooltip" title="" href="{{route('customer.show', $customer->id)}}" data-original-title="{{__('See more')}}"> {{$customer->name.' '.$customer->surname}}</a></td>
                        <td>{{$customer->company_name}}</td>
                        <td> {{$customer->mobil}}</td>
                        <td> {{$customer->email}}</td>
                        <td class="actions">
                            <a data-toggle="tooltip" title="" href="{{route('customer.show', $customer->id)}}" data-original-title="{{__('See more')}}"  class="delete on-default"><i class="fas fa-file-alt"></i></a>
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
