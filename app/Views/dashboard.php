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

        .svg-icon svg {
            width: 20px;
        }

        .pict svg {
            width: 15px;
        }
    </style>
</head>
<title>Dashboard</title>
</head>

<body style="height:100vh;">
    <?php
    // $this->load->view('header');
    $role = $_SESSION['role'];
    $roleName = ($role == '1') ? 'Admin' : 'Member';
    ?>

    <div class="d-flex h-100">
        <nav class="nav__wrapper bg-white" style="flex-basis:250px;">
            <ul class="nav__list list-unstyled p-3" style="height:calc(100vh - 70px);">
                <li class="nav__brand">
                    <h4>Login App</h4>
                </li>
                <li>
                    <a class="active" href="<?php echo base_url(); ?>/dashboard">Dashboard</a>
                </li>
                <?php if ($roleName == 'Admin') { ?>
                    <li>
                        <a class="" href="<?php echo base_url(); ?>/user">User</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>/role">Role</a>
                    </li>
                <?php } ?>
            </ul>
            <a class="btn btn-danger d-block mx-3 mb-2" href="<?php echo base_url() ?>/login">Logout</a>
        </nav>
        <div class="main__wrapper">
            <div class="container-fluid px-4 py-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="greeting">
                        <h4>Welcome, <span class="text-capitalize"><?php echo $_SESSION['name'] ?></span></h4>
                        <h5 class="text-secondary">Have a good day</h5>
                    </div>
                    <div class="search__form">
                        <div class="d-flex">
                            <form>
                                <div class="input-group">
                                    <span class="input-group-text svg-icon bg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#6a6a6a" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#6a6a6a" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control border-start-0" placeholder="Search" />
                                </div>
                            </form>
                            <a class="btn btn-light ms-2" href="javascript:void(0);" onclick="Swal.fire({title: 'Info', text: 'This feature is currently under development!', icon: 'info'})">
                                <span class="svg-icon">
                                    <svg style="width:25px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#606060" />
                                            <rect fill="#606060" opacity="0.3" x="10" y="16" width="4" height="4" rx="2" />
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="task__wrapper mt-5">
                    <div class="task__head d-flex justify-content-between">
                        <h6>My Task</h6>
                        <a href="javascript:void(0);" onclick="Swal.fire({title: 'Info', text: 'This feature is currently under development!', icon: 'info'})" class="link-primary text-decoration-none">See all</a>
                    </div>
                    <div class="task__list mt-2 d-flex flex-wrap">
                        <div class="shadow-sm bg-white border-success rounded-4 me-4 mb-3 p-4" style="width:350px;height:250px;border:0;border-top:7px;border-style:solid;">
                            <div class="d-flex justify-content-between">
                                <h5>To Do</h5>
                                <a class="link-secondary">
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#333333" cx="12" cy="5" r="2" />
                                                <circle fill="#333333" cx="12" cy="12" r="2" />
                                                <circle fill="#333333" cx="12" cy="19" r="2" />
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <label class="fs-6 text-secondary mt-2">Low-fidelity (wireframe) design - mobile</label>
                            <div class="d-flex justify-content-between my-4">
                                <div class="task__user d-flex align-items-center">
                                    <span class="svg-icon me-2">
                                        <svg style="width:15px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" opacity="0.3" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                    <label class="text-secondary" style="font-size:14px;">Paul</label>
                                </div>
                                <div class="task__date d-flex align-items-center">
                                    <span class="svg-icon me-2">
                                        <svg style="width:15px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M12,22 C7.02943725,22 3,17.9705627 3,13 C3,8.02943725 7.02943725,4 12,4 C16.9705627,4 21,8.02943725 21,13 C21,17.9705627 16.9705627,22 12,22 Z" fill="#000000" opacity="0.3" />
                                                <path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000" opacity="0.5" />
                                            </g>
                                        </svg>
                                    </span>
                                    <label class="text-secondary" style="font-size:14px;">01 August</label>
                                </div>
                            </div>
                            <label class="badge text-bg-success p-2">Research</label>
                        </div>
                        <div class="shadow-sm bg-white border-warning rounded-4 me-4 mb-3 p-4" style="width:350px;height:250px;border:0;border-top:7px;border-style:solid;">
                            <div class="d-flex justify-content-between">
                                <h5>To Do</h5>
                                <a class="link-secondary">
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#333333" cx="12" cy="5" r="2" />
                                                <circle fill="#333333" cx="12" cy="12" r="2" />
                                                <circle fill="#333333" cx="12" cy="19" r="2" />
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <label class="fs-6 text-secondary mt-2">Low-fidelity (wireframe) design - mobile</label>
                            <div class="d-flex justify-content-between my-4">
                                <div class="task__user d-flex align-items-center">
                                    <span class="svg-icon me-2">
                                        <svg style="width:15px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" opacity="0.3" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                    <label class="text-secondary" style="font-size:14px;">Paul</label>
                                </div>
                                <div class="task__date d-flex align-items-center">
                                    <span class="svg-icon me-2">
                                        <svg style="width:15px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M12,22 C7.02943725,22 3,17.9705627 3,13 C3,8.02943725 7.02943725,4 12,4 C16.9705627,4 21,8.02943725 21,13 C21,17.9705627 16.9705627,22 12,22 Z" fill="#000000" opacity="0.3" />
                                                <path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000" opacity="0.5" />
                                            </g>
                                        </svg>
                                    </span>
                                    <label class="text-secondary" style="font-size:14px;">01 August</label>
                                </div>
                            </div>
                            <label class="badge text-bg-warning p-2">Planning</label>
                        </div>
                    </div>
                </div>
                <?php if ($roleName == 'Admin') { ?>
                    <div class="team__wrapper mt-5">
                        <div class="team__head d-flex justify-content-between">
                            <h6>My Team</h6>
                            <a href="javascript:void(0);" onclick="Swal.fire({title: 'Info', text: 'This feature is currently under development!', icon: 'info'})" class="link-primary text-decoration-none">See all</a>
                        </div>
                        <div class="team__table mt-2">
                            <table class="table">
                                <thead>
                                    <tr class="bg-white">
                                        <th scope="col">Name</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Ratings</th>
                                        <th scope="col">Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="bg-primary rounded-circle me-2 pict" style="width:25px;height:25px;padding: 0px 5px">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#ffffff" fill-rule="nonzero" />
                                                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#ffffff" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span>Rijal</span>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-success">Member</span></td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-secondary" role="progressbar" aria-label="Example with label" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                            </div>
                                        </td>
                                        <td><span class="text-info fw-bold">WFH</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="bg-primary rounded-circle me-2 pict" style="width:25px;height:25px;padding: 0px 5px">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#ffffff" fill-rule="nonzero" />
                                                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#ffffff" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span>Sherlina</span>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-success">Member</span></td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-secondary" role="progressbar" aria-label="Example with label" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                            </div>
                                        </td>
                                        <td><span class="text-success fw-bold">WFO</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="bg-primary rounded-circle me-2 pict" style="width:25px;height:25px;padding: 0px 5px">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#ffffff" fill-rule="nonzero" />
                                                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#ffffff" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span>Dewa</span>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-warning">Admin</span></td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-secondary" role="progressbar" aria-label="Example with label" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                            </div>
                                        </td>
                                        <td><span class="text-success fw-bold">WFO</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <span class="bg-primary rounded-circle me-2 pict" style="width:25px;height:25px;padding: 0px 5px">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#ffffff" fill-rule="nonzero" />
                                                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#ffffff" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span>Adib</span>
                                            </div>
                                        </td>
                                        <td><span class="badge text-bg-success">Member</span></td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-secondary" role="progressbar" aria-label="Example with label" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                            </div>
                                        </td>
                                        <td><span class="text-info fw-bold">WFH</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>