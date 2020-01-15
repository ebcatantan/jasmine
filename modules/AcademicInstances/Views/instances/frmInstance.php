 <div class="row">
   <div class="col-md-10">
   </div>
   <div class="col-md-2">
   </div>
 </div>

 <br>
 <div class="row">
   <div class="col-md-12">
     <form action="<?= base_url() ?>academic-years/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
       <div class="row">
         <div class="col-md-6 offset-md-3">
           <div class="form-group">
             <label for="ay_start_year">Started Year</label>
             <input type="number" class="form-control" name="ay_start_year" value="<?= isset($rec['ay_start_year']) ? $rec['ay_start_year'] : ''?>" id="ay_start_year" placeholder="Started Year">
             <?php if ($errors['ay_start_year']): ?>
               <div class="text-danger">
                   <?= $errors['ay_start_year']?>
               </div>
             <?php endif; ?>
           </div>
         </div>
       </div>

       <div class="row">
         <div class="col-md-6 offset-md-3">
           <div class="form-group">
             <label for="ay_end_year">Ended Year</label>
             <input type="number" class="form-control" name="ay_end_year" value="<?= isset($rec['ay_end_year']) ? $rec['ay_end_year'] : ''?>" id="ay_end_year" placeholder="Ended Year">
             <?php if ($errors['ay_end_year']): ?>
               <div class="text-danger">
                   <?= $errors['ay_end_year']?>
               </div>
             <?php endif; ?>
           </div>
         </div>
       </div>

       <div class="row">
         <div class="col-md-6 offset-md-3">
           <div class="form-group">
             <label for="description">Description</label>
             <input type="text" class="form-control" name="description" value="<?= isset($rec['description']) ? $rec['description'] : ''?>" id="description" placeholder="Description">
             <?php if ($errors['description']): ?>
               <div class="text-danger">
                   <?= $errors['description']?>
               </div>
             <?php endif; ?>
           </div>
         </div>
       </div>

       <div class="row">
         <div class="col-md-6 offset-md-3">
           <div class="form-group">
             <label for="is_accepting_examinee">Accepting Examinee</label>
             <select type="text" class="form-control" name="is_accepting_examinee" value="<?= isset($rec['is_accepting_examinee']) ? $rec['is_accepting_examinee'] : ''?>" id="is_accepting_examinee" placeholder="Accepting Examinee">
             <option>Select</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
              </select>
             <?php if ($errors['is_accepting_examinee']): ?>
               <div class="text-danger">
                   <?= $errors['is_accepting_examinee']?>
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
    <p style="clear: both"></p>
  </div>
</div>
