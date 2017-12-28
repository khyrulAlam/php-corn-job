<div class="content-box-large">
  <div class="panel-heading">
    <?php if(isset($message['success'])){?>
      <div class="alert alert-success" role="alert">
        <p><?php echo  $message['success']?></p>
      </div>
    <?php }else if(isset($message['error'])){?>
      <div class="alert alert-danger" role="alert">
        <p><?php echo  $message['error']?></p>
      </div>
    <?php }?>

        <div class="panel-title"> ADD SUBSCRIBER</div>

        <div class="panel-options">
          <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
          <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
        </div>
    </div>
  <div class="panel-body">
    <form class="form-horizontal" role="form" method="post">

      <div class="form-group">
        <label class="col-sm-2 control-label">Name: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Name" name="name">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Profession: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Profession" name="profession">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Company: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Company" name="company">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Phone" name="phone">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Address</label>
        <div class="col-sm-10">
          <textarea class="form-control" placeholder="Textarea" rows="8" name="address"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">To</label>
        <div class="col-sm-4">
          <input type="date" class="form-control" name="toDate">
        </div>
        <label class="col-sm-2 control-label">From</label>
        <div class="col-sm-4">
          <input type="date" class="form-control" name="fromDate">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-info">Submit</button>
        </div>
      </div>

    </form>
  </div>
</div>
