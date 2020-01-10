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
    <form action="<?= base_url() ?>sections/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="curriculum_id">Curriculum</label>
            <input name="curriculum_id" type="text" value="<?= isset($rec['curriculum_id']) ? $rec['curriculum_id'] : set_value('curriculum_id') ?>" class="form-control <?= $errors['curriculum_id'] ? 'is-invalid':'is-valid' ?>" id="curriculum_id" placeholder="Curriculum">
              <?php if($errors['curriculum_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['curriculum_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <!--///////////////////////////////////////////////////////////////////////////////////-->
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>sections/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="course_id">Course</label>
            <input name="course_id" type="text" value="<?= isset($rec['course_id']) ? $rec['course_id'] : set_value('course_id') ?>" class="form-control <?= $errors['course_id'] ? 'is-invalid':'is-valid' ?>" id="course_id" placeholder="Course ">
              <?php if($errors['course_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['course_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <!--///////////////////////////////////////////////////////////////////////////////////-->
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>sections/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="academic_year_instance_id">Academic Year Instance</label>
            <input name="academic_year_instance_id" type="text" value="<?= isset($rec['academic_year_instance_id']) ? $rec['academic_year_instance_id'] : set_value('academic_year_instance_id') ?>" class="form-control <?= $errors['academic_year_instance_id'] ? 'is-invalid':'is-valid' ?>" id="academic_year_instance_id" placeholder="Academic Year Instance">
              <?php if($errors['academic_year_instance_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['academic_year_instance_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <!--///////////////////////////////////////////////////////////////////////////////////-->
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>sections/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="section_code">Section Code</label>
            <input name="section_code" type="text" value="<?= isset($rec['section_code']) ? $rec['section_code'] : set_value('section_code') ?>" class="form-control <?= $errors['section_code'] ? 'is-invalid':'is-valid' ?>" id="section_code" placeholder="Section Code">
              <?php if($errors['section_code']): ?>
                <div class="invalid-feedback">
                  <?= $errors['section_code'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <!--///////////////////////////////////////////////////////////////////////////////////-->
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="section_name">Section Name</label>
            <input name="section_name" type="text" value="<?= isset($rec['section_name']) ? $rec['section_name'] : set_value('section_name') ?>" class="form-control <?= $errors['section_name'] ? 'is-invalid':'is-valid' ?>" id="section_name" placeholder="Section Name">
              <?php if($errors['section_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['section_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <!--///////////////////////////////////////////////////////////////////////////////////-->
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="shift">Shift</label>
            <input name="shift" type="text" value="<?= isset($rec['shift']) ? $rec['shift'] : set_value('shift') ?>" class="form-control <?= $errors['shift'] ? 'is-invalid':'is-valid' ?>" id="shift" placeholder="Shift">
              <?php if($errors['shift']): ?>
                <div class="invalid-feedback">
                  <?= $errors['shift'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <!--///////////////////////////////////////////////////////////////////////////////////-->
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="max_no_student">Max no of Student</label>
            <input name="max_no_student" type="number" value="<?= isset($rec['max_no_student']) ? $rec['max_no_student'] : set_value('max_no_student') ?>" class="form-control <?= $errors['max_no_student'] ? 'is-invalid':'is-valid' ?>" id="max_no_student" placeholder="Max Student">
              <?php if($errors['max_no_student']): ?>
                <div class="invalid-feedback">
                  <?= $errors['max_no_student'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <!--///////////////////////////////////////////////////////////////////////////////////-->
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="section_status">Section Status</label>
            <!-- <input name="section_status" type="text" value="<?= isset($rec['section_status']) ? $rec['section_status'] : set_value('section_status') ?>" class="form-control <?= $errors['section_status'] ? 'is-invalid':'is-valid' ?>" id="section_status" placeholder="Section Status"> -->
            <select class="form-control <?= $errors['section_status'] ? 'is-invalid':'is-valid' ?>" name="section_status">
              <option value="">-- Select Status --</option>
              <option value="a">Open</option>
              <option value="b">Closed</option>

            </select>
              <?php if($errors['section_status']): ?>
                <div class="invalid-feedback">
                  <?= $errors['section_status'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <!--///////////////////////////////////////////////////////////////////////////////////-->

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
