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
    <form action="<?= base_url() ?>departments/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="college_id">College</label>
            <select name="college_id" class="form-control <?= $errors['college_id'] ? 'is-invalid':'is-valid' ?>" id="college_id">
              <option value="0">No Related Colleges</option>
              <?php foreach ($colleges as $college): ?>
                <?php if (isset($rec)): ?>
                  <option value="<?=$college['id']?>" <?= $college['id'] == $rec['college_id'] ? 'selected' : ''?>><?=$college['description']?></option>
                <?php else: ?>
                  <option value="<?=$college['id']?>" ><?=$college['description']?></option>
                <?php endif; ?>
              <?php endforeach; ?>
            </select>
              <?php if($errors['college_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['college_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="department_head_id">Department Head</label>
            <select name="department_head_id" class="form-control <?= $errors['department_head_id'] ? 'is-invalid':'is-valid' ?>" id="department_head_id">
              <?php foreach ($users as $user): ?>
                <?php if (isset($rec)): ?>
                    <option value="<?=$user['id']?>" <?= $user['id'] == $rec['department_head_id'] ? 'selected' : ''?>><?=$user['firstname'] .' '. $user['lastname']?></option>
                  <?php else: ?>
                    <option value="<?=$user['id']?>"><?=$user['firstname'] .' '. $user['lastname']?></option>
                <?php endif; ?>
              <?php endforeach; ?>
            </select>
              <?php if($errors['department_head_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['department_head_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="department_code">Department Code</label>
            <input name="department_code" type="text" value="<?= isset($rec['department_code']) ? $rec['department_code'] : set_value('department_code') ?>" class="form-control <?= $errors['department_code'] ? 'is-invalid':'is-valid' ?>" id="department_code" placeholder="Department Code">
              <?php if($errors['department_code']): ?>
                <div class="invalid-feedback">
                  <?= $errors['department_code'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="department_name">Department Name</label>
            <input name="department_name" type="text" value="<?= isset($rec['department_name']) ? $rec['department_name'] : set_value('department_name') ?>" class="form-control <?= $errors['department_name'] ? 'is-invalid':'is-valid' ?>" id="department_code" placeholder="Department Name">
              <?php if($errors['department_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['department_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" rows="4" class="form-control <?= $errors['department_name'] ? 'is-invalid':'is-valid' ?>" id="department_code" placeholder="Department Name"><?= isset($rec['department_name']) ? $rec['department_name'] : set_value('department_name') ?></textarea>
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
