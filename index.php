<?php
require("blocks/head.php");
require("blocks/header.php");
?>
<main>
	<div class="container">
		<div class="container-fluid">
			<div class="row py-3 w-100">
				<div class="col" id="inputs-1">
					<div class="row h-100">
						<div class="col-10 p-0 h-100">
							<input type="text" class="form-control fw-bold fs-5 p-3 px-5 h-100" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
						</div>
						<div class="col-2 p-0">
							<button class="btn text-white fw-bold fs-5 p-3 w-100">
								<span class="d-none d-lg-block">for a domain</span>
								<span class="d-block d-lg-none">
									<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" class="bi bi-search" viewBox="0 0 16 16">
										<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
									</svg>
								</span>
							</button>
						</div>
					</div>
				</div>
				<div class="col img-con justify-content-end gap-3 align-items-center d-none d-lg-flex">
					<img src="img/im-in-1.png" alt="course-img">
					<img src="img/im-in-2.png" alt="course-img">
					<img src="img/im-in-3.png" alt="course-img">
					<img src="img/im-in-4.png" alt="course-img">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-8 text-center text-xl-start">
				<div class="main-background h-100 p-5">
					<div class="p-3">
						<h5 class="fw-bold">Websites + Marketing</h5>
						<h2 class="fw-bold py-2">Create your site.</h2>
						<button class="btn btn-dark text-white p-3 rounded fw-bold w-25 btn-hover mx-auto mx-xl-0">
							<span class="button-text">Get started for free</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
							</svg>
						</button>
						<p class="pt-4 fw-bold">No fees, no obligations, no need to cancel anything**.</p>
					</div>
					<div class="pb-5 d-block d-xl-none"></div>
					<div class="pb-5 d-block d-xl-none"></div>
					<div class="pb-5 d-block d-xl-none"></div>
					<div class="pb-5 d-block d-xl-none"></div>
					<div class="pb-5 d-block d-xl-none"></div>
				</div>
			</div>
			<div class="col-xl-4 pt-5 pt-xl-0">
				<div class="p-2 p-xl-5 text-white bg-dark">
					<div class="p-3 d-flex flex-row flex-lg-column justify-content-between gap-4">
						<div>
							<h5 class="fw-bold">Domain names</h5>
							<h2 class="fw-bold">Get a .com domain for PLN 39.04/1. year.</h2>
							<h5 class="fw-bold pb-5 pb-lg-0">3 years purchase required. Subsequent years: PLN 109.01</h5>
							<p class="fw-bold pt-5 pt-lg-0">Every domain comes with Basic Privacy Protection - Forever+.</p>
						</div>
						<button class="btn btn-light text-dark p-3 rounded fw-bold w-50 align-self-center align-self-lg-start">
							<span class="button-text">Find your domain</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
							</svg>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row align-items-stretch py-5 px-3 text-center fw-bold mh-100">
			<div class="col-lg-2 col-sm-6 p-0 mh-100">
				<div class="border border-secondary p-4 table-hover h-50">
					<span>Domeny .com <br>39,04 PLN/1. rok</span>
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
					</svg>
				</div>
				<div class="border-top-0 border border-secondary p-4 table-hover h-50">
					<span>.pl<br>0.02 PLN/rok</span>
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
					</svg>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 p-0 mh-100">
				<div class="border-left-0 border border-secondary p-4 table-hover h-50">
					<span>Bezpieczeństwo SSL <br><span class="no-wrap-text">PLN 279.00</span>/rok</span>
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
					</svg>
				</div>
				<div class="border-top-0 border-left-0 border border-secondary p-4 table-hover h-50">
					<span>Hosting stron <br><span class="no-wrap-text">PLN 13.00</span>/miesiąc</span>
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
					</svg>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 p-0 mh-100">
				<div class="border-left-0 border border-secondary p-4 table-hover h-50">
					<span data-cy="has-html">Profesjonalna Poczta <br><span class="no-wrap-text">PLN 4.99</span>/miesiąc</span>
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
					</svg>
				</div>
				<div class="border-top-0 border-left-0 border border-secondary p-4 table-hover h-50">
					<span data-cy="has-html">WordPress <br><span class="no-wrap-text">PLN 22.00</span>/miesiąc</span>
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
					</svg>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 p-0 mh-100">
				<div class="border-left-0 border border-secondary p-4 table-hover h-50">
					<span data-cy="has-html">Microsoft 365 <br><span class="no-wrap-text">PLN 9.00</span>/miesiąc</span>
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
					</svg>
				</div>
				<div class="border-top-0 border-left-0 border border-secondary p-4 table-hover h-50">
					<span data-cy="has-html">Kreator witryn <span class="d-block">Bezpłatny okres próbny</span></span>
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
					</svg>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12 p-0 mh-100">
				<div class="border-left-0 border border-secondary p-4 h-100 table-hover">
					<div class="d-flex flex-column align-items-center justify-content-center">
						<h2>.ai</h2>
						<p>301.17 PLN/1. rok, okres 2 lat.<br>
							.ai to przyszłość</p>
					</div>
				</div>
			</div>
		</div>


		<div class="pb-5 px-3">
			<div class="row flex-column-reverse flex-sm-row align-items-center">
				<div class="col-sm-6 col-lg-5 fw-bold p-0 w-50 d-flex justify-content-center">
					<div class="w-100 w-sm-75 w-lg-50">
						<h5 class="pt-4 pb-3">Professional Mail</h5>
						<h2>
							Based on your success.
						</h2>
						<p class="py-4 lh-base fs-5">
							Everyone has e-mail, but an address is not equal to an address. Customers are 9 times more likely to choose companies with a professional email address, such as ty@NeueBloom.com.
						</p>
						<div class="pb-4">
							<button class="btn btn-outline-dark"><span class="p-2">See email plans</span></button>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-5 p-0">
					<img class="w-100 mh-100" src="img/main-con-1.jpg" alt="">
				</div>
				<div class="col-lg-1 col-0"></div>
			</div>

			<div class="row flex-column flex-sm-row align-items-center">
				<div class="col-lg-1 col-0"></div>
				<div class="col-sm-6 col-lg-5 p-0">
					<img class="w-100 mh-100" src="img/main-con-2.jpg" alt="">
				</div>
				<div class="col-sm-6 col-lg-5 fw-bold p-0 w-50 d-flex justify-content-center">
					<div class="w-100 w-sm-75 w-lg-50">
						<h5 class="pt-4 pb-3">SSL security</h5>
						<h2>
							Protect your data and your customers.
						</h2>
						<p class="py-4 lh-base fs-5">
							An SSL certificate protects the data coming in and out of your website, from personal information to credit card numbers. When visitors feel safe, they are more likely to engage with you.
						</p>
						<div class="pb-4">
							<button class="btn btn-outline-dark"><span class="p-2">Ensure your safety</span></button>
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-0"></div>
			</div>
			<div class="row flex-column-reverse flex-sm-row align-items-center">
				<div class="col-sm-6 col-lg-5 fw-bold p-0 w-50 d-flex justify-content-center">
					<div class="w-lg-50 w-sm-75 w-100">
						<h5 class="pt-4 pb-3">Hosting</h5>
						<h2>
							Fast, secure and always online.
						</h2>
						<p class="py-4 lh-base fs-5">
							Already have a website? Give her the home she deserves. The industry's fastest load times, guaranteed 99.9% uptime, and expert technical support are all your website needs.
						</p>
						<div class="pb-4">
							<button class="btn btn-outline-dark"><span class="p-2">View web hosting plans</span></button>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-5 p-0">
					<img class="w-100 mh-100" src="img/main-con-3.jpg" alt="">
				</div>
				<div class="col-lg-1 col-0"></div>
			</div>
		</div>
	</div>

	<div class="py-5 mb-5 container-fluid full-width-background text-center">
		<div class="py-5 my-3">
			<div class="py-lg-0 py-5"></div>
			<h2>It all starts with a domain.</h2>
			<p class="pt-4 pb-lg-3 pb-1">Bring your idea to life. Take your place online with a domain name.</p>
			<div class="row w-50 mx-auto">
				<div class="col-10 p-0">
					<input type="text" class="form-control fw-bold fs-5 p-3 px-5 h-100" placeholder="Find your perfect domain">
				</div>
				<div class="col-2 p-0">
					<button class="d-none d-md-block btn text-white fw-bold fs-5 p-3 bg-dark w-100">search</button>
					<button class="d-block d-md-none btn text-white fw-bold fs-5 p-3 bg-dark w-100">
						<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" class="bi bi-search" viewBox="0 0 16 16">
							<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
						</svg>
					</button>
				</div>
			</div>
			<div class="py-lg-0 py-5"></div>
		</div>
	</div>
<?php
require("blocks/footer-top.php");
require("blocks/footer.php");
?>