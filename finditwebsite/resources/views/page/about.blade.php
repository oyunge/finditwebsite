@extends('layouts.client')

@section('content')
            <!-- Content Start -->
            <section id="content">
                <!-- PAGE CONTENT BEGINS -->
                
	<div class="sec1">
        <div class="container">
            <div class="row">
				<div class="col-sm-7 col-sm-push-5">
					<div class="lostfound_image">
						<img src="../public/images/about-lostings.png" class="img-responsive about_image">
					</div>
				</div>        
                <div class="col-sm-5 col-sm-pull-7">
                    <div class="lostfound_text">
						<h4>About Lostings,</h4>
                        <h1>The Intelligent Lost and Found System!!!</h1>
                        <p>At Lostings Inc., we are solving an age-old problem – easily inputting and keeping track of lost and found items – using smart matching technology.  Our proprietary lost and found matching software is completely devoted to connecting businesses and individuals who have found items, to individuals who have lost or misplaced them</p>
                        <p>&nbsp;</p>
                        <p>Want to know what makes our system so convenient? Here’s what you need to know…</p>
                        <!---
                        <div class="submit-btn">
                            <a class="submit-item slide-down-btn" href="#">View FAQs</a>
                        </div>
                        --->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="work-accordion lost-found-section">
		<div class="container">
			<div class="accordion-sec">
                <div class="accordion accordion_heading">Business Lost & Found</div>
            </div>
        </div>
    </div>

	<div class="work-accordion lost-found-section">
		<div class="container">
			<div class="accordion-sec">

				<button class="accordion">Lostings for Business</button>
				<div class="panel">
					<p>Often, businesses can find themselves with an abundance of costumer’s lost or misplaced items.  This can pack your closets, waste time and take away valuable space. At Lostings we’ve created a ‘smart’ lost and found software, specifically designed for businesses to manage found goods and intelligently match them with their correct owners. </p>
					<p>Our easy to use lost and found software matches misplaced goods using our inventory matching system.  The lost and found matching system intelligently narrow’s down lost and found items with one another, to find possible matches.  Once potential matches are found we automatically notify the owners of the misplaced items, the location of the item and who to contact.  We also notify you (the business owner/manager) of the possible match.  Avoid confusion; easily and efficiently match lost items with their correct owners.</p>
                    <p>Businesses can easily input, store and manage their found item inventory data, with our new lost and found inventory management matching system.</p>
                    <p>Save time, money and space, Sign Up or Install our <strong>Private Business App (coming soon)</strong> for Android or iPhone.</p>
				</div>
			</div>
			<div class="accordion-sec">
				<button class="accordion">Features</button>
				<div class="panel points">
					<ul>
                        <li><strong>Simple signup process</strong>, create a profile, login and start submitting found items</li>
                        <li>Access Lostings anywhere, with our website or <strong>Private Business App (coming soon)</strong></li>
                        <li><strong>Easily add found items</strong> into our lost and found database system</li>
                        <li>Hassle free <strong>automated matching system</strong> and <strong>notifications</strong></li>
                        <li><strong>Search Lostings database</strong> to gain access to previously submitted found items</li>
                        <li>Print out <strong>found item reports</strong> all with <strong>unique item ID’s</strong> for convenient filing</li>
                        <li>Gain access to our <strong>partnership kit</strong> and add a lost and found badge to your site </li>
                        <li>Apps, Website and Mobile Website are all <strong>one dynamic platform</strong> that is streamlined to <strong>seamlessly work together</strong></li>
                    </ul>
                    <p>To access all of the features that Lostings offers, Sign Up or Install our <strong>Private Business App (coming soon)</strong> for Android or iPhone.</p>
				</div>
			</div>

			<div class="accordion-sec">
				<button class="accordion">Industries Served</button>
				<div class="panel points">
					<ul>
						<li><a rel="nofollow" title="Lost and found software for Airlines, Airports & TSA" href="../airport-lost-and-found-software.html">Airlines, Airports & TSA</a></li>
						<li><a rel="nofollow" title="Lost and found software for Hotels, Resorts & Motels" href="../hotel-lost-and-found-software.html">Hotels, Resorts & Motels</a></li>
						<li><a rel="nofollow" title="Lost and found software for Pets, Vets, Animal Clinics & Animal Shelters" href="../pet-lost-and-found-software.html">Pets, Vets, Animal Clinics & Animal Shelters</a></li>
						<li><a rel="nofollow" title="Lost and found software for Educational Institutes (Colleges & University)" href="../college-lost-and-found-software.html">Educational Institutes (Colleges & University)</a></li>
						<li><a rel="nofollow" title="Lost and found software for Taxi & Car Services" href="../taxi-lost-and-found-software.html">Taxi & Car Services</a></li>
						<li><a rel="nofollow" title="Lost and found software for Venues and Arenas (Sporting & Concerts)" href="../venue-lost-and-found-software.html">Venues and Arenas (Sporting & Concerts)</a></li>
						<li><a rel="nofollow" title="Lost and found software for Public Transportation Services" href="../transportation-lost-and-found-software.html">Public Transportation Services</a></li>
						<li><a rel="nofollow" title="Lost and found software for Bars, Pubs and Night Clubs" href="../bar-lost-and-found-software.html">Bars, Pubs and Night Clubs</a></li>
						<li><a rel="nofollow" title="Lost and found software for Restaurants" href="../restaurants-lost-and-found-software.html">Restaurants</a></li>
						<li><a rel="nofollow" title="Lost and found software for Rental Car Companies" href="../rental-car-lost-and-found-software.html">Rental Car Companies</a></li>
						<li><a rel="nofollow" title="Lost and found software for Museums" href="../museums-car-lost-and-found-software.html">Museums</a></li>
						<li><a rel="nofollow" title="Lost and found software for Public Parks" href="../public-parks-lost-and-found-software.html">Public Parks</a></li>
					</ul>
                    <p>Signup on our website or Install our <strong>Private Business App</strong> for Android or iPhone</p>
				</div>
			</div>

			<div class="accordion-sec">
				<button class="accordion accordion_last">Signup</button>
				<div class="panel">
					<div class="item-frm-section">
						<form method="POST" action="#/company/newcompany" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="Tl9phNFvoYeatlSE08XNItGVRQcKQdxde7btwfVv">
