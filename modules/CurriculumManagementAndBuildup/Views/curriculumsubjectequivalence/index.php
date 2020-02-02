 <div class="row">
     <div class="col-md-10">

     </div>
       <div class="col-md-2">
          <?php user_add_link('curriculums', $_SESSION['userPermmissions']) ?><!--adding-->
       </div>
 </div>
<br>
    <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
   <div class="table-responsive"> <!--table-->
           <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Academic Year</th>
                        <th>Course</th>
                        <th>Curriculum Code</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
            <tbody>
                  <?php $cnt = 1; ?>
                  <?php foreach($curriculums as $curriculum): ?>
                  <tr id="<?php echo $curriculum['id']; ?>">
                    <th scope="row"><?= $cnt++ ?></th>
                    <td><?= ucwords($curriculum['academic_year_id']) ?></td>
                    <td><?= ucwords($curriculum['course_id']) ?></td>
                    <td><?= ucwords($curriculum['curriculum_code']) ?></td>
                    <td><?= ucwords($curriculum['title']) ?></td>

                    <td class="text-center">
                      <?php
                        users_action('curriculums', $_SESSION['userPermmissions'], $curriculum['id']);
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
                <?php paginater('curriculums', count($all_items), PERPAGE, $offset) ?>
              </div>
            </div>
      <!--  -->
