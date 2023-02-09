<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create Project</title>
</head>
<body>
<center>
<div class="card" style="width: 18rem; margin-top:150px;">
  <div class="card-body">
    <h5 class="card-title"><center>Add Project</center></h5>
    <div class="card-text">
    <form action="/home/admin/projects" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Add Title Project</label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">            
            <label for="exampleInputEmail1">Add Photo Project</label>
            <input name="photo" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-outline-primary" style="margin-top: 10px;">Save</button>
    </form>
    </div>
  </div>
</div>
</center>
</body>
</html>