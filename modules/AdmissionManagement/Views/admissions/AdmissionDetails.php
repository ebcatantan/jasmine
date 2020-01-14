<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Full Name</span>
        <span class="field-value"><?= ucfirst($admission[0]['last_name'].', '.$admission[0]['first_name'].' '.$admission[0]['middle_name'].','.$admission[0]['extension_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Examinee No.</span>
        <span class="field-value"><?= ucfirst($admission[0]['examinee_no']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Address & Barangay</span>
        <span class="field-value"><?= ucfirst($admission[0]['address'].', '.$admission[0]['barangay']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">E-mail</span>
        <span class="field-value"><?= ucfirst($admission[0]['email']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Contact No.</span>
        <span class="field-value"><?= ucfirst($admission[0]['contact_no']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Birthday</span>
        <span class="field-value"><?= ucfirst($admission[0]['birth_date']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Birthplace</span>
        <span class="field-value"><?= ucfirst($admission[0]['birth_place']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Gender</span>
        <span class="field-value"><?= ucfirst($admission[0]['gender']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Civil Status</span>
        <span class="field-value"><?= ucfirst($admission[0]['civil_status']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Maiden Name</span>
        <span class="field-value"><?= ucfirst($admission[0]['maiden_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Height & Weight</span>
        <span class="field-value"><?= ucfirst($admission[0]['height'].', '.$admission[0]['weight']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Religion</span>
        <span class="field-value"><?= ucfirst($admission[0]['religion']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Last School Attended</span>
        <span class="field-value"><?= ucfirst($admission[0]['last_school_attended']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Last School Address</span>
        <span class="field-value"><?= ucfirst($admission[0]['last_school_address']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('student_examinees','edit-admission', $permissions, $admission[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
