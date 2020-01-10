 <div class="row">
   <div class="col-md-10">

   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>

    <div class="row">
      <div class="col-md-12">
        <form action="<?= base_url() ?>curriculums/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="form-group">
                <label for="academic_year_id">Academic Year</label>
                <input name="academic_year_id" type="text" value="<?= isset($rec['academic_year_id']) ? $rec['academic_year_id'] : set_value('academic_year_id') ?>" class="form-control <?= $errors['academic_year_id'] ? 'is-invalid':'is-valid' ?>" id="academic_year_id" placeholder="Academic Year">
                <?php if ($errors['academic_year_id']): ?>
                    <div class="invalid-feedback">
                      <?= $errors['academic_year_id'] ?>
                    </div>
                  <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="form-group">
                <label for="course_id">Course</label>
                <textarea name="course_id" type="text" class="form-control <?= $errors['course_id'] ? 'is-invalid':'is-valid'  ?>" id="course_id" placeholder="course_id" rows="5"><?= isset($rec['course_id']) ? $rec['course_id'] : set_value('course_id') ?></textarea>
                <?php if($errors['course_id']): ?>
                    <div class="invalid-feedback">
                      <?= $errors['course_id'] ?>
                    </div>
                  <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="form-group">
                <label for="curriculum_code">Curriculum Code</label>
                <textarea name="curriculum_code" type="text" class="form-control <?= $errors['curriculum_code'] ? 'is-invalid':'is-valid'  ?>" id="curriculum_code" placeholder="Curriculum Code" rows="5"><?= isset($rec['curriculum_code']) ? $rec['curriculum_code'] : set_value('curriculum_code') ?></textarea>
                <?php if($errors['curriculum_code']): ?>
                    <div class="invalid-feedback">
                      <?= $errors['curriculum_code'] ?>
                    </div>
                  <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="form-group">
                <label for="title">Title</label>
                <textarea name="title" type="text" class="form-control <?= $errors['title'] ? 'is-invalid':'is-valid'  ?>" id="title" placeholder="Curriculum Title" rows="5"><?= isset($rec['title']) ? $rec['title'] : set_value('title') ?></textarea>
                <?php if($errors['title']): ?>
                    <div class="invalid-feedback">
                      <?= $errors['title'] ?>
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
