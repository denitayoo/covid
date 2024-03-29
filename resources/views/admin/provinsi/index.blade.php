@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Daftar Provinsi
                <a href="{{route('provinsi.create')}}" class="btn btn-primary float-right">
                Tambah Data</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table" id="table">
                            <thead>
                            <th>Nomor</th>
                                    <th>Kode Provinsi</th>
                                    <th>Nama Provinsi</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($provinsi as $data)
                         
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->kode_provinsi}}</td>
                                        <td>{{$data->nama_provinsi}}</td>
                                        <td>
                                        <form action="{{route('provinsi.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('provinsi.show',$data->id)}}" class="btn btn-info">Show</a>
                               
                                            <a href="{{route('provinsi.edit',$data->id)}}" class="btn btn-success">Edit</a>
                                      
                                            <button type="submit" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Delete</button>
                                        </td>
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
@endsection
 