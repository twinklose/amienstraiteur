<div class="hero">
  <div class="container">
	<div class="row d-flex align-items-center">
		<div class="col-lg-6 hero-left">
		    <h1 class="display-4 mb-5">Traiteur sur Amiens<br>et ses alentours</h1>
		    <div class="mb-2">
		    	<a class="btn btn-primary btn-shadow btn-lg" href="#gtco-menu" role="button">Nos plats</a>
                <a class="btn btn-primary btn-shadow btn-lg mx-3" href="#gtco-reservation" role="button">Devis</a>
		    </div>
		   
		    <ul class="hero-info list-unstyled d-flex text-center mb-0">
                <li class="border-right">
                    <span class="lnr lnr-leaf"></span>
		    		<h5>
                        Produits frais
		    		</h5>
		    	</li>
                <li class="border-right">
                    <span class="lnr lnr-rocket"></span>
                    <h5>
                        En Livraison
                    </h5>
                </li>
		    	<li class="">
		    		<span class="lnr lnr-bubble"></span>
		    		<h5>
		    			Contact direct
		    		</h5>
		    	</li>
		    </ul>

	    </div>
	    <div class="col-lg-6 hero-right">
	    	<div class="owl-carousel owl-theme hero-carousel">
			    <div class="item">
			    	<img class="img-fluid" src="../public/assets/img/hero-1.jpg" alt="">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="../public/assets/img/hero-2.jpg" alt="">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="../public/assets/img/hero-3.jpg" alt="">
			    </div>
			</div>
	    </div>
	</div>
  </div>
</div>		

<!-- Welcome Section -->
<section id="gtco-welcome" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2" style="background-image: url(../public/assets/img/eventsForAll.jpg);">
                    
                </div>
                <div class="col-sm-7 py-5 pl-md-0 pl-4">
                    <div class="heading-section pl-lg-5 ml-md-5">
                        <span class="subheading">
                            Amiens traiteur
                        </span>
                        <h2>
                            Des plats pour tous vos ??v??nements
                        </h2>
                    </div>
                    <div class="pl-lg-5 ml-md-5">
                        <p>Situ?? ?? Amiens et desservant toute la r??gion, vous propose des plats savoureux pour tous vos ??v??nements. Que vous cherchiez une solution cl?? en main pour un mariage, un anniversaire, une r??ception d'entreprise ou tout autre occasion sp??ciale, nous avons ce qu'il vous faut.</p>
                        <h3 class="mt-5">Menus favoris</h3>
                        <div class="row">
                            <?php foreach ($dishes as $element) : ?>
                                <div class="col-4">
                                    <p href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src=<?= ($element->image == 2) ? "/public/assets/galery/".strtolower(str_replace(' ', '', $element->id)).".jpg" : '/public/assets/baseImg/dish.jpg'?> alt="Photo de <?= $element->title ;?>">
                                        <h6><?= $element->title ?></h6>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Welcome Section -->		<!-- Special Dishes Section -->
<section id="gtco-special-dishes" class="bg-grey section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Amiens traiteur
                </span>
                <h2>
                    Nos services
                </h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">01.</h2>
                    <div class="dishes-text">
                        <h3>Un ??v??nement r??ussi<br>Pour <span>tous</span></h3>
                        <p class="pt-3">Nous sommes conscients de l'importance de satisfaire les demandes de nos clients pour garantir le succ??s de leur ??v??nement. C'est pour cela que nous mettons un point d'honneur ?? offrir des plats de qualit?? pour r??pondre aux besoins et aux go??ts de chacun.</p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="../public/assets/img/forAll.jpg" alt="Une table d'??v??nement pr??par??es pour accueillir un grand nombre de personnes" class="img-fluid shadow w-100">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="../public/assets/img/homeMade.jpg" alt="" class="img-fluid shadow w-100">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                    <h2 class="special-number">02.</h2>
                    <div class="dishes-text">
                        <h3>Une demande<br>Sur <span>mesure</span></h3>
                        <p class="pt-3">Que ce soit pour un ??v??nement professionnel, une r??ception priv??e ou un mariage, nous mettons notre expertise et notre flexibilit?? ?? votre disposition pour cr??er un menu unique et savoureux. Nous sommes ?? l'??coute de vos demandes et nous nous engageons ?? r??pondre ?? toutes vos attentes pour que votre ??v??nement soit un succ??s.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">03.</h2>
                    <div class="dishes-text">
                        <h3>Des ing??dients<br><span>Frais</span></h3>
                        <p class="pt-3">Nous accordons une grande importance ?? la qualit?? et ?? la fra??cheur de nos plats. Nous travaillons avec des ingr??dients de qualit?? pour garantir la saveur et la pr??sentation de nos plats. De plus, nous nous assurons que nos plats soient livr??s rapidement pour garantir leur fra??cheur.</p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="../public/assets/img/delivery.jpg" alt="" class="img-fluid shadow w-100">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Special Dishes Section -->		<!-- Menu Section -->
