<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />


    <title>PROSCHOOL</title>


    <!-- <<Mobile Viewport Code>> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- <<Attched Stylesheets>> -->
    <link rel="stylesheet" href="{{asset('css/theme.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/media.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,600italic,400italic,800,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body>


<div class="DesignHolder">

	<div class="LayoutFrame">

        <header>
            <div class="Center">
                <div class="site-logo">
                	<h1><a href="#">PRO<span>SCH</span>OOL</a></h1>
                </div>
               <div id="mobile_sec">
               <div class="mobile"><i class="fa fa-bars"></i><i class="fa fa-times"></i></div>
                <div class="menumobile">

                    <nav class="Navigation">
                        <ul>
                            <li class="active">
                                <a href="#home">Accueil</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <li>
                                <a href="#about">A Propos</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <li>
                                <a href="#services">Services</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <li>
                                <a href="/conn">SE Connecter</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <li>
                                <a href="#contact">Contact</a>
                                <span class="menu-item-bg"></span>
                            </li>
                        </ul>
                    </nav>


				</div>
				</div>
                <div class="clear"></div>
            </div>
        </header>


        <div class="Banner_sec" id="home">

            <div class="bannerside">
	            <div class="Center">

                    <div class="leftside">

                        <h3>Bienvenue sur notre site de<span> gestion d'université</span></h3>
                        <p>Notre site de gestion d'université est conçu pour simplifier et améliorer la gestion des étudiants, des enseignants et du personnel administratif au sein de notre établissement. </p>
                        <a href="#about">PLUS DE DETAILS</a>
                    </div>


                    <div class="rightside">
                    	<ul id="slider">
                    		<li>
                                <div class="Slider">
                                    <figure><img src="{{asset('img/slider-img1.jpg')}}" alt="image"></figure>
                                    <div class="text">
                                        <div class="Icon">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-heart"></i>700</a></li>
                                                <li><a href="#"><i class="fa fa-commenting"></i>150</a></li>
                                            </ul>
                                        </div>
                                        <div class="Lorem">
                                            <p>GESTION<span>  D'UNIVERSITÉ </span></p>
                                        </div>
                                    </div>
                                </div>
							</li>
                    		<li>
                                <div class="Slider">
                                    <figure><img src="{{asset('img/slider-img2.jpg')}}" alt="image"></figure>
                                    <div class="text">
                                        <div class="Icon">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-heart"></i>700</a></li>
                                                <li class="num"><a href="#"><i class="fa fa-commenting"></i>150</a></li>
                                            </ul>
                                        </div>
                                        <div class="Lorem">
                                            <p>GESTION <span>D'UNIVERSITÉ</span></p>
                                        </div>
                                    </div>
                                </div>
							</li>
						</ul>
            	        <figure><img src="{{asset('img/Shadow-img.png')}}" alt="image" class="Shadow"></figure>
                    </div>

	            </div>
            </div>


            <div class="clear"></div>
        </div>

         <div class="bgcolor"></div>

        <div id="Container">


            <div class="About_sec" id="about">
                <div class="Center">
                    <h2>A propos de Nous</h2>
                    <p>Grâce à notre plateforme intuitive et conviviale, vous pourrez accéder facilement à toutes les fonctionnalités nécessaires à la gestion quotidienne de l'université.
                        Notre site de gestion d'université est conçu pour répondre aux besoins spécifiques des établissements d'enseignement supérieur, en offrant une solution complète et efficace pour la gestion de toutes les activités académiques et administratives. Nous sommes déterminés à fournir un service de qualité et à faciliter la gestion de votre université.

