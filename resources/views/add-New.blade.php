<!DOCTYPE html>
<head>

<title> Add News</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">




</head>
<body>
    <section style="padding-top:50px">
        <div style="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card">
                        <div class="card-header">
                            Add New
                        </div>
                        <div class="card-body">
                            @if(Session::has('News_added'))
                            <div class="alert alert-success" role="alert">
                               {{Session::get('News_added')}}
                              </div>
                              @endif
                            <form method="POST" action="{{route('News.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title English">Title English</label>
                                    <input type="text" name="title English" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="title Arabic">Title Arabic</label>
                                    <input type="text" name="title Arabic" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="body English">body English</label>
                                    <input type="text" name="body English" class="form-control"/>
                                </div>
                                  <div class="form-group">
                                    <label for="body Arabic">body Arabic</label>
                                    <input type="text" name="body Arabic" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Choose New Image</label>
                                    <input type="file" name="photo" class="form-control" onchange="previewFile(this)"/>
                                    <img id="previewImg" alt="New image" style="max-width:130px;margin-top:20px;"/>
                                </div>
                            <button type="submit" class="btn btn-outline-info" style="margin-top: 20px">Add New</button>
                            <a class="btn btn-outline-dark" style="margin-top: 20px" href="/all-News">All News Today </a>
                            </form>
                        </div>
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
     <script>

         function previewFile(input){
             var file=$("input[type=file]").get(0).files[0];
             if(file)
             {
                 var reader = new FileReader();
                 reader.onload = function(){
                     $('#previewImg').attr("src",reader.result);
                 }
                 reader.readAsDataURL(file);
             }
         }
         </script>
</body>
</html>
