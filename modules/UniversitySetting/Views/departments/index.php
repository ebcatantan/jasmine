<div class="row">
  <div class="col-md-5">
     <?php search('departments') ?>
  </div>
  <div class="col-md-2  offset-md-5">
   <?php user_add_link('departments', $_SESSION['userPermmissions']) ?>
  </div>
</div>
<?php if (isset($_SESSION['search_input'])): ?>
  <br>
  <div class="row">
    <div class="col-md-6">
      <h4><?= $_SESSION['search_input'] ?></h4>
    </div>
  </div>
<?php endif; ?>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Department Code</th>
        <th>Department Name</th>
        <th>College</th>
        <th>Department Head</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($departments as $department): ?>
      <tr id="<?php echo $department['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($department['department_code']) ?></td>
        <td><?= ucwords($department['department_name']) ?></td>
        <td><?= $department['college_id'] == NULL ? 'N/A' : ucwords($department['college_description'] . ' - ' . $department['college_code']) ?></td>
        <td><?= ucwords($department['firstname'] . ' ' . $department['firstname']) ?></td>
        <td><?= ucwords($department['description']) ?></td>
        <td class="text-center">
          <?php
            users_action('departments', $_SESSION['userPermmissions'], $department['id']);
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
    <?php paginater('departments', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
