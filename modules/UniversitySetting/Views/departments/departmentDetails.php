<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">College</span>
        <span class="field-value"><?= $department[0]['college_description'] != NULL ? ucfirst($department[0]['college_description']) : 'N/A'?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Department Head</span>
        <span class="field-value"><?= ucfirst($department[0]['firstname']) . ' ' . ucfirst($department[0]['lastname']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Department Code</span>
        <span class="field-value"><?= ucfirst($department[0]['department_code']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Department Name</span>
        <span class="field-value"><?= ucfirst($department[0]['department_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($department[0]['description']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('departments','edit-department', $permissions, $department[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
