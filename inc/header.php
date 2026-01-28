<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php include "var.php"; ?><!DOCTYPE html>
<html lang="<?php echo $lang; ?>" <?php if($lang=="ar"){ ?>dir="rtl"<?php } ?>>
<head>
    <script>
        // Prevent flash of unstyled content by setting theme immediately
        (function() {
            const theme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>
    <title><?php echo $title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="<?php echo $dir; ?>assets/images/favicon.png">
    <meta name="theme-color" content="#6CBE46">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?php echo $dir; ?>assets/fonts/GT-America/stylesheet.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo $dir; ?>assets/fonts/GT-America-Ar/stylesheet.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo $dir; ?>assets/fonts/tahoma-ar2/stylesheet.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php if($lang=="ar"){ ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.rtl.min.css" integrity="sha512-VNBisELNHh6+nfDjsFXDA6WgXEZm8cfTEcMtfOZdx0XTRoRbr/6Eqb2BjqxF4sNFzdvGIt+WqxKgn0DSfh2kcA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php }else{ ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php } ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="<?php echo $dir; ?>assets/css/style.css?v=<?php echo $ver; ?>">
    <!-- <?php if($lang=="ar"){ ?><link rel="stylesheet" href="<?php echo $dir; ?>assets/css/style-ar.css?v=<?php echo $ver; ?>"><?php } ?> -->
    <link rel="stylesheet" href="<?php echo $dir; ?>assets/css/responsive.css?v=<?php echo $ver; ?>">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5V7QPDF2');</script>
    <!-- End Google Tag Manager -->

    <!-- Event snippet for Call from Lp conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
    function gtag_report_conversion(url) {
        var callback = function () {
            if (typeof(url) != 'undefined') {
            window.location = url;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-17152924683/Jb37CO_tp-EbEIu4k_M_',
            'event_callback': callback
        });
        return false;
    }
    </script>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17152924683"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-17152924683');
    </script>
    <!-- Event snippet for Submit lead form (property visa page) conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-17152924683/17MVCLfFzeYbEIu4k_M_'});
</script>


</head>
<body class="<?php echo $pageclass; ?>">
    <!-- <div class="loader"></div> -->

    <div class="mobileMenu">
        <button class="menuSwitch"><i class="fa-solid fa-xmark"></i></button>
        <div class="inner">
            <nav></nav>
        </div>
    </div>

    <div class="stickyHeader"></div>

    <div class="viewSection">
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto- col col-lg-auto">
                    <a href="<?php echo $dir; ?><?php echo $lang; ?>/" class="logo containImg"><img 
                    <?php if($lang=="ar"){ ?>
                        src="<?php echo $dir; ?>assets/images/logo-header-1.svg"
                    <?php }else{ ?>
                        src="<?php echo $dir; ?>assets/images/logo.svg"
                    <?php } ?> 
                    width="285" height="84" alt="UpZone" /></a>
                </div>
                <!-- <div class="col d-none d-lg-flex align-items-center justify-content-center justify-content-lg-end"><nav></nav></div> -->
                
                <div class="col d-none d-lg-flex align-items-center justify-content-center">
                    <nav>
                        <ul>
                        <?php /* ?>
                            <li class="<?php if($pageclass=="home"){echo "active";} ?>"><a href="<?php echo $dir; ?><?php echo $lang; ?>/">
                                <?php if($lang=="ar"){ echo "الرئيسية"; }else{ echo "Home"; } ?>
                            </a></li>
                            <?php } */ ?>
                            <li class="<?php if($pageclass=="goldenvisa"){echo "active";} ?>"><a href="<?php echo $dir; ?><?php echo $lang; ?>/#secBanner">
                                <?php if($lang=="ar"){ echo "المتحدثون"; }else{ echo "Golden Visa"; } ?>
                            </a></li>
                            <li class="<?php if($pageclass=="eligibility"){echo "active";} ?>"><a href="<?php echo $dir; ?><?php echo $lang; ?>/#secWhocan">
                                <?php if($lang=="ar"){ echo "البرنامج"; }else{ echo "Eligibility"; } ?>
                            </a></li>
                            <li class="<?php if($pageclass=="whyupzone"){echo "active";} ?>"><a href="<?php echo $dir; ?><?php echo $lang; ?>/#secWhyUpzone">
                                <?php if($lang=="ar"){ echo "الشركاء"; }else{ echo "Why Upzone"; } ?>
                            </a></li>
                            <li class="<?php if($pageclass=="testimonials"){echo "active";} ?>"><a href="<?php echo $dir; ?><?php echo $lang; ?>/#secTestim">
                                <?php if($lang=="ar"){ echo "من نحن"; }else{ echo "Testimonials"; } ?>
                            </a></li>
                            
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-auto d-none d-lg-flex align-items-center">
                    <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode" title="Toggle dark/light theme">
                        <span class="theme-toggle-label">Theme</span>
                    </button>
                    <a href="tel:+971503808221" class="btn btn-primary">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M3.21778 6.92444C4.49778 9.44 6.56 11.4933 9.07556 12.7822L11.0311 10.8267C11.2711 10.5867 11.6267 10.5067 11.9378 10.6133C12.9333 10.9422 14.0089 11.12 15.1111 11.12C15.6 11.12 16 11.52 16 12.0089V15.1111C16 15.6 15.6 16 15.1111 16C6.76444 16 0 9.23556 0 0.888889C0 0.4 0.4 0 0.888889 0H4C4.48889 0 4.88889 0.4 4.88889 0.888889C4.88889 2 5.06667 3.06667 5.39556 4.06222C5.49333 4.37333 5.42222 4.72 5.17333 4.96889L3.21778 6.92444Z" fill="white"/> </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=971503808221" class="btn btn-primary whatsapp ms-2">
                    <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M21.4933 4.25348C24.1118 4.25461 26.6959 4.85277 29.049 6.00153C31.402 7.15033 33.462 8.8204 35.0734 10.8843C36.6848 12.9484 37.8051 15.3521 38.3488 17.9136C38.8924 20.4752 38.8453 23.1269 38.2111 25.6675C37.5769 28.2082 36.3723 30.5712 34.6886 32.5767C33.0049 34.5822 30.8866 36.1782 28.4943 37.2427C26.1019 38.3073 23.4979 38.8121 20.881 38.7203C18.2641 38.6284 15.7026 37.9421 13.3907 36.7125L13.3058 36.6675L13.215 36.6978L7.49719 38.6031C7.06328 38.7478 6.59764 38.7697 6.15247 38.6646C5.70729 38.5595 5.30012 38.3318 4.97668 38.0084C4.65337 37.685 4.42645 37.2776 4.32141 36.8326C4.21644 36.3875 4.23729 35.9217 4.38196 35.4879L6.28821 29.7711L6.31848 29.6793L6.27258 29.5943C4.87401 26.9675 4.17931 24.0233 4.25598 21.0484C4.33272 18.0732 5.17867 15.1682 6.71106 12.6168C8.24335 10.0655 10.4099 7.95435 13.0001 6.48883C15.5905 5.0233 18.5171 4.25283 21.4933 4.25348ZM28.9845 8.4986C26.1238 6.84877 22.7984 6.18882 19.5245 6.62164C16.2507 7.0545 13.2107 8.5556 10.8771 10.8922C8.54339 13.2288 7.04604 16.271 6.61731 19.5455C6.18867 22.8197 6.85268 26.144 8.50598 29.0025C8.58531 29.1398 8.63459 29.293 8.65051 29.4507C8.66239 29.5689 8.65541 29.6878 8.63 29.8033L8.59875 29.9175L6.50403 36.1978L6.36243 36.6226L6.78821 36.481L13.0675 34.3853C13.2179 34.3353 13.3776 34.3184 13.5353 34.3345C13.6536 34.3467 13.7689 34.3771 13.8771 34.4254L13.9825 34.4791C16.2651 35.7995 18.8563 36.4945 21.4933 36.4927C24.7956 36.4921 28.0057 35.4012 30.6251 33.3902C33.2443 31.3793 35.1269 28.5605 35.9806 25.3707C36.8343 22.1805 36.6118 18.7972 35.3468 15.7466C34.0818 12.6961 31.8452 10.1484 28.9845 8.4986ZM17.463 10.9703H17.464C17.673 10.9698 17.8781 11.0273 18.0558 11.1373C18.2335 11.2473 18.377 11.4051 18.4698 11.5923V11.5933L21.1564 16.9664C21.2442 17.1426 21.2839 17.3392 21.2716 17.5357C21.2593 17.732 21.1959 17.9217 21.087 18.0855L19.4415 20.5523L19.3663 20.6656L19.4318 20.7847C20.0747 21.954 21.0368 22.9163 22.2062 23.5591L22.3253 23.6246L22.4386 23.5494L24.9044 21.9029C25.0683 21.7939 25.2588 21.7306 25.4552 21.7183C25.6514 21.7061 25.8475 21.746 26.0236 21.8336L31.3966 24.5201C31.5826 24.6131 31.7395 24.7562 31.8488 24.9332C31.958 25.1101 32.0159 25.3141 32.0157 25.522C32.0157 26.3746 31.8479 27.2197 31.5216 28.0074C31.1953 28.795 30.7162 29.51 30.1134 30.1129C29.5105 30.7157 28.7947 31.1948 28.007 31.5211C27.2194 31.8472 26.375 32.0142 25.5226 32.0142C21.6645 32.0097 17.9655 30.4757 15.2374 27.7476C12.5094 25.0195 10.9752 21.3206 10.9708 17.4625L10.9786 17.1412C11.0581 15.5363 11.7306 14.0132 12.8722 12.8716C14.0897 11.6541 15.7412 10.9703 17.463 10.9703ZM16.6281 13.2906C15.6639 13.4836 14.7963 14.0047 14.173 14.7652C13.5497 15.5258 13.2089 16.4791 13.2091 17.4625C13.2127 20.7269 14.5112 23.8572 16.8195 26.1656C19.1278 28.474 22.258 29.7723 25.5226 29.7759V29.775C26.5072 29.7782 27.4627 29.4413 28.2257 28.8189C28.9888 28.1964 29.5126 27.3282 29.7072 26.3629L29.7404 26.1949L29.587 26.1177L25.7257 24.19L25.6095 24.1324L25.5011 24.2047L23.048 25.8394C22.893 25.9413 22.7152 26.003 22.5304 26.0191C22.3452 26.0352 22.159 26.0051 21.9884 25.9312L21.9865 25.9302L21.5734 25.7447C19.673 24.8334 18.1398 23.3004 17.2286 21.4L17.0431 20.9879C16.9726 20.818 16.9452 20.6328 16.963 20.4498C16.9764 20.3124 17.0147 20.1789 17.0763 20.0562L17.1456 19.938L18.7853 17.4966L18.8585 17.3882L18.7999 17.272L16.8722 13.4097L16.796 13.2574L16.6281 13.2906Z" fill="white" stroke="#49E670" stroke-width="0.447761"/> </svg>
                    </a>
                </div>
                <div class="col-auto d-lg-none d-flex align-items-center">
                    <button class="theme-toggle" id="themeToggleMobile" aria-label="Toggle dark mode" title="Toggle dark/light theme" style="margin-right: 10px;">
                        <span class="theme-toggle-label">Theme</span>
                    </button>
                    <button class="menuSwitch"><i class="fa-solid fa-bars"></i></button>
                </div>


                <?php /* ?>
                <div class="col col-lg-auto d-none d-lg-flex justify-content-end align-items-center">

                    <?php if($lang=="en"){ ?> 
                        <div class="langlink"><a href="<?php echo $dir; ?>ar" class="txt-ar lang-link">
                            العربيـــة
                            <i class="globe-icon"></i>
                        </a></div>
                    <?php }else{ ?> 
                        <div class="langlink"><a href="<?php echo $dir; ?>en" class="txt-en lang-link">
                            English
                            <i class="globe-icon"></i>
                        </a></div>
                    <?php } ?>

                </div>
                <div class="col-auto d-flex d-lg-none justify-content-end align-items-center">

                    <?php if($lang=="en"){ ?> 
                        <div class="langlink"><a href="<?php echo $dir; ?>ar" class="txt-ar lang-link">
                            العربيـــة
                            <i class="globe-icon"></i>
                        </a></div>
                    <?php }else{ ?> 
                        <div class="langlink"><a href="<?php echo $dir; ?>en" class="txt-en lang-link">
                            English
                            <i class="globe-icon"></i>
                        </a></div>
                    <?php } ?>

                    <button class="menuSwitch"><i class="fa-solid fa-bars"></i></button>
                </div>
                <?php } */ ?>



            </div>
        </div>
    </header>