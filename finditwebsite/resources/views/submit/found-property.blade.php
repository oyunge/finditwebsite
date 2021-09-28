@extends('layouts.client')

@section('content')
            <!-- Content Start -->
            <section id="content">
                <!-- PAGE CONTENT BEGINS -->
                    <div class="container">
        <div class="section-block form-section ">
            <div class="property-form sec1">
                <div class="notification">
    <div id="divLoading"></div>
        
        
            
</div>                                    <form method="POST" action="#/property/store" accept-charset="UTF-8" enctype="multipart/form-data" id="frm-property" autocomplete="off"><input name="_token" type="hidden" value="Tl9phNFvoYeatlSE08XNItGVRQcKQdxde7btwfVv">
<input name="property_type" type="hidden" value="2">

 
<input id="country" name="country" type="hidden">
<input id="state" name="state" type="hidden">
<input id="city" name="city" type="hidden">
<input id="lat" name="lat" type="hidden">
<input id="lng" name="lng" type="hidden">

<input id="lat1" name="lat1" type="hidden">
<input id="lng1" name="lng1" type="hidden">

<div class="row">
        <div class="col-sm-7 col-sm-push-5">
            <div class="lostfound_image"><img src="../public/assets/images/submit_found_property.jpg" class="img-responsive"></div>
        </div>        
    <div class="col-sm-5 col-sm-pull-7">
        <div class="lostfound_text">
            <h1>Submit Found Property</h1>
            <div class="feature-list">
                <ul>
                    <li>Our Matching System Finds Found Property</li>
                    <li>Receive Notifications of Matching Lost Items</li>
                    <li>Help us Find The Owner of What Was Lost</li>
                </ul>
            </div>
            <div class="submit-btn">
                <a class="submit-found slide-down-btn" href="found-property.html">Submit Found Item</a>
            </div>
            <p><span class="required">*</span>Please be descriptive when reporting found property, the more information you give us the better chance we have of reuniting the lost property to the owner.</p>
        </div>
    </div>
</div>

<div class="property-form-block lost-found-section">
    <div class="property-form-block">
        <div class="property-form-body">
                        
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group search-frm ">
                        <label for="sub_category_id" class="control-label lbl-descriptive">Item Found
                            <small class="required">*</small>
                                <span class="label-detail">(Dog, Jacket, Smartphone, Wallet, etc.) This field is required.</span>
                        </label>

                        <input id="search_sub_cat" class="form-control search-item-input" placeholder="Item Found" name="sub_category_id" type="text">
                        <div class="search-box"></div>
                                            </div>

                    <div class="form-group search-frm ">
                        <label for="category_id" class="control-label lbl-descriptive">Category
                            <small class="required">*</small>
                            <span class="label-detail">(Animals/Pets, Clothing, Electronics, Personal Accessories etc.) This Field may Auto-Populate</span>
                        </label>

                        <input id="search_cat" class="form-control search-item-input" placeholder="Search Category" name="category_id" type="text">
                        <div class="search-box"></div>
                                            </div>

                    <div class="form-group search-frm ">
                        <label for="brand_id" class="control-label lbl-descriptive">
                            <span class="brand_label">Brand</span>
                            <span class="label-detail brand_desc_text">(Canada, Goose, Apple, Louis Vuitton, etc.)<span>
                        </label>

                        <input id="search_brand" class="form-control search-item-input" placeholder="Search Brand" name="brand_id" type="text">
                        <div class="search-box"></div>
                                            </div>

                    <div class="form-group primary_color_div search-frm">
                        <label for="primary_color" class="control-label lbl-descriptive">Primary Color
                        <span class="label-detail">Please Add the Color That best represents the found property (Black, Red, Blue, etc.)</span>
                        </label>
                        <input id="primary_color" class="form-control search_color" placeholder="Search Primary Color" name="primary_color" type="text">
                        <div class="search-box"></div>
                    </div>

                    <div class="form-group secondary_color_div search-frm">
                        <label for="secondary_color" class="control-label lbl-descriptive">Secondary Item Color
                            <span class="label-detail">Please add a color that acts as a less dominant (Leave blank if not applicable.)</span>
                        </label>
                        <input id="secondary_color" class="form-control search_color" placeholder="Search Secondary Color" name="secondary_color" type="text">
                        <div class="search-box"></div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date" class="control-label lbl-descriptive">Date Found
                            <small class="required">*</small>
                            <span class="label-detail">Please add the approximate date of when the item was found.</span>
                        </label>
                        <div class="input-group date">
                            <input id="incident_date" class="form-control" placeholder="Date Found" name="incident_date" type="text">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                                            </div>
                    <div class="form-group">
                        <label for="time" class="control-label lbl-descriptive">Time Found
                            <small class="required">*</small>
                            <span class="label-detail">Please add the approximate time of day that the was item found.</span>
                        </label>
                        <div class="input-group">
                            <input id="time" class="form-control time" placeholder="Time Found" name="time" type="text">
                            <span class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </span>
                        </div>
                                            </div>

                    <div class="form-group upload_image">
                        <label class="control-label lbl-descriptive">Upload Image
                        <span class="label-detail">(This image will display on the website.)<span>
                        </label>
                                                    <input placeholder="Upload an image or file of the item" class="form-control" id="upload_image_name" name="upload_image" type="hidden">
                                                <input id="upload_media_image" name="upload_image_name" type="hidden">
                                            </div>
                    <!---Image Container-->
                    <div id="upload-image-container" class="cropContainer"></div>

                    <div class="form-group ">
                        <label for="additional_information" class="control-label lbl-descriptive">Additional Information
                        <span class="label-detail">Please provide any additional details/description of your found property.</span>
                        </label>
                        <textarea id="additional_information" class="form-control" placeholder="Additional Information" rows="5" name="additional_information" cols="50"></textarea>
                                            </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="property-form-block">
    <div class="section-header">
        <div class="text-left">
            <h2>Location Information</h2>
        </div>
    </div>    

    <div class="property-form-block">
        <div class="property-form-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class=" form-group">
                        <label for="where_type" class="control-label lbl-descriptive">Where Found
                            <small class="required">*</small>
                            <span class="label-detail">Please provide an approximate location of the found property (Bar, Restaurant, Park, etc.)<span>
                        </label>

                                                    
                            <select id="location_type" class="form-control js-select" data-live-search="true" data-size="5" data-type="found"  name="location_type"><option selected="selected" value="">Select Type</option><option value="1">Bar</option><option value="2">Taxi</option><option value="4">Restaurant</option><option value="12">Hotel</option><optgroup label="Airport"><option value="3">Airport of Departure</option><option value="15">Airport of Arrival</option><option value="16">TSA Checkpoint</option><option value="17">Airport Shuttle</option></optgroup><option value="9">Pet Services</option><option value="14">Educational Institute</option><option value="11">Public Transportation</option><option value="7">Museum</option><option value="5">Park</option><option value="6">Rental Car</option><option value="8">Venu</option><option value="13">Misc.</option></select>
                                            </div>


                    <div id="where_lost_container">
                        
                                            </div>
                </div>

                <div class="col-sm-6">
                                        <div class="form-group">
                        <label for="zip_code" class="control-label lbl-descriptive">Zip Code
                        <span class="label-detail">Please provide your zip code(10004, 10028, 10002, etc.) This field may auto-populate.<span>
                        </label>
                        <input id="zip_code" class="form-control" placeholder="Zip Code" maxlength="5" name="zip_code" type="text">
                                            </div>
                </div>
            </div>
        </div>

    <div class="property-form-block">
    <div class="property-form-body">
        <div class="row">
            <div class="col-sm-12">
                <div id="map" class="map"></div>
            </div>
        </div>
    </div>
</div> <!--Map-->
    </div>
</div>
<script>
    var loadPic = false;
    
    var cropPicOptions = {
            uploadUrl: window.Laravel.APP_URL+'/ajax/post-upload',
            cropUrl: window.Laravel.APP_URL+'/ajax/post-crop',
            imgEyecandy:true,
            loadPicture:loadPic,
            modal:false,
            doubleZoomControls:true,
            rotateControls: false,
            imgEyecandyOpacity:0,
            loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
            onAfterImgUpload: function(e){
                var imgSrc = $("#upload-image-container").find('img').attr('src');
                var img_arr = imgSrc.split('../index.html');
                var image_name = img_arr[img_arr.length - 1];
                $("#upload_image_name,#upload_media_image").val(image_name);
            },
            onReset:function(){
                $("#upload_image_name,#upload_media_image").val('');
                            }
        }

    new Croppic('upload-image-container', cropPicOptions);

    $(document).on('click','.cropControlsUpload .cropControlRemoveCroppedImage','click',function(){
        $("#upload_image_name,#upload_media_image").val('');
    });

    $(document).ready(function(){
        lostings.fillCategoryName(localStorage.getItem('property-text'));
    });

</script>


<div class="property-form-block">
    <div class="section-header">
        <div class="text-left">
            <h2>Contact Information</h2>
        </div>
    </div>
    <div class="property-form-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="first_name" class="control-label lbl-descriptive">First Name
                        <small class="required">*</small>
                        <span class="label-detail">Please enter your first name(This will appear on your submission)<span>
                    </label>
                    <input id="first_name" class="form-control" placeholder="First Name"  name="users[first_name]" type="text" value="">
                                    </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="last_name" class="control-label lbl-descriptive">Last Name
                        <small class="required">*</small>
                        <span class="label-detail">Please enter your last name(This will appear on your submission)<span>
                    </label>
                    <input id="last_name" class="form-control" placeholder="Last Name"  name="users[last_name]" type="text" value="">
                                    </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="phone_number" class="control-label lbl-descriptive">Phone Number
                        <small class="required">*</small>
                        <span class="label-detail">Please enter the phone number to display on your submission<span>
                    </label>
                    <input id="phone_number" class="phone_us form-control" placeholder="Phone Number" name="users[phone_number]" type="text" value="">
                                    </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="email" class="control-label lbl-descriptive">Email
                        <small class="required">*</small>
                        <span class="label-detail">Please enter your email(This will appear on your submission)<span>
                    </label>
                    <input id="email" class="form-control" placeholder="Email"  name="users[email]" type="email" value="">
                                    </div>
            </div>
        </div>
    </div>

    <div class="property-form-block">
        <div class="property-form-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="pull-right">
                        <input type="hidden" name="recaptcha" id="recaptcha">
                        <button type="button" class="btn btn-primary btn-lg btn-fs-16 pull-right" onclick="window.lostings.submitForm(this);">Publish</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../www.google.com/recaptcha/api5542.js?render=6LdGccgUAAAAAHNDNsK31Lkpc0zr6eGtPBQ1JIbu"></script>
    <script>
        window.Laravel.lat = 40.7128;
        window.Laravel.lng = -73.935242;
        grecaptcha.ready(function () {
            grecaptcha.execute('6LdGccgUAAAAAHNDNsK31Lkpc0zr6eGtPBQ1JIbu', { action: 'login' }).then(function (token) {
                console.log(token);
                if(token){
                    document.getElementById('recaptcha').value = token;
                }
            });
        });
    </script>
    </form>                            </div>
        </div>
    </div>
                <!-- PAGE CONTENT ENDS -->
            </section>
           @endsection