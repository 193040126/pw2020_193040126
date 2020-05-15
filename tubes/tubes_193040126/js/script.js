const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container1 = document.querySelector('.container1');

//hilangkan tombol cari
tombolCari.style.display = 'none';


//event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {
	//ajax
	//hmlhttprequest

	// const xhr = new XMLHttpRequest();
	// xhr.onreadystatechange = function () {
	// 	if (xhr.readyState == 4 && xhr.status == 200) {
	// 		container1.innerHTML = xhr.responseText;
	// 	}
	// };

	// xhr.open('get', '../ajax/ajax_cari.php?keyword=' + keyword.value);
	// xhr.send();

	//fetch
	fetch('../ajax/ajax_cari.php?keyword=' + keyword.value)
		.then((response) => response.text())
		.then((response) => (container1.innerHTML = response));
});


//preview imgae untuk tambah dan ubah
function previewImage() {
	const foto = document.querySelector('.foto');
	const imgPreview = document.querySelector('.img-preview');

	const oFReader = new FileReader();
	oFReader.readAsDataURL(foto.files[0]);


	oFReader.onload = function (oFReader) {
		imgPreview.src = oFReader.target.result;
	};
}
