<div class="content-box-large">
  <div class="panel-heading">
      <div class="panel-title"> Edit SUBSCRIBER</div>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" role="form" method="post">

      <div class="form-group">
        <label class="col-sm-2 control-label">Name: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Name" name="name" value="<?= $row[0]['name']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Profession: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Profession" name="profession" value="<?= $row[0]['profession']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Company: </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Company" name="company" value="<?= $row[0]['company']?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Phone</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?= $row[0]['phone']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" placeholder="Email" name="email" value="<?= $row[0]['email']?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Address</label>
        <div class="col-sm-10">
          <textarea class="form-control" placeholder="Textarea" rows="8" name="address"><?= $row[0]['address']?></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">To</label>
        <div class="col-sm-4">
          <input type="date" class="form-control" name="toDate" value="<?= $row[0]['toDate']?>">
        </div>
        <label class="col-sm-2 control-label">From</label>
        <div class="col-sm-4">
          <input type="date" class="form-control" name="fromDate" value="<?= $row[0]['fromDate']?>">
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
