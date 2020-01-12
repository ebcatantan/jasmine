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
    <form action="<?= base_url() ?>students/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="student_no">Student No.</label>
            <input type="text" class="form-control" name="student_no" value="<?= isset($rec['student_no']) ? $rec['student_no'] : ''?>" id="student_no" placeholder="Student no.">
            <?php if ($errors['student_no']): ?>
              <div class="text-danger">
                  <?= $errors['student_no']?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <label><h3>PERSONAL INFORMATION</h3></label>
      <div class="row">
        <div class="col-md-3">
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

      <!--<div class="row">-->
        <div class="col-md-3">
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
      <!--</div>-->
      <!--<div class="row">edited-->
       <div class="col-md-3">
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
     <!--</div>-->
     <!--<div class="row">-->
       <div class="col-md-3">
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
     <!--</div>-->
    </div> <!--end row ng Name secton-->

    <div class="row">
      <div class="col-md-2">
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
    <!--<div class="row">-->
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
    <!--</div>-->
  <!--<div class="row">-->
      <div class="col-md-2">
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
    <!--</div>-->
    <!--<div class="row">-->
      <div class="col-md-2">
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
    <!--</div>-->
    <!--<div class="row">-->
      <div class="col-md-2">
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
    <!--</div>-->
      </div><!--End ng row-->

      <div class="row">
        <div class="col-md-6">
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
      <!--<div class="row">-->
        <div class="col-md-6">
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
      <!--</div>-->
        </div><!--End ng row-->

     <div class="row">
       <div class="col-md-6">
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
     <!--<div class="row">-->
       <div class="col-md-6">
         <div class="form-group">
           <label for="barangay">Barangay</label>
           <input type="text" class="form-control" name="barangay" value="<?= isset($rec['barangay']) ? $rec['barangay'] : ''?>" id="barangay" placeholder="Barangay">
           <?php if ($errors['barangay']): ?>
             <div class="text-danger">
                 <?= $errors['barangay']?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     <!--</div>-->
      </div><!--End row-->

     <div class="row">
       <div class="col-md-6">
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
     <!--<div class="row">-->
       <div class="col-md-6">
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
     <!--</div>-->
        </div><!--End ng row-->

     <div class="row">
       <div class="col-md-6">
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
     <!--<div class="row">-->
       <div class="col-md-6">
         <div class="form-group">
           <label for="year_profiled">Year Profiled</label>
           <input type="date" class="form-control" name="year_profiled" value="<?= isset($rec['year_profiled']) ? $rec['year_profiled'] : ''?>" id="year_profiled" placeholder="Year Profiled">
           <?php if ($errors['year_profiled']): ?>
             <div class="text-danger">
                 <?= $errors['year_profiled']?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     <!--</div>-->
       </div><!--End ng row-->
       <div class="row">
         <div class="col-md-6">
           <div class="form-group">
             <label for="voter_id">Voter's ID</label>
             <input type="text" class="form-control" name="voter_id" value="<?= isset($rec['voter_id']) ? $rec['voter_id'] : ''?>" id="voter_id" placeholder="Voter's ID">
             <?php if ($errors['voter_id']): ?>
               <div class="text-danger">
                   <?= $errors['voter_id']?>
               </div>
             <?php endif; ?>
           </div>
         </div>
       </div>
       <br>
       <label><h3>FAMILY BACKGROUND</h3></label>
     <div class="row">
       <div class="col-md-6">
         <div class="form-group">
           <label for="father_name">Father's Name</label>
           <input type="text" class="form-control" name="father_name" value="<?= isset($rec['father_name']) ? $rec['father_name'] : ''?>" id="father_name" placeholder="Father's Name">
           <?php if ($errors['father_name']): ?>
             <div class="text-danger">
                 <?= $errors['father_name']?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     <!--<div class="row">-->
       <div class="col-md-6">
         <div class="form-group">
           <label for="mother_name">Mother's Name</label>
           <input type="text" class="form-control" name="mother_name" value="<?= isset($rec['mother_name']) ? $rec['mother_name'] : ''?>" id="mother_name" placeholder="Mother's Name">
           <?php if ($errors['mother_name']): ?>
             <div class="text-danger">
                 <?= $errors['mother_name']?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     <!--</div>-->
     </div><!--End ng row-->
     <div class="row">
       <div class="col-md-6">
         <div class="form-group">
           <label for="father_occupation">Father's Occupation</label>
           <input type="text" class="form-control" name="father_occupation" value="<?= isset($rec['father_occupation']) ? $rec['father_occupation'] : ''?>" id="father_occupation" placeholder="Father's Occupation">
           <?php if ($errors['father_occupation']): ?>
             <div class="text-danger">
                 <?= $errors['father_occupation']?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     <!--<div class="row">-->
       <div class="col-md-6">
         <div class="form-group">
           <label for="mother_occupation">Mother's Occupation</label>
           <input type="text" class="form-control" name="mother_occupation" value="<?= isset($rec['mother_occupation']) ? $rec['mother_occupation'] : ''?>" id="mother_occupation" placeholder="Mother's Occupation">
           <?php if ($errors['mother_occupation']): ?>
             <div class="text-danger">
                 <?= $errors['mother_occupation']?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     <!--</div>-->
       </div><!--End ng row-->
       <br>
       <label><h3>ADDITINAL INFORMATION</h3></label>
     <div class="row">
       <div class="col-md-4">
         <div class="form-group">
           <label for="guardian">Guardian</label>
           <input type="text" class="form-control" name="guardian" value="<?= isset($rec['guardian']) ? $rec['guardian'] : ''?>" id="guardian" placeholder="Guardian">
           <?php if ($errors['guardian']): ?>
             <div class="text-danger">
                 <?= $errors['guardian']?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     <!--<div class="row">-->
       <div class="col-md-4">
         <div class="form-group">
           <label for="relation_guardian">Relationship to Guardian</label>
           <input type="text" class="form-control" name="relation_guardian" value="<?= isset($rec['relation_guardian']) ? $rec['relation_guardian'] : ''?>" id="relation_guardian" placeholder="Relationship to Guardian">
           <?php if ($errors['relation_guardian']): ?>
             <div class="text-danger">
                 <?= $errors['relation_guardian']?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     <!--</div>-->
      <!--<div class="row">-->
       <div class="col-md-4">
         <div class="form-group">
           <label for="guardian_contact_no">Contact No. of Guardian</label>
           <input type="text" class="form-control" name="guardian_contact_no" value="<?= isset($rec['guardian_contact_no']) ? $rec['guardian_contact_no'] : ''?>" id="guardian_contact_no" placeholder="Contact No. of Guardian">
           <?php if ($errors['guardian_contact_no']): ?>
             <div class="text-danger">
                 <?= $errors['guardian_contact_no']?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     <!--</div>-->
      </div><!--End ng row-->
     <div class="row">
       <div class="col-md-6">
         <div class="form-group">
           <label for="person_to_notify">Person to Notify in Case of Emergency</label>
           <input type="text" class="form-control" name="person_to_notify" value="<?= isset($rec['person_to_notify']) ? $rec['person_to_notify'] : ''?>" id="person_to_notify" placeholder="Person to Notify in Case of Emergency">
           <?php if ($errors['person_to_notify']): ?>
             <div class="text-danger">
                 <?= $errors['person_to_notify']?>
             </div>
           <?php endif; ?>
         </div>
       </div>

     <!--<div class="row">-->
       <div class="col-md-6">
         <div class="form-group">
           <label for="emergency_no">Emergency No.</label>
           <input type="text" class="form-control" name="emergency_no" value="<?= isset($rec['emergency_no']) ? $rec['emergency_no'] : ''?>" id="emergency_no" placeholder="Emergency No.">
           <?php if ($errors['emergency_no']): ?>
             <div class="text-danger">
                 <?= $errors['emergency_no']?>
             </div>
           <?php endif; ?>
         </div>
       </div>
     <!--</div>-->
        </div><!--End ng row-->

      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
