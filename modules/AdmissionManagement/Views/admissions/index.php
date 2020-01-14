 <div class="row">
   <div class="col-md-10">

   </div>
   <div class="col-md-2">
    <?php user_add_link('student_examinees', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Examinee Number</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Address</th>
        <th>Contact #</th>
        <th>Birthday</th>
        <th>Email</th>
        <th>Civil Status</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($admissions as $admission): ?>
      <tr id="<?php echo $admission['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($admission['examinee_no']) ?></td>
        <td><?= ucwords($admission['last_name']) ?></td>
        <td><?= ucwords($admission['first_name']) ?></td>
        <!-- <td><?= ucwords($admission['middle_name']) ?></td>
        <td><?= ucwords($admission['extension_name']) ?></td> -->
        <td><?= ucwords($admission['address']) ?></td>
        <!-- <td><?= ucwords($admission['barangay']) ?></td> -->
        <!-- <td><?= ucwords($admission['email']) ?></td> -->
        <td><?= ucwords($admission['contact_no']) ?></td>
        <td><?= ucwords($admission['birth_date']) ?></td>
        <!-- <td><?= ucwords($admission['birth_place']) ?></td> -->
        <td><?= ucwords($admission['gender']) ?></td>
         <td><?= ucwords($admission['civil_status']) ?></td>
        <!-- <td><?= ucwords($admission['maiden_name']) ?></td>
        <td><?= ucwords($admission['height']) ?></td>
        <td><?= ucwords($admission['weight']) ?></td>
        <td><?= ucwords($admission['religion']) ?></td>
        <td><?= ucwords($admission['last_school_attended']) ?></td>
        <td><?= ucwords($admission['last_school_address']) ?></td>  -->
        <td class="text-center">
          <?php
            users_action('student_examinees', $_SESSION['userPermmissions'], $admission['id']);
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
    <?php paginater('student-examinees', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
