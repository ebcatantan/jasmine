 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('buildings', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Building Code</th>
        <th>Building Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($buildings as $building): ?>
      <tr id="<?php echo $building['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($building['building_code']) ?></td>
        <td><?= ucwords($building['building_name']) ?></td>
        <td><?= ucwords($building['description']) ?></td>
        <td class="text-center">
          <?php
            users_action('buildings', $_SESSION['userPermmissions'], $building['id']);
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
    <?php paginater('buildings', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
