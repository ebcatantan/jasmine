 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>buildings/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="building_code">Building Code</label>
            <input name="building_code" type="text" value="<?= isset($rec['building_code']) ? $rec['building_code'] : set_value('building_code') ?>" class="form-control <?= $errors['building_code'] ? 'is-invalid':'is-valid' ?>" id="building_code" placeholder="Building Code">
              <?php if($errors['building_code']): ?>
                <div class="invalid-feedback">
                  <?= $errors['building_code'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="role_name">Building Name</label>
            <input name="building_name" type="text" value="<?= isset($rec['building_name']) ? $rec['building_name'] : set_value('building_name') ?>" class="form-control <?= $errors['building_name'] ? 'is-invalid':'is-valid' ?>" id="building_name" placeholder="Building Name">
              <?php if($errors['building_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['building_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Building Description</label>
            <textarea name="description" type="text" class="form-control <?= $errors['description'] ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Building Description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
            <?php if($errors['description']): ?>
                <div class="invalid-feedback">
                  <?= $errors['description'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
