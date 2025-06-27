<!DOCTYPE html>
<?php include 'datatableheader.php';
  include 'db_connect.php';
  include 'sidemenu.php';
  include 'topmenu.php';
  ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>New projects</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  
</head>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kindly update the project below</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="project-edit.html">Update projects</a></li>
              <li class="breadcrumb-item"><a href="#">projects Status</a></li>
              <li class="breadcrumb-item"><a href="#">Close projects</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    
    <section class="content">
      <form class="col-12" style="margin: auto;">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Project Name</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Client Company</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Project Leader</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Budget</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Estimated budget</label>
                <input type="number" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="inputSpentBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input type="number" id="inputEstimatedDuration" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Project Location</label>
                <input type="text" id="inputEstimatedDuration" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Project duration</label>
                <input type="number" min="1" id="inputEstimatedDuration" class="form-control" placeholder="Duration in months">
              </div>

              <div class="form-group">
                <label for="inputEstimatedDuration">Upload Document</label>
                <input type="file" id="inputEstimatedDuration" class="form-control" required>
              </div>
            </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="row">
        <div class="col-sm-6">
          <a href="#" class="btn btn-secondary">Cancel</a>
        </div>
        <div class="col-sm-6" style="text-align: right;">
          <input type="submit" value="Update Porject" class="btn btn-success " style="float: right; padding-top: 3px;">
        </div>
      </div>
      </div>
        </div>
      </div>
      
    </form>
    </section>
    </center>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <?php include 'footer.php';
   ?>

</body>
</html>
