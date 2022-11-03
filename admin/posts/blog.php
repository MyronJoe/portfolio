<link rel="stylesheet" href="../../assets/css/admin.css">
<?php
require_once '../../path.php';
require_once(ROOT_PATH . '/admin/includes/adminheader.php');
?>
    <section style="display: flex;">
        <div class="lside">
        <?php
            require_once(ROOT_PATH . '/admin/includes/adminsidebar.php');
        ?>
        </div>

        <div class="rside">
            <div class="float-right">
                <a class="btn btn-primary" href="index.php">Manage Post</a>
            </div>
            <div class="adduser-sec">
                <h2>Add Blog Post</h2>
            </div>

            <form action="create.php" method="POST" class="pb-3">
            <div class="table">
            </div>
                <div class="row table">
                
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="title" class="form-control" placeholder="Title"/>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <textarea class="form-control" placeholder="Content" id="description" value="" value="" name="about_me"></textarea>
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file"  id="image" name="image">
                  </div>

                  <div class="col-md-12 mb-3">
                    <select name="category" id="category" class="form-control">
                        <option value="Web Design">Web Design</option>
                        <option value="Graphics Design">Graphics Design</option>
                        <option value="Web Development">Web Development</option>
                    </select>
                  </div>

                  <div class="col-md-12">
                    <button type="submit" name="create-skill" class="btn btn-primary py-2">Add Skill</button>
                  </div>

                </div>
              </form>

        </div>
    </section>

</body>

</html>