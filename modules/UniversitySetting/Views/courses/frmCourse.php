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
    <form action="<?= base_url() ?>courses/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="college_id">College</label>
            <select name="college_id" class="form-control <?= $errors['college_id'] ? 'is-invalid':'is-valid'  ?>" id="college_id">
              <?php foreach ($colleges as $college): ?>
                <option value="<?=$college['id']?>" <?=$college['id'] == $rec['college_id'] ? 'selected': ''?>><?=$college['description']?></option>
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
            <label for="course_code">Course Code</label>
            <input name= "course_code" type="text" value="<?= isset($rec['course_code']) ? $rec['course_code'] : set_value('course_code') ?>" class="form-control <?= $errors['course_code'] ? 'is-invalid':'is-valid' ?>" id="course_code" placeholder="Course Code">
            <?php if($errors['course_code']): ?>
                <div class="invalid-feedback">
                  <?= $errors['course_code'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="course_title">Course Title</label>
            <input name= "course_title" type="text" value="<?= isset($rec['course_title']) ? $rec['course_title'] : set_value('course_title') ?>" class="form-control <?= $errors['course_title'] ? 'is-invalid':'is-valid' ?>" id="course_title" placeholder="Course Title">
            <?php if($errors['course_title']): ?>
                <div class="invalid-feedback">
                  <?= $errors['course_title'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="degree">Degree</label>
            <select name="degree" class="form-control <?= $errors['degree'] ? 'is-invalid':'is-valid' ?>" id="degree">
              <option value="bachelor" <?=$rec['degree'] == 'bachelor' ? 'selected': ''?> >Bachelor</option>
              <option value="diploma" <?=$rec['degree'] == 'diploma' ? 'selected': ''?> >Diploma</option>
              <option value="master" <?=$rec['degree'] == 'master' ? 'selected': ''?> >Master</option>
            </select>
            <?php if($errors['degree']): ?>
                <div class="invalid-feedback">
                  <?= $errors['degree'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="major">Major</label>
            <input name= "major" type="text" value="<?= isset($rec['major']) ? $rec['major'] : set_value('major') ?>" class="form-control <?= $errors['major'] ? 'is-invalid':'is-valid' ?>" id="major" placeholder="Major">
            <?php if($errors['major']): ?>
                <div class="invalid-feedback">
                  <?= $errors['major'] ?>
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
