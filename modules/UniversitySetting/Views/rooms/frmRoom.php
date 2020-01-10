 <div class="row">
   <div class="col-md-10">
   </div>
   <div class="col-md-2">
     <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
   </div>
 </div>
<br>
<div class="row">
  <div class="col-md-12">
    <form action="<?= base_url() ?>rooms/<?= isset($rec) ? 'edit/'.$rec[0]['id'] : 'add' ?>" method="post">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="building_id">Building</label>
            <select name="building_id" type="text" class="form-control" id="building_id" placeholder="Building">
              <?php foreach ($buildings as $building): ?>
                <option value="<?=$building['id']?>"><?=$building['building_name'].' ('.$building['building_code'].')'?></option>
              <?php endforeach; ?>
            </select>
              <?php if($errors['building_id']): ?>
                <div class="invalid-feedback">
                  <?= $errors['building_id'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="room_code"><?=$rec[0]['room_code']?></label>
            <input name="room_code" type="text" value="<?= isset($rec[0]['room_code']) ? $rec[0]['room_code'] : set_value('room_code') ?>" class="form-control <?= $errors['room_code'] ? 'is-invalid':'is-valid' ?>" id="room_code" placeholder="Room Code">
              <?php if($errors['room_code']): ?>
                <div class="invalid-feedback">
                  <?= $errors['room_code'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="room_name">Room Name</label>
            <input name="room_name" type="text" value="<?= isset($rec[0]['room_name']) ? $rec[0]['room_name'] : set_value('room_name') ?>" class="form-control <?= $errors['room_name'] ? 'is-invalid':'is-valid' ?>" id="room_name" placeholder="Room Name">
              <?php if($errors['room_name']): ?>
                <div class="invalid-feedback">
                  <?= $errors['room_name'] ?>
                </div>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
            <label for="description">Room Description</label>
            <textarea name="description" type="text" class="form-control <?= $errors['description'] ? 'is-invalid':'is-valid' ?>" rows="5" id="description" placeholder="Room Description"><?= isset($rec[0]['description']) ? $rec[0]['description'] : set_value('description') ?></textarea>
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
          <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
      </div>
    </form>
    <p style="clear: both"></p>
  </div>
</div>
