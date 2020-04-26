<?php
    require_once "common/config.php";

    $postId = $_GET['id'];

    $sql = "SELECT * FROM posts WHERE id = " . $postId;
    $post = $con->query($sql)->fetch_assoc();

    $sql = "SELECT * FROM categories WHERE id = " . $post['category_id'];
    $postCategory = $con->query($sql)->fetch_assoc();

    $sql = "SELECT * FROM users WHERE id = " . $post['user_id'];
    $postUser = $con->query($sql)->fetch_assoc();

    $sql = "SELECT * FROM comments WHERE post_id = " . $post['id'];
    $comments = $con->query($sql);

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Standard Post Format - Philosophy</title>
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
    <div class="s-pageheader">

        <?php include 'common/header.php'; ?>

    </div> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?php echo $post['title'] ?>
                </h1>
                <ul class="s-content__header-meta">
                    <li class="date"><?php echo date('M d, Y', strtotime($post['created_at'])) ?></li>
                    <li class="cat">
                        In <a href="#0"><?php echo $postCategory['name'] ?></a>
                    </li>
                </ul>
            </div> <!-- end s-content__header -->
    
            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <img src="<?php echo $post['image'] ?>" alt="" >
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">

                <p class="lead">
                    <?php echo $post['content'] ?>
                </p>
                
                

                <div class="s-content__author">
                    <img style="width: 100%;" src="<?php echo $postUser['profile_image'] ?>" alt="">

                    <div class="s-content__author-about">
                        <h4 class="s-content__author-name">
                            <a href="#0"><?php echo $postUser['name'] ?></a>
                        </h4>
                    
                        <p>Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat impedit laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>

                    </div>
                </div>

            </div> <!-- end s-content__main -->

        </article>


        <!-- comments
        ================================================== -->
        <div class="comments-wrap">

            <div id="comments" class="row">
                <div class="col-full">

                    <h3 class="h2">5 Comments</h3>

                    <!-- commentlist -->
                    <ol class="commentlist">

                        <?php
                            while($comment = $comments->fetch_assoc())
                            {
                                $sql = "SELECT * FROM users WHERE id = " . $comment['user_id'];

                                $commentUser = $con->query($sql)->fetch_assoc();

                                echo "<li class='depth-1 comment'>

                                        <div class='comment__avatar'>
                                            <img width='50' height='50' class='avatar' src='". $commentUser['profile_image'] ."' alt=''>
                                        </div>
            
                                        <div class='comment__content'>
            
                                            <div class='comment__info'>
                                                <cite>".$commentUser['name']."</cite>
            
                                                <div class='comment__meta'>
                                                    <time class='comment__time'>". date('M d, Y', strtotime($comment['created_at'])) ."</time>
                                                </div>
                                            </div>
            
                                            <div class='comment__text'>
                                            <p>". $comment['comment'] ."</p>
                                            </div>
            
                                        </div>
            
                                    </li>";
                            }
                        ?>
                        

                    </ol> <!-- end commentlist -->


                    <!-- respond
                    ================================================== -->
                    <div class="respond">

                        <h3 class="h2">Add Comment</h3>

                        <form name="contactForm" id="contactForm" method="post" action="">
                            <fieldset>

                                <div class="message form-field">
                                    <textarea name="comment" id="cMessage" class="full-width" placeholder="Your Message"></textarea>
                                </div>

                                <button type="submit" class="submit btn--primary btn--large full-width">Submit</button>

                            </fieldset>
                        </form> <!-- end form -->

                    </div> <!-- end respond -->

                </div> <!-- end col-full -->

            </div> <!-- end row comments -->
        </div> <!-- end comments-wrap -->

    </section> <!-- s-content -->


    <?php include 'common/footer.php'; ?>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>