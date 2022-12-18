@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card p-4">
                <h3 class="fw-bold">Ambil Barang</h3>
                <div class="card-body">
                    <form action="{{route('customers.takeStore',['customer' => $customer->id])}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="barang_id" class="form-label">Pilih Barang</label>
                            <div class="form-group">
                                @foreach ($barangs as $item)
                                <div class="form-check
                                form-check-inline">
                                    <input type="checkbox"
                                    name="barang_id[]" id="{{$item->id}}"
                                    class="form-check-input" value="{{$item->id}}">
                                    <label for="{{$item->id}}"
                                    class="form-check-label">{{$item->nama}}</label>
                                </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-info">Ambil Barang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
