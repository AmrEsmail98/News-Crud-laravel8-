<!DOCTYPE html>
<head>

<title> Add News</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




</head>
<body>
    <section style="padding-top:50px">
        <div style="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                           <h1> All News Today <a href="/add-New" class="btn btn-outline-success"> Add NEWS </a> </h1>
                        </div>
                        <div class="card-body">
                            @if(Session::has('New_deleted'))
                            <div class="alert alert-danger" role="alert">
                               {{Session::get('New_deleted')}}
                              </div>
                              @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Title English</th>
                                        <th>Title Arabic</th>
                                        <th>body English</th>
                                        <th>body Arabic</th>
                                        <th>Photos</th>
                                        <th>Created_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach ($News as $new )
                                   <tr>
                                       <td>{{$new->title_English}}</td>
                                       <td>{{$new->title_Arabic}}</td>
                                       <td>{{$new->body_English}}</td>
                                       <td>{{$new->body_Arabic}}</td>
                                       <td><img src="{{asset('images')}}/{{$new->photo}}" style="max-width:60px;"/></td>
                                       <td>{{$new->created_at}}</td>
                                        <td> <a href="/edit-New/{{$new->id}}" class="btn btn-outline-info">Edit</a>
                                         <a href="/delete-New/{{$new->id}}" class="btn btn-outline-danger">Delete</a> </td>

                                    </tr>
                                 @endforeach
                                </tbody>
                            </table>
                            </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 {{-- <script>src"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"</script> --}}
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>
</html>
