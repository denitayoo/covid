@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br>
                    Daftar Desa
                <a href="{{route('kelurahan.create')}}" class="btn btn-primary float-right">
                Tambah Data</a>
                </div>

                <div class="card-body">
                  
                    <div class="table-responsive">
                    <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Desa</th>
                                    <th>Nama kecamatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($kelurahan as $data)
                               
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->nama_kelurahan}}</td>
                                        <td>{{$data->kecamatan->nama_kecamatan}}</td>
                                        <form action="{{route('kelurahan.destroy',$data->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <td>
                                            <a href="{{route('kelurahan.show',$data->id)}}" class="btn btn-info">Show</a>
                                            <a href="{{route('kelurahan.edit',$data->id)}}" class="btn btn-success">Edit</a>
                                            <button type="submit" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Delete</button>
                                        </td>
                                        </form>
                                    </tr>
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection