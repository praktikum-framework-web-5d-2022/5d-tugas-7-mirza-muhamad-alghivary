@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-4">
            <h3 class="fw-bold">Data Customer</h3>
            <a href="{{ route('customer.create') }}" class="btn btn-secondary p-3 mb-4">
                <h5 class="mb-0">Masukan Customer</h5>
            </a>
            @if (session()->has('message'))
                <div class="alert alert-success">{{session()->get('message')}}</div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Barang Yang Diambil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$customer->nama}}</td>
                                <td>{{$customer->umur}}</td>
                                <td>
                                    @forelse ($customer->barangs as $item)
                                    <ul>
                                        <li>
                                            {{$item->nama}}
                                        </li>
                                    </ul>
                                    @empty
                                        Belum Mengambil Barang
                                    @endforelse
                                </td>
                                <td>
                                    <a href="{{route('customers.take',['customer'=>$customer->id])}}"class="btn btn-info">Ambil Barang</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
