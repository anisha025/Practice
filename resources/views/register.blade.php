<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <style>
        nav {
            background-color: black;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline;
        }

        nav li a {
            display: inline-block;
            padding: 10px;
            text-decoration: none;
            color: white;
            font-size: 22px;
        }

        nav li a:hover {
            background-color: #ccc;
            color: black;
        }

        section {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="vh-100 bg-image" style="
                background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');
            ">
        <nav>
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/register">REGISTER</a></li>
            </ul>
        </nav>

        <section>
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px">
                                <div class="card-body p-5">
                                    <h2 class="text-uppercase text-center mb-5">
                                        Create an account
                                    </h2>

                                    <form action="/registration" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-outline mb-4">
                                            <input type="text" placeholder="Your Name" id="form3Example1cg" class="form-control form-control-lg" name="name" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="file" id="form3Example1cg" name="image" class="form-control form-control-lg">

                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" placeholder="Your Email" id="form3Example3cg" class="form-control form-control-lg" name="email" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" placeholder="Your Address" name="address" id="form3Example4cg" class="form-control form-control-lg" />
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                                                Register
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>