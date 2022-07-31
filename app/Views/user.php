<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .nav__brand {
            margin-bottom: 40px;
            padding: 0 10px;
        }

        .nav__list li a {
            padding: 7px 21px;
            display: block;
            text-decoration: none;
            color: #3F4254;
        }

        .nav__list li a.active {
            border-radius: 5px;
            background-color: #5097ff;
            color: #f1f1f1;
        }

        .nav__list li a:not(.active):hover {
            color: var(--bs-link-color);
        }

        .main__wrapper {
            background-color: #edf2f8;
            /* display: flex;
            align-items: center;
            justify-content: center; */
            flex-grow: 1;
        }

        .table__action>* {
            margin-right: 7px;
        }

        .table__wrapper {
            margin-top: 25px;
        }

        .svg-icon svg {
            width: 20px;
        }
    </style>
</head>
<title>User</title>
</head>

<body style="height:100vh;">
    <div class="d-flex h-100">
        <nav class="nav__wrapper bg-white" style="flex-basis:250px;">
            <ul class="nav__list list-unstyled p-3" style="height:calc(100vh - 70px);"s>
                <li class="nav__brand">
                    <h4>Login App</h4>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>/dashboard">Dashboard</a>
                </li>
                <li>
                    <a class="active" href="<?php echo base_url(); ?>/user">User</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>/role">Role</a>
                </li>
            </ul>
            <a class="btn btn-danger d-block mx-3 mb-2" href="<?php echo base_url()?>/login" >Logout</a>
        </nav>
        <div class="main__wrapper">
            <div class="container-fluid">
                <div class="row align-items-start">
                    <div class="col-12 mt-5">
                        <div class="mx-3">
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a class="text-decoration-none" href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">User</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="mx-3 px-4 py-4 bg-white rounded">
                            <div class="table__action d-flex">
                                <a class="btn btn-light" href="javascript:void(0);" onclick="Swal.fire({title: 'Info', text: 'This feature is currently under development!', icon: 'info'})">
                                    <span class="svg-icon me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect fill="#6a6a6a" x="4" y="11" width="16" height="2" rx="1" />
                                                <rect fill="#6a6a6a" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" />
                                            </g>
                                        </svg>
                                    </span>
                                    Add
                                </a>
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search here.." />
                                        <span class="input-group-text svg-icon bg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#6a6a6a" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#6a6a6a" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <div class="table__wrapper">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone number</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Rijal</td>
                                            <td>rijal@binus.ac.id</td>
                                            <td>081242352343</td>
                                            <td>Member</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-warning btn-sm me-2 disabled">Edit</a>
                                                    <a class="btn btn-danger btn-sm disabled">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Sherlina</td>
                                            <td>sherlina@binus.ac.id</td>
                                            <td>085872312423</td>
                                            <td>Member</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-warning btn-sm me-2 disabled">Edit</a>
                                                    <a class="btn btn-danger btn-sm disabled">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Dewa</td>
                                            <td>dewa@binus.ac.id</td>
                                            <td>081238753218</td>
                                            <td>Admin</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-warning btn-sm me-2 disabled">Edit</a>
                                                    <a class="btn btn-danger btn-sm disabled">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Adib</td>
                                            <td>adib@binus.ac.id</td>
                                            <td>082345874323</td>
                                            <td>Member</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-warning btn-sm me-2 disabled">Edit</a>
                                                    <a class="btn btn-danger btn-sm disabled">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>