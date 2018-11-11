$(document).ready(function(){
	$('#tabelMahasiswa').DataTable();
});

function hapus(){
	let hapus = confirm('Yakin hapus data ini?');
	if(hapus==true){
		return true
	}else{
		return false
	}
}