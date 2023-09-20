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
    <form action="<?=base_url()?>welcome/save" method="POST">
    <div class="row mt-5">
        <div class="col-lg-12">
            <label for="">Student Number</label>
            <input type="text" name="studnum" class="form-control">
            <span class="text-danger"><?=form_error("studnum")?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label for="">First Name</label>
            <input type="text" name="fname" class="form-control">
            <span class="text-danger"><?=form_error("fname")?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label for="">Middle Name</label>
            <input type="text" name="mname" class="form-control">
            <span class="text-danger"><?=form_error("mname")?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label for="">Last Name</label>
            <input type="text" name="lname" class="form-control">
            <span class="text-danger"><?=form_error("lname")?></span>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-12">
            <button class="btn btn-success">Insert</button>
        </div>
    </div>
    </form>

    <div class="row mt-5">
        <div class="col-lg-12">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Student Number</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- dito namn ganito mag display ng data mo galing sa controller mo
         kung mapansin mo merong $display na nka sulat kung matandaan mo
         yan yung na declare natin sa controller mo yung $data["display"]
         tapos need m foreach para mag loop sya then nag assign din ako ng $row
         para mag hiwalay hiwalay na lahat ng nka array sa loob ng $display
         tapos kung mapansin mo $row na ang pag disimenate ko sa mga td nya
         then sa loon nung "" is yung column name dun sa database mo and ok na
         yan yung procedure para mag link ang MODEL,VIEW,CONTROLLER so nagamit nyu
         na ang MVC ng codeigniter. :)
    --> 
    <?php foreach($display as $row){ ?>
    <tr>
      <td><?=$row["student_number"]?></td>
      <td><?=$row["firstname"]?></td>
      <td><?=$row["middlename"]?></td>
      <td><?=$row["lastname"]?></td>
      <td><a href="<?=base_url()?>welcome/update/<?=$row["id"]?>" class="btn btn-info mx-1">Update</a><a href="<?=base_url()?>welcome/delete/<?=$row["id"]?>" onclick="return confirm('Are you sure want to Delete this Record?')" class="btn btn-danger mx-1">Delete</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
        </div>
    </div>
</div>
    
</body>
</html>