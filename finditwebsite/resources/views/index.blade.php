@extends('layouts.client')

@section('content')
            <!-- Content Start -->
            <section id="content">
                <!-- PAGE CONTENT BEGINS -->
                
    <!-- Banner Start -->
    <div class="sec1">
        <div class="container">
            <div class="row">
                    <div class="col-sm-7 col-sm-push-5">
                        <div class="lostfound_image"><img src="{{asset('assets/images/image01.png')}}" class="img-responsive"></div>
                    </div>        
                <div class="col-sm-5 col-sm-pull-7">
                    <div class="lostfound_text">
                        <h4>Welcome To Findit, Inc.,</h4>
                        <h1>Intelligent Online <br/>Lost & Found</h1>
                        <p>Findit is an entirely new intelligent lost and found matching system & <a href="company/register.html">inventory management software</a> all in one.  We have taken a different approach than the traditional lost & founds by creating a multi-level platform for businesses and individuals to <a href="submit/lost-property.html">submit lost</a> or <a href="submit/found-property.html">found items</a> into our matching system.  Once the lost or found items are submitted and placed into our matching system, we intelligently help find and locate the misplaced goods and who has them.</p>
                        <div class="submit-btn">
                            <a class="submit-found" href="submit/found-property.html">Submit Found Item</a>
                            <a class="submit-item" href="submit/lost-property.html">Submit Lost Item</a>
                        </div>
                        <div class="submit-text"><p>Are you a Business Owner or Manager?<span><a href="company/register.html">Signup for our Lost & Found Inventory Management System</a></span></p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sec2">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="step-sec">
                        <div class="step-image"><img src="{{asset('assets/images/image02.png')}}" class="img-responsive"></div>
                        <h4>Ease of Use</h4>
                        <p>Submitting lost or found items is simple and hassle free.  Input the required information and let our system go to work.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="step-sec">
                        <div class="step-image"><img src="{{asset('assets/images/image03.png')}}" class="img-responsive"></div>
                        <h4>Intelligent Matching</h4>
                        <p>Our lost and found matching system intelligently finds and locates items lost or found and who potentially has them.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="step-sec">
                        <div class="step-image"><img src="{{asset('assets/images/image04.png')}}" class="img-responsive"></div>
                        <h4>Out Reach</h4>
                        <p>With our multi-level platform, your lost or found submission will automatically be sent to local businesses and individuals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sec3">
        <div class="container">
            <div class="row">
                    <div class="col-sm-5 col-sm-push-7">
                        <div class="lostfound_image"><img src="{{asset('assets/images/image05.png')}}" class="img-responsive"></div>
                    </div>
                <div class="col-sm-7 col-sm-pull-5">
                    <div class="lostfound_text">
                        <h2>Intelligent Lost & Found Matching System</h2>
                        <p>Losing or misplacing your property can be frustrating and become such a hassle to find. At Findit we answer that by providing an intelligent lost and found matching system, which automatically identifies, matches, and pairs <a href="property/lost.html">recently lost or found</a> items with one another.</p>
                        <p>We’ve also partnered with local and regional businesses to submit found items into our matching system.  This helps to maximize reach and gives users a higher rate of success when attempting to locate and find lost property.</p>
                        <p>Did you lose or find something?  Click below to submit a lost or found item.</p>
                        <div class="submit-btn">
                        <a class="submit-found" href="submit/found-property.html">Submit Found Item</a>
                            <a class="submit-item" href="submit/lost-property.html">Submit Lost Item</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sec4">
        <div class="container">
            <div class="lostitems-ttl">
                <h2>Featured Lost Items</h2>
                <p>View our recently featured Lost and Found property entries.</p>
            </div>
            
            <div id="feature_rows">
                <div class="row" >
                                                                        <div class="col-sm-4">
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Airpods pro</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>Dulles Greene, Astoria Circle, Herndon, VA, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Electronics</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_airpods-pro_632.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Wallet</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>Carriage Haus, West 3rd Street, Davenport, IA, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Personal Accessories</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_wallet_628.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Box</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>57 West 57th Street, New York, NY, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Mail/Parcels</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_box_623.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Green makeup bag</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>Penn Station, New York, NY, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Personal Accessories</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_green-makeup-bag_618.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Phone and Wallet</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>Econo Lodge, Westside Drive Northwest, Cleveland, TN, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Electronics</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_phone-and-wallet_611.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            </div>                          
                                                    <div class="col-sm-4">
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Dogs</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>G &amp; J Tire Shop, Grand Street, Brooklyn, NY, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Animals/Pets</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_dogs_608.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Wallet</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>Las Vegas Strip, NV, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Personal Accessories</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_wallet_600.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Diamond cuff, evil</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>Tampa, FL, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Eye necklace, diamond ring, lele s drop earrings</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_diamond-cuff-evil_598.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Le sport sac make up bag</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>JVC Family Medicine, Village Green Drive, Houston, TX, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Personal Accessories</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_le-sport-sac-make-up-bag_546.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Tumo</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>Telluride, CO, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Clothing</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_tumo_534.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            </div>                          
                                                    <div class="col-sm-4">
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Wallet</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>Texas, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Personal Accessories</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_wallet_532.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Dogs</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>Webster, NY 14580, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Animals/Pets</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_dogs_531.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Trading Cards</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>Testarossa Winery, College Avenue, Los Gatos, CA, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Collectors Items</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_trading-cards_516.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Tablet</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>SSM Health Saint Louis University Hospital, Vista Avenue, St. Louis, MO, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Electronics</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_tablet_514.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            
                                    <div class="lostitems-list">
                                        <div class="lostitems-box">
                                            <div class="lostitems-lft">
                                                <p><strong>Item Lost: </strong>Kitten</p>
                                                <div class="lostitems-text">
                                                    <div>
														<p>
														<strong>Location: </strong>7708 Aquatic Drive, Arverne, NY, USA</p>
													</div>
                                                </div>
                                                <p><strong>Category</strong>: <span>Animals/Pets</span></p>
                                            </div>
                                            <div class="lostitems-rgt"><a class="btn" href="lost_kitten_501.html">View Post</a></div>
                                        </div>
                                    </div>
                                                            </div>                          
                        
                                    </div>
            </div>           

            <input type="hidden" id="hidden_offset" value="0" />
            <input type="hidden" id="hidden_limit" value="15" />

            <div class="lostitems-btn">
                <a href="property/lost.html" id="more_items">View More Lost Items</a>
            </div>
        </div>
    </div>    

    <div class="sec5">
        <div class="container">
            <div class="row">
                    <div class="col-sm-5 col-sm-push-7">
                        <div class="lostfound_image"><img src="{{asset('assets/images/image07.png')}}" class="img-responsive"></div>
                    </div>
                <div class="col-sm-7 col-sm-pull-5">
                    <div class="lostfound_text">
                        <h2>Lost & Found Inventory Management...</h2>
                        <h4>Intelligent lost and found inventory management made simple.</h4>
                        <p>Storing or holding onto lost or misplaced items can cause a number of issues.  Your shelves become unorganized with loss of storage space, filing systems become packed, and then to top it off you become stressed trying to find the owner. Our new intelligent lost & found system handles inventory management as well as matching items.</p>
                        <div class="submit-btn">
                            <a class="submit-item" href="company/register.html">Create Business Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sec6">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="industries_text">
                        <h2>Industries Served...</h2>
                        <table class="table table-responsive">
                        <tbody>
                            <tr>
                            <td><a href="airport-lost-and-found-software.html" rel="nofollow" title="Lost and found software for Airlines, Airports & TSA">Airlines, Airports & TSA</a></td>
                            <td><a href="airport-lost-and-found-software.html" rel="nofollow" title="Learn more about lost and found software for airlines, airports & TSA">Learn More</a></td>
                            </tr>
                            <tr>
                            <td><a href="hotel-lost-and-found-software.html" rel="nofollow" title="Lost and found software for Hotels & Resorts">Hotels & Resorts</a></td>
                            <td><a href="hotel-lost-and-found-software.html" rel="nofollow" title="Learn more about lost and found software for Hotels & Resorts">Learn More</a></td>
                            </tr>
                            <tr>
                            <td><a href="pet-lost-and-found-software.html" rel="nofollow" title="Lost and found software for Pets, Vets, Animal Clinics & Animal Shelters">Pets,
                            Vets, Animal Clinics & Animal Shelters</a></td>
                            <td><a href="pet-lost-and-found-software.html" rel="nofollow" title="Learn more about lost and found software for Pets, Vets, Animal Clinics & Animal Shelters">Learn More</a></td>
                            </tr>
                            <tr>
                            <td><a href="college-lost-and-found-software.html" rel="nofollow" title="Lost and found software for Educational Institutes (Colleges/Universities)">Educational
                            Institutes (Colleges/Universities)</a></td>
                            <td><a href="college-lost-and-found-software.html" rel="nofollow" title="Learn more about lost and found software for Educational Institutes (Colleges/Universities)">Learn More</a></td>
                            </tr>
                            <tr>
                            <td><a href="taxi-lost-and-found-software.html" rel="nofollow" title="Lost and found software for Taxis & Car Services">Taxis & Car
                            Services</a></td>
                            <td><a href="taxi-lost-and-found-software.html" rel="nofollow" title="Learn more about lost and found software for Taxis & Car Services">Learn More</a></td>
                            </tr>
                            <tr>
                            <td><a href="venue-lost-and-found-software.html" rel="nofollow" title="Lost and found software for Venues/Arenas (Sports & Concerts)">Venues/Arenas
                            (Sports & Concerts)</a></td>
                            <td><a href="venue-lost-and-found-software.html" rel="nofollow" title="Learn more about lost and found software for Venues/Arenas (Sports & Concerts)">Learn More</a></td>
                            </tr>
                            <tr>
                            <td><a href="transportation-lost-and-found-software.html" rel="nofollow" title="Lost and found software for Public Transportation Services">Public
                            Transportation Services</a></td>
                            <td><a href="transportation-lost-and-found-software.html" rel="nofollow" title="Learn more about lost and found software for Public Transportation Services">Learn More</a></td>
                            </tr>
                            <tr>
                            <td><a href="bar-lost-and-found-software.html" rel="nofollow" title="Lost and found software for Bars, Pubs & Night Clubs">Bars, Pubs &
                            Night Clubs</a></td>
                            <td><a href="bar-lost-and-found-software.html" rel="nofollow" title="Learn more about lost and found software for Bars, Pubs & Night Clubs">Learn More</a></td>
                            </tr>
                            <tr>
                            <td><a href="restaurants-lost-and-found-software.html" rel="nofollow" title="Lost and found software for Restaurants">Restaurants</a></td>
                            <td><a href="restaurants-lost-and-found-software.html" rel="nofollow" title="Learn more about lost and found software for Restaurants">Learn More</a>
                            </td>
                            </tr>
                            <tr>
                            <td><a href="rental-car-lost-and-found-software.html" rel="nofollow" title="Lost and found software for Rental Car Companies">Rental Car
                            Companies</a></td>
                            <td><a href="rental-car-lost-and-found-software.html" rel="nofollow" title="Learn more about lost and found software for Rental Car Companies">Learn More</a></td>
                            </tr>
                            <tr>
                            <td><a href="museums-car-lost-and-found-software.html" rel="nofollow" title="Lost and found software for Museums">Museums</a></td>
                            <td><a href="museums-car-lost-and-found-software.html" rel="nofollow" title="Learn more about lost and found software for Museums">Learn More</a></td>
                            </tr>
                            <tr>
                            <td><a href="public-parks-lost-and-found-software.html" rel="nofollow" title="Lost and found software for Public Parks">Public Parks</a></td>
                            <td><a href="public-parks-lost-and-found-software.html" rel="nofollow" title="Learn more about lost and found software for Public Parks">Learn More</a>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

	    <!-- Banner End -->


    <script>
        $(document).ready(function(){
            $(document).on('change', '#feature_property_type', function () {
                var lost_place_holder = 'Submit Lost Property';
                var found_place_holder = 'Submit Found Property';
                if($(this).val() == 1){
                    $("#term_txt").attr('placeholder', lost_place_holder);
                }else{
                    $("#term_txt").attr('placeholder', found_place_holder);
                }
            });

            $('#term_txt').keydown(function (e) {
                var keyCode = (e.keyCode ? e.keyCode : e.which);
                if(keyCode == 13 || keyCode == 9)  // the enter key code
                {
                    submitProperty();
                }
            });
        });

        function addProperty() {
            var terms = $("#term_txt").val();
            localStorage.setItem('property-text', terms);
        }

        function submitProperty(){
            addProperty();
            var propertyType = $("#feature_property_type").val();
            location.href = (propertyType == 1 ) ? 'https://www.Findit.com/submit/lost-property' : 'https://www.Findit.com/submit/found-property';
        }

        function searchItem(){
            var terms = $("#term_txt").val();
            localStorage.setItem('search-text', terms);
            location.href = 'search.html';
        }
    </script>
                <!-- PAGE CONTENT ENDS -->
            </section>
            @endsection