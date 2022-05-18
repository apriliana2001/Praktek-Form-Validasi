<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$jenispendaftaran=$_POST["jenispendaftaran"];
$tanggal_ms=$_POST["tanggal_ms"];
$nis=$_POST["NIS"];
$no_peserta=$_POST["no_peserta"];
$paud=$_POST["paud"];
$tk=$_POST["tk"];
$SKHUN=$_POST["SKHUN"];
$IJAZAH=$_POST["IJAZAH"];
$hobi=$_POST["hobi"];
$cita=$_POST["cita"];
$nama=$_POST["nama"];
$jenis_kelamin=$_POST["jk"];
$NISN=$_POST["NISN"];
$NIK=$_POST["NIK"];
$tempat_lahir=$_POST["tempat_lahir"];
$tanggal_lahir=$_POST["tanggal_lahir"];
$agama=$_POST["agama"];
$berkebutuhan_1=$_POST["berkebutuhan_1"];
$alamat=$_POST["alamat"];
$rt=$_POST["rt"];
$rw=$_POST["rw"];
$dusun=$_POST["dusun"];
$kelurahan=$_POST["kelurahan"];
$kecamatan=$_POST["kecamatan"];
$tinggal=$_POST["tinggal"];
$moda=$_POST["moda"];
$hp=$_POST["hp"];
$telepon=$_POST["telepon"];
$email=$_POST["email"];
$kps=$_POST["kps"];
$nokps=$_POST["kpskip"];
$kewarganegaraan=$_POST["kewarganegaraan"];
$nama_negara=$_POST["nama_negara"];
$namaayah=$_POST["namaayah"];
$tahunlahir_ayah=$_POST["tahunlahir_ayah"];
$pendidikan_ayah=$_POST["pendidikan_ayah"];
$pekerjaan_ayah=$_POST["pekerjaan_ayah"];
$penghasilan_ayah=$_POST["penghasilan_ayah"];
$berkebutuhan_2=$_POST["berkebutuhan_2"];
$namaibu=$_POST["namaibu"];
$tahunlahir_ibu=$_POST["tahunlahir_ibu"];
$pendidikan_ibu=$_POST["pendidikan_ibu"];
$pekerjaan_ibu=$_POST["pekerjaan_ibu"];
$penghasilan_ibu=$_POST["penghasilan_ibu"];
$berkebutuhan_3=$_POST["berkebutuhan_3"];

//Query input menginput data kedalam tabel anggota
  $sql="insert into pendaftaran_siswa (jenispendaftaran,tanggal_ms,NIS,no_peserta,paud,tk,SKHUN,IJAZAH,hobi,cita-cita,nama,jk,NISN,NIK,tempat_lahir,tanggal_lahir,agama,berkebutuhan_1,alamat,rt,rw,dusun,kelurahan,kecamatan,tinggal,moda,hp,telepon,email,kps,kpskip,kewarganegaraan,nama_negara,namaayah,tahunlahir_ayah,pendidikan_ayah,pekerjaan_ayah,penghasilan_ayah,berkebutuhan_2,namaibu,tahunlahir_ibu,pendidikan_ibu,pekerjaan_ibu,penghasilan_ibu,berkebutuhan_3) values
		('$jenispendaftaran','$tanggal_ms','$nis','$no_peserta','$paud','$tk','$SKHUN','$IJAZAH','$hobi','$cita','$nama','$jenis_kelamin','$NISN','$NIK','$tempat_lahir','$tanggal_lahir','$agama','$berkebutuhan_1','$alamat','$rt','$rw','$dusun','$kelurahan','$kecamatan','$tinggal','$moda','$hp','$telepon','$email','$kps','$nokps','$kewarganegaraan','$nama_negara','$namaayah','$tahunlahir_ayah','$pendidikan_ayah','$pekerjaan_ayah','$penghasilan_ayah','$berkebutuhan_2','$namaibu','$tahunlahir_ibu','$pendidikan_ibu','$pekerjaan_ibu','$penghasilan_ibu','$berkebutuhan_3')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data anggota";
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>