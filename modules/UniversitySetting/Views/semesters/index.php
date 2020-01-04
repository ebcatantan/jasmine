 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('semesters', $_SESSION['userPermmissions']) ?>
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
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($semesters as $semester): ?>
      <tr id="<?php echo $semester['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <!-- <td><?php echo "Jayson" ?></td> -->
        <td><?= ucwords($semester['name']) ?></td>
        <td><?= ucwords($semester['status']) ?></td>
        <td class="text-center">
          <?php
            users_action('semesters', $_SESSION['userPermmissions'], $semester['id']);
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
    <?php paginater('semesters', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
