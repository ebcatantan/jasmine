 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('employees', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Employee No.</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($employees as $employee): ?>
      <tr id="<?php echo $employee['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($employee['employee_no']) ?></td>
        <td><?= ucwords($employee['last_name'] . ', ' . $employee['first_name'] . ' ' . $employee['middle_name'] . '.' . $employee['extension_name'] . '  ' . $employee['title_suffix']) ?></td>
        <!-- incase na gusto iprint lahat ng field sa view -->
        <!--<td><?= ucwords($employee['address']) ?></td>
        <td><?= ucwords($employee['email']) ?></td>
        <td><?= ucwords($employee['contact_no']) ?></td>
        <td><?= ucwords($employee['birth_date']) ?></td>
        <td><?= ucwords($employee['birth_place']) ?></td>
        <td><?= ucwords($employee['gender']) ?></td>
        <td><?= ucwords($employee['civil_status']) ?></td>
        <td><?= ucwords($employee['maiden_name']) ?></td>
        <td><?= ucwords($employee['height']) ?></td>
        <td><?= ucwords($employee['weight']) ?></td>
        <td><?= ucwords($employee['religion']) ?></td>
        <td><?= ucwords($employee['date_employed']) ?></td>
        <td><?= ucwords($employee['employment_status']) ?></td>
        <td><?= ucwords($employee['is_faculty']) ?></td>-->

        <td class="text-center">
          <?php
            users_action('employees', $_SESSION['userPermmissions'], $employee['id']);
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
    <?php paginater('employees', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
