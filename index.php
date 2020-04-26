<?php
    require_once 'common/config.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Philosophy</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">

        
        <?php include_once 'common/header.php'; ?>

        <div class="pageheader-content row">
            <div class="col-full">

                <div class="featured">

                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('images/thumbs/featured/featured-guitarman.jpg');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Music</a></span>

                                <h1><a href="#0" title="">What Your Music Preference Says About You and Your Personality.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>December 29, 2017</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__big -->

                    <div class="featured__column featured__column--small">

                        <div class="entry" style="background-image:url('images/thumbs/featured/featured-watch.jpg');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Management</a></span>

                                <h1><a href="#0" title="">The Pomodoro Technique Really Works.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>December 27, 2017</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                          
                        </div> <!-- end entry -->

                        <div class="entry" style="background-image:url('images/thumbs/featured/featured-beetle.jpg');">

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">LifeStyle</a></span>

                                <h1><a href="#0" title="">Throwback To The Good Old Days.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>December 21, 2017</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->

                    </div> <!-- end featured__small -->
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div> <!-- end pageheader-content row -->

    </section> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class="s-content">
        
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                <?php
                    $sql = "SELECT * FROM posts";
                    $posts = $con->query($sql);

                    while($post = $posts->fetch_assoc())
                    {
                        $sql = "SELECT * FROM categories WHERE id = " . $post['category_id'];

                        $postCategory = $con->query($sql)->fetch_assoc();

                        echo "<article class='masonry__brick entry format-standard' data-aos='fade-up'>
                        
                                <div class='entry__thumb'>
                                    <a href='single.php?id=". $post['id'] ."' class='entry__thumb-link'>
                                        <img src='". $post['image'] ."' alt=''>
                                    </a>
                                </div>
                
                                <div class='entry__text'>
                                    <div class='entry__header'>
                                        
                                        <div class='entry__date'>
                                            <a href='single.php?id=". $post['id'] ."'>". date('M d, Y', strtotime($post['created_at'])) ."</a>
                                        </div>
                                        <h1 class='entry__title'><a href='single.php?id=". $post['id'] ."'>". $post['title'] ."</a></h1>
                                        
                                    </div>
                                    <div class='entry__excerpt'>
                                        <p>". substr($post['content'], 0, 100) ."...</p>
                                    </div>
                                    <div class='entry__meta'>
                                        <span class='entry__meta-links'>
                                            <a href='category.php'>". $postCategory['name'] ."</a>
                                        </span>
                                    </div>
                                </div>
                
                            </article>";
                    }
                ?>

                

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

    </section> <!-- s-content -->


    <?php include_once 'common/footer.php'; ?>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>