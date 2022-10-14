<?php 
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html>

<head>
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="pos-f-t">
        <nav class="navbar navbar-dark bg-dark p-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <h6>Logged user: <?php echo $_SESSION['user_name']; ?></h6> -->
            <a href="function/logout.php">Logout</a>
        </nav>
    </div>
    <!-- <div class="d-flex justify-content-between" id="header">
        <h6 class="justify-content-start">Logged user: <?php echo $_SESSION['user_name']; ?></h6>c
        <a href="function/logout.php">Logout</a>
    </div> -->
    <h6 class="justify-content-start p-3">Logged user: <?php echo $_SESSION['user_name']; ?></h6>
    <!-- <h6>Email: <?php echo $_SESSION['email']; ?></h6> -->
    <div class="container my-2">
        <nav class="navbar navbar-light bg-light justify-content-start">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </nav>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Title</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>john.doe@gmail.com</td>
                    <td>Software engineer</td>
                    <td>IT department</td>
                    <td>Active</td>
                    <td>Senior</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">
                            Edit
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Alex Ray</td>
                    <td>alex.ray@gmail.com</td>
                    <td>Consultant</td>
                    <td>Finance</td>
                    <td>Onboarding</td>
                    <td>Junior</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">
                            Edit
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Kate Hunington</td>
                    <td>kate.hunington@gmail.com</td>
                    <td>Designer</td>
                    <td>UI/UX</td>
                    <td>Awaiting</td>
                    <td>Senior</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">
                            Edit
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>