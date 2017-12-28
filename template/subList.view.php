<div class="content-box-large">
  <div class="panel-heading">
    <div class="panel-title">Subscriber List </div>
  </div>
  <div class="panel-body">
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Company</th>
        <th>Phone</th>
        <th>To</th>
        <th>From</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; if($rows){foreach($rows as $row){?>
      <tr class="gradeA">
        <td><?= $i++ ?></td>
        <td class="text-center">
          <p><?= $row['name']?></p>
          <p class="text-danger"><?= $row['profession']?></p>
        </td>
        <td class="center" style="width:20%"><?= $row['company']?></td>
        <td class="center"><?= $row['phone']?></td>
        <td class="center"><?= $row['toDate']?></td>
        <td class="center"><?= $row['fromDate']?></td>
        <td class="text-center">
          <?php if($row['status'] == 1){?>
            <span class="label label-success">Active</span>
          <?php }else{ ?>
            <span class="label label-warning">Inactive</span>
          <?php }?>
        </td>
        <td class="text-center">
          <a href="" class="text-primary">
            <i class="fa fa-eye"></i>
          </a>
          &nbsp;&nbsp;
          <a href="editSubs.php?id=<?= $row['s_id']?>" class="text-warning">
            <i class="fa fa-pencil-square-o"></i>
          </a>
        </td>
      </tr>
    <?php } } ?>
    </tbody>
  </table>
  </div>
</div>
