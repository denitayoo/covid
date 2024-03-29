@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br>
                    Daftar Kota
                <a href="{{route('kota.create')}}" class="btn btn-primary float-right">
                Tambah Data</a>
                </div>

                <div class="card-body">
               
                    <div class="table-responsive">
                    <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kode Kota</th>
                                    <th>Nama Kota</th>
                                    <th>Provinsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($kota as $data)
                            
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->kode_kota}}</td>
                                        <td>{{$data->nama_kota}}</td>
                                        <td>{{$data->provinsi->nama_provinsi}}</td>
                                        <form action="{{route('kota.destroy',$data->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <td>
                                            <a href="{{route('kota.show',$data->id)}}" class="btn btn-info">Show</a>
                                            <a href="{{route('kota.edit',$data->id)}}" class="btn btn-success">Edit</a>
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