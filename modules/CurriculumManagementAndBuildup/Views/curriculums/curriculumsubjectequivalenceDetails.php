<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">

        <span class="field">Academic Year</span>
        <span class="field-value"><?= ucfirst($curriculums[0]['academic_year_id']) ?></span>
      </div>
    </div>

          <div class="row">
            <div class="col-md-12">
              <span class="field">Course</span>
              <span class="field-value"><?= ucfirst($curriculums[0]['course_id']) ?></span>
            </div>
          </div>

                <div class="row">
                  <div class="col-md-12">
                    <span class="field">Curriculum Code</span>
                    <span class="field-value"><?= ucfirst($curriculums[0]['curriculum_code']) ?></span>
                  </div>
                </div>

                      <div class="row">
                        <div class="col-md-12">
                          <span class="field">Title</span>
                          <span class="field-value"><?= ucfirst($curriculums[0]['title']) ?></span>
                        </div>
                      </div>

                             <br>
                            <div class="row">
                              <div class="col-md-3 offset-8">
                                <?php
                                user_edit_link('curriculums','edit-curriculum', $permissions, $curriculums[0]['id']);
                                ?>
                              </div>
                            </div>
                          </div>
                        </div>
                        <br>
