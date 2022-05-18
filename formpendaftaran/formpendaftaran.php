<!DOCTYPE html>
<html>
<head>
<title>Form Peserta Didik Baru</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>FORMULIR PESERTA DIDIK</h2>
    <form action="simpan-pendaftaran.php" method="post">
    	<div class="alert alert-secondary">
    		<strong>REGISTRASI PESERTA DIDIK</strong>
    	</div>
    	<div class="row">
    		<div class="col-sm-4">
        	<div class="form-group">
            <label>Jenis Pendaftaran :</label>
            <select class="form-control" name="jenispendaftaran">
            	<option>Pilih</option>
            	<option value="Siswa Baru">Siswa Baru</option>
            	<option value="Pindahan">Pindahan</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-3">
    	<div class="form-group">
    		<label>Tanggal Masuk Sekolah :</label>
    		<input type="date" name="tanggal_ms" class="form-control">
    	</div>
    </div></div>
    <div class="row">
    	<div class="col-sm-5">
		<div class="form-group">
            <label>NIS :</label>
            <input type="text" name="nis" class="form-control" placeholder="Masukan NIS" />
        </div></div>
        <div class="col-sm-5">
		<div class="form-group">
			<label>Nomor Peserta Ujian :</label>
			<input type="text" name="nomor_peserta" class="form-control" rows="5"placeholder="Nomor peserta ujian adalah 20 digit yang tertera pada SKHUN" ></input>
		</div> </div></div>

		<div class="row">
			<div class="col-sm-5">
				<div class="form-group">
					<label>Apakah pernah PAUD?</label>
					<br>
					<input type="radio" name="paud" value="Ya">Ya
					<input type="radio" name="paud" value="Tidak">Tidak
				</div>
			</div>
			<div class="col-sm-5">
				<div class="form-group">
					<label>Apakah pernah TK?</label>
					<br>
					<input type="radio" name="tk" value="Ya">Ya
					<input type="radio" name="tk" value="Tidak">Tidak
				</div>
			</div>
		</div>

		<div class="row">
    	<div class="col-sm-5">
		<div class="form-group">
            <label>No. Seri SKHUN Sebelumnya :</label>
            <input type="text" name="nis" class="form-control" placeholder="Masukkan No. Seri SKHUN" />
        </div></div>
        <div class="col-sm-5">
		<div class="form-group">
			<label>No. Seri Ijazah Sebelumnya :</label>
			<input type="text" name="nomor_peserta" class="form-control"placeholder="Masukkan No. Seri Ijazah" ></input>
		</div> </div></div>

		<div class="row">
    		<div class="col-sm-3">
        	<div class="form-group">
            <label>Hobi :</label>
            <select class="form-control" name="hobi">
            	<option>Pilih</option>
            	<option value="Olah Raga">Olah Raga</option>
            	<option value="Kesenian">Kesenian</option>
            	<option value="Membaca">Membaca</option>
            	<option value="Menulis">Menulis</option>
            	<option value="Traveling">Traveling</option>
            	<option value="Lainnya">Lainnya</option>
            </select>
        </div>
    </div>

    		<div class="col-sm-3">
        	<div class="form-group">
            <label>Cita-cita :</label>
            <select class="form-control" name="cita-cita">
            	<option>Pilih</option>
            	<option value="pns">PNS</option>
            	<option value="tnipolri">TNI/POLRI</option>
            	<option value="Guru">Guru/Dosen</option>
            	<option value="Dokter">Dokter</option>
            	<option value="Politikus">Politikus</option>
            	<option value="Wiraswasta">Wiraswasta</option>
            	<option value="Seni">Seni/Lukis/Artis/Sejenis</option>
            	<option value="Lainnya">Lainnya</option>
            </select>
        </div>
    </div>
</div>

<div class="alert alert-secondary">
	<strong>DATA PRIBADI</strong>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label>Nama Lengkap :</label>
			<input type="text" name="nama" class="form-control"placeholder="Masukkan Nama Lengkap" ></input>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-3">
		<div class="form-group">
			<label>Jenis Kelamin :</label>
			<br>
			<input type="radio" name="jk" value="Laki-laki">Laki-laki
			<br>
			<input type="radio" name="jk" value="Perempuan">Perempuan
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label>NISN :</label>
			<input type="text" name="nisn" class="form-control" placeholder="Masukkan NISN" ></input>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label>NIK :</label>
			<input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" ></input>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label>Tempat Lahir :</label>
			<input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" ></input>
		</div>
	</div>
	<div class="col-sm-6">
    	<div class="form-group">
    		<label>Tanggal Lahir :</label>
    		<input type="date" name="tanggal_lahir" class="form-control">
    	</div>
    </div>
