<div class="row">
  <div class="col-md-10">
     search here
  </div>
  <div class="col-md-2">
   <?php user_add_link('colleges', $_SESSION['userPermmissions']) ?>
  </div>
</div>
<br>
 <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
<div class="table-responsive">
  <table class="table table-bordered">
   <thead class="thead-dark">
     <tr class="text-center">
       <th>#</th>
       <th>Colleges Code</th>
       <th>Description</th>
       <th>Other Notes</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <?php $cnt = 1; ?>
     <?php foreach($colleges as $college): ?>
     <tr id="<?php echo $college['id']; ?>">
       <th scope="row"><?= $cnt++ ?></th>
       <td><?= ucwords($college['college_code']) ?></td>
       <td><?= ucwords($college['description']) ?></td>
        <td><?= ucwords($college['other_notes']) ?></td>
       <td class="text-center">
         <?php
           users_action('colleges', $_SESSION['userPermmissions'], $college['id']);
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
   <?php paginater('colleges', count($all_items), PERPAGE, $offset) ?>
 </div>
</div>
