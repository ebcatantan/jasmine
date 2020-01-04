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
    <form action="<?= base_url() ?>semesters/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
    <div class="row">
      <div class="col-md-6 offset-md-3">
          <div class="form-group ">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" value="<?= isset($rec['name']) ? $rec['name'] : '' ?>">
              <?php if ($errors['name']): ?>
                <div class="text-danger">
                  <?= $errors['name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
    </div>
    <br>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
