<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custome CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/styles.css">

    <title>
        <?php if (APP_NAME) {
            $title = APP_NAME;
        }
        if (isset($heading)) {
            $title = $title . "-" . $heading;
        }
        echo $title;
        ?>
    </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // fade #message if exists 
            if($('#message').length){ 
                $( "#message" ).delay(3000).fadeOut({}, 3000); 
            }
        })
    </script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo base_url()?>"> <i class="material-icons">home</i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Articles
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url(); ?>crud">Read</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>crud/write">Write</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Birds
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url(); ?>birds">Birds Main</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>birds/loon">Loon</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>birds/sparrow">Sparrow</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>birds/falcon">Falcon</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <?php if ($this->ion_auth->logged_in()) : ?> 
                        <?php
                            $user_id = $this->ion_auth->user()->row()->id ; 
                            $username = $this->ion_auth->user()->row()->username ; 
                        ?>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Logged in as <?php echo $username; ?> 
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php $this->ion_auth->logout(); ?>">Log Out</a>
                                
                            </div>
                        <?php else: ?> 
                            <a class="nav-link" href="<?php echo base_url()?>auth/login">Login </a> 
                        <?php endif; ?>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <?php $message = $this->session->flashdata('message'); ?> 
        <?php if ($message) : ?> 
            <h3 class="alert alert-primary" id="message">
                <i class="material-icons">thumb_up</i>
                <?php echo $message ?>
            </h3> 
        <?php endif; ?>
        <!-- This ends the header include -->