<input id="country" name="country" type="hidden">
<input id="state" name="state" type="hidden">
<input id="city" name="city" type="hidden">
<input id="lat" name="lat" type="hidden">
<input id="lng" name="lng" type="hidden">
<input name="user_group" type="hidden" value="2">

<div class="title-bar clearfix">
    <div class="section-title section-title-small text-left">
        <h3>Register Your Business</h3>
    </div>
</div>

<div class="item-fnd-form">
    
    <div class="property-form">
        <div class="property-form-block">
            <div class="property-form-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="control-label">Company Name
                                        <small class="required">*</small>
                                    </label>
                                    <input id="name" class="form-control" placeholder="Company Name" name="name" type="text">
                                                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company_type" class="control-label">Company Type
                                        <small class="required">*</small>
                                    </label>
                                    <select id="company_type" class="form-control js-select" data-live-search="true" data-size="5" name="company_type"><option selected="selected" value="">Select Type</option><option value="1">Bar</option><option value="2">Taxi</option><option value="3">Airport</option><option value="15">Airline</option><option value="16">TSA</option><option value="17">Airport Shuttle</option><option value="4">Restaurant</option><option value="5">Park</option><option value="6">Rental Car</option><option value="7">Museum</option><option value="8">Venu</option><option value="9">Pet Services</option><option value="10">Street Vendor</option><option value="11">Subway</option><option value="12">Hotel</option><option value="13">Misc.</option></select>

                                                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number" class="control-label">Phone Number
                                        <small class="required">*</small>
                                    </label>
                                    <input id="phone_number" class="phone_us form-control" placeholder="Phone Number" name="phone_number" type="text">
                                                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="zip_code" class="control-label">Zip Code
                                        <!-- <small class="required">*</small> -->
                                    </label>
                                    <input id="zip_code" class="form-control" placeholder="Zip Code" name="zip_code" type="text">
                                                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="location" class="control-label">Location/Address
                                        <small class="required">*</small>
                                    </label>
                                    <input id="location" class="form-control" placeholder="Where Found" onFocus="geolocate()" name="location" type="text">
                                                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email" class="control-label">Email
                                        <small class="required">*</small>
                                    </label>
                                    <input id="email" class="form-control" placeholder="Email" name="email" type="text">
                                                                    </div>
                            </div>
                        </div>
                    </div>
					<div class="col-sm-6">
												<div class="form-group">
							<label for="password" class="control-label">Password
								<small class="required">*</small>
							</label>
							<input id="password" class="form-control" placeholder="Password" name="password" type="password">
													</div>
                        					</div>
					<div class="col-sm-6">
													<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="password-confirm"
											class="control-label">Confirm Password 
											<small class="required">*</small></label>
										<input id="password-confirm" class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password" value="">
																			</div>
								</div>
							</div>        
											</div>
                </div>
            </div>
        </div>

        <div class="property-form-block">
            <div class="property-form-body">
                <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group text-right">
                            <input type="hidden" name="recaptcha" id="recaptcha">
                            <button class="btn btn-primary" type="submit">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.Laravel.lat = 40.7128;
    window.Laravel.lng = -73.935242;
    var error_register = '';
    
    if(error_register.length != 0){
        setTimeout(() => {
            $("#started").trigger('click');
        }, 200);
    }
</script>
<script src="../../www.google.com/recaptcha/api5542.js?render=6LdGccgUAAAAAHNDNsK31Lkpc0zr6eGtPBQ1JIbu"></script>
<script type="text/javascript">
    grecaptcha.ready(function () {
        grecaptcha.execute('6LdGccgUAAAAAHNDNsK31Lkpc0zr6eGtPBQ1JIbu', { action: 'login' }).then(function (token) {
            console.log(token);
            if(token){
                document.getElementById('recaptcha').value = token;
            }
        });
    });
