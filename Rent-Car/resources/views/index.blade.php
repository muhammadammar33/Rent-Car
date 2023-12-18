<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahara Motors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>
    <div class="main" id="home">
        <div class="upper">
            <div class="left">
                <a class="logo-link" href="#home">
                    <div class="logo">
                        <img class="logo-pic" src="../Images/Logo.png" height="40px" alt="">
                        <p class="logo-name">Sahara Motors</p>
                    </div>
                </a>
                <div class="tag-line">
                    <h1><span class="white"> The height of <span class="red">richness</span> and <span class="red">luxury</span> </span></h1>
                </div>
                <div class="nav">
                    <ul class="nav-list">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#Reviews">Reviews</a></li>
                        <li><a href="#Contact Us">Contact Us</a></li>
                        <li class="dropdown"><a class="dropbtn" href="#Services">Services &nbsp; <i class='bx bxs-caret-down-circle'></i></i></a>
                            <div class="dropdown-content">
                                <a href="#">Cars</a>
                                <a href="#">Bikes</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="top-b">
                    <a href="./raclogin"><button class="top-buttons" type="button">LOGIN</button></a>
                    <a href="./racsignup"><button class="top-buttons" type="button">SIGNUP</button></a>
                </div>
            </div>
        </div>
        <div class="below">
            <div id="myCarousel" class="carousel slide mb-6 pointer-event" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" style="background-color:red;" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                    <button type="button" style="background-color:red;" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                    <button type="button" style="background-color:red;" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                    <button type="button" style="background-color:red;" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../Images/Car1.png" class="d-block w-100" alt="Image 1">
                        <!-- <div class="carousel-caption">
                            <h3 style="color: black; background-color: aquamarine;">WEB DEVELOPMENT Course</h3>
                        </div> -->
                    </div>
                    <div class="carousel-item">
                        <img src="../Images/Car2.png" class="d-block w-100" alt="Image 2">
                        <!-- <div class="carousel-caption">
                            <h3 style="color: black; background-color: aquamarine;">PYTHON Course</h3>
                        </div> -->
                    </div>
                    <div class="carousel-item">
                        <img src="../Images/Car3.png" class="d-block w-100" alt="Image 3">
                        <!-- <div class="carousel-caption">
                            <h3 style="color: black; background-color: aquamarine;">CODSOFT Intership</h3>
                        </div> -->
                    </div>
                    <div class="carousel-item">
                        <img src="../Images/Car4.png" class="d-block w-100" alt="Image 4">
                        <!-- <div class="carousel-caption">
                            <h3 style="color: black; background-color: aquamarine;">Internee.pk Internship</h3>
                        </div> -->
                    </div>
                </div>
                <button class="carousel-control-prev np" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next np" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <br>
    <hr>

    <!-- About Section -->
    <div class="about" id="about">
        <div class="owner">
            <div class="owner-pic">
                <img src="../Images/Owner.png" alt="">
            </div>
            <div class="owner-quote">
                <p>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus incidunt consequatur molestiae totam aut animi ab exercitationem ullam! Quibusdam impedit velit maxime dignissimos veritatis eius doloribus iusto quia repellendus ducimus?"</p>
            </div>
        </div>
        <div class="quote">
            <p>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus incidunt consequatur molestiae totam aut animi ab exercitationem ullam! Quibusdam impedit velit maxime dignissimos veritatis eius doloribus iusto quia repellendus ducimus?"</p>
        </div>
    </div>

    <!-- Review Section -->
    <div id="Reviews" class="reviews">
        <div class="container" id="hanging-icons">
            <h2 class="pb-2 border-bottom red">USER REVIEWS</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div class="text-body-emphasis d-inline-flex align-items-center justify-content-center me-3">
                        <img class="review-logo" src="../Images/Owner.png" alt="logo">                    
                    </div>
                    <div class="review">
                    <h4 class="red">Review of User 1</h4>
                    <p class="white text-align">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolorem doloribus, repudiandae rerum eaque ut nam repellat nisi quaerat dolores!</p>
                    <!-- <a href="#" class="btn btn-primary"> -->
                        <!-- Primary button -->
                    <!-- </a> -->
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <img class="review-logo" src="../Images/Owner.png" alt="logo">
                    </div>
                    <div class="review">
                    <h4 class="red">Review of User 2</h4>
                    <p class="white text-align">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio non nesciunt at ea maiores voluptate voluptatibus doloribus quae fugiat accusamus?</p>
                    <!-- <a href="#" class="btn btn-primary"> -->
                        <!-- Primary button -->
                    <!-- </a> -->
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <img class="review-logo" src="../Images/Owner.png" alt="logo">
                    </div>
                    <div class="review">
                    <h4 class="red">Review of User 3</h4>
                    <p class="white text-align">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit repudiandae tempora nisi error aliquam maiores laborum officiis hic similique provident.</p>
                    <!-- <a href="#" class="btn btn-primary"> -->
                        <!-- Primary button -->
                    <!-- </a> -->
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <img class="review-logo" src="../Images/Owner.png" alt="logo">
                    </div>
                    <div class="review">
                    <h4 class="red">Review of User 4</h4>
                    <p class="white text-align">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde velit cumque hic cum accusamus ad tempora iusto laboriosam architecto odit!</p>
                    <!-- <a href="#" class="btn btn-primary"> -->
                        <!-- Primary button -->
                    <!-- </a> -->
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <img class="review-logo" src="../Images/Owner.png" alt="logo">
                    </div>
                    <div class="review">
                    <h4 class="red">Review of User 5</h4>
                    <p class="white text-align">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio molestiae atque error magni architecto illo ut nihil earum, accusamus eum.</p>
                    <!-- <a href="#" class="btn btn-primary"> -->
                        <!-- Primary button -->
                    <!-- </a> -->
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <img class="review-logo" src="../Images/Owner.png" alt="logo">
                    </div>
                    <div class="review">
                    <h4 class="red">Review of User 6</h4>
                    <p class="white text-align">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta rem corporis eos tempora delectus saepe, excepturi eligendi in error assumenda.</p>
                    <!-- <a href="#" class="btn btn-primary"> -->
                        <!-- Primary button -->
                    <!-- </a> -->
                    </div>
                </div>
                </div>
            </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>