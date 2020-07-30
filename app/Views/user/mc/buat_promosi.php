<div class="card-header">
    <h5 class="m-0">Buat Promosi</h5>
</div>
<form id="form" action="/mc/buat_promosi" method="post">
    <div class="card-body">
        <div class="form-group">
            <label for="nama_info">Nama Promosi</label>
            <input type="text" name="nama_info" id="nama_info" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="informasi">Informasi Promosi</label>
            <textarea name="informasi" id="informasi" rows="6" class="form-control" required></textarea>
        </div>
        <div class="form-check">
            <input name="aktif" id="aktif" type="checkbox" class="form-check-input" value="1" checked>
            <label for="aktif" class="form-check-label">Aktifkan Promosi?</label>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Buat Promosi</button>
        <button type="reset" class="btn btn-default float-right">Kosongkan Form</button>
    </div>
</form>