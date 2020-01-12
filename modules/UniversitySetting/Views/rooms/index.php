 <div class="row">
   <div class="col-md-10">
      search here
   </div>
   <div class="col-md-2">
    <?php user_add_link('rooms', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Building</th>
        <th>Room Code</th>
        <th>Room Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($rooms as $room): ?>
      <tr id="<?php echo $room['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($room['building_code']) . '-' . ucwords($room['building_name'])?></td>
        <td><?= ucwords($room['room_name']) ?></td>
        <td><?= ucwords($room['room_code']) ?></td>
        <td><?= ucwords($room['description']) ?></td>
        <td class="text-center">
          <?php
            users_action('rooms', $_SESSION['userPermmissions'], $room['id']);
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
    <?php paginater('rooms', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
