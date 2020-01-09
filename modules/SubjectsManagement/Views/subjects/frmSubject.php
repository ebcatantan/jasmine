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
    <form action="<?= base_url() ?>subjects/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="subject_code">Subject code</label>
            <input name="subject_code" type="text" value="<?= isset($rec['subject_code']) ? $rec['subject_code'] : set_value('subject_code') ?>" class="form-control <?= $errors['subject_code'] ? 'is-invalid':'is-valid' ?>" id="subject_code" placeholder="Subject code">
              <?php if($errors['subject_code']): ?>
                <div class="invalid-feedback">
                  <?= $errors['subject_code'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="subject_title">Subject title</label>
            <input name="subject_title" type="text" value="<?= isset($rec['subject_title']) ? $rec['subject_title'] : set_value('subject_title') ?>" class="form-control <?= $errors['subject_title'] ? 'is-invalid':'is-valid' ?>" id="subject_title" placeholder="Subject title">
            <?php if($errors['subject_title']): ?>
                <div class="invalid-feedback">
                  <?= $errors['subject_title'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" type="text" class="form-control <?= $errors['description'] ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
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
          <div class="form-group">
            <label for="units">Units</label>
            <input name="units" type="number" value="<?= isset($rec['units']) ? $rec['units'] : set_value('units') ?>" class="form-control <?= $errors['units'] ? 'is-invalid':'is-valid' ?>" id="units" placeholder="Units">
              <?php if($errors['units']): ?>
                <div class="invalid-feedback">
                  <?= $errors['units'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="lecture_hour">Lecture Hour</label>
            <input name="lecture_hour" type="number" value="<?= isset($rec['lecture_hour']) ? $rec['lecture_hour'] : set_value('lecture_hour') ?>" class="form-control <?= $errors['lecture_hour'] ? 'is-invalid':'is-valid' ?>" id="lecture_hour" placeholder="Lecture Hour">
              <?php if($errors['lecture_hour']): ?>
                <div class="invalid-feedback">
                  <?= $errors['lecture_hour'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="lab_hour">Lab Hour</label>
            <input name="lab_hour" type="number" value="<?= isset($rec['lab_hour']) ? $rec['lab_hour'] : set_value('lab_hour') ?>" class="form-control <?= $errors['lab_hour'] ? 'is-invalid':'is-valid' ?>" id="lab_hour" placeholder="Lab hour">
              <?php if($errors['lab_hour']): ?>
                <div class="invalid-feedback">
                  <?= $errors['lab_hour'] ?>
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
