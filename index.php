<?php
/* Short and sweet */
define('WP_USE_THEMES', false);
require('blog/wp-blog-header.php');
?>

<?php
require('blog/wp-blog-header.php');
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Matt Mitchell - Home</title>
        <!-- Javascript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="js/main.js" type="text/javascript"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MT5WSX"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MT5WSX');</script>
        <!-- End Google Tag Manager -->
    </head>
    
    <body>
        
        <div class="top-nav center text-center">
                <ul class="top-nav__list">
                    <div class="progress-bar">
                        <li>
                            <a class="top-nav__link" href="#about" id="about-link">About</a>
                        </li>
                        <div class="left-section"></div>
                        <div class="right-section"></div>
                    </div>
                    <div class="progress-bar">
                        <li>
                            <a class="top-nav__link" href="#portfolio" id="portfolio-link">See My Work</a>
                        </li>
                        <div class="left-section"></div>
                        <div class="right-section"></div>
                    </div>
                    <div class="progress-bar">
                        <li>
                            <a class="top-nav__link" href="#blog" id="blog-link">Blog</a>
                        </li>
                        <div class="left-section"></div>
                        <div class="right-section"></div>
                    </div>
                    <div class="progress-bar">
                        <li>
                            <a class="top-nav__link" href="#contact" id="contact-link">Contact</a>
                        </li>
                        <div class="left-section"></div>
                        <div class="right-section"></div>
                    </div>
                </ul>
                <div class="hero-img">
                    <div class="container">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="250px" height="250px" class="logo" viewBox="0 0 1024 1024" enable-background="new 0 0 1024 1024" xml:space="preserve">
