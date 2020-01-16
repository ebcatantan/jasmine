<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Subject code</span>
        <span class="field-value"><?= ucfirst($subject[0]['subject_code']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Subject title</span>
        <span class="field-value"><?= ucfirst($subject[0]['subject_title']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($subject[0]['description']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Units</span>
        <span class="field-value"><?= ucfirst($subject[0]['units']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Lecture_hour</span>
        <span class="field-value"><?= ucfirst($subject[0]['lecture_hour']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Lab_hour</span>
        <span class="field-value"><?= ucfirst($subject[0]['lab_hour']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('subjects','edit-subject', $permissions, $subject[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
