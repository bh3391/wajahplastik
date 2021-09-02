<?= $this->extend('_layoutsAdmin') ?>
<?= $this->section('content') ?>

<div class="container w-full p-2 space-y-6 mx-auto">


	<!--  -->
	<div class="row">
		<div class="md:w-5/6">
			<div class="row p-2">
				<div class="col-md-12">
					<labe class="block mb-2 text-md text-gray-600 " l>Judul</label>
						<div class="form-group">
							<input type="text" name="judul" class="form-control w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 " required>
						</div>
				</div>
			</div>
			<div class="col-md-12 p-2">
				<label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Nama Penulis</label>
				<div class="form-group">
					<input type="text" name="nama" class="form-control
						w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" required>
				</div>
			</div>
		</div>
		<div class="col-md-12 p-2">
			<label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Tanggal Posting<label>
					<div class="form-group">
						<input type="date" name="tanggal" class="form-control">
					</div>
		</div>
		<div class="col-md-12 p-2">
			<label class="block mb-2 text-md text-gray-600 dark:text-gray-400">Tulis sesuatu </label>
			<textarea name="editor1"></textarea>
			<script>
				CKEDITOR.replace('editor1');
			</script>
		</div>

		<div class="col-md-12 p-3">
			<label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Photo</label>
			<div class="form-group">
				<input type="file" name="file_upload" class="form-control">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
			<button class="hover:scale-1,1 hover:bg-indigo-400 bg-pink-500 border rounded-lg shadow-md text-white p-2">Simpan</button>
			<button class="hover:bg-indigo-200 bg-gray-200 border rounded-lg  shadow-md text-black p-2">Batal</button>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?= $this->endSection() ?>
<!-- -->