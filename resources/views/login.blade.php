<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container{
            margin-top: 12%;
        }

        .col-4 {
            padding: 20px;
            border-radius: 5px;
            background-color: #ebecf4;
            
        }

        .btn {
            background-color: #4e73df;
            color: white;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <form action="{{ route('authenticate') }}" method="POST" >
                    @csrf
                    <h4 class="text-center">Login</h4>
                    <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                    <label for="pasword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="pasword">
                    </div>
                    <button type="submit" class="btn">Login</button>
                </form>
        </div>
        </div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>