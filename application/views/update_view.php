<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
    rel="stylesheet"
    />
    <title>Document</title>
</head>
<body>

<div class="container">
    <?php foreach($info as $row){ ?>
    <form action="<?=base_url()?>welcome/save_update/<?=$this->uri->segment(3)?>" method="POST">
    <div class="row mt-5">
        <div class="col-lg-12">
            <label for="">Student Number</label>
            <input type="text" name="studnum" class="form-control" value="<?=$row["student_number"]?>">
            <span class="text-danger"><?=form_error("studnum")?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label for="">First Name</label>
            <input type="text" name="fname" class="form-control" value="<?=$row["firstname"]?>">
            <span class="text-danger"><?=form_error("fname")?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label for="">Middle Name</label>
            <input type="text" name="mname" class="form-control" value="<?=$row["middlename"]?>">
            <span class="text-danger"><?=form_error("mname")?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label for="">Last Name</label>
            <input type="text" name="lname" class="form-control" value="<?=$row["lastname"]?>">
            <span class="text-danger"><?=form_error("lname")?></span>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-12">
            <button class="btn btn-success">Update</button>
        </div>
    </div>
</form>
  <?php } ?>  
</body>
</html>