<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WP-Stars(unofficial)</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.13.0/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.13.0/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <?php wp_head();?>
</head>

<body><br><br>
	<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="header">
                    <div id="headerimg">
                        <img src="<?php header_image(); ?>" class="img-fluid" alt="header image" />
                    </div>
                <div>
            </div>
        </div>
    </div>


<div class="container">
    <div class="row">
        <div class="text-right col-sm-5">
            <h1 id="wpurl"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
        </div>
        <div class="text-left col-sm-7">
            <p id="description"><?php echo get_bloginfo( 'description' ); ?></p>
        </div>
    </div>
</div><hr>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <nav id="nav" class="navbar">
                <ul>
                    <li><h4><?php wp_list_pages( '&title_li=' ); ?></li></h4>
                    <li><h6><?php wp_list_categories( '&title_li=' ); ?></li></h6>
                </ul>
            </nav> 
        </div> 
    </div><br>
</div><hr>