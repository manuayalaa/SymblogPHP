<?php

use App\Models\Blog;

$comments = $data['comments'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
    <link href="css/screen.css" type="text/css" rel="stylesheet" />
    <link href="css/sidebar.css" type="text/css" rel="stylesheet" />
    <link href="css/blog.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/favicon.ico" />
</head>

<body>
    <section id="wrapper">
        <header id="header">
            <div class="top">
                <nav>
                    <ul class="navigation">
                    <li><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <?php
                            if ($_SESSION['auth'] == true) {
                                echo "<li><a href=\"/admin\">Admin</a></li>";
                                echo "<li><a href=\"/logout\">Logout</a></li>";
                            }else{
                                echo "<li><a href=\"/login\">Login</a></li>";
                            }
                            ?>
                    </ul>
                </nav>
            </div>
            <hgroup>
                <h2><a href="/">symblog</a></h2>
                <h3><a href="/">creating a blog in Symfony2</a></h3>
            </hgroup>
        </header>
        <section class="main-col">
            <h2>About Symblog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque ipsam autem sunt aut quo repudiandae necessitatibus corporis dolores quibusdam incidunt laudantium vero ex ullam placeat, voluptates, blanditiis, sint minus asperiores. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, explicabo ut placeat natus rerum nostrum deleniti architecto ab dolorum eum harum assumenda suscipit tempora saepe laboriosam non perspiciatis adipisci laborum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit amet aperiam, quas, velit saepe quos quaerat ipsum, laborum voluptatem libero exercitationem? Maiores, excepturi! Quia delectus voluptatibus hic, ipsam debitis reiciendis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores veritatis nulla sit impedit possimus molestias repudiandae fuga recusandae similique vero et illo pariatur dolore incidunt id ad mollitia, adipisci autem.</p>
        </section>
        <aside class="sidebar">
            <section class="section">
                <header>
                    <h3>Tag Cloud</h3>
                </header>
                <p class="tags">
                    <span class="weight-1">magic</span>
                    <span class="weight-5">symblog</span>
                    <span class="weight-4">movie</span>
                </p>
            </section>
            <section class="section">
                <header>
                    <h3>Latest Comments</h3>
                </header>
                <article class="comment">
                    <header>
                        <p class="small"><span class="highlight">Carlos Aguilera</span> commented on
                            <a href="#">A day with Symfony2</a>
                        </p>
                    </header>
                    <?php
                    foreach ($comments as $comment) {
                        foreach ($comment as $comentario) {
                            echo "<header>
                                <p class=\"small\"><span class=\"highlight\">" . $comentario->user . "</span> commented on
                                <a href=\"#\">" . Blog::find($comentario->blog_id)->title . "</a>
                                </p>
                            </header>
                            <p>" . $comentario->comment . "</p>";
                        }
                    }

                    ?>
                </article>
            </section>
        </aside>
        <div id="footer">
            dwes symblog - created by <a href="#">dwes</a>
        </div>
    </section>
</body>

</html>