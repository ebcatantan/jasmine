<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">College Code</span>
        <span class="field-value"><?= ucfirst($college[0]['college_code']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($college[0]['description']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Other Notes</span>
        <span class="field-value"><?= ucfirst($college[0]['other_notes']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('colleges','edit-college', $permissions, $college[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
