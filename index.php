<?php
include "query.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-Blade :: A project of Honda!!</title>
    <link rel="shortcut icon" href="./assets/img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- <link rel="stylesheet" href="./assets/plugin/bootstrap/bootstrap.css"> -->
</head>

<body onload="setmood()">
    <!--========== Navbar secetion Start =============-->
    <section class="header" id="home">
        <navbar class="container stickey" id="bgs">
            <a href="index.php"><img class="logo" src="./assets/img/logo.png" alt=""></a>
            <nav id="navigation">
                <ul class="nav_link">
                    <li><a href="#home" class="item active">Home</a></li>
                    <li><a href="#banner" class="item">Banner</a></li>
                    <li><a href="#forms" class="item">Forms</a></li>
                    <li><a href="#ajax" class="item">Data</a></li>
                    <li><a href="#ajax" class="item">Ajax</a></li>
                    <li><a href="#footer" class="item">Footer</a></li>
                </ul>
            </nav>
            <div class="button" onclick="clicked()">
                <div class="bar" id="barchng">
                    <div class="cercle" id="cercles"><img id="cngimg" class="night" src="./assets/img/pngwing.com.png"
                            alt=""></div>
                </div>
            </div>
            <div class="toggle_btn">
                <img class="toggler" src="./assets/img/align-center-svgrepo-com.svg" alt="">
            </div>
            <div id="navmenu" class="toggle_menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#banner">Banner</a></li>
                <li><a href="#forms">Forms</a></li>
                <li><a href="#ajax">Data</a></li>
                <li><a href="#ajax">Ajax</a></li>
                <li><a href="#footer">Footer</a></li>
            </div>
        </navbar>
    </section>
    <!--========== Navbar secetion End =============-->


    <!--========== Banner secetion Start =============-->
    <section class="carousel pos" id="banner">
        <button class="slider-button slider-button-prev" data-slide-direction="prev">&#8592</button>
        <button class="slider-button slider-button-next" data-slide-direction="next">&#8594</button>
        <ul class="slides">
            <li class="slide" data-active-slide>
                <img src="./assets/img/1.jpg" alt="Nature Image #1" />
            </li>
            <li class="slide">
                <img src="./assets/img/2.PNG" alt="Nature Image #2" />
            </li>
            <li class="slide">
                <img src="./assets/img/3.jpg" alt="Nature Image #3" />
            </li>
        </ul>
        <div class="slides-circles">
            <div data-active-slide></div>
            <div></div>
            <div></div>
        </div>
    </section>
    <!--========== Banner secetion End =============-->


    <!--========== Welcome secetion Start =============-->
    <section class="welcome" id="wel">
        <div class="welcome-msg">
            <p class="msg1">
                Welcome to <strong style="font-weight: 600;color: var(--primary-color);">Honda X-Blade</strong>
                With high performance which is available in the Bangladesh<br>
                As of my last knowledge update in January 2022, the Honda X-Blade is a motorcycle model manufactured by
                Honda Motorcycle and Scooter India (HMSI). Please note that there may have been new releases or updates
                after that date, so it's a good idea to check the latest information from Honda or authorized dealers
                for the most current details.

            </p>
            <p class="msg2">Honda X-Blade, including any updates, specifications, and features, it is recommended to
                check with Honda dealerships or visit the official Honda Motorcycle and Scooter India website.</p>
        </div>
        <div class="line"></div>
    </section>
    <!--========== Welcome secetion End =============-->


    <!--========== Form secetion Start =============-->
    <section class="about" id="forms">
        <div class="about-text">
            <h1 style="color: #0682a2;">Forms</h1>
            <hr>
        </div>
        <div class="input-section">
            <form action="" method="POST">
                <div class="columns">
                    <div class="column">
                        <div class="inputs">
                            <label for="">Enter Your Name</label><br>
                            <input type="text" name="name" id="name" value="<?= $name ?>"><br>
                            <p class="red" id=""><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></p><br>
                        </div>
                        <div class="inputs">
                            <label for="">Enter your Email</label><br>
                            <input type="text" name="email" id="email" value="<?= $email ?>"><br>
                            <p class="red" id=""><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></p><br>
                        </div>
                        <div class="inputs">
                            <label for="">Enter Phone Number</label><br>
                            <input type="text" name="phone" id="phone" value="<?= $phone ?>"><br>
                            <p class="red" id=""><?php echo isset($errors['phone']) ? $errors['phone'] : ''; ?></p><br>
                        </div>
                        <div class="inputs">
                            <label for="">Roll Number</label><br>
                            <input type="text" name="roll" id="roll" value="<?= $roll ?>"><br>
                            <p class="red" id=""><?php echo isset($errors['roll']) ? $errors['roll'] : ''; ?></p><br>
                        </div>
                        <div class="inputs">
                            <label for="">Department</label><br>
                            <input type="text" name="dept" id="dept" value="<?= $dept ?>"><br>
                            <p class="red" id=""><?php echo isset($errors['dept']) ? $errors['dept'] : ''; ?></p><br>
                        </div>
                    </div>
                    <div class="column">
                        <div class="inputs">
                            <label for="">Current Adreess</label><br>
                            <input type="text" name="c_adress" id="c_adress" value="<?= $c_adress ?>"><br>
                            <p class="red" id=""><?php echo isset($errors['c_adress']) ? $errors['c_adress'] : ''; ?>
                            </p><br>
                        </div>
                        <div class="inputs">
                            <label for="">Father Name</label><br>
                            <input type="text" name="f_name" id="f_name" value="<?= $f_name ?>"><br>
                            <p class="red" id=""><?php echo isset($errors['f_name']) ? $errors['f_name'] : ''; ?></p>
                            <br>
                        </div>
                        <div class="inputs">
                            <label for="">Mother Name</label><br>
                            <input type="text" name="m_name" id="m_name" value="<?= $m_name ?>"><br>
                            <p class="red" id=""><?php echo isset($errors['m_name']) ? $errors['m_name'] : ''; ?></p>
                            <br>
                        </div>
                        <div class="inputs">
                            <label for="">Parmanent Adress</label><br>
                            <input type="text" name="p_adress" id="p_adress" value="<?= $p_adress ?>"><br>
                            <p class="red" id=""><?php echo isset($errors['p_adress']) ? $errors['p_adress'] : ''; ?>
                            </p><br>
                        </div>
                        <div class="inputs">
                            <label for="">Working Field</label><br>
                            <input type="text" name="field" id="field" value="<?= $field ?>"><br>
                            <p class="red" id=""><?php echo isset($errors['field']) ? $errors['field'] : ''; ?></p><br>
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" value="<?= $button == '1' ? 'EDIT DATA' : 'SUBMIT DATA' ?>">
            </form>
        </div>
    </section>
    <!--========== Form secetion End =============-->

    <!--========== Ajax Table secetion Start =============-->
    <section class="table" id="ajax">
        <div class="about-text">
            <h3 style="color: #0682a2;">Table</h3>
            <hr>
        </div>
        <p class="msg1" style="margin-top: 50px;padding: 0 100px;">Lorem ipsum dolor sit, amet consectetur adipisicing
            elit. Id iusto fuga deleniti? Perferendis, id
            nostrum! Fuga reprehenderit eveniet aut blanditiis minima quam unde iusto, sint quae necessitatibus
            praesentium minus odio.</p>
        <div style="overflow-x:auto; margin: 70px;">
            <table>
                <thead>
                    <tr>
                        <th>Serial #</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Adress</th>
                        <th>Roll</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($dv->num_rows > 0) {
                        $i = 1;
                        while ($row = $dv->fetch_assoc()) {
                    ?>

                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $row['name'] ?? '' ?></td>
                        <td><?= $row['phone'] ?? '' ?></td>
                        <td><?= $row['email'] ?? '' ?></td>
                        <td><?= $row['roll'] ?? '' ?></td>
                        <td><?= $row['dept'] ?? '' ?></td>
                        <td>
                            <a href="student.php?id=<?= $row['id']; ?>" class="btnx">View</a>
                            <a href="?type=edit&id=<?= $row['id']; ?>" class="btnx">Edit</a>
                            <a href="?type=delete&id=<?= $row['id']; ?>" class="btnx" onclick="conf()">Delete</a>
                        </td>
                    </tr>
                    <?php
                            $i++;
                        }
                    } else {
                        ?>
                    <tr>
                        <td colspan="10">No Records Founds</td>
                    </tr>
                    <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <!--========== Ajax Table secetion End =============-->

    <!--========== Ajax Table secetion Start =============-->
    <section id="footer" class="foot">
        <div class="container">
            <div class="icons">
                <div class="fb"><i class="fa-brands fa-facebook fa-lg"></i></div>
                <div class="fb"><i class="fa-brands fa-twitter fa-lg"></i></div>
                <div class="fb"><i class="fa-brands fa-linkedin fa-lg"></i></div>
                <div class="fb"><i class="fa-solid fa-phone fa-lg"></i></div>
                <div class="fb"><i class="fa-brands fa-dribbble fa-lg"></i></div>
            </div>
            <div class="footer-body">
                <div class="copyright">@Copyright By MondolOZ</div>
                <!-- <button onclick="topFunction()" id="myBtn" title="Go to top"><img class="upicon" src="./assets/img/up-arrow-icon.png" alt=""></button> -->
                <div class="top-button" onclick="scrollToTop()" id="myBtn"><img class="upicon"
                        src="./assets/img/up-arrow-icon.png" alt=""></div>
            </div>
        </div>
    </section>
    <!--========== Ajax Table secetion End =============-->


    <!-- <script src="./assets/plugin/jQuery/jQuery.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <!-- <script src="./assets/plugin/bootstrap/bootstrap.bundle.js"></script> -->
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/function.js"></script>
    <script src="./assets/js/slider.js"></script>
</body>

</html>