<g>
	<defs>
		<rect id="SVGID_1_" width="1024" height="1024"/>
	</defs>
	<clipPath id="SVGID_2_">
		<use xlink:href="#SVGID_1_"  overflow="visible"/>
	</clipPath>
	<path clip-path="url(#SVGID_2_)" d="M76.127,615.373c15.754-0.361,31.509-0.724,47.263-1.085
		c14.068-0.322,28.239-0.162,42.273-1.256c44.492-3.47,82.132-29.516,106.232-66.305c16.034-24.477,28.29-51.443,37.637-79.11
		c8.538-25.276,15.631-51.005,24.473-76.184c9.961-28.37,20.911-56.81,35.068-83.386l-5.199,9.578
		c4.173-7.636,8.9-14.895,14.333-21.697c-2.532,3.124-5.063,6.248-7.595,9.372c3.594-4.381,7.432-8.496,11.624-12.312
		c-3.261,2.888-6.522,5.776-9.782,8.664c3.28-2.889,6.711-5.539,10.376-7.921c-3.675,2.338-7.35,4.677-11.025,7.015
		c2.752-1.709,5.56-3.225,8.514-4.554c-3.701,1.572-7.402,3.144-11.102,4.716c2.884-1.215,5.79-2.197,8.829-2.948
		c-3.547,0.785-7.094,1.571-10.641,2.357c3.444-0.75,6.868-1.145,10.393-1.17c-3.213-0.021-6.427-0.041-9.64-0.062
		c2.219,0.053,4.38,0.206,6.557,0.649c-2.7-0.847-5.401-1.695-8.101-2.542c1.421,0.448,2.386,0.91,3.607,1.769
		c-2.008-1.695-4.015-3.39-6.023-5.085c1.163,1.201,1.788,2.181,2.502,3.696c-1.076-2.397-2.152-4.794-3.227-7.192
		c2.75,7.976,3.322,17.03,4.463,25.362c1.173,8.558,2.185,17.137,3.105,25.726c1.881,17.558,3.371,35.154,5.021,52.734
		c3.094,32.972,7.029,65.948,13.848,98.385c5.957,28.341,15.256,57.401,32.386,81.102c8.477,11.729,19.209,21.857,30.913,30.332
		c6.952,5.034,14.05,7.966,22.343,10.295c13.895,3.903,29.956-0.848,42.256-7.308c27.334-14.357,45.895-42.229,55.252-71.059
		c6.427-19.8,10.056-40.274,15.599-60.301c-0.866,3.095-1.732,6.189-2.599,9.284c4.269-14.995,9.634-29.805,15.018-44.435
		c5.067-13.771,10.687-27.486,17.449-40.521c-1.733,3.193-3.467,6.386-5.199,9.578c1.336-2.358,2.932-4.518,4.634-6.624
		c-2.532,3.124-5.063,6.248-7.594,9.372c2.368-2.832,4.906-5.484,7.626-7.981c-3.261,2.888-6.521,5.776-9.781,8.664
		c2.076-1.839,4.214-3.547,6.522-5.087c-3.675,2.338-7.35,4.676-11.024,7.014c1.163-0.726,2.335-1.385,3.574-1.974
		c-3.7,1.572-7.401,3.145-11.103,4.717c0.827-0.344,1.619-0.629,2.48-0.871c-3.547,0.786-7.095,1.572-10.642,2.358
		c0.77-0.155,1.445-0.238,2.229-0.247c-3.213-0.02-6.426-0.041-9.641-0.061c0.447,0.017,0.885,0.093,1.312,0.226
		c-2.701-0.847-5.401-1.695-8.102-2.542c1.008,0.407,1.786,0.97,2.643,1.645c-2.007-1.695-4.016-3.39-6.023-5.085
		c2.045,2.034,3.402,4.357,4.647,6.947c-1.076-2.397-2.152-4.794-3.229-7.191c5.587,12.711,9.863,26.077,15.012,38.979
		c5.976,14.977,12.374,29.785,19.188,44.399c11.139,23.886,23.963,47.367,40.702,67.836c16.279,19.907,37.208,38.245,61.594,47.267
		c29.53,10.925,60.306,11.726,91.347,8.153c29.687-3.418,59.037-10.316,89.046-10.364c-3.213-0.021-6.427-0.041-9.641-0.061
		c13.437,0.088,26.722,1.666,39.604,5.574c-2.701-0.848-5.401-1.694-8.102-2.543c4.381,1.395,8.655,3.023,12.853,4.899
		c9.056,4.05,19.122,3.164,28.382,0.247c11.376-3.585,23.93-11.534,31.908-20.396c6.899-7.663,14.686-17.517,15.392-28.233
		c0.523-7.949-1.202-17.07-9.462-20.765c-31.963-14.293-66.709-15.142-100.978-11.033c-29.38,3.521-58.481,10.267-88.203,10.142
		c3.214,0.021,6.427,0.042,9.64,0.062c-12.877-0.162-25.604-1.724-37.96-5.438c2.701,0.847,5.401,1.695,8.101,2.543
		c-14.812-4.675-28.133-12.356-40.029-22.291l6.022,5.085c-29.983-25.54-49.333-61.581-65.294-96.97
		c1.075,2.397,2.151,4.795,3.228,7.192c-7.964-17.783-15.131-35.905-21.975-54.145c-4.704-12.539-8.101-25.846-19.551-33.956
		c-14.491-10.265-37.033-2.765-50.804,5.12c-13.062,7.478-25.249,17.006-35.118,28.417c-4.141,4.789-8.613,9.941-12.09,15.382
		c-4.14,6.477-7.433,13.635-10.681,20.607c-7.992,17.146-14.396,34.883-20.485,52.776c-4.627,13.596-8.953,27.203-12.403,41.161
		c-2.84,11.491-5.22,23.091-8.382,34.501c0.865-3.094,1.731-6.189,2.597-9.283c-2.756,9.666-6.146,19.021-10.947,27.872l5.199-9.579
		c-1.891,3.411-3.87,6.705-6.233,9.813c2.531-3.124,5.062-6.248,7.594-9.372c-1.005,1.211-2.017,2.323-3.142,3.424
		c3.261-2.888,6.521-5.776,9.782-8.664c-0.725,0.672-1.494,1.289-2.307,1.854c3.675-2.34,7.35-4.678,11.025-7.016
		c-0.652,0.464-1.34,0.863-2.066,1.197c3.701-1.572,7.401-3.145,11.103-4.717c-0.576,0.254-1.173,0.447-1.787,0.585
		c3.547-0.786,7.094-1.572,10.641-2.358c-0.997,0.176-1.902,0.253-2.915,0.263c3.214,0.021,6.427,0.042,9.64,0.063
		c-1.843-0.112-3.562-0.461-5.331-0.978c2.7,0.848,5.401,1.695,8.102,2.542c-7.504-2.543-14.04-7.296-20.073-12.321l6.023,5.084
		c-14.524-12.396-25.361-28.131-33.189-45.465c1.076,2.397,2.152,4.794,3.227,7.191c-15.146-34.349-20.409-73.228-24.94-110.199
		c-5.418-44.201-7.299-88.831-14.628-132.796c-1.06-6.363-2.871-12.804-6.613-18.173c-4.838-6.943-14.667-10.403-22.664-10.989
		c-13.841-1.015-27.92,0.718-40.898,5.788c-30.346,11.855-54.19,32.469-73.712,58.215c-13.153,17.347-22.451,37.759-31.124,57.641
		c-8.171,18.732-15.466,37.848-22.164,57.153c-14.498,41.786-24.238,85.441-45.307,124.654c1.733-3.192,3.467-6.385,5.2-9.578
		c-5.159,9.453-10.598,18.763-17.253,27.252c2.531-3.124,5.063-6.248,7.594-9.372c-2.682,3.31-5.521,6.426-8.644,9.323
		c3.261-2.888,6.521-5.775,9.782-8.664c-2.419,2.139-4.932,4.064-7.636,5.833c3.675-2.338,7.35-4.676,11.025-7.014
		c-2.423,1.474-4.892,2.769-7.479,3.928c3.7-1.571,7.401-3.144,11.102-4.717c-3.578,1.478-7.194,2.623-10.955,3.531
		c3.546-0.786,7.093-1.572,10.64-2.358c-15.972,3.486-32.726,2.807-48.98,3.179c-18.38,0.423-36.76,0.845-55.141,1.267
		c-10.853,0.249-24.495,7.855-32.767,14.09c-8.684,6.543-18.816,17.039-22.575,27.614c-2.716,7.64-5.229,18.063,0.841,24.963
		C58.706,614.895,66.979,615.583,76.127,615.373"/>
	<path clip-path="url(#SVGID_2_)" d="M213.058,829.628c4.152-4.946,8.642-9.529,13.474-13.813c-3.261,2.888-6.521,5.776-9.782,8.664
		c5.291-4.575,10.881-8.721,16.759-12.51c-3.675,2.338-7.35,4.676-11.025,7.015c7.784-4.899,15.931-9.102,24.385-12.721
		c-3.701,1.572-7.401,3.144-11.102,4.717c11.836-4.944,24.073-8.638,36.575-11.479c-3.547,0.785-7.094,1.571-10.64,2.357
		c35.452-7.792,72.213-9.385,108.367-11.138c37.374-1.813,74.794-2.459,112.208-2.244c-3.213-0.021-6.426-0.042-9.64-0.062
		c101.5,0.667,202.807,7.799,303.903,16.393c28.424,2.417,56.839,4.947,85.254,7.479c10.966,0.978,21.687-1.953,31.382-7.013
		c10.459-5.457,22.105-14.882,28.401-25.051c4.704-7.596,10.413-18.108,7.586-27.35c-2.456-8.028-8.544-14.034-17.351-14.818
		c-97.472-8.686-194.993-17.359-292.787-21.469c-51.188-2.152-102.456-3.043-153.687-2.257
		c-48.195,0.741-97.076,1.936-144.908,8.289c-59.823,7.947-121.846,30.646-161.733,78.161c-6.741,8.031-14.136,17.312-15.392,28.234
		c-0.891,7.754,1.738,17.104,9.462,20.764c8.792,4.165,19.413,3.383,28.382,0.246C192.81,845.945,205.048,839.17,213.058,829.628"/>
