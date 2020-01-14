
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
    <form action="<?= base_url() ?>student-examinees/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="examinee_no">Examinee Number</label>
            <input name="examinee_no" type="text" value="<?= isset($rec['examinee_no']) ? $rec['examinee_no'] : set_value('examinee_no') ?>" class="form-control <?= $errors['examinee_no'] ? 'is-invalid':'is-valid' ?>" id="examinee_no" placeholder="Examinee No.">
              <?php if($errors['examinee_no']): ?>
                <div class="invalid-feedback">
                  <?= $errors['examinee_no'] ?>
                </div>
              <?php endif; ?>
           </div>
        </div>
      </div>
       <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="last_name">Last Name</label>
            <input name="last_name" type="text" value="<?= isset($rec['last_name']) ? $rec['last_name'] : set_value('last_name') ?>" class="form-control <?= $errors['last_name'] ? 'is-invalid':'is-valid' ?>" id="last_name" placeholder="Last Name">
              <?php if($errors['last_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['last_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="first_name">First Name</label>
            <input name="first_name" type="text" value="<?= isset($rec['first_name']) ? $rec['first_name'] : set_value('first_name') ?>" class="form-control <?= $errors['first_name'] ? 'is-invalid':'is-valid' ?>" id="first_name" placeholder="First Name">
              <?php if($errors['first_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['first_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="middle_name">Middle Name</label>
            <input name="middle_name" type="text" value="<?= isset($rec['middle_name']) ? $rec['middle_name'] : set_value('middle_name') ?>" class="form-control <?= $errors['middle_name'] ? 'is-invalid':'is-valid' ?>" id="middle_name" placeholder="Middle Name">
              <?php if($errors['middle_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['middle_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="extension_name">Extension Name</label>
            <input name="extension_name" type="text" value="<?= isset($rec['extension_name']) ? $rec['extension_name'] : set_value('extension_name') ?>" class="form-control <?= $errors['extension_name'] ? 'is-invalid':'is-valid' ?>" id="extension_name" placeholder="Extension Name">
              <?php if($errors['extension_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['extension_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="address">Address</label>
            <input name="address" type="text" value="<?= isset($rec['address']) ? $rec['address'] : set_value('address') ?>" class="form-control <?= $errors['address'] ? 'is-invalid':'is-valid' ?>" id="address" placeholder="Address">
              <?php if($errors['address']): ?>
                <div class="invalid-feedback">
                  <?= $errors['address'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="barangay">Barangay</label>
            <input name="barangay" type="text" value="<?= isset($rec['barangay']) ? $rec['barangay'] : set_value('barangay') ?>" class="form-control <?= $errors['barangay'] ? 'is-invalid':'is-valid' ?>" id="barangay" placeholder="Barangay">
              <?php if($errors['barangay']): ?>
                <div class="invalid-feedback">
                  <?= $errors['barangay'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="email">E-mail</label>
            <input name="email" type="text" value="<?= isset($rec['email']) ? $rec['email'] : set_value('email') ?>" class="form-control <?= $errors['email'] ? 'is-invalid':'is-valid' ?>" id="email" placeholder="E-mail">
              <?php if($errors['email']): ?>
                <div class="invalid-feedback">
                  <?= $errors['email'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="contact_no">Contact No.</label>
            <input name="contact_no" type="text" value="<?= isset($rec['contact_no']) ? $rec['contact_no'] : set_value('contact_no') ?>" class="form-control <?= $errors['contact_no'] ? 'is-invalid':'is-valid' ?>" id="contact_no" placeholder="Contact No.">
              <?php if($errors['contact_no']): ?>
                <div class="invalid-feedback">
                  <?= $errors['contact_no'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="birth_date">Birthdate</label>
            <input name="birth_date" type="text" value="<?= isset($rec['birth_date']) ? $rec['birth_date'] : set_value('birth_date') ?>" class="form-control <?= $errors['birth_date'] ? 'is-invalid':'is-valid' ?>" id="birth_date" placeholder="Birthdate (0000-00-00)">
              <?php if($errors['birth_date']): ?>
                <div class="invalid-feedback">
                  <?= $errors['birth_date'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="birth_place">Birth Place</label>
            <input name="birth_place" type="text" value="<?= isset($rec['birth_place']) ? $rec['birth_place'] : set_value('birth_place') ?>" class="form-control <?= $errors['birth_place'] ? 'is-invalid':'is-valid' ?>" id="birth_place" placeholder="Birthplace">
              <?php if($errors['birth_place']): ?>
                <div class="invalid-feedback">
                  <?= $errors['birth_place'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="gender">Gender</label>
            <input name="gender" type="text" value="<?= isset($rec['gender']) ? $rec['gender'] : set_value('gender') ?>" class="form-control <?= $errors['gender'] ? 'is-invalid':'is-valid' ?>" id="gender" placeholder="Gender (Male or Female)">
              <?php if($errors['gender']): ?>
                <div class="invalid-feedback">
                  <?= $errors['gender'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="civil_status">Civil Status</label>
            <input name="civil_status" type="text" value="<?= isset($rec['civil_status']) ? $rec['civil_status'] : set_value('civil_status') ?>" class="form-control <?= $errors['civil_status'] ? 'is-invalid':'is-valid' ?>" id="civil_status" placeholder="Civil Status">
              <?php if($errors['civil_status']): ?>
                <div class="invalid-feedback">
                  <?= $errors['civil_status'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="maiden_name">Maiden Name</label>
            <input name="maiden_name" type="text" value="<?= isset($rec['maiden_name']) ? $rec['maiden_name'] : set_value('maiden_name') ?>" class="form-control <?= $errors['maiden_name'] ? 'is-invalid':'is-valid' ?>" id="maiden_name" placeholder="Maiden Name (If Married)">
              <?php if($errors['maiden_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['maiden_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="height">Height</label>
            <input name="height" type="text" value="<?= isset($rec['height']) ? $rec['height'] : set_value('height') ?>" class="form-control <?= $errors['height'] ? 'is-invalid':'is-valid' ?>" id="height" placeholder="Height (Feet)">
              <?php if($errors['height']): ?>
                <div class="invalid-feedback">
                  <?= $errors['height'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="height">Weight</label>
            <input name="weight" type="text" value="<?= isset($rec['weight']) ? $rec['weight'] : set_value('weight') ?>" class="form-control <?= $errors['weight'] ? 'is-invalid':'is-valid' ?>" id="weight" placeholder="Weight (Kilograms)">
              <?php if($errors['weight']): ?>
                <div class="invalid-feedback">
                  <?= $errors['weight'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="religion">Religion</label>
            <input name="religion" type="text" value="<?= isset($rec['religion']) ? $rec['religion'] : set_value('religion') ?>" class="form-control <?= $errors['religion'] ? 'is-invalid':'is-valid' ?>" id="religion" placeholder="Religion">
              <?php if($errors['religion']): ?>
                <div class="invalid-feedback">
                  <?= $errors['religion'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="last_school_attended">Last School Attended</label>
            <input name="last_school_attended" type="text" value="<?= isset($rec['last_school_attended']) ? $rec['last_school_attended'] : set_value('last_school_attended') ?>" class="form-control <?= $errors['last_school_attended'] ? 'is-invalid':'is-valid' ?>" id="last_school_attended" placeholder="Last School Attended">
              <?php if($errors['last_school_attended']): ?>
                <div class="invalid-feedback">
                  <?= $errors['last_school_attended'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="last_school_address">Last School Address</label>
            <input name="last_school_address" type="text" value="<?= isset($rec['last_school_address']) ? $rec['last_school_address'] : set_value('last_school_address') ?>" class="form-control <?= $errors['last_school_address'] ? 'is-invalid':'is-valid' ?>" id="last_school_address" placeholder="Last School Address">
              <?php if($errors['last_school_address']): ?>
                <div class="invalid-feedback">
                  <?= $errors['last_school_address'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>  
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <button type="submit" class="btn btn-primary float-right">Submit</button>
      </div>
    </div>
  </form>
  <p style="clear: both"></p>
</div>
</div>
