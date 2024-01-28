<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            html,body{
                height: 100%;
                width: 100%;
            }
        </style>
        <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="col-10 mt-5 fixed-top py-5" style="left:auto" id="content-wrapper">
            <div class="container">
                <h3>Users</h3>
                <table class="table" id="table">
                    <thead>
                        <tr>
                            <th scope="col">
                                <button class="btn btn-light btn-sm">
                                    <i class="bi bi-plus-lg"></i>
                                </button>
                            </th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <button class="btn btn-light btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </th>
                            <td data-name="name">Mark</td>
                            <td data-email="email">Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <nav class="col-10 fixed-top navbar navbar-expand-lg navbar-light bg-light" style="left:auto" id="navbar">
            <div class="container-fluid">
                <span class="fs-4" id="btn-toggle-sidebar">
                    <i class="bi bi-list"></i>
                </span>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="dropdownUser1">
                        <li>
                            <a class="dropdown-item" href="#">Profile</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Sign out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-2 h-100 fixed-top bg-dark" id="sidebar">
            <div class="d-flex flex-column flex-shrink-0 px-3 text-white">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none py-2">
                    <span class="bi me-2 fs-4">
                        <i class="bi bi-envelope-heart"></i>
                    </span>
                    <span class="fs-4">WebInvitation</span>
                </a>

                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">
                            <i class="bi bi-people"></i> Master User </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" aria-current="page">
                            <i class="bi bi-gear-fill"></i> Master System </a>

                    </li>
                </ul>
            </div>
        </div>

        <script>
            $('#btn-toggle-sidebar').click(function(){
                $('#sidebar').toggle();
                $('#navbar').toggleClass('col-12');
                $('#content-wrapper').toggleClass('col-12');

            });

            function fillTableRow(json){
                let clone = $('#table').find('tbody').find('tr').first().clone();
                clone.find('[data-name]').text(json.name);
                clone.find('[data-email]').text(json.email);
                return clone;
            }

            function loadTableBody(data){
                let convertedData = data.map((item) => {
                    return fillTableRow(item)
                });
                $('#table').find('tbody').html(convertedData);
            }

            axios.get('/api/users')
            .then(function(response) {
                console.log(response);
                let items = response.data.data;
                loadTableBody(items);
            })
            .catch(function(error) {
                // handle error
                console.log(error);
            })

        </script>


    </body>
</html>
