<?php
include("../includes/header.php");
?>
<link rel="stylesheet" type="text/css" href="../dist/css/profile_style.css">
<div class="content-wrapper">
  <section class="content-header" style="background-color: #fbfbfb; padding: 5px; border-bottom:solid 1px;">
    <h4>
      <b>Passager</b>
      <small>self service</small>
    </h4>
    <ol class="breadcrumb">
      <b> <?php echo date('D, jS M ') ;?></b>
    </ol>
  </section>
  <section class="content">
    <p>
      <btn class="btn btn-info btn-sm" data-toggle="modal" data-target="#add_booking"><i class="fa fa-plus">
          New</i></btn>
      <a href="#" target="_blank" class="btn btn-default btn-sm"><i class="fa fa-print"></i> Print</a>
    </p>

    <!-- Modal -->
    <div class="modal fade" id="add_booking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <form id="hl_form" method="post">
            <input type="hidden" id="form_name" name="form_name" value="add_user" />
            <input type="hidden" id="edit_id" name="edit_id" value="0" />

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><strong>New Booking</strong></h4>
            </div>
            <div class="modal-body">
              <div class="alert icon-alert with-arrow alert-success form-alter" role="alert" style="display:none;">
                <i class="fa fa-fw fa-check-circle"></i>
                <strong> Success ! </strong> Data saved successfully.
              </div>
              <div class="alert icon-alert with-arrow alert-danger form-alter" role="alert" style="display:none;">
                <i class="fa fa-fw fa-times-circle"></i>
                <strong> Note !</strong> Data saving failed.
              </div>
              <div class="alert icon-alert with-arrow alert-light form-alter" role="alert" style="display:none;">
              </div>

              <div class="form-group row">
                <div class="form-group col-xs-3 required">
                  <label for="date">Date</label>
                  <input type="text" id="datepicker" name="datepicker" class="form-control" placeholder="select date"
                    required="required" />
                </div>

                <div class="form-group col-xs-3 required">
                  <label for="From">From</label>
                  <select class="form-control selectpicker show-tick" id="from" name="from" data-live-search="true"
                    required="required">
                    <option value="">-- select --</option>
                    .
                  </select>
                </div>
                <div class="form-group col-xs-3 required">
                  <label for="To">To</label>
                  <select class="form-control selectpicker show-tick" id="to" name="to" data-live-search="true"
                    required="required">
                    <option value="">-- select --</option>
                  </select>
                </div>
                <div class="form-group col-xs-3 required">
                  <label for="Bus Time">Time</label>
                  <select class="form-control selectpicker show-tick" id="bus_time" name="bus_time"
                    data-live-search="true" required="required">
                    <option value=""> --Select-- </option>
                  </select>
                </div>
                <div class="form-group col-xs-3 required">
                  <input type="hidden" id="charges" name="charges" class="form-control" />
                </div>
                <div class="form-group col-xs-3 required">
                  <input type="hidden" id="bus_reg" name="bus_reg" class="form-control" />
                </div>
              </div>

            </div>

            <div class="clearfix"></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info btn-form-action btn-submit">Submit</button>
              <button type="button" class="btn btn-danger  btn-form-action btn-reset">Clear</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>
</div>
<?php
include("../includes/footer.php");
?>
<script>
$('#datepicker').datepicker({
  dateFormat: "yy-mm-dd",
  maxDate: '+1m +10d',
  minDate: -1
})
$('#datepicker').change(function() {
  var routeId = $(this).val();
  $('#from').find('option').not(':first').remove();
  $('#to').find('option').not(':first').remove();
  $.ajax({
    url: 'ajax_booking.php',
    type: 'post',
    data: {
      request: 3,
      routeId: routeId
    },
    dataType: 'json',
    success: function(response) {
      var len = response.length;
      var price = response.price;
      for (var i = 0; i < len; i++) {
        var id = response[i]['id'];
        var dest_from = response[i]['dest_from'];
        var dest_to = response[i]['dest_to'];
        var id = response[i]['id'];
        $("#from").append("<option value='" + dest_from + "'>" + dest_from +
          "</option>");
        $("#to").append("<option value='" + dest_to + "'>" + dest_to +
          "</option>");
      }
    }
  })
});
</script>