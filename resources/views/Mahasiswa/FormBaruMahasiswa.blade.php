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
            <form method="POST" action="{{ url('/Mahasiswa/Simpan/Baru') }}" class="form-horizontal form-label-left">
				@csrf
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIM <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="nim" id="nim" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Mahasiswa <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="namaMahasiswa" id="namaMahasiswa" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Mahasiswa</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="alamatMahasiswa" id="alamatMahasiswa" class="form-control col-md-7 col-xs-12" type="text">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 	<select name="jk" id="jk" class="form-control">
						<option value="lk">Laki-Laki</option>
						<option value="pr">Perempuan</option>
					</select>
                </div>
              </div>

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
	{{-- <form method="POST" action="{{ url('/Mahasiswa/Simpan/Baru') }}">
		@csrf
		<label fo="">Nomor Induk Mahasiswa : </label>
		<input type="text" name="nim" id="nim" /><br>
		<label for="namaMahasiswa">Nama Mahasiswa : </label>
		<input type="text" name="namaMahasiswa" id="namaMahasiswa" /><br>
		<label for="alamatMahasiswa">Alamat Mahasiswa : </label>
		<textarea rows="3" name="alamatMahasiswa" id="alamatMahasiswa"></textarea><br>
		<label for="jk">Jenis Kelamin : </label>
		<select name="jk" id="jk">
			<option value="lk">Laki-Laki</option>
			<option value="pr">Perempuan</option>
		</select><br>
		<input type="submit" value="Simpan">
		<input type="reset" value="Hapus">
	</form> --}}
@endsection