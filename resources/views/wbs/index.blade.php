@extends('layouts.app')

@section('title', 'Home WBS')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('wbs.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">SITE NAME</th>
                                <th scope="col">PROJECT BUDGET</th>
                                <th scope="col">REGIONAL</th>
                                <th scope="col">TOWER #</th>
                                <th scope="col">TOWER HEIGHT</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($wbs as $item)
                            <tr>
                                <td>{{ $item->site_name }}</td>
                                <td>{{ $item->project_budget }}</td>
                                <td>{{ $item->regional }}</td>
                                <td>{{ $item->tower }}</td>
                                <td>{{ $item->tower_height }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('wbs.destroy', $item->id) }}" method="POST">
                                        <a href="{{ route('wbs.edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data WBS belum Tersedia.
                                </div>
                            @endforelse
                        </tbody>
                    </table>  
                    {{ $wbs->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection