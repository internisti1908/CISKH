
<div class="container">
	<div class="page-header">
		<h1>Add Tema SKH</h1>
	</div>
		<form class="form-horizontal">
		  <div class="form-group">
		    <label for="Tahun Ajaran" class="col-sm-2 control-label">Tahun Ajaran</label>
		    <div class="col-sm-3">
		      <input type="text" class="form-control" id="tahunAjaran" placeholder="" readonly>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="Tingkat" class="col-sm-2 control-label">Tingkat</label>
		    <div class="col-sm-3">
			    <select class="form-control">
				  <option>kinder 1</option>
				  <option>kinder 2</option>
				  <option>nursery</option>
				</select>
			</div>
		  </div>
		  <div class="form-group">
		    <label for="Semester" class="col-sm-2 control-label">Semester-Minggu</label>
		    <div class="col-sm-3">
			    <select class="form-control">
				  <option>Semester 1</option>
				  <option>Semester 2</option>
				</select>
			</div>
			<div class="col-sm-3">
			    <select class="form-control">
				  <option>week1</option>
				  <option>week2</option>
				  <option>week3</option>
				</select>
			</div>
		  </div>
		  <div class="form-group">
		    <label for="Tanggal Awal" class="col-sm-2 control-label">Tanggal</label>
		    <div class="col-sm-2">
			    <input class="form-control" type="date" id="tglAwal">
			</div>
			<label for="Tanggal Akhir" class="col-sm-2 control-label">s/d tanggal </label>
		    <div class="col-sm-2">
			    <input class="form-control" type="date" id="tgllAkhir">
			</div>
		  </div>
		  <div class="form-group">
		    <label for="Tema" class="col-sm-2 control-label">Tema</label>
		    <div class="col-sm-3">
			    <input class="form-control" type="text" id="tema">
			</div>
		  </div>
		  <div class="form-group">
		    <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
		    <div class="col-sm-3">
			    <textarea class="form-control" rows="5" id="keterangan"></textarea>
			</div>
		  </div>		  
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default col-sm-2">Save</button>
		      <button class="btn btn-default col-sm-2 col-sm-offset-2">Clear</button>
		    </div>
		  </div>
		</form>
</div>
