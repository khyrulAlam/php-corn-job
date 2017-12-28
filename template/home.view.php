<?php if($rows){ foreach($rows as $row) { ?>


<div class="col-md-4">
  <div class="content-box-large __min__height_415">
    <div class="panel-heading">
    <div class="panel-title bg-success">
      <span class="text-success"><?= $row['name']?></span>
      <p style="font-size: 10px;
    color: #92919196;
    font-family: monospace;"><?= $row['profession']?></p>
    </div>

    <div class="panel-options">
      <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
    </div>
  </div>
    <div class="panel-body">
      <div class="">
        <p style="font-weight: 600;
    color: #3c763da6;"><?= $row['company']?></p>
        <p><?= $row['address']?></p>
        <p><span class="glyphicon glyphicon-phone-alt"></span> <?= $row['phone']?></p>
        <p> <span class="glyphicon glyphicon-send"></span> <?= $row['email']?></p>
        <p class="duration">
          <span class="glyphicon glyphicon-certificate"></span>
          <?php
            $test = new DateTime($row['fromDate']);
            echo date_format($test, 'd M-Y');
          ?>
        </p>

      </div>
      <!-- <div class="months">
        <h5></h5>
        <ul class="nav nav-pills">
          <li class="active"><a href="#">Jan</a></li>
          <li class="active"><a href="#">Feb</a></li>
          <li class="active"><a href="#">Mar</a></li>
          <li><a href="#">Apr</a></li>
          <li><a href="#">May</a></li>
          <li class="active"><a href="#">Jun</a></li>
          <li><a href="#">Jul</a></li>
          <li><a href="#">Aug</a></li>
          <li><a href="#">Sep</a></li>
          <li><a href="#">Oct</a></li>
          <li><a href="#">Nov</a></li>
          <li><a href="#">Dec</a></li>
        </ul>
      </div> -->
    </div>
  </div>
</div>



<?php } } ?>
