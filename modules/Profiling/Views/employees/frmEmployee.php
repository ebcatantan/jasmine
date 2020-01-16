 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>employees/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">


   <div class="row">
       <div class="col-md-12 ">
         <div class="form-group">
           <label for="employee_image">Employee Image</label>
           <input name="employee_image" type="file" value="<?= isset($rec['employee_image']) ? $rec['employee_image'] : set_value('employee_image') ?>" class="form-control <?= $errors['employee_image'] ? 'is-invalid':'is-valid' ?>" id="employee_image" placeholder="Employee Image">
             <?php if($errors['employee_image']): ?>
               <div class="invalid-feedback">
                 <?= $errors['employee_image'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

      <div class="row">
        <div class="col-md-3 ">
          <div class="form-group">
            <label for="employee_no">Employee No.</label>
            <input type="text" class="form-control <?= $errors['employee_no'] ? 'is-invalid':'is-valid' ?>" name="employee_no" value="<?= isset($rec['employee_no']) ? $rec['employee_no'] : ''?>" id="employee_no" placeholder="employee no.">
            <?php if ($errors['employee_no']): ?>
              <div class="text-danger">
                  <?= $errors['employee_no']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="form-group">
            <label for="employment_status">Employment Status</label>
            <select type="text" class="form-control" name="employment_status" id="employment_status" placeholder="Employment Status">
              <option>Select</option>
              <option value="1">full-timer</option>
              <option value="2">part-timer</option>
            </select>
            <?php if ($errors['employment_status']): ?>
              <div class="text-danger">
                  <?= $errors['employment_status']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="date_employed">Date Employed</label>
            <input type="date" class="form-control" name="date_employed" value="<?= isset($rec['date_employed']) ? $rec['date_employed'] : ''?>" id="date_employed" placeholder="Date Employed">
            <?php if ($errors['date_employed']): ?>
              <div class="text-danger">
                  <?= $errors['date_employed']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="is_faculty">Faculty</label>
            <input type="text" class="form-control" name="is_faculty" value="<?= isset($rec['is_faculty']) ? $rec['is_faculty'] : ''?>" id="is_faculty" placeholder="faculty">
            <?php if ($errors['is_faculty']): ?>
              <div class="text-danger">
                  <?= $errors['is_faculty']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <label for="title_prefix">Prefix</label>
            <input type="text" class="form-control" name="title_prefix" value="<?= isset($rec['title_prefix']) ? $rec['title_prefix'] : ''?>" id="title_prefix" placeholder="Prefix">
            <?php if ($errors['title_prefix']): ?>
              <div class="text-danger">
                  <?= $errors['title_prefix']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <!--</div>
      <div class="row">-->
        <div class="col-md-4">
          <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" value="<?= isset($rec['last_name']) ? $rec['last_name'] : ''?>" id="last_name" placeholder="Last Name">
            <?php if ($errors['last_name']): ?>
              <div class="text-danger">
                  <?= $errors['last_name']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <!--</div>
      <div class="row">-->
        <div class="col-md-4">
          <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" value="<?= isset($rec['first_name']) ? $rec['first_name'] : ''?>" id="first_name" placeholder="First Name">
            <?php if ($errors['first_name']): ?>
              <div class="text-danger">
                  <?= $errors['first_name']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <!--</div>
      <div class="row"><!--edited-->
        <div class="col-md-2">
          <div class="form-group">
            <label for="middle_name">Middle Name</label>
            <input type="text" class="form-control" name="middle_name" value="<?= isset($rec['middle_name']) ? $rec['middle_name'] : ''?>" id="middle_name" placeholder="Middle Name">
            <?php if ($errors['middle_name']): ?>
              <div class="text-danger">
                  <?= $errors['middle_name']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="extension_name">Extension Name</label>
            <input type="text" class="form-control" name="extension_name" value="<?= isset($rec['extension_name']) ? $rec['extension_name'] : ''?>" id="extension_name" placeholder="Extension Name">
            <?php if ($errors['extension_name']): ?>
              <div class="text-danger">
                  <?= $errors['extension_name']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <!--</div>
      <div class="row">-->
        <div class="col-md-4">
          <div class="form-group">
            <label for="title_suffix">Suffix</label>
            <input type="text" class="form-control" name="title_suffix" value="<?= isset($rec['title_suffix']) ? $rec['title_suffix'] : ''?>" id="title_suffix" placeholder="Suffix">
            <?php if ($errors['title_suffix']): ?>
              <div class="text-danger">
                  <?= $errors['title_suffix']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="maiden_name">Maiden Name</label>
            <input type="text" class="form-control" name="maiden_name" value="<?= isset($rec['maiden_name']) ? $rec['maiden_name'] : ''?>" id="maiden_name" placeholder="Maiden Name">
            <?php if ($errors['maiden_name']): ?>
              <div class="text-danger">
                  <?= $errors['maiden_name']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" value="<?= isset($rec['address']) ? $rec['address'] : ''?>" id="address" placeholder="Address">
            <?php if ($errors['address']): ?>
              <div class="text-danger">
                  <?= $errors['address']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="<?= isset($rec['email']) ? $rec['email'] : ''?>" id="email" placeholder="Email">
            <?php if ($errors['email']): ?>
              <div class="text-danger">
                  <?= $errors['email']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <!--</div>
      <div class="row">-->
        <div class="col-md-6 ">
          <div class="form-group">
            <label for="contact_no">Contact No.</label>
            <input type="text" class="form-control" name="contact_no" value="<?= isset($rec['contact_no']) ? $rec['contact_no'] : ''?>" id="contact_no" placeholder="Contact No.">
            <?php if ($errors['contact_no']): ?>
              <div class="text-danger">
                  <?= $errors['contact_no']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="birth_date">Birth Date</label>
            <input type="date" class="form-control" name="birth_date" value="<?= isset($rec['birth_date']) ? $rec['birth_date'] : ''?>" id="birth_date" placeholder="Birth Date">
            <?php if ($errors['birth_date']): ?>
              <div class="text-danger">
                  <?= $errors['birth_date']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <!--</div>
      <div class="row">-->
        <div class="col-md-3 ">
          <div class="form-group">
            <label for="birth_place">Birth Place</label>
            <input type="text" class="form-control" name="birth_place" value="<?= isset($rec['birth_place']) ? $rec['birth_place'] : ''?>" id="birth_place" placeholder="Birth Place">
            <?php if ($errors['birth_place']): ?>
              <div class="text-danger">
                  <?= $errors['birth_place']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <!--</div>
      <div class="row">-->
        <div class="col-md-3">
          <div class="form-group">
            <label for="gender">Gender</label>
            <select type="text" class="form-control" name="gender" id="gender" placeholder="Gender">
              <option>Select</option>
              <option value="m">Male</option>
              <option value="f">Female</option>
            </select>
            <?php if ($errors['gender']): ?>
              <div class="text-danger">
                  <?= $errors['gender']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <!--</div>
      <div class="row">-->
        <div class="col-md-3">
          <div class="form-group">
            <label for="civil_status">Civil Status</label>
            <select type="text" class="form-control" name="civil_status" id="civil_status" placeholder="Civil Status">
              <option>Select</option>
              <option value="single">Single</option>
              <option value="married">Married</option>
              <option value="separated">Separated</option>
              <option value="widowed">Widowed</option>
              <option value="divorced">Divorced</option>
            </select>
            <?php if ($errors['civil_status']): ?>
              <div class="text-danger">
                  <?= $errors['civil_status']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="height">Height</label>
            <input type="number" class="form-control" name="height" value="<?= isset($rec['height']) ? $rec['height'] : ''?>" id="height" placeholder="Height">
            <?php if ($errors['height']): ?>
              <div class="text-danger">
                  <?= $errors['height']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <!--</div>
      <div class="row">-->
        <div class="col-md-4">
          <div class="form-group">
            <label for="weight">Weight</label>
            <input type="number" class="form-control" name="weight" value="<?= isset($rec['weight']) ? $rec['weight'] : ''?>" id="weight" placeholder="Weight">
            <?php if ($errors['weight']): ?>
              <div class="text-danger">
                  <?= $errors['weight']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <!--</div>
      <div class="row">-->
        <div class="col-md-4">
          <div class="form-group">
            <label for="religion">Religion</label>
            <input type="text" class="form-control" name="religion" value="<?= isset($rec['religion']) ? $rec['religion'] : ''?>" id="religion" placeholder="Religion">
            <?php if ($errors['religion']): ?>
              <div class="text-danger">
                  <?= $errors['religion']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col offset-md-3">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
