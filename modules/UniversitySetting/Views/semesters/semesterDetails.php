<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Semester Name</span>
        <span class="field-value"><?= ucfirst($semester[0]['semester_name']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('semesters','edit-semester', $permissions, $semester[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
