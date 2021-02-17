<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>YMBA Kolonnawa</title>

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/master.css" />
</head>

<body>

    <div class="container-fluid">
        <?php include 'includes/navbar.php';?>
        <div class="row p-welcome-row">
            <div class="col-12 p-page-cols-container">
                <div class="p-page-col-left p-welcome-box p-bg-primary">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="p-page-col-right">
                    <div class="p-welcome-parallax" data-parallax="scroll" data-image-src="img/home-1.jpg">
                    </div>
                </div>
            </div> <!-- col-12 p-page-cols-container -->
        </div> <!-- row -->

        <section class="row p-pt-4 p-pb-6">
            <div class="col-12 p-page-cols-container">
                <div class="p-page-col-right">
                    <h2 class="p-text-secondary p-mb-5">
                        Young Men's Buddhist Association
                    </h2>
                    <p class="p-mb-6">
                        Young Men's Buddhist Association of Kolonnawa (YMBA (K) ) is the main voluntary
                        organization operating in Kolonnawa, which covers an area of about 16.3sq.km, bordering
                        Colombo, the commercial capital of Sri Lanka. The organization was established on 21st July
                        1962. It was approved as a charity organisation by Parliament under Act no 25 of 2009,
                        achieving a great milestone.
                        The Association currently consists of nearly 400 volunteer members, committed to serving the
                        society and projects conducted that are mainly focused on enhancing the livelihood of people in
                        the Kolonnawa area. As the main social service organization in this area, the YMBA provide
                        leadership to all BUddhist Temples, Dhamma Schools and other Social Service Groups to create
                        united community.
                    </p>
                    <p class="mb-0">
                        Achiving another great mile stone in recent history YMBA Kolonnawa
                        incorporated as Approved Charity Orgnisation by parlimant act no 25 of 2009.
                    </p>
                </div>
            </div>
        </section>

        <div class="p-page-col-right">
            <div class="row p-pt-7 p-pb-6">
                <div class="col-md-6 p-home-section-2-left">
                    <div class="img-fluid p-mb-4 p-small-parallax" data-parallax="scroll"
                        data-image-src="img/image-1.jpg"></div>
                    <div>
                        <h3 class="p-text-secondary p-mb-4">
                            The Motto
                        </h3>
                        <p class="p-mb-5">
                            Its Motto is coined in the Buddha's own words Paraththan Patipajjetha meaning <strong>"Be in
                                the Service for Others"</strong>.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 p-home-section-2-right">
                    <div class="img-fluid p-mb-4 p-small-parallax" data-parallax="scroll"
                        data-image-src="img/image-2.jpg"></div>
                    <div>
                        <h3 class="p-text-secondary p-mb-4">
                            Management
                        </h3>
                        <p class="p-section-2-text">
                            The Young Men’s Buddhist Association in Kolonnawa is managed by an executive committee,
                            appointed through voting by the members of the Association at the Annual General meeting,
                            which is held every September. The Executive Committee consists of 11 office bearers and 15
                            committee members. The committee is led by the president and all projects are divided under
                            4
                            main sub committees which are under the vice president’s purview.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <!-- row -->

        <!-- footer -->
        <?php include 'includes/footer.php';?>

    </div> <!-- container-fluid -->


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script>
    $(document).ready(function() {
        $(document).ready(function() {
            $(".nav li").removeClass("active");
            $('#home').addClass('active');
        })
    })
    </script>
    <script src="js/scripts.js"></script>

</body>

</html>