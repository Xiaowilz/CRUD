@extends('layouts/index')

@section('content')
	<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Tambah Baru</h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">
            <br />
            <form method="POST" action="{{ url('/Mahasiswa/Simpan/Ubah', $mahasiswa->mhId) }}" class="form-horizontal form-label-left">
				    @csrf
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIM <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="nim" id="nim" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" value="{{ $mahasiswa->mhId }}" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Mahasiswa <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="namaMahasiswa" id="namaMahasiswa" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" value="{{ $mahasiswa->mhNama }}">
                </div>
              </div>

              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Mahasiswa</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="alamatMahasiswa" id="alamatMahasiswa" class="form-control col-md-7 col-xs-12" type="text" autocomplete="off" value="{{ $mahasiswa->mhAlamat }}">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 	<select name="jk" id="jk" class="form-control">
                    @php $lk=""; $pr="";@endphp
                    @if($mahasiswa->mhJk == "lk")
                      @php $lk="selected"@endphp
                    @else
                      @php $pr="selected"@endphp
                    @endif
        						<option value="lk" {{$lk}}>Laki-Laki</option>
        						<option value="pr" {{$pr}}>Perempuan</option>
        					</select>
                </div>
              </div>
				
      			 	@if(session('status'))
      			 		<div class="form-group">
      			 			<label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
      			 			<div class="alert alert-success col-md-6 col-sm-6 col-xs-12">
      			 				{{ session('status') }}
      			 			</div>			 			
      			 		</div>
      			 	@endif

              <div class="ln_solid"></div>

              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				          <input class="btn btn-primary" type="reset" value="Reset">
                  <input type="submit" class="btn btn-success" value="Simpan">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
@endsection