</g>
</svg>
                        <h1>Matt Mitchell</h1>
                        <p>I pride myself in the highest quality websites, designed exactly to specification, and delivered on time. Whether you need a refresh on your current site or a brand-new site, we can make some magic happen.</p>
                    </div>
                </div>
                <div class="container">
                    <ul class="social-media">
                        <li><a href="https://www.facebook.com/matt.mitchell2" target="_blank"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <path id="Facebook_1_" d="M98.199,92.797c0,2.926-2.373,5.298-5.299,5.298H68.438V60.918h12.479l1.867-14.488H68.438
                            v-9.25c0-4.194,1.164-7.053,7.18-7.053l7.672-0.003V17.166c-1.326-0.177-5.881-0.571-11.18-0.571
                            c-11.061,0-18.635,6.751-18.635,19.151V46.43h-12.51v14.488h12.51v37.177H7.497c-2.927,0-5.298-2.372-5.298-5.298V7.394
                            c0-2.927,2.372-5.299,5.298-5.299H92.9c2.926,0,5.299,2.372,5.299,5.299V92.797z"/>
                        </svg></a></li>
                        <li><a href="https://twitter.com/mmitchell413" target="_blank"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <path id="Twitter_1_" d="M95.551,11.574c-3.811,2.312-8.02,3.993-12.516,4.895
                            c-3.584-3.924-8.705-6.374-14.375-6.374c-10.869,0-19.687,9.043-19.687,20.195c0,1.583,0.169,3.121,0.507,4.6
                            c-16.369-0.844-30.879-8.875-40.599-21.108c-1.696,2.993-2.665,6.465-2.665,10.164c0,7.003,3.477,13.187,8.762,16.809
                            c-3.223-0.098-6.266-1.017-8.925-2.519v0.248c0,9.789,6.789,17.953,15.805,19.802c-1.65,0.475-3.392,0.711-5.189,0.711
                            c-1.268,0-2.508-0.121-3.707-0.357c2.507,8.02,9.775,13.861,18.397,14.018c-6.739,5.42-15.236,8.65-24.461,8.65
                            c-1.589,0-3.161-0.093-4.699-0.277c8.717,5.721,19.073,9.065,30.191,9.065c36.231,0,56.038-30.769,56.038-57.459
                            c0-0.878-0.018-1.756-0.051-2.617c3.848-2.849,7.189-6.402,9.822-10.453c-3.527,1.606-7.326,2.693-11.311,3.178
                            C90.957,20.247,94.08,16.29,95.551,11.574z"/>
                        </svg></a></li>
                        <li><a target="_blank" href="https://github.com/mmitchell413"><svg alt="GitHub" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <g>
                            <path d="M50.196,3.095c-26.506,0-47.997,21.574-47.997,48.193c0,21.288,13.752,39.351,32.829,45.724
                                c2.399,0.443,3.275-1.045,3.275-2.322c0-1.145-0.042-4.174-0.065-8.195c-13.354,2.913-16.171-6.46-16.171-6.46
                                c-2.181-5.566-5.327-7.048-5.327-7.048c-4.359-2.991,0.329-2.931,0.329-2.931c4.815,0.34,7.351,4.967,7.351,4.967
                                c4.284,7.363,11.235,5.237,13.972,4.002c0.435-3.114,1.676-5.237,3.047-6.442c-10.658-1.217-21.863-5.349-21.863-23.814
                                c0-5.262,1.869-9.563,4.941-12.934c-0.496-1.22-2.143-6.117,0.468-12.752c0,0,4.032-1.295,13.199,4.939
                                c3.831-1.069,7.936-1.603,12.019-1.623c4.078,0.021,8.183,0.554,12.017,1.623c9.162-6.234,13.186-4.939,13.186-4.939
                                c2.619,6.635,0.973,11.532,0.477,12.752c3.078,3.371,4.936,7.672,4.936,12.934c0,18.511-11.223,22.586-21.914,23.778
                                c1.721,1.488,3.258,4.428,3.258,8.925c0,6.442-0.061,11.638-0.061,13.219c0,1.289,0.863,2.789,3.301,2.316
                                c19.059-6.385,32.799-24.436,32.799-45.718C98.199,24.669,76.707,3.095,50.196,3.095z"/>
                        </g>
                        </svg></a></li>
                        <li><a href="#" target="_blank"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <g id="LinkedIn_1_">
                            <rect x="8.418" y="35.749" width="17.151" height="54.346"/>
                            <path d="M72.432,35.227c-9.826,0-15.982,5.322-17.121,9.052v-8.529H36.042c0.248,4.528,0,54.346,0,54.346h19.268
                                V60.686c0-1.634-0.078-3.268,0.418-4.441c1.326-3.268,4.172-6.659,9.289-6.659c6.689,0,9.732,5.026,9.732,12.386v28.123h19.449
                                V59.877C94.199,43.044,84.621,35.227,72.432,35.227z"/>
                            <path d="M16.676,10.095c-6.334,0-10.478,4.068-10.478,9.436c0,5.266,4.025,9.42,10.234,9.42h0.124
                                c6.447,0,10.462-4.169,10.462-9.436C26.895,14.152,23.004,10.095,16.676,10.095z"/>
                        </g>
                        </svg></a></li>

                    </ul>
            </div>
        </div>
        <div class="page" id="about">
            <div class="page__container">
                <div class="grid">
                    <div class="grid-1-1">
                        <img src="img/matt-mitchell.png" class="about-me__img">
                        <h2>About Me</h2>
                        <p>My name is Matt Mitchell and I'm a front-end web developer / designer by trade, but dabble in back-end development and graphic design. I live, work and play in the great city of Dallas, Texas. When I'm not tinkering away trying to make pixels look pretty, I spend my free time making music, playing video games, and spending time with friends and family. </p>
                        <p>Some of my other interests include action-packed movies, gut-wrenching TV dramas, fast cars, mixed martial arts, hiking, and building custom computers.</p>
                        <br>
                        <h3>My Background</h3>
                        <p>While attending the University of Texas at Dallas, I studied under some of the top professors in the field. I gained a vast array of knowledge and experience during my time there and owe a lot to the magnificent staff and student body of the university. I graduated in December of 2014 with a degree in Arts and Technology.</p>
                        <p>As a student, I also worked full-time at the technology help desk as a support technician before moving to an internship at <a href="http://www.visualapp.com" target="_blank">Visual App</a>, a small web design company based in Richardson.</p>
                        <p>I now work full-time as a front-end developer for <a href="https://www.gmfinancial.com" target="_blank">GM Financial</a>, helping them redefine their web presence. We are trying to make the company the industry leader in user experience and satisfaction. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="page" id="portfolio">
            <div class="page__container">
                <div class="page__portfolio">
                    <h2>GM Financial</h2>
                    <p>During my time with GM Financial, I have worked on numerous projects that have increased my talents immensely. Probably the most challenging was the full site redesign we undertook shortly after I started. The challenge came with the sheer size of the project: we were tasked with redesigning all five customer facing websites that GM Financial utilized... and we had to complete it in two months. Not only that, but due to the short timeframe, we couldn't start over from a clean code-base and had to make do with the old, decripit, and terribly outdated CSS and HTML that was already in place.</p>
                    
                    
                    <h2>Fixy</h2>
                    
                    <h2>Lok-Mor</h2>
                    
                    <h2>Other Projects</h2>
                    
                    
                </div>
            </div>
        </div>
        <div class="page" id="blog">
            <div class="page__container">
                <?php
                // Get the last 3 posts.
                global $post;
                $args = array( 'posts_per_page' => 3 );
                $myposts = get_posts( $args );

                foreach( $myposts as $post ) :	setup_postdata($post); ?>
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <date><?php the_date() ?></date>
                <p><?php the_excerpt() ?></p>
                <br />
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="page" id="contact">
            <div class="page__container">
                <div class="grid featured center">
                    <h2>Let's talk!</h2>
                    <p>Whether you're ready to get your site going or just have a question, drop me a line day or night and I'll get back to you!</p>
                    <form id="contact-form" action="">
                        <div class="grid-1-2">
                            <label id="contact-label__firstName" for="contact__firstName">First Name</label>
                            <input id="contact__firstName" type="text">
                            <div class="contact__error contact__firstNameError"><p>Please enter your first name</p></div>
                        </div>
                        <div class="grid-1-2">
                            <label id="contact-label__lastName" for="contact__lastName">Last Name</label>
                            <input id="contact__lastName" type="text">
                            <div class="contact__error contact__lastNameError"><p>Please enter your last name</p></div>
                        </div>
                        <div class="grid-1-1">
                            <label id="contact-label__email" for="contact__email">Email Address</label>
                            <input id="contact__email" type="email" />
                            <div class="contact__error contact__emailError"><p>Please enter a valid email address</p></div>
                        </div>
                        <div class="grid-1-1">
                            <label id="contact-label__subject" for="contact__subject">Subject</label>
                            <input id="contact__subject" type="text" />
                            <div class="contact__error contact__subjectError"><p>Please enter a subject</p></div>
                        </div>
                        <div class="grid-1-1">
                            <label id="contact-label__message" for="contact__message">Message</label>
                            <textarea id="contact__message"></textarea>
                            <div class="contact__error contact__messageError"><p>Please enter a message</p></div>
                        </div>
                        
                        <button type="submit" class="btn btn__submit" id="contact__submit">Submit</button>
                        <button type="reset" class="btn btn__clear btn__ghost">Clear</button>
                    </form>
                    
                </div>
            </div>
        </div>
        
        <!--<div class="highlight__yellow" id="what-i-do">
            <div class="container wide-margins center text-center">
                <div class="grid featured center">
                    <div class="grid-1-4 center text-center">
                        <img src="img/responsive.svg" />
                        <h3>responsive design</h3>
                        <p>Clean, simple, and effective responsive design to ensure your site looks incredible on any device</p>
                    </div>
                    <div class="grid-1-4 center text-center">
                        <img src="img/coding.svg" />
                        <h3>web design</h3>
                        <p>Using the latest technologies and strictest W3C conventions ensures your site stays up to date and accessible </p>
                    </div>
                    <div class="grid-1-4 center text-center">
                        <img src="img/application.svg" />
                        <h3>ui / ux</h3>
                        <p>Incorporate an amazing interface and make sure your users get the best experience possible</p>
                    </div>
                    <div class="grid-1-4 center text-center">
                        <img src="img/analytics.svg" />
                        <h3>analytics and seo</h3>
                        <p>Incorporate an amazing interface and make sure your users get the best experience possible</p>
                    </div>
                </div>
            </div>   
        </div>
        
        <div class="container wide-margins">
            <div class="grid">
                <div class="grid-1-1">
                    <img src="img/matt-mitchell.png" class="about-me__img">
                    <h2>About Me</h2>
                    <p>My name is Matt Mitchell and I'm a front-end web developer / designer by trade, but dabble in back-end development and graphic design. I live, work and play in the great city of Dallas, Texas. When I'm not tinkering away trying to make pixels look pretty, I spend my free time making music, playing video games, and spending time with friends and family. </p>
                    <p>Some of my other interests include action-packed movies, gut-wrenching TV dramas, fast cars, mixed martial arts, hiking, and building custom computers.</p>
                    <br>
                    <h3>My Background</h3>
                    <p>While attending the University of Texas at Dallas, I studied under some of the top professors in the field. I gained a vast array of knowledge and experience during my time there and owe a lot to the magnificent staff and student body of the university. I graduated in December of 2014 with a degree in Arts and Technology.</p>
                    <p>As a student, I also worked full-time at the technology help desk as a support technician before moving to an internship at <a href="http://www.visualapp.com" target="_blank">Visual App</a>, a small web design company based in Richardson.</p>
                    <p>I now work full-time as a front-end developer for <a href="https://www.gmfinancial.com" target="_blank">GM Financial</a>, helping them redefine their web presence. We are trying to make the company the industry leader in user experience and satisfaction. </p>
                </div>
            </div>
        </div>
        
        <div class="highlight__red" id="process">
            <div class="container wide-margins center text-center">
                <h2>the process</h2>
                <br>
                <div id="owl-process" class="owl-carousel featured center">
                    <div class="center text-center">
                        <img src="img/shop.svg" />
                        <p>You decide you need a website or refresh on your current site for your business, hobby, etc. </p>
                    </div>
                    <div class="center text-center">
                        <img src="img/checklist.svg" />
                        <p>Collaborate to put together a list of features you want it to have: eCommerce, content management, etc.</p>
                    </div>
                    <div class="center text-center">
                        <img src="img/graph-magnifier.svg" />
                        <p>Review options for style choices and layout for your site - it can be helpful to look over others for ideas</p>
                    </div>
                    <div class="center text-center">
                        <img src="img/content.svg" />
                        <p>Put together the "meat" of the site: content, images, videos, etc.</p>
                    </div>
                    <div class="center text-center">
                        <img src="img/designer.svg" />
                        <p>Send the content to me and let me do my thing, reviewing the design with you on major milestones</p>
                    </div>
                    <div class="center text-center">
                        <img src="img/money.svg" />
                        <p>Rejoice in your new, amazing, totally awesome website</p>
                    </div>
                </div>
            </div>   
        </div>
        
        <footer>
            <div class="container">
                <ul class="footer-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">See My Work</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                
            </div>
        </footer>-->
    </body>
</html>