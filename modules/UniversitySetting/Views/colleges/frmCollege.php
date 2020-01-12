<div class="row">
  <div class="col-md-10">
     search here
  </div>
  <div class="col-md-2">
    <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
  </div>
</div>
<br>
<div class="row">
 <div class="col-md-12">
   <form action="<?= base_url() ?>colleges/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
            <label for="college_code">College Code</label>
            <input name= "college_code" type="text" value="<?= isset($rec['college_code']) ? $rec['college_code'] : set_value('college_code') ?>" class="form-control <?= $errors['college_code'] ? 'is-invalid':'is-valid' ?>" id="college_code" placeholder="College Code">
              <?php if($errors['college_code']): ?>
                <div class="invalid-feedback">
                  <?= $errors['college_code'] ?>
                </div>
              <?php endif; ?>
          </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="description">Description</label>
           <textarea name="description" type="text" class="form-control <?= $errors['description'] ? 'is-invalid':'is-valid'  ?>" id="description" placeholder="Description" rows="5"><?= isset($rec['description']) ? $rec['description'] : set_value('description') ?></textarea>
           <?php if($errors['description']): ?>
               <div class="invalid-feedback">
                 <?= $errors['description'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="other_notes">Other Notes</label>
           <textarea name="other_notes" type="text" class="form-control <?= $errors['other_notes'] ? 'is-invalid':'is-valid'  ?>" id="other_notes" placeholder="other_notes" rows="6"><?= isset($rec['other_notes']) ? $rec['other_notes'] : set_value('other_notes') ?></textarea>
           <?php if($errors['other_notes']): ?>
               <div class="invalid-feedback">
                 <?= $errors['other_notes'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <button type="submit" class="btn btn-primary float-right">Submit</button>
       </div>
     </div>
   </form>
   <p style= "clear: both"></p>
 </div>
 </div>
