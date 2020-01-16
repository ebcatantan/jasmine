<div class="row">
  <div class="col-md-8 offset-md-2">

    <div class="row">
      <div class="col-md-12">
        <span class="field">Image</span>
        <span class="field-value"><?= ucfirst($employee[0]['employee_image']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Employee No.</span>
        <span class="field-value"><?= ucfirst($employee[0]['employee_no']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Last Name</span>
        <span class="field-value"><?= ucfirst($employee[0]['last_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">First Name</span>
        <span class="field-value"><?= ucfirst($employee[0]['first_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Middle Name</span>
        <span class="field-value"><?= ucfirst($employee[0]['middle_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Extension Name</span>
        <span class="field-value"><?= ucfirst($employee[0]['extension_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Address</span>
        <span class="field-value"><?= ucfirst($employee[0]['address']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Email</span>
        <span class="field-value"><?= ucfirst($employee[0]['email']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Contact No.</span>
        <span class="field-value"><?= ucfirst($employee[0]['contact_no']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Birthdate</span>
        <span class="field-value"><?= ucfirst($employee[0]['birth_date']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Birth Place</span>
        <span class="field-value"><?= ucfirst($employee[0]['birth_place']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Gender</span>
        <span class="field-value"><?= ucfirst($employee[0]['gender']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Civil Status</span>
        <span class="field-value"><?= ucfirst($employee[0]['civil_status']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Maiden Name</span>
        <span class="field-value"><?= ucfirst($employee[0]['maiden_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Height</span>
        <span class="field-value"><?= ucfirst($employee[0]['height']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Weight</span>
        <span class="field-value"><?= ucfirst($employee[0]['weight']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Religion</span>
        <span class="field-value"><?= ucfirst($employee[0]['religion']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Date Employed</span>
        <span class="field-value"><?= ucfirst($employee[0]['date_employed']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Employment Status</span>
        <span class="field-value"><?= ucfirst($employee[0]['employment_status']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Faculty</span>
        <span class="field-value"><?= ucfirst($employee[0]['is_faculty']) ?></span>
      </div>
    </div>

    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('employees','edit-employee', $permissions, $employee[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
