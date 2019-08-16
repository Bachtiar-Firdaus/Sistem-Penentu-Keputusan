<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css')?>" rel="stylesheet">





<div class="content-wrapper" style="padding:10px">
  <div class="row">
    <div class="col-xs-12">
      <div class="box" style="overflow: scroll;">
        <div class="box-header">
          <h3 class="box-title">LATAR BELAKANG KELUARGA DAN SOSIAL EKONOMI</h3>

        </div>
        <div class="box-header">


<form method="post" accept-charset="utf-8" action="<?php echo base_url()?>index.php/C_psm_kab/pertanyaan_a">
    <div class="form-group">

        <div  style="width: 170px;  float: left; ">
            <button type="submit" style="width: 160px; margin: 5px;" id="btncetak" class="btn btn-primary">Tambah Pertanyaan
            </button>
        </div><br><br><br>
    </div>
</form>   

       
        <!-- /.box-header -->
        <div class="box-body">
          </div> <br />
          <table id="table" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
        </div>
        <!-- /.box-body -->
      </div>

    </div>
    <!-- /.col -->
  </div>
</div>

<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>


<script type="text/javascript">
   var save_method; //for save method string
   var table;
   var base_url = '<?php echo base_url();?>';

   $(document).ready(function () {

      //datatables
      table = $('#table').DataTable({

         "processing": true, //Feature control the processing indicator.
         "serverSide": true, //Feature control DataTables' server-side processing mode.
         "order": [], //Initial no order.

         // Load data for the table's content from an Ajax source
         "ajax": {
            "url": "<?php echo site_url('c_psm_kab/ajax_list1')?>",
            "type": "POST"
         },

         //Set column definition initialisation properties.
         "columnDefs": [{
               "targets": [-1], //last column
               "orderable": false, //set not orderable
            },
            {
               "targets": [-2], //2 last column (photo)
               "orderable": false, //set not orderable
            },
         ],

      });

      //datepicker
      $('.datepicker').datepicker({
         autoclose: true,
         format: "yyyy-mm-dd",
         todayHighlight: true,
         orientation: "top auto",
         todayBtn: true,
         todayHighlight: true,
      });

      //set input/textarea/select event when change value, remove class error and remove text help block 
      $("input").change(function () {
         $(this).parent().parent().removeClass('has-error');
         $(this).next().empty();
      });
      $("textarea").change(function () {
         $(this).parent().parent().removeClass('has-error');
         $(this).next().empty();
      });
      $("select").change(function () {
         $(this).parent().parent().removeClass('has-error');
         $(this).next().empty();
      });

   });


</script>