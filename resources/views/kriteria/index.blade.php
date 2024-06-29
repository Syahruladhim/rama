@extends('app')
@section('content')
    <div class="card">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped m-0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Atribut</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                @foreach ($kriterias as $kriteria)
                    <tr>
                        <td>{{ $kriteria->id_kriteria }}</td>
                        <td>{{ $kriteria->nama_kriteria }}</td>
                        <td>{{ $kriteria->atribut }}</td>
                        <td>{{ $kriteria->bobot }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection