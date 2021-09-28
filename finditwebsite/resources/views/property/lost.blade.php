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
						<img src="../public/images/Lost-and-found.jpg" class="img-responsive">
					</div>
				</div>        
                <div class="col-sm-5 col-sm-pull-7">
                    <div class="lostfound_text">
                        <h4>Recent Lost/Found Posts</h4>
                        <h1>Internet Lost &amp; Found</h1>
                        <div class="feature-list">
							<ul>
								<li>Easily Post Lost or Found Items</li>
								<li>Proprietary Matching System</li>
								<li>User Friendly Dashboard</li>
							</ul>
						</div>
                        <div class="submit-btn">
                            <a class="submit-found" href="../submit/found-property.html">Submit Found Item</a>
                            <a class="submit-item" href="../submit/lost-property.html">Submit Lost Item</a>
                        </div>
						<p><span class="required">*</span><a class="slide-down-btn black-link" href="#">Click here to view recently posted items</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Banner Start --
<div id="banner" class="view-list-banner">
    <div class="container">
        <!-- Search Start --
		
        <div class="search-field">
            <div style="color:white !important;">
                <span id="property_type"><h2>Lost Property</h2></span>
            </div>
            <form>
                <div class="input-group">
                    <div class="input-group-btn first-in-btn">
                        <select class="form-control js-select" id="feature_property_type">
                            <option value="1">Lost Item</option>
                            <option value="2">Found Item</option>
                        </select>
                    </div>

                    <input type="text" class="form-control" id="term_txt" placeholder="Submit Lost Property" onkeyup="addProperty()" autocomplete="off">
                    <span class="input-group-btn last-in-btn">
                        <button class="btn btn-primary search-btn" type="button" onclick="submitProperty()">&nbsp;</button>
                    </span>
                </div>

                
            </form>
        </div>
        <!-- Search End --
    </div>
</div>
-->
<!-- Banner End -->

<!--Welcome Text-->
<div class="section-block welcome-block">
    <div class="container">
        		<p>Lostings, a one of a kind internet lost and found, which matches users who have lost property to those who have found property. Our advanced algorithm (matching system) pairs items by category, location and many other elements to help track and place an item with its respective owner. We are partnering with airlines/airports, bars, restaurants, animal shelters/clinics, veterinarians, sports venues, concert venues, museums, local public transportation, outlets, etc. to submit found items into our matching system.</p>
        <p>Statistics show 85% of lost property (phones, bags, pets, luggage, etc.) is in honest hands.  Let Lostings help you find the property/item(s) you have lost to make sure that you did everything possible to find it. Also, share your lost &amp; found items with other outlets such as Craigslist, local police precincts, animal shelters, etc...</p>
        <p>
				Submit a <a href='../submit/lost-property.html'>lost property</a> or <a href='../submit/found-property.html'>found property</a> report with our lost and found department.
        </p>
        <h3 class="recent_posts">View Recent Posts</h3>
    </div>
</div>
<!--Welcome Text-->

<div class="section-block search-item-section lost-found-section" id="app">
    <list-index route-search="#/search"
                route-lost-property="#/submit/lost-property"
                route-found-property="#/submit/found-property"
                route-property-detail="#/#title#">
    </list-index>
</div>
    <script>
        $(document).ready(function(){
            $(document).on('change', '#feature_property_type', function () {
                var lost_place_holder = 'Submit Lost Property';
                var found_place_holder = 'Submit Found Property';
                if($(this).val() == 1){
                    $("#term_txt").attr('placeholder', lost_place_holder);
                    $("#property_type").html("<h2>Lost Property</h2>");
                }else{
                    $("#term_txt").attr('placeholder', found_place_holder);
                    $("#property_type").html("<h2>Found Property</h2>");
     
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
            location.href = (propertyType == 1 ) ? '#/submit/lost-property' : '#/submit/found-property';
        }

        function searchItem(){
            var terms = $("#term_txt").val();
            localStorage.setItem('search-text', terms);
            location.href = '#';
        }
    </script>
                <!-- PAGE CONTENT ENDS -->
            </section>
           @endsection