</div>

<div class="row">
    		<div class="col-sm-3">
        	<div class="form-group">
            <label>Agama :</label>
            <select class="form-control" name="agama">
            	<option>Pilih</option>
            	<option value="Islam">Islam</option>
            	<option value="Kristen">Kristen/protestan</option>
            	<option value="Katholik">Katholik</option>
            	<option value="Hindu">Hindu</option>
            	<option value="Budha">Budha</option>
            	<option value="Kong Hu Chu">Kong Hu Chu</option>
            	<option value="Lainnya">Lainnya</option>
            </select>
        </div>
    </div>

    		<div class="col-sm-3">
        	<div class="form-group">
            <label>Berkebutuhan Khusus :</label>
            <select class="form-control" name="berkebutuhan">
            	<option>Pilih</option>
            	<option value="tidak">Tidak</option>
            	<option value="Netra">Netra</option>
            	<option value="Rungu">Rungu</option>
            	<option value="Grahita Ringan">Grahita Ringan</option>
            	<option value="Grahita Sedang">Grahita Sedang</option>
            	<option value="Daksa Ringan">Daksa Ringan</option>
            	<option value="Daksa Sedang">Daksa Sedang</option>
            	<option value="Laras">Laras</option>
            	<option value="Wicara">Wicara</option>
            	<option value="Tuna Ganda">Tuna Ganda</option>
            	<option value="Hiperaktif">Hiperaktif</option>
            	<option value="Cerdas Istimewa">Cerdas Istimewa</option>
            	<option value="Bakat Istimewa">Bakat Istimewa</option>
            	<option value="Kesulitan Belajar">Kesulitan Belajar</option>
            	<option value="Narkoba">Narkoba</option>
            	<option value="Indigo">Indigo</option>
            	<option value="Down Sindrome">Down Sindrome</option>
            	<option value="Autis">Autis</option>
            </select>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-sm-8">
		<div class="form-group">
			<label>Alamat Jalan :</label>
			<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" ></input>
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<label>RT :</label>
			<input type="text" name="rt" class="form-control" placeholder="Masukkan RT" ></input>
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<label>RW :</label>
			<input type="text" name="rw" class="form-control" placeholder="Masukkan RW" ></input>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label>Nama Dusun :</label>
			<input type="text" name="dusun" class="form-control" placeholder="Masukkan Nama Dusun" ></input>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Nama Kelurahan/Desa :</label>
			<input type="text" name="kelurahan" class="form-control" placeholder="Masukkan Nama Kelurahan/Desa" ></input>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Kecamatan :</label>
			<input type="text" name="kecamatan" class="form-control" placeholder="Masukkan Kecamatan" ></input>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label>Kode Pos :</label>
			<input type="text" name="kode_pos" class="form-control" placeholder="Masukkan Kode Pos" ></input>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Tempat Tinggal :</label>
			<select class="form-control" name="tinggal">
            	<option>Pilih</option>
            	<option value="bersama ortu">Bersama Orang Tua</option>
            	<option value="wali">Wali</option>
            	<option value="kos">Kos</option>
            	<option value="asrama">Asrama</option>
            	<option value="panti">Panti Asuhan</option>
            	<option value="Lainnya">Lainnya</option>
            </select>
        </div>
    </div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Moda Transportasi :</label>
			<select class="form-control" name="moda">
            	<option>Pilih</option>
            	<option value="jalan kaki">Jalan Kaki</option>
            	<option value="kendaraan pribadi">Kendaraan Pribadi</option>
            	<option value="kendaraan umum">Kendaraan Umum/angkot/pete-pete</option>
            	<option value="jemputan sekolah">Jemputan Sekolah</option>
            	<option value="kereta api">Kereta Api</option>
            	<option value="ojek">Ojek</option>
            	<option value="andong">Andong/Bendi/Sado/Dokar/Delman/Becak</option>
            	<option value="perahu">Perahu penyeberangan/Rakit/Getek</option>
            	<option value="Lainnya">Lainnya</option>
            </select>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label>Nomor HP :</label>
			<input type="text" name="hp" class="form-control" placeholder="Masukkan Nomor HP" ></input>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Nomor Telepon :</label>
			<input type="text" name="telepon" class="form-control" placeholder="Masukkan Nomor Telepon" ></input>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Email Pribadi :</label>
			<input type="text" name="email" class="form-control" placeholder="Masukkan Email" ></input>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-3">
		<div class="form-group">
			<label>Penerima KPS/PKH/KIP :</label>
			<br>
			<input type="radio" name="kps" value="Ya">Ya
			<br>
			<input type="radio" name="kps" value="Tidak">Tidak
				</div>
			</div>
		<div class="col-sm-5">
		<div class="form-group">
			<label>No. KPS/KKS/PKH/KIP :</label>
			<input type="text" name="kpskip" class="form-control" placeholder="Masukkan No. KPS/KKS/PKH/KIP" ></input> *apabila menerima
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-3">
		<div class="form-group">
			<label>Kewarganegaraan : </label>
			<br>
			<input type="radio" name="kewarganegaraan" value="Indonesia">Indonesia (WNI)
			<br>
			<input type="radio" name="kewarganegaraan" value="Asing">Asing (WNA)
				</div>
			</div>
		<div class="col-sm-5">
		<div class="form-group">
			<label>Nama Negara :</label>
			<input type="text" name="kpskip" class="form-control" placeholder="Masukkan Nama Negara" ></input>
		</div>
	</div>