<section id="gtco-menu" class="section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Amiens traiteur
                        </span>
                        <h2>
                            Nos menus
                        </h2>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Entr??es</h3>
                    </div>
                    <?php foreach ($starters as $element) : ?>
                        <div class="menus d-flex align-items-center">
                            <div class="menu-img rounded-circle">
                                <img class="img-fluid" src=<?= ($element->image == 2) ? "/public/assets/galery/".strtolower(str_replace(' ', '', $element->id)).".jpg" : '/public/assets/baseImg/dish.jpg'?> alt="Photo de <?= $element->title ;?>">
                            </div>
                            <div class="text-wrap">
                                <div class="row align-items-start">
                                    <div class="col-8">
                                        <h4><?= $element->title ?></h4>
                                    </div>
                                    <div class="col-4">
                                        <h4 class="text-muted menu-price"><?= $element->price ?>???</h4>
                                    </div>
                                </div>
                                <p><?= $element->description ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Plats</h3>
                    </div>
                    <?php foreach ($dishes as $element) : ?>
                        <div class="menus d-flex align-items-center">
                            <div class="menu-img rounded-circle">
                                <img class="img-fluid" src=<?= ($element->image == 2) ? "/public/assets/galery/".strtolower(str_replace(' ', '', $element->id)).".jpg" : '/public/assets/baseImg/dish.jpg'?> alt="Photo de <?= $element->title ;?>">
                            </div>
                            <div class="text-wrap">
                                <div class="row align-items-start">
                                    <div class="col-8">
                                        <h4><?= $element->title ?></h4>
                                    </div>
                                    <div class="col-4">
                                        <h4 class="text-muted menu-price"><?= $element->price ?>???</h4>
                                    </div>
                                </div>
                                <p><?= $element->description ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Desserts</h3>
                    </div>
                    <?php foreach ($desserts as $element) : ?>
                        <div class="menus d-flex align-items-center">
                            <div class="menu-img rounded-circle">
                                <img class="img-fluid" src=<?= ($element->image == 2) ? "/public/assets/galery/".strtolower(str_replace(' ', '', $element->id)).".jpg" : '/public/assets/baseImg/dish.jpg'?> alt="Photo de <?= $element->title ;?>">
                            </div>
                            <div class="text-wrap">
                                <div class="row align-items-start">
                                    <div class="col-8">
                                        <h4><?= $element->title ?></h4>
                                    </div>
                                    <div class="col-4">
                                        <h4 class="text-muted menu-price"><?= $element->price ?>???</h4>
                                    </div>
                                </div>
                                <p><?= $element->description ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- add button view more -->
                <div class="col-12">
                    <div class="text-center mt-5">
                        <a href="/menu" class="btn btn-primary btn-outline-primary btn-lg">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of menu Section -->		<!-- Testimonial Section-->
<section id="gtco-testimonial" class="overlay bg-fixed section-padding" style="background-image: url(../public/assets/img/testi-bg.jpg);">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Amiens traiteur
                </span>
                <h2>
                    Avis clients
                </h2>
            </div>
            <div class="row">
                <!-- Testimonial -->
                <div class="testi-content testi-carousel owl-carousel">
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="testi-author">John Doe</p>
                        <p class="testi-desc">CEO of</p>
                    </div>
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci non doloribus ut, alias doloremque perspiciatis.</p>
                        <p class="testi-author">Mary Jane</p>
                        <p class="testi-desc">CTO of </p>
                    </div>
                </div>
                <!-- End of Testimonial -->
            </div>
        </div>
    </div>
</section>
<!-- End of Testimonial Section-->		<!-- Team Section -->
<section id="gtco-team" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Amiens traiteur
                </span>
                <h2>
                    Notre ??quipe
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="../public/assets/img/chef-1.jpg" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">John Doe</h4>
                            <p class="mb-1">CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="../public/assets/img/chef-2.jpg" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">John Doe</h4>
                            <p class="mb-1">Chef</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="../public/assets/img/chef-3.jpg" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">John Doe</h4>
                            <p class="mb-1">Chef</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Team Section -->		<!-- Reservation Section -->
<section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url(../public/assets/img/reservation-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-content bg-white p-5 shadow">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Une envie
                        </span>
                        <h2>
                            Contactez-nous
                        </h2>
                    </div>
                    <form method="post" name="contact-us" action="">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nom">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="number" class="form-control" id="phoneNumber" name="phone" placeholder="T??l??phone">
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="input-group date" data-target-input="nearest">
                                    <input type="date" name="date" class="form-control datetimepicker-input" data-target="#datetimepicker4" placeholder="Date" />
                                </div>
                            </div>

                            <div class="col-md-6 form-group">
                                <select class="form-control" id="selectHour" name="hour">
                                    <option>Horaire</option>
                                    <option>9:00</option>
                                    <option>9:30</option>
                                    <option>10:00</option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                    <option>12:00</option>
                                    <option>12:30</option>
                                    <option>14:00</option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>15:30</option>
                                    <option>16:00</option>
                                    <option>16:30</option>
                                    <option>17:00</option>
                                    <option>17:30</option>
                                </select>
                            </div>

                            <div class="col-md-12 form-group">
                                <select class="form-control" id="selectPerson" name="persons">
                                    <option>Nombres de personnes</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>20</option>
                                    <option>25</option>
                                    <option>30</option>
                                    <option>35</option>
                                    <option>40</option>
                                    <option>50</option>
                                    <option>Sur Mesure</option>
                                </select>
                            </div>

                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="D??crivrez-nous votre ??v??nement"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Envoyer</button>
                                <a class="btn btn-primary btn-shadow btn-lg mx-2" href="tel:0360604941" role="button">Appeler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('#datetimepicker3').datetimepicker({
        format: 'yyyy/mm/dd'
    });
</script>