N'hésitez pas à explorer notre site et à nous contacter si vous avez des questions ou des suggestions. Nous sommes là pour vous aider à tirer le meilleur parti de notre plateforme de gestion d'université.
                    </p>
                    <div class="Line"></div>

                    <div class="Tabside">
                        <ul>
                            <li><a href="javascript:;" class="tabLink activeLink" id="cont-1">Misions</a></li>
                            <li><a href="javascript:;" class="tabLink" id="cont-2">visions</a></li>
                            <li><a href="javascript:;" class="tabLink" id="cont-3">Sponsors</a></li>
                        </ul>
                      <div class="clear"></div>
                        <div class="tabcontent" id="cont-1-1">
                            <div class="TabImage">
                                <div class="img1">
                                    <figure><img src="{{asset('img/about-img2.jpg')}}" alt="image"></figure>
                                </div>
                                <div class="img2">
                                    <figure><img src="{{asset('img/about-img1.png')}}" alt="image"></figure>
                                </div>
                            </div>
                            <div class="Description">
                                <h3>Rejoignez-nous dans notre mission de transformer la gestion des universités <span>et de créer un environnement d'apprentissage optimal pour tous.</span></h3>
                                <p>Notre mission est de fournir une plateforme de gestion d'université innovante et fiable, permettant aux établissements d'enseignement supérieur de gérer efficacement leurs activités académiques et administratives.</p>
                                <p> Nous nous engageons à offrir des solutions technologiques avancées qui simplifient les processus, améliorent l'efficacité et renforcent la qualité de l'enseignement et de l'apprentissage.</p>
                            </div>
                        </div>
                        <div class="tabcontent hide" id="cont-2-1">
                            <div class="TabImage">
                                <div class="img1">
                                    <figure><img src="{{asset('img/about-img1.png')}}" alt="image"></figure>
                                </div>
                                <div class="img2">
                                    <figure><img src="{{asset('img/about-img2.jpg')}}" alt="image"></figure>
                                </div>
                            </div>
                            <div class="Description">
                                <h3>Joignez-vous à Nous dans Notre Quête d'Excellence <span>et de Transformation de l'Éducation à l'Échelle Mondiale.</span></h3>
                                <p>Notre vision est de devenir le leader mondial des solutions technologiques pour la gestion d'université, en offrant des outils innovants et adaptés aux besoins spécifiques des établissements d'enseignement supérieur.  </p>
                                <p>Nous aspirons à être reconnus pour notre excellence en matière de service, notre engagement envers l'innovation et notre contribution à l'amélioration de l'éducation à l'échelle mondiale.</p>
                            </div>
                        </div>
                        <div class="tabcontent hide" id="cont-3-1">
                            <div class="TabImage">
                                <div class="img1">
                                    <figure><img src="{{asset('img/about-img2.jpg')}}" alt="image"></figure>
                                </div>
                                <div class="img2">
                                    <figure><img src="{{asset('img/about-img1.png')}}" alt="image"></figure>
                                </div>
                            </div>
                            <div class="Description">
                                <h3>Excellence en Service <span>Partenariat Stratégique</span></h3>
                                <p>Notre vision est de devenir le leader mondial des solutions technologiques pour la gestion d'université, en offrant des outils innovants et adaptés aux besoins spécifiques des établissements d'enseignement supérieur.  </p>
                                <p>Nous aspirons à être reconnus pour notre excellence en matière de service, notre engagement envers l'innovation et notre contribution à l'amélioration de l'éducation à l'échelle mondiale.</p>
                             </div>
                        </div>
	                    <div class="clear"></div>
                    </div>

                </div>
            </div>

        <div class="Services_sec" id="services">
            <div class="Center">
                <h2>Nos Services</h2>
                <p> Notre plateforme de gestion d'université offre une gamme complète de services conçus pour répondre aux besoins spécifiques des établissements d'enseignement supérieur.  <br> Que vous soyez un étudiant, un enseignant, un membre du personnel administratif ou un administrateur d'université.</p>
                <div class="Line"></div>

                <div class="Serviceside">
                    <ul>
	                    <li class="Development"><a href="#services"><h4>GESTION ENSEIGNANT</h4></a></li>
    	                <li class="Desdin"><a href="#services"><h4>GESTION ETUDIANT</h4></a></li>
	                    <li class="Concept"><a href="#services"><h4>ADMINISTRATION FLEX</h4></a></li>
	                    <li class="System"><a href="#services"><h4>NUMERISER SYSTEME A 100% </h4></a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="Pricing_sec" id="pricing">
            <div class="Center">
                <h2>Pricing</h2>
                <p>All plans come with unlimited disk space. Our support can be as quick as 15 minutes to get a response. Sed non<br>
                mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu.</p>
                <div class="Line"></div>

                <div class="Pricingside">
                    <ul>
                        <li>
                            <div class="Basic">
	                            <h5>basic</h5>
                            </div>
                            <div class="Dollar">
    	                        <h2>$27.50</h2>
                            </div>
                            <div class="Band">
	                            <p>2,000 GB <span>Band width</span></p>
                            </div>
                            <div class="Band">
	                            <p>32 GB<span>memory</span></p>
                            </div>
                            <div class="Band">
	                            <p>Support<span>24 Hours</span></p>
                            </div>
                            <div class="Band last">
	                            <p>Update<span>$20</span></p>
                            </div>
                            <div class="Order">
	                            <a href="#">order now</a>
                            </div>
                        </li>
                        <li>
                            <div class="Basic">
	                            <h5>Biz</h5>
                            </div>
                            <div class="Dollar">
	                            <h2>$44.50</h2>
                            </div>
                            <div class="Band">
	                            <p>5,500 GB <span>Band width</span></p>
                            </div>
                            <div class="Band">
	                            <p>64 GB<span>memory</span></p>
                            </div>
                            <div class="Band">
	                            <p>Support<span>1 Hour</span></p>
                            </div>
                            <div class="Band last">
	                            <p>Update<span>$10</span></p>
                            </div>
                            <div class="Order">
	                            <a href="#">order now</a>
                            </div>
                        </li>
                        <li>
                            <div class="Basic">
	                            <h5>Pro</h5>
                            </div>
                            <div class="Dollar">
	                            <h2>$72.50</h2>
                            </div>
                            <div class="Band">
	                            <p>12,000 GB <span>Band width</span></p>
                            </div>
                            <div class="Band">
	                            <p>128 GB<span>memory</span></p>
                            </div>
                            <div class="Band">
	                            <p>Support<span>15 Mins</span></p>
                            </div>
                            <div class="Band last">
	                            <p>Update<span>Free</span></p>
                            </div>
                            <div class="Order">
	                            <a href="#">order now</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="Contact_sec" id="contact">
            <div class="Contactside">
                <div class="Center">
                    <h2>contact us</h2>
                    <p>Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum<br>
                    feugiat velit mauris egestas quamut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                    <div class="Line"></div>
                </div>

            </div>

                <div class="Map">

                    <div id="GoogleMap"></div>

                </div>


                <div class="Get_sec">
                    <div class="Mid">

                        <div class="Leftside">
                            <form action="#">
                                <fieldset>
                                    <p><input type="text" value="" placeholder="NAME" class="field"></p>
                                    <p><input type="email" value="" placeholder="EMAIL" class="field"></p>
                                    <p><input type="text" value="" placeholder="TITLE" class="field"></p>
                                    <p><textarea cols="2"  rows="2" placeholder="MESSAGE"></textarea></p>
                                    <p><input type="submit" value="send" class="button"></p>
                                </fieldset>
                            </form>
                        </div>

                        <div class="Rightside">
                            <h3>Get in touch !</h3>
                                <address>
                                    990 Proin Gravida Street, Aliquet Snean Tate,<br>Lincoln Way, San Francisco, California.
                                </address>
                                <address class="Number">
                                    (+001) 001 002 0034, (+002) 009 008 0760<br>(+003) 456 050 0670
                                </address>
                                <address class="Email">
                                    <a href="mailto:info@november.com">info@november.com</a>
                                </address>
                                <div class="clear"></div>
                                <ul>
                                    <li><a rel="nofollow" href="http://www.facebook.com/templatemo"
                                   target="_parent"><img src="img/facebook-icn.png" alt="image"></a></li>
                                    <li><a href="#"><img src="img/twitter-icn.png" alt="image"></a></li>
                                    <li><a href="#"><img src="img/google-plus-icn.png" alt="image"></a></li>
                                </ul>
                        </div>

                    </div>

                    <footer>
                        <div class="Cntr">
                            <p>COPYRIGHT © 2024 UTA SCORPION GROUPE.</p>
                        </div>
                    </footer>

                </div>


            </div>

        </div>

	</div>

</div>

<div id="loader-wrapper">
<div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<!-- << Javascripts>> -->
<script type="text/javascript" src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.sudoSlider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/global.js')}}"></script>
<script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>

</body>
</html>
