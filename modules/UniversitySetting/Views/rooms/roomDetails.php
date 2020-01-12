<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Building</span>
        <span class="field-value"><?= ucfirst($room[0]['building_code']) . ' (' . ucfirst($room[0]['building_name']) .')'?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Room Name</span>
        <span class="field-value"><?= ucfirst($room[0]['room_name']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Room Code</span>
        <span class="field-value"><?= ucfirst($room[0]['room_code']) ?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <span class="field">Description</span>
        <span class="field-value"><?= ucfirst($room[0]['description']) ?></span>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3 offset-8">
        <?php
        user_edit_link('rooms','edit-room', $permissions, $room[0]['id']);
        ?>
      </div>
    </div>
  </div>
</div>
<br>