</script>
</form>					</div>
				</div>
			</div>
		</div>
	</div>

	<div><p>&nbsp;</p></div>

	<div class="work-accordion lost-found-section">
		<div class="container">
			<div class="accordion-sec">
                <div class="accordion accordion_heading">Lost and Found for Individuals</div>
            </div>
        </div>
    </div>

	<div class="work-accordion lost-found-section">
		<div class="container">
			<div class="accordion-sec">

				<button class="accordion">Lostings for Individual Users</button>
				<div class="panel">
					<p>All to often we can find ourselves losing/misplacing items with no way of finding them or, stumbling on lost items with the owner out of site and not a place to return the lost property.  At Lostings Inc., we have built an intelligent lost and found matching system for individual users to solve this and a number of additional issues.</p> 
					<p>Our intelligent lost and found matching system automatically processes each lost or found submission.  We match and identify items by a number of different criteria for better accuracy in identifying the lost or found property.  Once potential matches are generated, we automatically notify you and the person or business owner/managers who have found your lost or misplaced property.</p> 
					<p>Submitting lost or found items has never been easier, simply enter the details of the lost or found property and let our smart matching system get to work for you.</p>
				</div>
			</div>
			<div class="accordion-sec">
				<button class="accordion">User Features</button>
				<div class="panel points">
					<ul>
                        <li>Easily <strong>Submit lost and found items</strong> into our intelligent matching system</li>
                        <li>Hassle <strong>free account signup</strong> process, auto-generate profile and start submitting items</li>
                        <li><strong>Intelligent matching</strong> system which identifies and matches lost or found items </li>
                        <li>All submissions processed through our <strong>lost and found matching system</strong></li>
                        <li><strong>Receive notification</strong> alerts of property that pair’s with your submission</li>
                        <li>Contact the user who’s item <strong>potentially matches</strong> yours</li>
                        <li><strong>Feature lost items</strong> to display on all of our <strong>websites and social media platforms</strong></li>
						<li>Ability to <strong>edit</strong> your lost or found submission, <strong>add photos, print fliers, manage submissions, email potential matches,</strong> etc</li>
						<li><strong>Search Lostings database</strong> to gain access to previously submitted lost or found items</li>
						<li>The Website and Mobile Website are all <strong>one dynamic platform</strong> that is streamlined to <strong>seamlessly work together</strong></li>
                    </ul>
                    <p>In order to access all of Lostings features, submit a lost or found item.</p>
				</div>
			</div>

			<div class="accordion-sec">
				<button class="accordion accordion_last">Where we Serve</button>
				<div class="panel points">
					<p>We serve as a lost and found system in the following places:</p>
					<ul>
						<li><a rel="nofollow" title="Lost and found for U.S. Based Airports" href="../airport-lost-and-found.html">U.S. Based Airports</a></li>
						<li><a rel="nofollow" title="Lost and found for Domestic Airlines" href="../airport-lost-and-found.html">Domestic Airlines</a></li>
						<li><a rel="nofollow" title="Lost and found for TSA Checkpoints" href="../airport-lost-and-found.html">TSA Checkpoints</a></li>
						<li><a rel="nofollow" title="Lost and found for Airport Shuttles" href="../airport-lost-and-found.html">Airport Shuttles</a></li>
						<li><a rel="nofollow" title="Lost and found for Hotels & Resorts" href="../hotel-lost-and-found.html">Hotels & Resorts</a></li>
						<li><a rel="nofollow" title="Lost and found for Vets, Animal Shelter’s & Animal Hospitals" href="../pet-lost-and-found.html">Vets, Animal Shelter’s & Animal Hospitals</a></li>
						<li><a rel="nofollow" title="Lost and found for College and Universities" href="../college-lost-and-found.html">College and Universities</a></li>
						<li><a rel="nofollow" title="Lost and found for Local Taxi Companies & Car Services" href="../taxi-lost-and-found.html">Local Taxi Companies & Car Services</a></li>
						<li><a rel="nofollow" title="Lost and found for Music and Sports Venues & Arenas" href="../venue-lost-and-found.html">Music and Sports Venues & Arenas</a></li>
						<li><a rel="nofollow" title="Lost and found for Transportation Authorities" href="../transportation-lost-and-found.html">Transportation Authorities</a></li>
						<li><a rel="nofollow" title="Lost and found for Bars & Night Clubs" href="../bar-lost-and-found.html">Bars & Night Clubs</a></li>
						<li><a rel="nofollow" title="Lost and found for Restaurants & Cafes" href="../restaurants-lost-and-found.html">Restaurants & Cafes</a></li>
						<li><a rel="nofollow" title="Lost and found for Rental Car Companies" href="../rental-car-lost-and-found.html">Rental Car Companies</a></li>
						<li><a rel="nofollow" title="Lost and found for Museums" href="../museums-car-lost-and-found.html">Museums</a></li>
						<li><a rel="nofollow" title="Lost and found for Public Parks" href="../public-parks-lost-and-found.html">Public Parks</a></li>
                    </ul>
                    <p>For an intelligent lost and found matching system, sign up with Lostings…</p>
				</div>
			</div>

		</div>
	</div>
	
                <!-- PAGE CONTENT ENDS -->
            </section>
            @endsection