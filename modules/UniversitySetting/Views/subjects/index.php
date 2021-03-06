<div class="row">
  <div class="col-md-5">
     <?php search('subjects') ?>
  </div>
  <div class="col-md-2  offset-md-5">
   <?php user_add_link('subjects', $_SESSION['userPermmissions']) ?>
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
        <th>Subject code</th>
        <th>Subject title</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($subjects as $subject): ?>
      <tr id="<?php echo $subject['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ($subject['subject_code']) ?></td>
        <td><?= ($subject['subject_title']) ?></td>
        <td><?= ($subject['description']) ?></td>
        <td class="text-center">
          <?php
            users_action('subjects', $_SESSION['userPermmissions'], $subject['id']);
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
    <?php paginater('subjects', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
