<?= $this->extend('_layoutsAdmin') ?>
<?= $this->section('content') ?>

<div class="container w-full p-2 space-y-6 mx-auto">


	<!--  -->
	<form method="post" action="<?= base_url(); ?>/Dashboard/blogAdd" enctype="multipart/form-data">
		<div class="row">
			<div class="md:w-5/6">
				<div class="row p-2">
					<div class="col-md-12">
						<label class="block mb-2 text-md text-gray-600 " l>Judul</label>
						<div class="form-group">
							<input required type="text" name="News_title" class="form-control w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 " required>
						</div>
					</div>
					<div class="col-md-12">

						<div class="form-group">
							<label class="block mb-2 text-md text-gray-600 ">url slug</label>
							<input required type="text" name="News_slug" class="form-control w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 " required>
						</div>
					</div>
				</div>
				<div class="col-md-12 p-2">
					<label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Meta Description</label>
					<div class="form-group">
						<input required type="text" name="News_description" class="form-control
						w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" required>
					</div>
				</div>
				<div class="col-md-12 p-2">
					<label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Meta Keyword</label>
					<div class="form-group">
						<input required type="text" name="News_keyword" class="form-control
						w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" required>
					</div>
				</div>
				<div class="col-md-12 p-2">
					<label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Meta Tags</label>
					<div class="form-group">
						<input required type="text" name="News_tags" class="form-control
						w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" required>
					</div>
				</div>
				<div class="col-md-12 p-2">
					<label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Meta Source</label>
					<div class="form-group">
						<input required type="text" name="News_source" class="form-control
						w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" required>
					</div>
				</div>
				<div class="col-md-12 p-2">
					<label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Nama Penulis</label>
					<div class="form-group">
						<input required type="text" name="News_writer" class="form-control
						w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" required>
					</div>
				</div>
				<div class="col-md-12 p-2">
					<label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Nama Editor</label>
					<div class="form-group">
						<input required type="text" name="News_editor" class="form-control
						w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" required>
					</div>
				</div>
			</div>
			<div class="col-md-12 p-2">
				<label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Tanggal Posting<label>
						<div class="form-group">
							<input required type="date" name="News_date" class="form-control">
						</div>
			</div>
			<div class="col-md-12 p-2">
				<label class="block mb-2 text-md text-gray-600 dark:text-gray-400">Tulis sesuatu </label>
				<textarea required name="News_content"></textarea>
				<script>
					CKEDITOR.replace('News_content');
				</script>
			</div>

			<div class="col-md-12 p-3">
				<label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Photo</label>
				<div class="form-group">
					<input required type="file" name="News_image" class="form-control">
				</div>
			</div>
			<div>
				Category
				<select class="m-2 bg-gray-200 border-2 p-1 rounded-lg" id="kategori" name="News_category">
					<option value="Berita">Berita</option>
					<option value="Achievement">Achievement</option>
					<option value="Story">Story</option>
					<option value="Opini">Opini</option>
				</select>
			</div>
			<div>
				Status
				<select class="m-2 bg-gray-200 border-2 p-1 rounded-lg" id="kategori" name="News_status">
					<option value="publish">Published</option>
					<option value="draft">Draft</option>
				</select>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<button type="submit" class="hover:scale-1,1 hover:bg-indigo-400 bg-blue-500 border rounded-lg shadow-md text-white p-2">Simpan</button>
					<button class="hover:bg-red-600 bg-red-500 border rounded-lg  shadow-md text-black p-2">Batal</button>
				</div>
			</div>
		</div>
	</form>
</div>
</div>
</div>
<?= $this->endSection() ?>
<!-- -->