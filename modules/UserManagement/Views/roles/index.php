 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('roles', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($roles as $role): ?>
      <tr id="<?php echo $role['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($role['role_name']) ?></td>
        <td><?= ucwords($role['description']) ?></td>
        <td class="text-center">
          <?php
            users_action('roles', $_SESSION['userPermmissions'], $role['id']);
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
    <?php paginater('roles', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
