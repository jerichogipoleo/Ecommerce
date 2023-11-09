<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<style>
    .team-member {
        border: 1px solid #ccc; 
        border-radius: 10px;
        padding: 10px;
        text-align: center;
        padding: 50px;
    }
    .team-member img {
        width: 100%; /* Ensure the image takes up the entire space within the container */
        border-radius: 10px;
    }
    .team-member p {
        margin: 10px;

    }
</style>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <?php include 'includes/navbar.php'; ?>

    <div class="content-wrapper">
        <div class="container">

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-9">
                        <?php
                        if (isset($_SESSION['error'])) {
                            echo "
                                <div class='alert alert-danger'>
                                    " . $_SESSION['error'] . "
                                </div>
                            ";
                            unset($_SESSION['error']);
                        }
                        ?>

                        <main>
                            <section>
                            <h2>Our Team</h2>
                            <div class="row imagescontainer">
                                    <div class="col-2">
                                        <div class="team-member">
                                            <img src="images/pic1.jpg" alt="Team Member 1">
                                            <p>Silva, Ram Henrick</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="team-member">
                                            <img src="images/pic6.jpg" alt="Team Member 2">
                                            <p>Duco, Clarise Annely</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="team-member">
                                            <img src="images/pic2.jpg" alt="Team Member 3">
                                            <p>Gipoleo, Jericho</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="team-member">
                                            <img src="images/pic6.jpg" alt="Team Member 4">
                                            <p>Monreal, Carl Joshua</p>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="team-member">
                                            <img src="images/pic6.jpg" alt="Team Member 5">
                                            <p>Remolin, Marc Lorenz</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </main>

                        <footer>
                            <p>&copy; <?php echo date("Y"); ?> Your Company Name. All rights reserved.</p>
                        </footer>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
