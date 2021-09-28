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
						<img src="../public/images/faq-img.jpg" alt="FAQs">
					</div>
				</div>        
                <div class="col-sm-5 col-sm-pull-7">
                    <div class="lostfound_text">
						<h4>Looking for answers?</h4>
                        <h1>FREQUENTLY ASKED QUESTIONS <span class="header_grey">(FAQ)</span></h1>
                        <p>Find answers to the questions and topics that we are most commonly asked about Lostings.</p>
                        <div class="submit-btn">
                            <a class="submit-item slide-down-btn" href="#">View FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<div class="work-accordion lost-found-section">
		<div class="container">
			<div class="accordion-sec">
				<button class="accordion active">General <span>FAQs</span></button>
				<div class="panel" style="display: block;">
					<h3>What is Lostings?</h3>
					<p>Lostings is a one of a kind internet lost and found.  We are the only company to match users who have lost property to users who have found property.  We have built an advanced algorithm that pairs items by category, location and many other elements to help track and place an item with its respective owner.   We are partnering with airlines/airports, bars, restaurants animal shelters/clinics, veterinarians, sports venues, concert venues, museums, local public transportation outlets and much more to post found items on our site.</p>
					<h3>Is Lostings Available in my area?</h3>
					<p>Yes, Lostings is available any where within the United Stated and will be starting to move into other countries by early 2022.  Eventhough Lostings is available anywhere in the U.S. with most of our focus on the New York City metro area for the time being.  We will be slowly moving into new cities (metropolitian areas) reguarly over the next couple of years.</p>
				</div>
			</div>
			<div class="accordion-sec">
				<button class="accordion">Business Account <span>FAQs</span></button>
				<div class="panel">
					<h3>What is a business/corporate account?</h3>
					<p>There are two type of accounts that a business can sign up for, a standard business account or a corporate business account. Standard accounts allow the site administrator to add items that have been found at your business  Standard business accounts are limited to one user account, one location and no ability to create user ID’s. Just like standard business accounts, the site admin/admins will have the ability submit items that have been found.  Corporate accounts give administrators the ability to add additional admins, manage multiple locations, have the ability to create unique user ID’s and more, please contact us at <a href="mailto:support@lostings.com">support@lostings.com</a>. </p>
					<p><small>* Free accounts are subject to possible fees in the future</small><br /><small>* There is a monthly fee for corporate accounts</small></p>
					<h3>Are business/corporate accounts free?</h3>
					<p>Standard business accounts with only one location and one site user,(owner, manager or employee, etc.) can sign up for an account free of charge.  If you are interested on using a corporate account where you can add additional administrators, add/manage multiple locations, create user ID’s (this will give each user the ability to have their own unique login), etc please <a href="../contact-us.html">contact us</a>.</p>
					<h3>Do business/corporate accounts receive notifications?</h3>
					<p>Standard business and corporate accounts will both receive notifications if an item found matches any items that an individual has submitted  Make sure to check your email regularly to see if any notifications come through.</p>
				</div>
			</div>

			<div class="accordion-sec">
				<button class="accordion">Individual User Account <span>FAQs</span></button>
				<div class="panel">
					<h3>What is a individual user account?</h3> 
					<p>An individual user account allows users to post lost or found items on our website. From there Lostings uses our proprietary software to help track and place the lost or found property with their respective owner. We built an all new algorithm that matches found property to lost property.  The algorithm pairs items by category, location and many other elements to help track and place an item. Users will have access to a backend dashboard where you can view noticfications, print fliers out and so much more. Individual users can also feature lost items to feature on our homepage and social media outlets.</p>
					<p><small>*Featured lost property comes with a fee of $19.95</small></p>
					<h3>Are individual user accounts free?</h3>
					<p>All individual accounts on Lostings are free.  You can post lost or found items, manage lost or found property from the user dashdoard, receive notifications, etc....  If you would like to feature your lost property on our home page along side of all of our social maedia platforms.</p>
					<h3>How do I know if someone has found my lost item?</h3>
					<p>Our advanced software, matches items that match to one another.  We match items based off of categories, location and a number of other different criteria.  Once an item is matched we send individual users an email with the contact information of the user that has found your property.</p>
					<h3>I lost something, how do I get it back?</h3>
					<p>If the venue that you left your item is part of our network of partners, they will be notified upon creation of your lost item post.</p>
					<h3>What happens to items that are unclaimed after 90 days?</h3>
					<p>To avoid lost items from piling up in our business partners storage rooms, we recommend for them to donate the property they found to local Goodwill or other donation outlets.</p>
				</div>
			</div>

			<div class="accordion-sec">
				<button class="accordion">System/Technical <span>FAQs</span></button>
				<div class="panel">
					<h3>Do we have the ability to manage found items?</h3>
					<p>Yes, you do have the ability to manage found items using a standard business or corporate business accounts, With a standard business account users are only able to create one user account to manage found items.  If you are using a corporate business account, it is possible create as many user accounts as you wish, to manage found items.</p>
					<h3>Do you provide training or support for implementing the system?</h3>
					<p>We provide support via email at <a href="mailto:support@lostings.com">support@lostings.com</a> or contact us anytime through the <a href="../contact-us.html">contact form</a> on the site. We also send articles out frequently for user tips and suggestions to help free you of customers lost goods.</p>
					<h3>Can you help us implement your system into our operations?</h3>
					<p>We can, could you please reach out to our support team at <a href="mailto:support@lostings.com">support@lostings.com</a>. They will walk you through anything you may need to get get up and running.</p>
				</div>
			</div>
		</div>
	</div>
	
                <!-- PAGE CONTENT ENDS -->
            </section>
            @endsection