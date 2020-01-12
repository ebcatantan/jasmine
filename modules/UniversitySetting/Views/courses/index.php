<div class="row">
  <div class="col-md-5">
     <?php search('courses') ?>
  </div>
  <div class="col-md-2  offset-md-5">
   <?php user_add_link('courses', $_SESSION['userPermmissions']) ?>
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
        <th>College</th>
        <th>Course Code</th>
        <th>Title</th>
        <th>Degree</th>
        <th>Major</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($courses as $course): ?>
      <tr id="<?php echo $course['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($course['description']) ?></td>
        <td><?= ucwords($course['course_code']) ?></td>
        <td><?= ucwords($course['course_title']) ?></td>
        <td><?= ucwords($course['degree']) ?></td>
        <td><?= ucwords($course['major']) ?></td>
        <td class="text-center">
          <?php
            users_action('courses', $_SESSION['userPermmissions'], $course['id']);
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
    <?php paginater('courses', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
