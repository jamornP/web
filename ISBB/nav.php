<?php require('function.php'); ?>

<section class="container">
    <img src="./images/header01.png" alt="" srcset=""
        class="w-100">

</section>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            
                <a class="navbar-brand" href="#">18<sup>th</sup> ISBB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle
                        navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
           
            <div class="collapse navbar-collapse
                    justify-content-between fs-24" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $actionmenu['Home'];?>" aria-current="page" href="index.php">Home</a>
                    </li>
                   
                   
                    <li class="nav-item">
                        <a class="nav-link <?php echo $actionmenu['Program'];?>" href="Program.php">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $actionmenu['Registration'];?>" href="Registration.php">Registration</a>
                    </li>
                  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo $actionmenu['Other'];?>" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Other
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item " href="Paper.php">-
                            Call for paper</a></li>
                            <li><a class="dropdown-item" href="Submission.php">-
                                    Submission</a></li>


                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $actionmenu['Organization'];?>" aria-current="page" href="Organization.php">Organizing Committee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $actionmenu['About'];?>" aria-current="page" href="About.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $actionmenu['Contact'];?>" href="Contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>