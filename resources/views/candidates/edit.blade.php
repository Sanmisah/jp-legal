@extends('layouts.app')

@section('title', 'Edit Candidate')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Candidate</h1>
        <a href="{{route('candidates.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
    </div>

    {{-- Alert Messages --}}
    @include('common.alert')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Candidate</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('candidates.update', ['candidate' => $candidate->id])}}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Application Date</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('application_date') is-invalid @enderror"
                            name="application_date"
                            value="{{ old('application_date') ? old('application_date') : $candidate->application_date }}"
                            readonly=true>
                        @error('application_date')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Ref No</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('ref_no') is-invalid @enderror"
                            name="ref_no"
                            value="{{ old('ref_no') ? old('ref_no') : $candidate->ref_no }}"
                            readonly=true>
                        @error('ref_no')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Check ID</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('check_id') is-invalid @enderror"
                            name="check_id"
                            value="{{ old('check_id') ? old('check_id') : $candidate->check_id }}"
                            readonly=true>
                        @error('check_id')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Name</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('application_date') is-invalid @enderror"
                            name="name"
                            value="{{ old('name') ? old('name') : $candidate->name }}"
                            >
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Father Name</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('ref_no') is-invalid @enderror"
                            name="father_name"
                            value="{{ old('father_name') ? old('father_name') : $candidate->father_name }}"
                            >
                        @error('father_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Date of Birth</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('dob') is-invalid @enderror"
                            name="dob"
                            value="{{ old('dob') ? old('dob') : $candidate->dob }}"
                            readonly=true>
                        @error('dob')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Period of Stay</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('pos') is-invalid @enderror"
                            name="pos"
                            value="{{ old('pos') ? old('pos') : $candidate->pos }}"
                            readonly=true>
                        @error('pos')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-8 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Address</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('address') is-invalid @enderror"
                            name="address"
                            value="{{ old('address') ? old('address') : $candidate->address }}"
                            readonly=true>
                        @error('address')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Pincode</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('pincode') is-invalid @enderror"
                            name="pincode"
                            value="{{ old('pincode') ? old('pincode') : $candidate->pincode }}"
                            readonly=true>
                        @error('pincode')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>City</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('city') is-invalid @enderror"
                            name="city"
                            value="{{ old('city') ? old('city') : $candidate->city }}"
                            readonly=true>
                        @error('city')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>State</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('state') is-invalid @enderror"
                            name="state"
                            value="{{ old('state') ? old('state') : $candidate->state }}"
                            readonly=true>
                        @error('state')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>District</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('district') is-invalid @enderror"
                            name="district"
                            value="{{ old('district') ? old('district') : $candidate->district }}"
                            readonly=true>
                        @error('district')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Verification Date</label>
                        <input
                            type="text"
                            class="form-control form-control-user @error('verification_date') is-invalid @enderror"
                            name="verification_date"
                            value="{{ old('verification_date') ? old('verification_date') : $candidate->verification_date }}"
                            readonly=true>
                        @error('verification_date')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <span style="color:red;">*</span>Status</label>
                        <select
                            type="text"
                            class="form-control form-control-user @error('status') is-invalid @enderror"
                            name="status"
                        >
                            <option value="Pending" {{ $candidate->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Green" {{ $candidate->status == 'Green' ? 'selected' : '' }}>Green</option>
                            <option value="Red" {{ $candidate->status == 'Red' ? 'selected' : '' }}>Red</option>
                        </select>
                        @error('status')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                {{-- Save Button --}}
                <button type="submit" class="btn btn-success btn-user btn-block">
                    Update
                </button>

            </form>
        </div>
    </div>

</div>


@endsection


@section('scripts')
<script>
    $("#checkAllPermissions").click(function(){
        $('.permission-input').not(this).prop('checked', this.checked);
    });
</script>
@endsection
