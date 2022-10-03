<?php
include('include/config.php');
if(isset($_POST['submit']))
    {
        $name= $_POST['name'];
        $description = $_POST['description'];
        $designation = $_POST['designation'];
        $status = $_POST['status'];
        $file=$_FILES['file']['name'];   
        $filedet=$_FILES['file']['tmp_name'];
        $loc="../assets/images/testimonial/".$file;
        move_uploaded_file($filedet,$loc);
        $sql="INSERT INTO testimonial(name,description,designation,status,image) VALUES('$name','$description','$designation','$status','$file')";
        if (mysqli_query($conn, $sql)){
          echo "<script> alert ('New record has been added successfully !');</script>";
       } else {
          echo "<script> alert ('connection failed !');</script>";
       }
    }
    if(isset($_GET['delid'])){
      $id=mysqli_real_escape_string($conn,$_GET['delid']);
      $sql=mysqli_query($conn,"delete from testimonial where id='$id'");
      if($sql=1){
        header("location:testimonial.php");
      }
    }
   
    if(isset($_GET['offstatus'])){
      $staid=$_GET['offstatus'];
          $query=mysqli_query($conn,"UPDATE `testimonial` SET `action`='off' where id='$staid'");
      if($query==1){
      }
  }
  if(isset($_GET['onstatus'])){
      $staid=$_GET['onstatus'];
          $query=mysqli_query($conn,"UPDATE `testimonial` SET `action`='on' where id='$staid'");
      if($query==1){
      }
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Testimonial</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include("include/header.php")?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include("include/sidebar.php")?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-2">
              <button type="button" data-toggle="modal" data-target="#modal-lg"
                class="btn btn-primary col fileinput-button">
                <i class="fas fa-plus"></i>&nbsp;&nbsp;
                <span>Create testimonial</span>
              </button>
            </div>
            <div class="col-sm-10">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="Index.php">Home</a></li>
                <li class="breadcrumb-item active">Testimonial</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- /.card -->

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">testimonial Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Designation</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php  
                        $sql=mysqli_query($conn,"select * from testimonial"); 
                        $count=1;  
                        while($arr=mysqli_fetch_array($sql)){
                      ?>
                      <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $arr['name'];?></td>
                        <td><img src="../assets/images/testimonial/<?php echo $arr['image'];?>" style="height: 66px; width: 130px;"></td>
                        <td><?php echo $arr['description'];?></td>
                        <td><?php echo $arr['designation'];?></td>
                        <td>
                          <?php
                          if($arr['status']=="on"){
                            echo '<input type="checkbox" name="my-checkbox" checked data-bootstrap-switch
                              data-on-color="success" data-on-color="success">';
                          }
                          else if($arr['status']=="off"){
                            echo '<input type="checkbox" name="my-checkbox"  data-bootstrap-switch
                              data-off-color="danger" data-on-color="error">';
                          }
                          ?>
                        </td>
                        <td>
                          <button type="button" class="btn btn-info btn-sm dnkeditid" data-id="<?php echo $arr['id'] ?>"
                            data-toggle="modal" data-target="#modal-lg1" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                          </button>&nbsp;&nbsp;
                          <a href="testimonial.php?delid=<?php echo $arr['id']; ?>" class="btn btn-danger btn-sm"
                            href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                          </a>
                        </td>
                      </tr>
                      <?php $count++; }  ?>
                    </tbody>
                  </table>
                  <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">testimonial Table</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <form method="post" enctype="multipart/form-data">
                          <div class="card-body">
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="name" id="" placeholder="">
                            </div>
                            <div class="row">
                              <div class="col-sm-6 custom-file">
                                <label class="" type="file" for="file">Choose file</label>
                                <input type="file" name="file" class="form-control" id="formFileMultiple">
                              </div>
                              <div class="col-sm-6 form-group">
                                <label for="name">Designation</label>
                                <input type="text" class="form-control" name="designation" id="" placeholder="">
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Description</label>
                              <textarea class="form-control" rows="3" name="description"
                                placeholder="Enter ..."></textarea>
                            </div>

                            <div class="form-group">
                              <label>Status</label>
                              <select class="form-control" name="status">
                                <?php if($arr['action']=='1'){
                                    echo "<a href='?onstatus=".$arr['id']."' class='btn btn-danger'>on</a>";
                                    } else if($arr['action']=='0'){
                                    echo "<a href='?offstatus=".$arr['id']."' class='btn btn-success'>off</a>";
                                    }?>
                                <option>Select</option>
                                <option value="on">ON</option>
                                <option value="off">OFF</option>
                              </select>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              <button type="submit" name="submit" value="submit" class="btn btn-success"
                                style="margin-right: auto;">Save</button>
                            </div>
                          </div>
                        </form>


                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <div class="modal fade" id="dnkModal">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-name">Edit </h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form method="post" action="testimonialmodalform.php" enctype="multipart/form-data">
                          <div class="body1">

                          </div>
                        </form>


                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php include("include/footer.php")?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Bootstrap Switch -->
  <script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>


  <!-- Select2 -->
  <script src="plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- date-range-picker -->
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- BS-Stepper -->
  <script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- dropzonejs -->
  <script src="plugins/dropzone/min/dropzone.min.js"></script>


  <script>
    $(document).ready(function () {
      $('.dnkeditid').click(function () {
        let dnkid = $(this).data('id');

        $.ajax({
          url: 'testimonialmodalform.php',
          type: 'post',
          data: {
            dnkid: dnkid
          },
          success: function (response1) {
            $('.body1').html(response1);
            $('#dnkModal').modal('show');
          }
        });
      });
    });
  </script>
  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
      })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
      })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date picker
      $('#reservationdate').datetimepicker({
        format: 'L'
      });

      //Date and time picker
      $('#reservationdatetime').datetimepicker({
        icons: {
          time: 'far fa-clock'
        }
      });

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker({
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
              'month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function (event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      })

      $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
      url: "/target-url", // Set the url
      thumbnailWidth: 80,
      thumbnailHeight: 80,
      parallelUploads: 20,
      previewTemplate: previewTemplate,
      autoQueue: false, // Make sure the files aren't queued until manually added
      previewsContainer: "#previews", // Define the container to display the previews
      clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function (file) {
      // Hookup the start button
      file.previewElement.querySelector(".start").onclick = function () {
        myDropzone.enqueueFile(file)
      }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function (progress) {
      document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function (file) {
      // Show the total progress bar when upload starts
      document.querySelector("#total-progress").style.opacity = "1"
      // And disable the start button
      file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function (progress) {
      document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function () {
      myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function () {
      myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
  </script>
  <script language="JavaScript" type="text/javascript">
    function checkDelete() {
      return confirm('Are you sure you want to delete this userid?');
    }
  </script>

</body>

</html>