ins<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Started Year</span>
        <span class="field-value"><?= ucfirst($instance[0]['ay_start_year']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Ended Year</span>
        <span class="field-value"><?= ucfirst($instance[0]['ay_end_year']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($instance[0]['description']) ?></span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <span class="field">Accepting Examinee</span>
        <span class="field-value"><?= ucfirst($instance[0]['is_accepting_examinee']) ?></span>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('academic_years','edit-instance', $instance[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
