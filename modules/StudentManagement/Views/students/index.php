 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('students', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Student No.</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Extension Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($students as $student): ?>
      <tr id="<?php echo $student['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($student['student_no']) ?></td>
        <td><?= ucwords($student['last_name']) ?></td>
        <td><?= ucwords($student['first_name']) ?></td>
        <td><?= ucwords($student['middle_name']) ?></td>
        <td><?= ucwords($student['extension_name']) ?></td>
        <!--<td><?= ucwords($student['address']) ?></td>
        <td><?= ucwords($student['barangay ']) ?></td>
        <td><?= ucwords($student['email']) ?></td>
        <td><?= ucwords($student['contact_no']) ?></td>
        <td><?= ucwords($student['birth_date']) ?></td>
        <td><?= ucwords($student['birth_place']) ?></td>
        <td><?= ucwords($student['gender']) ?></td>
        <td><?= ucwords($student['civil_status']) ?></td>
        <td><?= ucwords($student['maiden_name']) ?></td>
        <td><?= ucwords($student['height']) ?></td>
        <td><?= ucwords($student['weight']) ?></td>
        <td><?= ucwords($student['religion']) ?></td>
        <td><?= ucwords($student['year_profiled']) ?></td>
        <td><?= ucwords($student['father_name']) ?></td>
        <td><?= ucwords($student['father_occupation']) ?></td>
        <td><?= ucwords($student['mother_name']) ?></td>
        <td><?= ucwords($student['mother_occupation']) ?></td>
        <td><?= ucwords($student['guardian']) ?></td>
        <td><?= ucwords($student['relation_guardian']) ?></td>
        <td><?= ucwords($student['guardian_contact_no']) ?></td>
        <td><?= ucwords($student['voter_id']) ?></td>
        <td><?= ucwords($student['person_to_notify']) ?></td>
        <td><?= ucwords($student['emergency_no']) ?></td>-->
        <td class="text-center">
          <?php
            users_action('students', $_SESSION['userPermmissions'], $student['id']);
          ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
 </div>
<hr>

<div class="row">
  <div class="col-md-6 offset-md-6">
    <?php paginater('students', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
