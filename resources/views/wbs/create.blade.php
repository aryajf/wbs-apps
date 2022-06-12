@extends('layouts.app')

@section('title', 'Create WBS')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('wbs.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label class="font-weight-bold">Site Id</label>
                            <input type="text" class="form-control @error('site_id') is-invalid @enderror" name="site_id" value="{{ old('site_id') }}" placeholder="Masukkan ID Site">
                        
                            <!-- error message untuk site_id -->
                            @error('site_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold">Site Name</label>
                            <input type="text" class="form-control @error('site_name') is-invalid @enderror" name="site_name" value="{{ old('site_name') }}" placeholder="Masukkan Nama Site">
                        
                            <!-- error message untuk site_name -->
                            @error('site_name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold">Project Budget</label>
                            <input type="text" class="form-control @error('project_budget') is-invalid @enderror" name="project_budget" value="{{ old('project_budget') }}" placeholder="Masukkan budget project">
                        
                            <!-- error message untuk project_budget -->
                            @error('project_budget')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold">Regional</label>
                            <input type="text" class="form-control @error('regional') is-invalid @enderror" name="regional" value="{{ old('regional') }}" placeholder="Masukkan Regional">
                        
                            <!-- error message untuk regional -->
                            @error('regional')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold">Site Type</label>
                            <input type="text" class="form-control @error('site_type') is-invalid @enderror" name="site_type" value="{{ old('site_type') }}" placeholder="Masukkan Tipe Site">
                        
                            <!-- error message untuk site_type -->
                            @error('site_type')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold">Survey Date</label>
                            <input type="text" class="form-control @error('survey_date') is-invalid @enderror" name="survey_date" value="{{ old('survey_date') }}" placeholder="Masukkan tanggal survey">
                        
                            <!-- error message untuk survey_date -->
                            @error('survey_date')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold">Consultant</label>
                            <input type="text" class="form-control @error('consultant') is-invalid @enderror" name="consultant" value="{{ old('consultant') }}" placeholder="Masukkan Consultant">
                        
                            <!-- error message untuk consultant -->
                            @error('consultant')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold">Consultant picture name</label>
                            <input type="text" class="form-control @error('cons_pic_name') is-invalid @enderror" name="cons_pic_name" value="{{ old('cons_pic_name') }}" placeholder="Masukkan Consultant picture name">
                        
                            <!-- error message untuk cons_pic_name -->
                            @error('cons_pic_name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold">Tower</label>
                            <input type="text" class="form-control @error('tower') is-invalid @enderror" name="tower" value="{{ old('tower') }}" placeholder="Masukkan Tower">
                        
                            <!-- error message untuk tower -->
                            @error('tower')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold">Tower Height</label>
                            <input type="text" class="form-control @error('tower_height') is-invalid @enderror" name="tower_height" value="{{ old('tower_height') }}" placeholder="Masukkan Ketinggian Tower">
                        
                            <!-- error message untuk tower_height -->
                            @error('tower_height')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="mt-3 btn btn-md btn-primary">SIMPAN</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection