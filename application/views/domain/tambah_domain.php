<div class="container">
        <div class="col-10 m-auto" style="padding: 100px 0 0 0;">
        <h2 class="text-center fw-bold">Tambah Data Domain</h2>
        <div class="col-md-8 m-auto card p-5 shadow p-3 mb-5 bg-body rounded">
        <div class="bs-example">
            <form action="<?= base_url('domain/tambah_aksi') ?>" method="POST">
        <div class="form-group">
            <label for="recipient-name">Server ID</label>
            <input name="nama" input type="text" class="form-control" id="recipient-name">
            <?= form_error('server_id', '<div class="text-small text-danger">', '</div>'); ?>
        </div>  
        <div class="form-group">
            <label for="recipient-name">Domain</label>
            <input name="nik" input type="text" class="form-control" id="recipient-name">
            <?= form_error('domain', '<div class="text-small text-danger">', '</div>'); ?>
        
          </div>
        <div class="form-group">
                <label for="inputActive" class="form-label">Active</label>
                  <div class="col-sm-10">
                    <select id="inputActive" class="form-select">
                      <option value="active">Active</option>
                      <option value="non-active">Non-Active</option>
                    </select>
                  </div>
        <div class="col-3 m-auto">
        <button type="save" class="btn btn-primary mt-4">Save</button>
        <button type="reset" class="btn btn-danger mt-4">Reset</button>
            </div>
        </form>
   