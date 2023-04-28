@extends('layouts.app')

@section('title', 'Candidates')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Candidates</h1>
        <a href="{{route('candidates.download')}}" class="btn btn-sm btn-primary" >
            <i class="fas fa-download"></i> Download Reports
        </a>
    </div>

    {{-- Alert Messages --}}
    @include('common.alert')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Candidates</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="15%">Check ID</th>
                            <th>Name</th>
                            <th width="12%">Date of Birth</th>
                            <th width="10%">Status</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($candidates as $candidate)
                            <tr>
                                <td>{{$candidate->check_id}}</td>
                                <td>{{$candidate->name}}</td>
                                <td>{{$candidate->dob}}</td>
                                <td>{{$candidate->status}}</td>
                                <td style="text-align: right;">
                                    @if ($candidate->status != 'Pending')
                                    <a href="{{ env('BASE_URL', '') }}/reports/{{Auth::user()->id}}/{{$candidate->file_name}}.pdf" target="_blank" class="btn btn-primary">
                                        <i class="fa fa-print"></i>
                                    </a>
                                    @endif
                                    <a href="{{ route('candidates.edit', ['candidate' => $candidate->id]) }}" class="btn btn-primary">
                                            <i class="fa fa-pen"></i>
                                    </a>
                                   <!-- <form method="POST" action="{{ route('candidates.destroy', ['candidate' => $candidate->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                   </form> -->
                               </td>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
                {{$candidates->links()}}
            </div>
        </div>
    </div>

</div>


@endsection
