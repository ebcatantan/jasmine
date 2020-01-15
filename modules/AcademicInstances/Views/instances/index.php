 <div class="row">
   <div class="col-md-10">
   </div>
   <div class="col-md-2">
    <?php user_add_link('academic_years', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Started Year</th>
        <th>Ended Year</th>
        <th>Description</th>
        <th>Accepting Examinee</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($academic_years as $instance): ?>
      <tr id="<?php echo $instance['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($instance['ay_start_year']) ?></td>
        <td><?= ucwords($instance['ay_end_year']) ?></td>
        <td><?= ucwords($instance['description']) ?></td>
        <td><?= ucwords($instance['is_accepting_examinee']) ?></td>
        <td class="text-center">
          <?php
            users_action('academic_years', $_SESSION['userPermmissions'], $instance['id']);
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
    <?php paginater('academic-years', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
