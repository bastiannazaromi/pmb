let flash_sukses = $('.sukses').data('flashdata');
let flash_error = $('.error').data('flashdata');

if (flash_sukses) {
	Swal.fire({
		title: 'Sukses',
		text: flash_sukses,
		icon: 'success',
		timer: 2000
	});
}

if (flash_error) {
	Swal.fire({
		title: 'Sorry !!',
		text: flash_error,
		icon: 'warning'
	});
}

let sukses = $('.flash-sukses').data('flashdata');
let error = $('.flash-error').data('flashdata');

if (sukses) {
	toastr.success(sukses);
}

if (error) {
	toastr.warning(error);
}

$('.tombol-hapus').on('click', function (e) {
	e.preventDefault();

	var href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin',
		text: "data akan dihapus",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});
