<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- local link for bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <!-- cnd for bootstrap -->   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body class="bg-light">
    <div style="height: 100vh;">
    <div class="row h-100 m-0">
        <div class="card w-25 my-auto mx-auto">
            <div class="card-header bg-white border-0 py-3">
                <h1 class="text-center text-uppercase">LOGIN</h1>
            </div>
            <div class="card-body">
                <form action="../actions/login.php" method="post">
                    <div class="mb-3">
                        <input type="text" name="username" placeholder="Username" required autofocus class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" placeholder="Password" required class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
                <p class="text-center mt-3 small">
                    <a href="register.php" class="text-decoration-none">Create Account.</a>
                </p>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>