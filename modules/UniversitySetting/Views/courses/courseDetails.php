<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">College</span>
        <span class="field-value"><?= ucfirst($course[0]['description']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Course Code</span>
        <span class="field-value"><?= ucfirst($course[0]['course_code']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Course Title</span>
        <span class="field-value"><?= ucfirst($course[0]['course_title']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Degree</span>
        <span class="field-value"><?= ucfirst($course[0]['degree']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Major</span>
        <span class="field-value"><?= ucfirst($course[0]['major']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('courses','edit-course', $permissions, $course[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
