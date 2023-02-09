<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>News</title>
</head>
<body>
<div class="title">
        <center>
            <h1>News</h1>
        </center>
    </div>
    <div class="body">
            <div class="row container-fluid">
                <div class="col-8">
                    <form action="/home/admin/news/create" method="GET">
                    <button style="margin-left: 220px;" type="submit" class="btn btn-outline-primary">Add News</button>
                    </form>
                </div>
            </div>
            <!-- <form action="/home" method="GET">
                <div class="row mt-5 mb-5" style="padding:0px 250px;" >
  <div class="col-8 input-group">
    <input type="search" class="form-control" id="exampleInputEmail1" name="search" aria-describedby="emailHelp" placeholder="Search">
    <button type="submit" class="btn btn-primary">Search</button>
  </div>
  </div>
</form> -->
        <div class="row justify-content-center">
            <div class="col-8">                
                <table class="table table-bordered mt-2">
                        <tr class="table-primary text-center">
                        <td style="width: 70px">News Title</td>
                        <td style="width: 70px">The News</td>
                        <td style="width: 170px">Actions</td>
                    </tr>
                    @foreach ($news as $n)
                    <tr>
                        <td>{{ $n->title }}</td>
                        <td>{{ $n->news }}</td>                        
                        <td>
                        <form action="/home/admin/news/{{$n->id}}/edit">
                        <button type="submit" class="btn btn btn-outline-warning btn-sm">Edit</submit>
                        </form>
                        <form action="/home/admin/news/{{$n->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                        <button type="submit" class="btn btn btn-outline-danger btn-sm" style="margin-left: 50px; margin-top: -62px;">Hapus</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>