</div>	

<div class="alert alert-secondary">
	<strong>DATA AYAH KANDUNG</strong>
</div>

<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label>Nama Ayah Kandung :</label>
			<input type="text" name="namaayah" class="form-control"placeholder="Masukkan Nama Ayah" ></input>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Tahun Lahir :</label>
			<input type="text" name="tahunlahir" class="form-control"placeholder="Masukkan Tahun Lahir" ></input>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Pendidikan :</label>
			<select class="form-control" name="pendidikan_ayah">
            	<option>Pilih</option>
            	<option value="tidak sekolah">Tidak Sekolah</option>
            	<option value="putus sd">Putus SD</option>
            	<option value="sd">SD Sederajat</option>
            	<option value="smp">SMP Sederajat</option>
            	<option value="sma">SMA Sederajat</option>
            	<option value="d1">D1</option>
            	<option value="d2">D2</option>
            	<option value="d3">D3</option>
            	<option value="d4">D4/S1</option>
            	<option value="s2">S2</option>
            	<option value="s3">S3</option>
            </select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label>Pekerjaan :</label>
			<select class="form-control" name="pekerjaan_ayah">
            	<option>Pilih</option>
            	<option value="tidak bekerja">Tidak Bekerja</option>
            	<option value="nelayan">Nelayan</option>
            	<option value="petani">Petani</option>
            	<option value="peternak">Peternak</option>
            	<option value="pns tni">PNS/TNI/POLRI</option>
            	<option value="karyawan">Karyawan Swasta</option>
            	<option value="pedagang kecil">Pedagang Kecil</option>
            	<option value="pedagang besar">Pedagang Besar</option>
            	<option value="wiraswasta">Wiraswasta</option>
            	<option value="wisausaha">Wirausaha</option>
            	<option value="buruh">Buruh</option>
            	<option value="pensiunan">Pensiunan</option>
            	<option value="lain">Lain-lain</option>
            </select>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Penghasilan Bulanan :</label>
			<select class="form-control" name="penghasilan_ayah">
            	<option>Pilih</option>
            	<option value="kurang">Kurang dari 500.000</option>
            	<option value="antara 500-1juta">500.000 - 999.999</option>
            	<option value="antara 1juta-2juta">1.000.000 - 1.999.999</option>
            	<option value="antara 2juta-5juta">2.000.000 - 4.999.999</option>
            	<option value="antara 5juta-20juta">5.000.000 - 20.000.000</option>
            	<option value="lebih 20juta">Lebih Dari 20.000.000</option>
            </select>
		</div>
	</div>
	<div class="col-sm-4">
        	<div class="form-group">
            <label>Berkebutuhan Khusus :</label>
            <select class="form-control" name="berkebutuhan">
            	<option>Pilih</option>
            	<option value="tidak">Tidak</option>
            	<option value="Netra">Netra</option>
            	<option value="Rungu">Rungu</option>
            	<option value="Grahita Ringan">Grahita Ringan</option>
            	<option value="Grahita Sedang">Grahita Sedang</option>
            	<option value="Daksa Ringan">Daksa Ringan</option>
            	<option value="Daksa Sedang">Daksa Sedang</option>
            	<option value="Laras">Laras</option>
            	<option value="Wicara">Wicara</option>
            	<option value="Tuna Ganda">Tuna Ganda</option>
            	<option value="Hiperaktif">Hiperaktif</option>
            	<option value="Cerdas Istimewa">Cerdas Istimewa</option>
            	<option value="Bakat Istimewa">Bakat Istimewa</option>
            	<option value="Kesulitan Belajar">Kesulitan Belajar</option>
            	<option value="Narkoba">Narkoba</option>
            	<option value="Indigo">Indigo</option>
            	<option value="Down Sindrome">Down Sindrome</option>
            	<option value="Autis">Autis</option>
            </select>
        </div>
    </div>
