@extends('layouts.master')

@section('content')

<!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg">
            <div class="card">
              <div class="card-body">

                <div class="card-header">
                  <h3 class="card-title">EDIT Data Bagian</h3>
                </div>

 <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

        <div class="card-body">
                <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <form action="/lhp/{{$lhp->id}}/update" method="POST">
                      {{csrf_field()}}
                    <label for="exampleInputEmail1">Nama Bagian</label>
                    <select name="bagian_id" type="text" class="form-control">
                    <option>Pilih Kategori</option>
                    @foreach ($data_bagian as $bagian)
                    <option value="{{ $bagian->id }}">
                      {{$bagian->nama_bagian}}
                    </option>
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No LHP</label>
                    <input name="no_lhp" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->no_lhp }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Pemeriksaan</label>
                    <input name="tgl_pemeriksaan" type="date" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->tgl_pemeriksaan }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat Direksi</label>
                    <input name="no_surat_direksi" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->no_surat_direksi }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Surat Direksi</label>
                    <input name="tgl_surat_direksi" type="date" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->tgl_surat_direksi }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Surat Penegasan</label>
                    <input name="no_surat_penegasan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->no_surat_penegasan }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Surat Penegasan</label>
                    <input name="tgl_surat_penegasan" type="date" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->tgl_surat_penegasan }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Tindak Lanjut</label>
                    <input name="no_tindak_lanjut" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->no_tindak_lanjut }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Tindak Lanjut</label>
                    <input name="tgl_tindak_lanjut" type="date" class="form-control" id="exampleInputEmail1" placeholder="Kode Bagian" value="{{ $lhp->tgl_tindak_lanjut }}">
                  </div>

                   <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                </div>

                <!-- /.card-body -->
              </div>

        <!-- /.card-body -->
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection