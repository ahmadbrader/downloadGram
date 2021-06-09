<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col col-lg-6">
                <form method="post" action="/instagram/generate">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">URL Photo / Video Instagram</label>
                        <input type="text" class="form-control" name="url" aria-describedby="emailHelp" id="url">
                    </div>
                    <button type="button" onclick="call_generate()" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col col-lg-6" id="konten">
                
              
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col col-lg-6" id="tombol">
                
              
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    function call_generate(){
        var url = $('#url').val();
        $.ajax({
            type:'post',
            url: '/api/instagram/generate',
            data: {
                'url' : url
            },
            success: function(data){
                window.open(data['url'], 'blank');
                }
        });
    }
    
</script>
</html>
