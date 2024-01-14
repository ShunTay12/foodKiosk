<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Order List</title>

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/fontawesome-free-6.5.1-web/css/all.css">
    <link rel="stylesheet" href="../node_modules/vendorStyle.css">


</head>
<body>
    <div class="navigation mb-4">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light mb-5 bg-gradient">
            <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="../images/LogoUMP-removebg-preview.png" class="object-fit-cover" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-3">
                            <a class="nav-link" aria-current="page" href="vendorManageMenu.php">Home</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link active" href="#">Order List</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="vendorDashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item ms-3 me-5">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                    </ul>
                </div>
                <a href="" class="login me-3">
                    <button type="button" class="btn btn-warning p-2">
                        <i class="fa-regular fa-user"></i>
                        Vendor
                    </button>
                </a>                      
            </div>
        </nav> 
    </div>

    <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-header bg-dark-subtle bg-gradient">
                                    <h4 class="text-black">
                                        Order List
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <table class='table table-bordered table-striped' id="platinum-list">
                                        <tr>
                                            <th>NO</th>
                                            <th class="text-center">User Name</th>
                                            <th class="text-center">Phone Number</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Order Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>

                                        <?php
                                            
                                        ?>
                                        
                                        <tr>
                                            <td class="fw-bold align-middle">1</td>
                                            <td class="align-middle">PRAVEEN SARASWATI A/L PALENGGAN</td>
                                            <td class="text-center align-middle">018-1357911</td>
                                            <td class="text-center align-middle">praveen@gmail.com</td>
                                            <td class="d-flex justify-content-center"><button type="button" class="btn btn-outline-primary rounded-0 disabled">Ordered</button></td>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="col-auto">
                                                        <form action="" method="POST">
                                                            <input type="hidden" name="id" value="<?php echo $vendorId; ?>">
                                                            <button type="submit" name="act" class="btn btn-success" value="Update" formaction="" formmethod="post">Update Status</button>
                                                        </form>   
                                                    </div>
                                                </div>                 
                                            </td>
                                        </tr>       
                                        
                                                   
                                    
                                    </table>  
                                         
                                </div>
                            </div>
                            
                        </div> 
                        
                    </div>
                    
                
                </div>
            </main>

    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/popper.min.js"></script>
    <script src="../node_modules/jquery-3.7.1.min.js"></script>
    <script src="../node_modules/script.js"></script>
    
</body>
</html>