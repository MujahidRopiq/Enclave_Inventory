@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Show Invoice</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Simple Tables</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header bg-dark">
                    <h3 class="card-title">Detail furniture</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    <div class="d-flex flex-wrap">
                        @foreach ($invoice->furniture->furniture_images as $data)
                            <div class="my_image"">
                                <img src="{{ $data->url }}" alt="..."
                                    class="carousel-image rounded shadow-sm m-1 border border-danger" style="height:100px">
                            </div>
                        @endforeach
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">SKU</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="text-gray">{{ $invoice->furniture->sku }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="text-gray text-capitalize">{{ $invoice->furniture->name }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-dark">
                    <h3 class="card-title">Detail invoice</h3>
                </div>
                <!-- form start -->
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">No. Invoice</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="text-gray">{{ $invoice->no_invoice }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Consignee</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="text-gray">{{ $invoice->consignee }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Detail Consignee</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="text-gray">{{ $invoice->detail_consignee }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">No. PO Buyer</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="text-gray">{{ $invoice->no_po_buyer }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Pelabuhan asal</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="text-gray">{{ $invoice->port_of_loading }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Pelabuhan tujuan</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="text-gray">{{ $invoice->port_of_destination }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Terms and Conditions</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="text-gray">{{ $invoice->terms_and_conditions}}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Tanggal pemesanan</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="text-gray">{{ $invoice->created_at->format('d/m/Y') }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Jumalah barang</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="text-gray">{{ $invoice->qty }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Harga satuan</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="text-gray">{{ $invoice->price }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Harga total</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="text-gray">{{ $invoice->total }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div
                                class="btn btn-sm btn-{{ $invoice->status == 'finished' ? 'success' : '' }}{{ $invoice->status == 'process' ? 'warning' : '' }}{{ $invoice->status == 'canceled' ? 'danger' : '' }}">
                                {{ $invoice->status }}</div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="/invoices{{ str_replace('/invoices/' . $invoice->id, '', request()->getRequestUri()) }}"
                            class="btn btn-sm btn-dark mr-1">Kembali</a>
                        <a href="#" class="btn btn-sm btn-warning mr-1" data-toggle="modal" data-target="#status">Ubah
                            status</a>
                        <form
                            action="/invoices/{{ $invoice->id . str_replace('/invoices/' . $invoice->id, '', request()->getRequestUri()) }}"
                            method="post">
                            @csrf
                            @method('delete')
                            <button
                                onclick="return confirm('PERHATIAN!!!\nInvoice {{ $invoice->no_po }} akan dihapus secara permanen!')"
                                type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
                <!-- /.card-footer -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="status">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <form action="/invoices/{{ $invoice->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="modal-body mt-5">
                        <div class="row mb-2">
                            <div class="col-3">Status</div>
                            <div class="col-9">
                                <select name="status" class="form-control form-control-sm">
                                    <option value="finished" {{ $data->status == 'finished' ? 'selected' : '' }}>
                                        Selesai
                                    </option>
                                    <option value="canceled" {{ $data->status == 'canceled' ? 'selected' : '' }}>
                                        Batal
                                    </option>
                                    <option value="process" {{ $data->status == 'process' ? 'selected' : '' }}>
                                        Proses
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