</div>

<div class="alert alert-secondary">
	<strong>DATA IBU KANDUNG</strong>
</div>

<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label>Nama Ibu Kandung :</label>
			<input type="text" name="namaibu" class="form-control"placeholder="Masukkan Nama Ibu" ></input>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Tahun Lahir :</label>
			<input type="text" name="tahunlahir" class="form-control"placeholder="Masukkan Tahun Lahir" ></input>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Pendidikan :</label>
			<select class="form-control" name="pendidikan_ibu">
            	<option>Pilih</option>
            	<option value="tidak sekolah">Tidak Sekolah</option>
            	<option value="putus sd">Putus SD</option>
            	<option value="sd">SD Sederajat</option>
            	<option value="smp">SMP Sederajat</option>
            	<option value="sma">SMA Sederajat</option>
            	<option value="d1">D1</option>
            	<option value="d2">D2</option>
            	<option value="d3">D3</option>
            	<option value="d4">D4/S1</option>
            	<option value="s2">S2</option>
            	<option value="s3">S3</option>
            </select>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label>Pekerjaan :</label>
			<select class="form-control" name="pekerjaan_ibu">
            	<option>Pilih</option>
            	<option value="tidak bekerja">Tidak Bekerja</option>
            	<option value="nelayan">Nelayan</option>
            	<option value="petani">Petani</option>
            	<option value="peternak">Peternak</option>
            	<option value="pns tni">PNS/TNI/POLRI</option>
            	<option value="karyawan">Karyawan Swasta</option>
            	<option value="pedagang kecil">Pedagang Kecil</option>
            	<option value="pedagang besar">Pedagang Besar</option>
            	<option value="wiraswasta">Wiraswasta</option>
            	<option value="wisausaha">Wirausaha</option>
            	<option value="buruh">Buruh</option>
            	<option value="pensiunan">Pensiunan</option>
            	<option value="lain">Lain-lain</option>
            </select>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Penghasilan Bulanan :</label>
			<select class="form-control" name="penghasilan_ibu">
            	<option>Pilih</option>
            	<option value="kurang">Kurang dari 500.000</option>
            	<option value="antara 500-1juta">500.000 - 999.999</option>
            	<option value="antara 1juta-2juta">1.000.000 - 1.999.999</option>
            	<option value="antara 2juta-5juta">2.000.000 - 4.999.999</option>
            	<option value="antara 5juta-20juta">5.000.000 - 20.000.000</option>
            	<option value="lebih 20juta">Lebih Dari 20.000.000</option>
            </select>
		</div>
	</div>
	<div class="col-sm-4">
        	<div class="form-group">
            <label>Berkebutuhan Khusus :</label>
            <select class="form-control" name="berkebutuhan">
            	<option>Pilih</option>
            	<option value="tidak">Tidak</option>
            	<option value="Netra">Netra</option>
            	<option value="Rungu">Rungu</option>
            	<option value="Grahita Ringan">Grahita Ringan</option>
            	<option value="Grahita Sedang">Grahita Sedang</option>
            	<option value="Daksa Ringan">Daksa Ringan</option>
            	<option value="Daksa Sedang">Daksa Sedang</option>
            	<option value="Laras">Laras</option>
            	<option value="Wicara">Wicara</option>
            	<option value="Tuna Ganda">Tuna Ganda</option>
            	<option value="Hiperaktif">Hiperaktif</option>
            	<option value="Cerdas Istimewa">Cerdas Istimewa</option>
            	<option value="Bakat Istimewa">Bakat Istimewa</option>
            	<option value="Kesulitan Belajar">Kesulitan Belajar</option>
            	<option value="Narkoba">Narkoba</option>
            	<option value="Indigo">Indigo</option>
            	<option value="Down Sindrome">Down Sindrome</option>
            	<option value="Autis">Autis</option>
            </select>
        </div>
    </div>
</div>


        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</body>
</html>