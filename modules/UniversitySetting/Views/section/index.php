 <div class="row">
   <div class="col-md-10">
      
   </div>
   <div class="col-md-2">
    <?php user_add_link('sections', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Curriculum</th>
        <th>Course</th>
        <th>Academic Year Instance</th>
        <th>Section Code</th>
        <th>Section Name</th>
        <th>Shift</th>
        <th>Max no. Student</th>
        <th>Section Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($sections as $section): ?>
        <tr id="<?php echo $section['id']; ?>">
          <th scope="row"><?= $cnt++ ?></th>
          <td><?= ucwords($section['curriculum_id']) ?></td>
          <td><?= ucwords($section['course_id']) ?></td>
          <td><?= ucwords($section['academic_year_instance_id']) ?></td>
          <td><?= ucwords($section['section_code']) ?></td>
          <td><?= ucwords($section['section_name']) ?></td>
          <td><?= ucwords($section['shift']) ?></td>
          <td><?= ucwords($section['max_no_student']) ?></td>
          <td><?= ucwords($section['section_status'] == 'a' ? "Open" : "Closed")?></td>


          <td class="text-center">
            <?php
              users_action('sections', $_SESSION['userPermmissions'], $section['id']);
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
    <?php paginater('sections', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
