<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Building Code</span>
        <span class="field-value"><?= ucfirst($building[0]['building_code']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Building Name</span>
        <span class="field-value"><?= ucfirst($building[0]['building_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($building[0]['description']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('buildings','edit-building', $permissions, $building[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
