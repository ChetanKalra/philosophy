<?php
    $sql = "SELECT * FROM categories";
    $categories = $con->query($sql);
?>

<header class="header">
    <div class="header__content row">

        <div class="header__logo">
            <a class="logo" href="index.html">
                <img src="images/logo.svg" alt="Homepage">
            </a>
        </div>

        <ul class="header__social">
            <li>
                <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </li>
        </ul> <!-- end header__social -->

        <a class="header__search-trigger" href="#0"></a>

        <div class="header__search">

            <form role="search" method="get" class="header__search-form" action="#">
                <label>
                    <span class="hide-content">Search for:</span>
                    <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>

            <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

        </div>  <!-- end header__search -->


        <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6">Site Navigation</h2>

            <ul class="header__nav">
                <li class="current"><a href="index.html" title="">Home</a></li>
                <li class="has-children">
                    <a href="#0" title="">Categories</a>
                    <ul class="sub-menu">
                        <?php
                            while($category = $categories->fetch_assoc())
                            {
                                echo "<li><a href='category.php'>". $category['name'] ."</a></li>";
                            }
                        ?>
                    </ul>
                </li>
                <li><a href="about.html" title="">Login</a></li>
                <li><a href="contact.html" title="">Register</a></li>
            </ul> <!-- end header__nav -->

            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

        </nav> <!-- end header__nav-wrap -->

    </div> <!-- header-content -->
</header>