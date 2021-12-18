@extends("layout/main_admin")
@section('container')


		<div class="container-fluid contenadmin">
			<div class="row">
				<div class="col-3">
                    @include('partials/tab_admin')
				<div class="col-9">
					<div class="konten">
							<h4>Tambah Posting</h4>
							<hr/>
							<div class="row-fluid">
								<div class="col-12">
								<form>
									<div class="col-8">
										<label>Judul</label>
										<input type="text" placeholder="Ketikkan Judul.." class="input-xxlarge" />
										<label>Permalink</label>
										<input type="text" placeholder="isi permalink.." class="col-5 mb-4" />
										<label>Foto</label>
										<input type="file" class="col-5" placeholder="Pilih gambar" />
										<hr />
										<textarea class="ckeditor" name="editor-post"></textarea>

									</div>
									<div class="col-4">
											<table class="table table-hover">
												<thead>
													<tr>
														<td colspan="2">Status Posting</td>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Status : </a></td>
														<td>Published <a href="">Edit</td>
													</tr>
													<tr>
														<td>Visibility : </a></td>
														<td>Public <a href="">Edit</td>
													</tr>
													<tr>
														<td>Date Published : </a></td>
														<td>22 Agustus 2012 <a href="">Edit</td>
													</tr>
													<tr>
														<td><button type="submit" class="btn btn-warning disabled">Hapus</button></td>
														<td><button type="submit" class="btn btn-primary">Simpan</button></td>
													</tr>
												</tbody>
											</table>
											<hr />
											<label>Tags:</label>
											<input type="text" placeholder="pisahkan dengan koma (ex. Saya, Sofyan)" class="input-xlarge" />
											<label>Kategori:</label>
											<div class="kategori">
											<input type="checkbox" name="kategori" value="1" />  Kriminal<br />
											<input type="checkbox" name="kategori" value="1" />  Politik<br />
											<input type="checkbox" name="kategori" value="1" />  Misteri<br />
											<input type="checkbox" name="kategori" value="1" />  Sepakbola<br />
											<input type="checkbox" name="kategori" value="1" />  Saintek<br />
											<input type="checkbox" name="kategori" value="1" />  Lain-Lain<br />
											</div>
									</div>
                                </div>
								</form>

							</div>


							<div class="row">
								<div class="col-12">

								</div>
							</div>
					</div>
				</div>
			</div>
		</div>

		<footer align="center">
			<h5>&copy; WEBNEWS - Powered by webnews Media</h5>
		</footer>

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
			<script src="js/jquery.js"></script>
		<script src="js/bootstrap-dropdown.js"></script>
		<script src="js/bootstrap-collapse.js"></script>
		<script src="js/ckeditor/ckeditor.js"></script>

@endsection

