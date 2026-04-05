<?php include('includes/header.php') ?>


<!-- Dashboard Section here -->
<main class="page-content">
   <!-- Begin FB's Account Page Area -->
   <div class="account-page-area">
      <div class="container">
         <div class="mydashboarddiv">
            <div class="row">
               <div class="col-lg-3">
                  <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                     <li class="nav-item mt-5">
                        <a id="dashboardBtn" class="nav-link clickmedash active" style="background-color: #EE089C; color: white;" data-id="#account-dashboard" data-toggle="tab"
                           href="javascript:void(0);" role="tab" aria-controls="account-dashboard" aria-selected="true">
                           <i class="fas fa-chart-line"></i> Dashboard</a>
                     </li>
                     <li class="nav-item mt-3">
                        <a class="nav-link clickmedash" data-id="#account-profile" data-toggle="tab"
                           href="javascript:void(0);" role="tab" aria-controls="account-profile" aria-selected="false">
                           <i class="far fa-user"></i> Edit Profile</a>
                     </li>
                     <li class="nav-item mt-3">
                        <a class="nav-link clickmedash" data-id="#account-orders" data-toggle="tab"
                           href="javascript:void(0);" role="tab" aria-controls="account-orders" aria-selected="false">
                           <i class="fas fa-shopping-basket"></i> Orders</a>
                     </li>
                     <li class="nav-item mt-3">
                        <a class="nav-link clickmedash" data-id="#account-wishlist" data-toggle="tab"
                           href="javascript:void(0);" role="tab" aria-controls="account-wishlist" aria-selected="false">
                           <i class="fas fa-heart"></i> My Favorites</a>
                     </li>
                     <li class="nav-item mt-3">
                        <a class="nav-link clickmedash" data-id="#account-address" data-toggle="tab"
                           href="javascript:void(0);" role="tab" aria-controls="account-address" aria-selected="false">
                           <i class="fas fa-map-marked-alt"></i> Address Book</a>
                     </li>
                     <li class="nav-item mt-3">
                        <a class="nav-link clickmedash" data-id="#account-details" data-toggle="tab"
                           href="javascript:void(0);" role="tab" aria-controls="account-details" aria-selected="false">
                           <i class="fas fa-lock"></i> Change Password</a>
                     </li>
                     <li class="nav-item mt-3 mb-5">
                        <a class="nav-link" id="account-logout-tab" href="logout.php" role="tab" aria-selected="false">
                           <i class="fas fa-power-off"></i> Logout</a>
                     </li>
                  </ul>
               </div>
               <div class="col-lg-9">
                  <div class="tab-content myaccount-tab-content" id="account-page-tab-content">

                     <div class="tab-pane active" id="account-dashboard" role="tabpanel"
                        aria-labelledby="account-dashboard-tab">
                        <div class="myaccount-dashboard">
                           <div class="main-content">
                              <div class="row pb-3">
                                 <div class="col-lg-12 col-md-12">

                                    <div class="card hny_card_body">
                                       <div class="top-titlle">
                                          <h4 class="icon-box-title text-capitalize ls-normal"  style="background-color: #EE089C; color: white;"><i class="fas fa-chart-line" ></i>
                                             &nbsp; Dashboard</h4>
                                       </div>

                                       <div class="card-body buy_desh_main">
                                          <!-- Show User Info-->
                                          <div class="col-sm-2"><img src="assets/imgs/avtar.jpg"
                                                class="img-responsive" style="border-radius: 50%;" /></div>
                                          <div class="left_deta">
                                             <h4 class="p-0">
                                                Harish Kumar                                             </h4>
                                             <p>
                                                harish@maishainfotech.com<br>
                                                7018702315<br>
                                             </p>
                                          </div>

                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-4 col-md-4">
                                    <div class="card hny_desh_card text-center">
                                       <div class="card-header text-white">
                                          My Profile
                                       </div>
                                       <div class="card-body desh-bdy">

                                       <a class="clickmedash btn-danger btn_desh" id="editProfileButton"  data-id="#account-profile" data-toggle="tab"
                                        href="javascript:void(0);" role="tab" aria-controls="account-profile" aria-selected="false">
                                        <i class="fa fa-user"></i>View</a>

                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-md-4">
                                    <div class="card hny_desh_card text-center">
                                       <div class="card-header text-white">
                                          My Orders
                                       </div>
                                       <div class="card-body desh-bdy">

                                       <a class="clickmedash btn-danger btn_desh" id="myOrderButton" data-id="#account-orders" data-toggle="tab"
                                        href="javascript:void(0);" role="tab" aria-controls="account-orders" aria-selected="false">
                                        <i  class="far fa-sticky-note"></i>
                                         View</a>

                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 col-md-4">
                                    <div class="card hny_desh_card text-center">
                                       <div class="card-header text-white">
                                          Change Password
                                       </div>
                                       <div class="card-body desh-bdy">


                                       <a class="clickmedash btn-danger btn_desh" id="changePasswordButton" data-id="#account-details" data-toggle="tab"
                                        href="javascript:void(0);" role="tab" aria-controls="account-details" aria-selected="false">
                                        <i  class="fa fa-unlock-alt"></i> Change</a>

                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>

                     <div class="tab-pane" id="account-profile" role="tabpanel" aria-labelledby="account-profile-tab">
                        <div class="myaccount-profile">
                           <div class="top_profile">
                              <h4 class="small-title"><i class="far fa-user"></i> Edit Profile</h4>
                           </div>

                           <form action="" method="POST" id="edit_profile_form" class="formSubmit">
                              <input type="hidden" name="editProfile" value="editProfile">
                              <input type="hidden" name="userId" value="14">
                              <div class="fb-form-inner">

                                 <div class="row">

                                    <div class="col-md-4">
                                       <div class="single-input single-input-half">
                                          <label for="account-details-firstname">First Name</label>
                                          <input type="text" id="fNameInp" onkeyup="checkWhiteSpace('fNameInp', 'firstNameErrMsg')" name="firstName" value="Harish"
                                             class="form-control" placeholder="Enter Your First Name" required>
                                          <div class="err_msg" id="firstNameErrMsg"></div>
                                       </div>
                                    </div>

                                    <div class="col-md-4">
                                       <div class="single-input single-input-half">
                                          <label for="account-details-lastname">Last Name</label>
                                          <input type="text" name="lastName" id="lNameInp" onkeyup="checkWhiteSpace('lNameInp' , 'lastNameErrMsg')"  value="Kumar"
                                             class="form-control" placeholder="Enter Your Last Name" required>
                                          <div class="err_msg" id="lastNameErrMsg"></div>
                                       </div>
                                    </div>

                                    <div class="col-md-4">
                                       <div class="single-input single-input-half">
                                          <label for="account-details-gender">Gender</label>
                                          <select class="form-control" name="gender" id="gender">
                                             <option value="">Please Select gender</option>
                                             <option value="Male"
                                                >Male</option>
                                             <option value="Female"
                                                >Female
                                             </option>

                                          </select>
                                          <div class="err_msg" id="genderErrMsg"></div>
                                       </div>
                                    </div>

                                    <div class="col-md-4">
                                       <div class="single-input single-input-half">
                                          <label for="account-details-email">Email</label>
                                          <input type="text" name="emailId" value="harish@maishainfotech.com"
                                             class="form-control" placeholder="Enter Your Email Address" disabled="">
                                          <div class="err_msg" id="emailIdErrMsg"></div>
                                       </div>
                                    </div>

                                    <div class="col-md-4">
                                       <div class="single-input single-input-half">
                                          <label for="account-details-mobile">Contact No</label>
                                          <input type="text" name="mobileNumber" value="7018702315"
                                             class="form-control" placeholder="Enter Your Contact No." disabled>
                                          <div class="err_msg" id="mobileNumberErrMsg"></div>
                                       </div>
                                    </div>

                                    <div class="col-md-4">
                                       <div class="single-input single-input-half">
                                          <label for="account-details-adressType">Address Type</label>
                                          <select class="form-control" name="addressType" id="addressType">
                                             <option value="">Please Select Type</option>
                                             <option value="Home"
                                                selected>Home
                                             </option>
                                             <option value="Office"
                                                >Office
                                             </option>
                                             <option value="Other"
                                                >Other
                                             </option>

                                          </select>
                                          <div class="err_msg" id="addressTypeErrMsg"></div>
                                       </div>
                                    </div>

                                    <div class="col-md-12">
                                       <div class="single-input single-input-half">
                                          <label for="account-details-firstname">Street address</label>
                                          <div class="row">
                                             <div class="col-md-6">
                                                <input type="text" name="addressFlat"
                                                   placeholder="House number and Flat number"
                                                   value="romsxnj" class="form-control">
                                                <div class="err_msg" id="addressFlatErrMsg"></div>
                                             </div>
                                             <div class="col-md-6">
                                                <input type="text" name="addressStreet"
                                                   placeholder="Street,Apartment etc"
                                                   value="13A blodv ck" class="form-control">
                                                <div class="err_msg" id="addressStreetErrMsg"></div>
                                             </div>
                                             <div class="col-md-12 mt-4">
                                                <input type="text" name="addressLocality"
                                                   placeholder="Locality, unit etc. (optional)"
                                                   value="mariju" class="form-control">
                                                <div class="err_msg" id="addressLocalityErrMsg"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <input type="text" class="form-control" name="addressCountry" readonly value="India">
                                       <!-- <div class="single-input single-input-half select2drop1">
                                          <label for="account-details-country">Country <span>*</span></label>
                                          <select class="form-control" style="width:100%;" name="addressCountry"
                                             id="addressCountry" onchange="getStates(this.value);">
                                             <option value="">Please Select Country</option>

                                                                                          <option value="1"
                                                disabled>
                                                Afghanistan</option>

                                                                                          <option value="2"
                                                disabled>
                                                Albania</option>

                                                                                          <option value="3"
                                                disabled>
                                                Algeria</option>

                                                                                          <option value="4"
                                                disabled>
                                                American Samoa</option>

                                                                                          <option value="5"
                                                disabled>
                                                Andorra</option>

                                                                                          <option value="6"
                                                disabled>
                                                Angola</option>

                                                                                          <option value="7"
                                                disabled>
                                                Anguilla</option>

                                                                                          <option value="8"
                                                disabled>
                                                Antarctica</option>

                                                                                          <option value="9"
                                                disabled>
                                                Antigua and Barbuda</option>

                                                                                          <option value="10"
                                                disabled>
                                                Argentina</option>

                                                                                          <option value="11"
                                                disabled>
                                                Armenia</option>

                                                                                          <option value="12"
                                                disabled>
                                                Aruba</option>

                                                                                          <option value="13"
                                                disabled>
                                                Australia</option>

                                                                                          <option value="14"
                                                disabled>
                                                Austria</option>

                                                                                          <option value="15"
                                                disabled>
                                                Azerbaijan</option>

                                                                                          <option value="16"
                                                disabled>
                                                Bahamas</option>

                                                                                          <option value="17"
                                                disabled>
                                                Bahrain</option>

                                                                                          <option value="18"
                                                disabled>
                                                Bangladesh</option>

                                                                                          <option value="19"
                                                disabled>
                                                Barbados</option>

                                                                                          <option value="20"
                                                disabled>
                                                Belarus</option>

                                                                                          <option value="21"
                                                disabled>
                                                Belgium</option>

                                                                                          <option value="22"
                                                disabled>
                                                Belize</option>

                                                                                          <option value="23"
                                                disabled>
                                                Benin</option>

                                                                                          <option value="24"
                                                disabled>
                                                Bermuda</option>

                                                                                          <option value="25"
                                                disabled>
                                                Bhutan</option>

                                                                                          <option value="26"
                                                disabled>
                                                Bolivia</option>

                                                                                          <option value="27"
                                                disabled>
                                                Bosnia and Herzegovina</option>

                                                                                          <option value="28"
                                                disabled>
                                                Botswana</option>

                                                                                          <option value="29"
                                                disabled>
                                                Bouvet Island</option>

                                                                                          <option value="30"
                                                disabled>
                                                Brazil</option>

                                                                                          <option value="31"
                                                disabled>
                                                British Indian Ocean Territory</option>

                                                                                          <option value="32"
                                                disabled>
                                                Brunei Darussalam</option>

                                                                                          <option value="33"
                                                disabled>
                                                Bulgaria</option>

                                                                                          <option value="34"
                                                disabled>
                                                Burkina Faso</option>

                                                                                          <option value="35"
                                                disabled>
                                                Burundi</option>

                                                                                          <option value="36"
                                                disabled>
                                                Cambodia</option>

                                                                                          <option value="37"
                                                disabled>
                                                Cameroon</option>

                                                                                          <option value="38"
                                                disabled>
                                                Canada</option>

                                                                                          <option value="39"
                                                disabled>
                                                Cape Verde</option>

                                                                                          <option value="40"
                                                disabled>
                                                Cayman Islands</option>

                                                                                          <option value="41"
                                                disabled>
                                                Central African Republic</option>

                                                                                          <option value="42"
                                                disabled>
                                                Chad</option>

                                                                                          <option value="43"
                                                disabled>
                                                Chile</option>

                                                                                          <option value="44"
                                                disabled>
                                                China</option>

                                                                                          <option value="45"
                                                disabled>
                                                Christmas Island</option>

                                                                                          <option value="46"
                                                disabled>
                                                Cocos (Keeling) Islands</option>

                                                                                          <option value="47"
                                                disabled>
                                                Colombia</option>

                                                                                          <option value="48"
                                                disabled>
                                                Comoros</option>

                                                                                          <option value="49"
                                                disabled>
                                                Congo</option>

                                                                                          <option value="50"
                                                disabled>
                                                Cook Islands</option>

                                                                                          <option value="51"
                                                disabled>
                                                Costa Rica</option>

                                                                                          <option value="52"
                                                disabled>
                                                Croatia (Hrvatska)</option>

                                                                                          <option value="53"
                                                disabled>
                                                Cuba</option>

                                                                                          <option value="54"
                                                disabled>
                                                Cyprus</option>

                                                                                          <option value="55"
                                                disabled>
                                                Czech Republic</option>

                                                                                          <option value="56"
                                                disabled>
                                                Denmark</option>

                                                                                          <option value="57"
                                                disabled>
                                                Djibouti</option>

                                                                                          <option value="58"
                                                disabled>
                                                Dominica</option>

                                                                                          <option value="59"
                                                disabled>
                                                Dominican Republic</option>

                                                                                          <option value="60"
                                                disabled>
                                                East Timor</option>

                                                                                          <option value="61"
                                                disabled>
                                                Ecuador</option>

                                                                                          <option value="62"
                                                disabled>
                                                Egypt</option>

                                                                                          <option value="63"
                                                disabled>
                                                El Salvador</option>

                                                                                          <option value="64"
                                                disabled>
                                                Equatorial Guinea</option>

                                                                                          <option value="65"
                                                disabled>
                                                Eritrea</option>

                                                                                          <option value="66"
                                                disabled>
                                                Estonia</option>

                                                                                          <option value="67"
                                                disabled>
                                                Ethiopia</option>

                                                                                          <option value="68"
                                                disabled>
                                                Falkland Islands (Malvinas)</option>

                                                                                          <option value="69"
                                                disabled>
                                                Faroe Islands</option>

                                                                                          <option value="70"
                                                disabled>
                                                Fiji</option>

                                                                                          <option value="71"
                                                disabled>
                                                Finland</option>

                                                                                          <option value="72"
                                                disabled>
                                                France</option>

                                                                                          <option value="73"
                                                disabled>
                                                France, Metropolitan</option>

                                                                                          <option value="74"
                                                disabled>
                                                French Guiana</option>

                                                                                          <option value="75"
                                                disabled>
                                                French Polynesia</option>

                                                                                          <option value="76"
                                                disabled>
                                                French Southern Territories</option>

                                                                                          <option value="77"
                                                disabled>
                                                Gabon</option>

                                                                                          <option value="78"
                                                disabled>
                                                Gambia</option>

                                                                                          <option value="79"
                                                disabled>
                                                Georgia</option>

                                                                                          <option value="80"
                                                disabled>
                                                Germany</option>

                                                                                          <option value="81"
                                                disabled>
                                                Ghana</option>

                                                                                          <option value="82"
                                                disabled>
                                                Gibraltar</option>

                                                                                          <option value="83"
                                                disabled>
                                                Guernsey</option>

                                                                                          <option value="84"
                                                disabled>
                                                Greece</option>

                                                                                          <option value="85"
                                                disabled>
                                                Greenland</option>

                                                                                          <option value="86"
                                                disabled>
                                                Grenada</option>

                                                                                          <option value="87"
                                                disabled>
                                                Guadeloupe</option>

                                                                                          <option value="88"
                                                disabled>
                                                Guam</option>

                                                                                          <option value="89"
                                                disabled>
                                                Guatemala</option>

                                                                                          <option value="90"
                                                disabled>
                                                Guinea</option>

                                                                                          <option value="91"
                                                disabled>
                                                Guinea-Bissau</option>

                                                                                          <option value="92"
                                                disabled>
                                                Guyana</option>

                                                                                          <option value="93"
                                                disabled>
                                                Haiti</option>

                                                                                          <option value="94"
                                                disabled>
                                                Heard and Mc Donald Islands</option>

                                                                                          <option value="95"
                                                disabled>
                                                Honduras</option>

                                                                                          <option value="96"
                                                disabled>
                                                Hong Kong</option>

                                                                                          <option value="97"
                                                disabled>
                                                Hungary</option>

                                                                                          <option value="98"
                                                disabled>
                                                Iceland</option>

                                                                                          <option value="99"
                                                selected>
                                                India</option>

                                                                                          <option value="100"
                                                disabled>
                                                Isle of Man</option>

                                                                                          <option value="101"
                                                disabled>
                                                Indonesia</option>

                                                                                          <option value="102"
                                                disabled>
                                                Iran (Islamic Republic of)</option>

                                                                                          <option value="103"
                                                disabled>
                                                Iraq</option>

                                                                                          <option value="104"
                                                disabled>
                                                Ireland</option>

                                                                                          <option value="105"
                                                disabled>
                                                Israel</option>

                                                                                          <option value="106"
                                                disabled>
                                                Italy</option>

                                                                                          <option value="107"
                                                disabled>
                                                Ivory Coast</option>

                                                                                          <option value="108"
                                                disabled>
                                                Jersey</option>

                                                                                          <option value="109"
                                                disabled>
                                                Jamaica</option>

                                                                                          <option value="110"
                                                disabled>
                                                Japan</option>

                                                                                          <option value="111"
                                                disabled>
                                                Jordan</option>

                                                                                          <option value="112"
                                                disabled>
                                                Kazakhstan</option>

                                                                                          <option value="113"
                                                disabled>
                                                Kenya</option>

                                                                                          <option value="114"
                                                disabled>
                                                Kiribati</option>

                                                                                          <option value="115"
                                                disabled>
                                                Korea, Democratic People's Republic of</option>

                                                                                          <option value="116"
                                                disabled>
                                                Korea, Republic of</option>

                                                                                          <option value="117"
                                                disabled>
                                                Kosovo</option>

                                                                                          <option value="118"
                                                disabled>
                                                Kuwait</option>

                                                                                          <option value="119"
                                                disabled>
                                                Kyrgyzstan</option>

                                                                                          <option value="120"
                                                disabled>
                                                Lao People's Democratic Republic</option>

                                                                                          <option value="121"
                                                disabled>
                                                Latvia</option>

                                                                                          <option value="122"
                                                disabled>
                                                Lebanon</option>

                                                                                          <option value="123"
                                                disabled>
                                                Lesotho</option>

                                                                                          <option value="124"
                                                disabled>
                                                Liberia</option>

                                                                                          <option value="125"
                                                disabled>
                                                Libyan Arab Jamahiriya</option>

                                                                                          <option value="126"
                                                disabled>
                                                Liechtenstein</option>

                                                                                          <option value="127"
                                                disabled>
                                                Lithuania</option>

                                                                                          <option value="128"
                                                disabled>
                                                Luxembourg</option>

                                                                                          <option value="129"
                                                disabled>
                                                Macau</option>

                                                                                          <option value="130"
                                                disabled>
                                                Macedonia</option>

                                                                                          <option value="131"
                                                disabled>
                                                Madagascar</option>

                                                                                          <option value="132"
                                                disabled>
                                                Malawi</option>

                                                                                          <option value="133"
                                                disabled>
                                                Malaysia</option>

                                                                                          <option value="134"
                                                disabled>
                                                Maldives</option>

                                                                                          <option value="135"
                                                disabled>
                                                Mali</option>

                                                                                          <option value="136"
                                                disabled>
                                                Malta</option>

                                                                                          <option value="137"
                                                disabled>
                                                Marshall Islands</option>

                                                                                          <option value="138"
                                                disabled>
                                                Martinique</option>

                                                                                          <option value="139"
                                                disabled>
                                                Mauritania</option>

                                                                                          <option value="140"
                                                disabled>
                                                Mauritius</option>

                                                                                          <option value="141"
                                                disabled>
                                                Mayotte</option>

                                                                                          <option value="142"
                                                disabled>
                                                Mexico</option>

                                                                                          <option value="143"
                                                disabled>
                                                Micronesia, Federated States of</option>

                                                                                          <option value="144"
                                                disabled>
                                                Moldova, Republic of</option>

                                                                                          <option value="145"
                                                disabled>
                                                Monaco</option>

                                                                                          <option value="146"
                                                disabled>
                                                Mongolia</option>

                                                                                          <option value="147"
                                                disabled>
                                                Montenegro</option>

                                                                                          <option value="148"
                                                disabled>
                                                Montserrat</option>

                                                                                          <option value="149"
                                                disabled>
                                                Morocco</option>

                                                                                          <option value="150"
                                                disabled>
                                                Mozambique</option>

                                                                                          <option value="151"
                                                disabled>
                                                Myanmar</option>

                                                                                          <option value="152"
                                                disabled>
                                                Namibia</option>

                                                                                          <option value="153"
                                                disabled>
                                                Nauru</option>

                                                                                          <option value="154"
                                                disabled>
                                                Nepal</option>

                                                                                          <option value="155"
                                                disabled>
                                                Netherlands</option>

                                                                                          <option value="156"
                                                disabled>
                                                Netherlands Antilles</option>

                                                                                          <option value="157"
                                                disabled>
                                                New Caledonia</option>

                                                                                          <option value="158"
                                                disabled>
                                                New Zealand</option>

                                                                                          <option value="159"
                                                disabled>
                                                Nicaragua</option>

                                                                                          <option value="160"
                                                disabled>
                                                Niger</option>

                                                                                          <option value="161"
                                                disabled>
                                                Nigeria</option>

                                                                                          <option value="162"
                                                disabled>
                                                Niue</option>

                                                                                          <option value="163"
                                                disabled>
                                                Norfolk Island</option>

                                                                                          <option value="164"
                                                disabled>
                                                Northern Mariana Islands</option>

                                                                                          <option value="165"
                                                disabled>
                                                Norway</option>

                                                                                          <option value="166"
                                                disabled>
                                                Oman</option>

                                                                                          <option value="167"
                                                disabled>
                                                Pakistan</option>

                                                                                          <option value="168"
                                                disabled>
                                                Palau</option>

                                                                                          <option value="169"
                                                disabled>
                                                Palestine</option>

                                                                                          <option value="170"
                                                disabled>
                                                Panama</option>

                                                                                          <option value="171"
                                                disabled>
                                                Papua New Guinea</option>

                                                                                          <option value="172"
                                                disabled>
                                                Paraguay</option>

                                                                                          <option value="173"
                                                disabled>
                                                Peru</option>

                                                                                          <option value="174"
                                                disabled>
                                                Philippines</option>

                                                                                          <option value="175"
                                                disabled>
                                                Pitcairn</option>

                                                                                          <option value="176"
                                                disabled>
                                                Poland</option>

                                                                                          <option value="177"
                                                disabled>
                                                Portugal</option>

                                                                                          <option value="178"
                                                disabled>
                                                Puerto Rico</option>

                                                                                          <option value="179"
                                                disabled>
                                                Qatar</option>

                                                                                          <option value="180"
                                                disabled>
                                                Reunion</option>

                                                                                          <option value="181"
                                                disabled>
                                                Romania</option>

                                                                                          <option value="182"
                                                disabled>
                                                Russian Federation</option>

                                                                                          <option value="183"
                                                disabled>
                                                Rwanda</option>

                                                                                          <option value="184"
                                                disabled>
                                                Saint Kitts and Nevis</option>

                                                                                          <option value="185"
                                                disabled>
                                                Saint Lucia</option>

                                                                                          <option value="186"
                                                disabled>
                                                Saint Vincent and the Grenadines</option>

                                                                                          <option value="187"
                                                disabled>
                                                Samoa</option>

                                                                                          <option value="188"
                                                disabled>
                                                San Marino</option>

                                                                                          <option value="189"
                                                disabled>
                                                Sao Tome and Principe</option>

                                                                                          <option value="190"
                                                disabled>
                                                Saudi Arabia</option>

                                                                                          <option value="191"
                                                disabled>
                                                Senegal</option>

                                                                                          <option value="192"
                                                disabled>
                                                Serbia</option>

                                                                                          <option value="193"
                                                disabled>
                                                Seychelles</option>

                                                                                          <option value="194"
                                                disabled>
                                                Sierra Leone</option>

                                                                                          <option value="195"
                                                disabled>
                                                Singapore</option>

                                                                                          <option value="196"
                                                disabled>
                                                Slovakia</option>

                                                                                          <option value="197"
                                                disabled>
                                                Slovenia</option>

                                                                                          <option value="198"
                                                disabled>
                                                Solomon Islands</option>

                                                                                          <option value="199"
                                                disabled>
                                                Somalia</option>

                                                                                          <option value="200"
                                                disabled>
                                                South Africa</option>

                                                                                          <option value="201"
                                                disabled>
                                                South Georgia South Sandwich Islands</option>

                                                                                          <option value="202"
                                                disabled>
                                                South Sudan</option>

                                                                                          <option value="203"
                                                disabled>
                                                Spain</option>

                                                                                          <option value="204"
                                                disabled>
                                                Sri Lanka</option>

                                                                                          <option value="205"
                                                disabled>
                                                St. Helena</option>

                                                                                          <option value="206"
                                                disabled>
                                                St. Pierre and Miquelon</option>

                                                                                          <option value="207"
                                                disabled>
                                                Sudan</option>

                                                                                          <option value="208"
                                                disabled>
                                                Suriname</option>

                                                                                          <option value="209"
                                                disabled>
                                                Svalbard and Jan Mayen Islands</option>

                                                                                          <option value="210"
                                                disabled>
                                                Swaziland</option>

                                                                                          <option value="211"
                                                disabled>
                                                Sweden</option>

                                                                                          <option value="212"
                                                disabled>
                                                Switzerland</option>

                                                                                          <option value="213"
                                                disabled>
                                                Syrian Arab Republic</option>

                                                                                          <option value="214"
                                                disabled>
                                                Taiwan</option>

                                                                                          <option value="215"
                                                disabled>
                                                Tajikistan</option>

                                                                                          <option value="216"
                                                disabled>
                                                Tanzania, United Republic of</option>

                                                                                          <option value="217"
                                                disabled>
                                                Thailand</option>

                                                                                          <option value="218"
                                                disabled>
                                                Togo</option>

                                                                                          <option value="219"
                                                disabled>
                                                Tokelau</option>

                                                                                          <option value="220"
                                                disabled>
                                                Tonga</option>

                                                                                          <option value="221"
                                                disabled>
                                                Trinidad and Tobago</option>

                                                                                          <option value="222"
                                                disabled>
                                                Tunisia</option>

                                                                                          <option value="223"
                                                disabled>
                                                Turkey</option>

                                                                                          <option value="224"
                                                disabled>
                                                Turkmenistan</option>

                                                                                          <option value="225"
                                                disabled>
                                                Turks and Caicos Islands</option>

                                                                                          <option value="226"
                                                disabled>
                                                Tuvalu</option>

                                                                                          <option value="227"
                                                disabled>
                                                Uganda</option>

                                                                                          <option value="228"
                                                disabled>
                                                Ukraine</option>

                                                                                          <option value="229"
                                                disabled>
                                                United Arab Emirates</option>

                                                                                          <option value="230"
                                                disabled>
                                                United Kingdom</option>

                                                                                          <option value="231"
                                                disabled>
                                                United States</option>

                                                                                          <option value="232"
                                                disabled>
                                                United States minor outlying islands</option>

                                                                                          <option value="233"
                                                disabled>
                                                Uruguay</option>

                                                                                          <option value="234"
                                                disabled>
                                                Uzbekistan</option>

                                                                                          <option value="235"
                                                disabled>
                                                Vanuatu</option>

                                                                                          <option value="236"
                                                disabled>
                                                Vatican City State</option>

                                                                                          <option value="237"
                                                disabled>
                                                Venezuela</option>

                                                                                          <option value="238"
                                                disabled>
                                                Vietnam</option>

                                                                                          <option value="239"
                                                disabled>
                                                Virgin Islands (British)</option>

                                                                                          <option value="240"
                                                disabled>
                                                Virgin Islands (U.S.)</option>

                                                                                          <option value="241"
                                                disabled>
                                                Wallis and Futuna Islands</option>

                                                                                          <option value="242"
                                                disabled>
                                                Western Sahara</option>

                                                                                          <option value="243"
                                                disabled>
                                                Yemen</option>

                                                                                          <option value="244"
                                                disabled>
                                                Zaire</option>

                                                                                          <option value="245"
                                                disabled>
                                                Zambia</option>

                                                                                          <option value="246"
                                                disabled>
                                                Zimbabwe</option>

                                             
                                          </select>
                                          <div class="err_msg" id="addressCountryErrMsg"></div>
                                       </div> -->
                                    </div>

                                    <div class="col-md-6">
                                       
                                         <select class="form-control" name="addressState" id="addressState">
                                             <option value="">Please Select State</option>
                                             
                                             <option value="1"
                                                >
                                                ANDAMAN AND NICOBAR ISLANDS</option>

                                             
                                             <option value="2"
                                                >
                                                ANDHRA PRADESH</option>

                                             
                                             <option value="3"
                                                >
                                                ARUNACHAL PRADESH</option>

                                             
                                             <option value="4"
                                                >
                                                ASSAM</option>

                                             
                                             <option value="5"
                                                >
                                                BIHAR</option>

                                             
                                             <option value="6"
                                                >
                                                CHATTISGARH</option>

                                             
                                             <option value="7"
                                                >
                                                CHANDIGARH</option>

                                             
                                             <option value="8"
                                                >
                                                DAMAN AND DIU</option>

                                             
                                             <option value="9"
                                                >
                                                DELHI</option>

                                             
                                             <option value="10"
                                                >
                                                DADRA AND NAGAR HAVELI</option>

                                             
                                             <option value="11"
                                                >
                                                GOA</option>

                                             
                                             <option value="12"
                                                >
                                                GUJARAT</option>

                                             
                                             <option value="13"
                                                >
                                                HIMACHAL PRADESH</option>

                                             
                                             <option value="14"
                                                >
                                                HARYANA</option>

                                             
                                             <option value="15"
                                                >
                                                JAMMU AND KASHMIR</option>

                                             
                                             <option value="16"
                                                >
                                                JHARKHAND</option>

                                             
                                             <option value="17"
                                                >
                                                KERALA</option>

                                             
                                             <option value="18"
                                                >
                                                KARNATAKA</option>

                                             
                                             <option value="19"
                                                >
                                                LAKSHADWEEP</option>

                                             
                                             <option value="20"
                                                >
                                                MEGHALAYA</option>

                                             
                                             <option value="21"
                                                >
                                                MAHARASHTRA</option>

                                             
                                             <option value="22"
                                                >
                                                MANIPUR</option>

                                             
                                             <option value="23"
                                                >
                                                MADHYA PRADESH</option>

                                             
                                             <option value="24"
                                                >
                                                MIZORAM</option>

                                             
                                             <option value="25"
                                                >
                                                NAGALAND</option>

                                             
                                             <option value="26"
                                                >
                                                ORISSA</option>

                                             
                                             <option value="27"
                                                >
                                                PUNJAB</option>

                                             
                                             <option value="29"
                                                >
                                                RAJASTHAN</option>

                                             
                                             <option value="30"
                                                selected>
                                                SIKKIM</option>

                                             
                                             <option value="31"
                                                >
                                                TAMIL NADU</option>

                                             
                                             <option value="32"
                                                >
                                                TRIPURA</option>

                                             
                                             <option value="33"
                                                >
                                                UTTARAKHAND</option>

                                             
                                             <option value="34"
                                                >
                                                UTTAR PRADESH</option>

                                             
                                             <option value="35"
                                                >
                                                WEST BENGAL</option>

                                             
                                             <option value="36"
                                                >
                                                TELANGANA</option>

                                             
                                           
                                          </select> 
                                          <div class="err_msg" id="addressStateErrMsg"></div>
                                     
                                    </div>

                                    <div class="col-md-8">
                                       <div class="single-input single-input-half">
                                          <label for="account-details-address">Town / City <span>*</span></label>
                                          <input name="addressCity" class="form-control"
                                             placeholder="Please enter City Name" type="text"
                                             value="Amini">
                                          <div class="err_msg" id="addressCityErrMsg"></div>
                                       </div>
                                    </div>

                                    <div class="col-md-4">
                                       <div class="single-input single-input-half">
                                          <label for="account-details-zipCode">Zip Code <span>*</span></label>
                                          <input name="addressZipCode"  class="form-control no_arrows_numInp phoneInp" maxlength="6" type="number"
                                             value="223233" placeholder="Enter zip code" >
                                          <div class="err_msg" id="addressZipCodeErrMsg"></div>
                                       </div>
                                    </div>

                                    <div class="col-sm-12 text-left single-input" style="margin-top: 23px;" >
                                       <div class="text-center" id="edit_profile_formMsg"></div>
                                       <button type="submit" id="addressSubmit" class="btn btn-buy w-auto arrow-next"><span>SAVE
                                             CHANGES</span></button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>

                    
                     <div class="tab-pane" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                        <div class="myaccount-orders">
                           <div class="desh_order">
                              <h4 class="small-title"> <i class="fas fa-shopping-basket"></i> My Orders</h4>
                           </div>
                           
                        </div>
                         <div class="row p-3">
                              <div class="col-lg-12">

                                 <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                    
                                                                       <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?2Hhq97gT8ByDCrcp3kfIjYu1KMVmaElJsNzSvP5t=yT0o9DAx3XNuc2Jb5tmpvr6GRYZilHkLEF8gn4hs&order_id=ORFEED650430645097&Zsr3C7L9YBUPoIxK5JajGt0nD6fFqSNAMWcHOkzi=owIubh64DzcFAY3R20TK1UaZJf7BVMxmXsiOkPv5'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse126" aria-expanded="true" aria-controls="collapse126">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1703999645.png" alt="BROWN SUGAR" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED650430645097 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-06-27 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?Q7cYgxoeS5H3JZR2bhitnyI4aCNO1lm8r69LMuTX=mjUOs2qDM0LAy7EvhuTRNzSaCbI1XPxZYroeJkgi&order_id=ORFEED452555245513&cs0SR7z8hPYFyD4rLIfQXu2kbwMqvHJ3ON5BxlTe=rYT0f29RCEjeH1oSJlDNMu5Pvswzi3IxLp8gQb4U'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse125" aria-expanded="true" aria-controls="collapse125">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1703998987.png" alt="LONG CLOVE" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED452555245513 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-06-27 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?vXQxJZaiAqNjWlPKDTIu7Lwn9H85Vs6fERCzB30h=gMXhISy7nJOTxCQHVGe1p6ui2PK03Zwf89LDt5kY&order_id=ORFEED384075821540&Y67es3FTroMq8HUyQL2zamf1G0BcOg5bWVlAEDRu=Dr70g6zqXijtbKk9f34GoONLaPTwF8UJYZ2BvHRM'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse122" aria-expanded="true" aria-controls="collapse122">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1703998987.png" alt="LONG CLOVE" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED384075821540 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-06-13 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?U5jYtONRzi0AE6BHxCrIZgKnF4v8Sc23sWVXyqkM=RaeFMujlL0xZV7P8AizN5Q246pOgDqvBJXETtWCs&order_id=ORFEED204808363146&ZRN9nf5FVyLtUIG1qekHXw80lpr3u4gDOvbxSTc7=WUvJFD7Z4wKbqanzsEGcrkI3eSMyYHTV8plR0LOt'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse121" aria-expanded="true" aria-controls="collapse121">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1704294551.png" alt="CHIA SEED" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED204808363146 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-06-13 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?sjmPlWV1EiyAXJTQnpv9f2MLwqUR3KYugZr0aH7h=fIGX48v2c0RaxH3zqAj5pbmWuelKQ9LFVsoNESwY&order_id=ORFEED226506863779&liFrk7XBxQRbyh86YcIoNUD0WCvsV3Z1qPafKTtL=NwlzqBfM6bDhpWjTZI2XYHni1va43KPxy9Crmt8J'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse120" aria-expanded="true" aria-controls="collapse120">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1704295358.png" alt="COW GHEE" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED226506863779 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-06-13 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?WEwBc7AF3QTs418RXuStipqIeVCUPHOZY0LkygGx=zvF89CJgDIMW7HhyU62tjupVkTG1NXwrqOxEaKR4&order_id=ORFEED964983891752&AS75X98aQNbeUz4T1cnJRGsLVMWP6kOFyDgEpwhI=aXuUk3AHS6KxLZ5mp7Ro8ztbTE9Owh4FqPG2IJfc'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse92" aria-expanded="true" aria-controls="collapse92">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1703999197.png" alt="KALI MIRCH " alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED964983891752 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Delivered ( 2024-04-30 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?VwbzCEvqWs837pULQTHZrYPhn4lf6xyXuRg5AGe9=b6DoBLK5e9AFGwvISNCzcE41YqUZMx0HsnJ2WXQa&order_id=ORFEED964983891752&jeVi39IS2FbqKDPQtJBf6gy5vNXln81CZGp4rhOx=b9OQPsJmVigHYK3nXt1BCS0kDMoZUhyGeALvxc8l'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse92" aria-expanded="true" aria-controls="collapse92">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/combo/66278200b8b36_6sz4no.jpg" alt="test combo" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED964983891752 </div>
                                             </div>
                                             <div class="task">
                                                                                                 <div class="name">Delivered ( 2024-04-30 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?UZxk3PmXc8gb9SVYRWOD7yuBvCpENfKMT1GhlJes=1VHfeJsPZkj0lmhaIGcBviELAwSTpgK3OqCX7xb5&order_id=ORFEED980810200561&XaE3jr1MsOPA9t5TJfN6QWIu4yhoGFDwegxvcKH0=9TwABVh3ec8Lz0R4GHslp7FUJjKS65auXniIZWbM'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse81" aria-expanded="true" aria-controls="collapse81">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1703998300.png" alt="AJWAIN" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED980810200561 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-04-29 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?iJsQSBh96ICDfOzTa0Rcw1ENk4PLvMZtF8ny2Kju=ZBg0SywqH51e8JhK3utL4xkU9MoCpWmjbvAilXI6&order_id=ORFEED708024515905&viM6g2aw4NnmtKcYlhq591SEB8UIbHeL3jC0kPZX=D53uCO6aJ9TcrY4s0UBjn2RKtgMAzZIvymLhwSq7'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse80" aria-expanded="true" aria-controls="collapse80">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1704294724.png" alt="FLEX SEED" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED708024515905 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-04-29 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?q8KXGZ30joBiM2J5TnhPRwYa7ykApFSrtbIcmeO9=1qrgTOMlbzpcXa3tZioh20F6U5xLkwGmRuIKPN87&order_id=ORFEED278900814779&8lnu2b7YUzL5Nfpv1GQMwsJOaE9mgCBHXKyjDoqI=P51N4hzUvuVfAD6bBJgm20KQpScXnMHCYRE8LIr7'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse79" aria-expanded="true" aria-controls="collapse79">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1704001633.png" alt="SONAMASOORI BROWN RICE" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED278900814779 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-04-29 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?tbUQGe45jWITquDphmzALfxsMCZYc0nwXK7gkvBF=Sv8NHnjoVfGuM6C0Ls43kFUeR7crTYXpKyB9x1bQ&order_id=ORFEED970029398140&K6pENftz4o5Dc3CMerFkPJx2ysqZRTwu8h7XLbOS=9vKPWjVbiL7HRhrl6XxYcDJUwSkIqzf18g4BTZy3'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse78" aria-expanded="true" aria-controls="collapse78">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1704000065.png" alt="GUR" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED970029398140 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-04-29 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?lxcBA3hj0O7ESVPQbWmfIgTUHayizu49srDwNpF5=AO9GIlkvHgNB0MPCFwD15J7X3sVRm8jQbWThEiZ6&order_id=ORFEED30370393283&2fZKUEAvaQBOXpioFhDw57STnurctM1zHmW4YgNj=1NhsPrmAbZHcGUS0uyWO678gpFlRBIeMjC4z23Xt'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse77" aria-expanded="true" aria-controls="collapse77">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1703998987.png" alt="LONG CLOVE" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED30370393283 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-04-29 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?rqKXthZWviu6w4k9syQTzPYVDCLclE32n1o7jgfM=6fiqvxpEoUuH2wL5zlVTh04gCaQ3FS9OXGyWMPAb&order_id=ORFEED761846579032&DKQMRIo0SENnmAr78sV1BPlcWejqz3aTCfiX4bHh=Hsg7UBM3l2bixkWoYcP5hOt9JZGmpXN8FERQLwzS'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse63" aria-expanded="true" aria-controls="collapse63">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1703999645.png" alt="BROWN SUGAR" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED761846579032 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-04-26 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?tcLEZHmIyqCORNu0UfTXF8V51Mesk3aAnDpgJYi7=LyTGQOla6F0EUVc34vmnwo8IKSsJYRebDMx7Cf2z&order_id=ORFEED289251309504&6xGP85OhrXJjNzqk9MegcZTQm1EtbiA0S3yBUfFD=ETDlpHf6ZmheXBryY5WQ1CbgIuki8SGR4jVFJ93N'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse62" aria-expanded="true" aria-controls="collapse62">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/17010706990.JPG" alt="Honey " alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED289251309504 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-04-26 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?sXOuKhpEG4NDLcz0RrPQAYqjyUnT6CHImbeiV958=1YEnF6S9zqiZegwprCBso0ayNTMVAQ5RJ8vOmbGU&order_id=ORFEED201789914197&soJl2gfWOiwIkK4GmhxeS6RZXac98Arnz10qHMyu=O7ScankoZY3jIpyTKNsmqvWGlL2Ertb4B9QRJMzu'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse53" aria-expanded="true" aria-controls="collapse53">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1704000065.png" alt="GUR" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED201789914197 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Delivered ( 2024-04-26 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?BU82nHplso1vtRq0mDCAa3bwTM7euZ5yJOkrEgGX=Sc6ZybVXG1zDYiCjnIkho7mt54MAEgUNf8OBv2sT&order_id=ORFEED960811277764&BGuE8jm13pKFDzMsexyQVZnqhOSwYP5AI2cT0tJX=iGlJewsAfnLar8DUEP3FMOQg42X9tNbjT1mkyzVv'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse52" aria-expanded="true" aria-controls="collapse52">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1703998791.png" alt="JEERA" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED960811277764 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-04-26 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?T1knDH3zmNAwfycgaIQ4bXL5evpstYo8Krj9qRGh=XBT2C9VtqinsQgyHYavhouJIFlbLKfe8xS6mkUzr&order_id=ORFEED859497247731&fsk5LtJ0yE1KnB6CpvhXGiY9m24grxlPDWTjQc3U=ZrOP9C2lDh7n5gRquKobLiG8sEQXwVyfNI316FpT'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse51" aria-expanded="true" aria-controls="collapse51">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1704295678.png" alt="BLACK MUSTARD OIL" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED859497247731 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Cancelled ( 2024-04-25 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?nGaLfE4xSl7Zbsp9rQMhy5RTovzBHWDeUJNKw832=1BhtaDYSPHQjiKTfckOUAe2wRoEbZuzlGsxM8FnW&order_id=ORFEED162175857946&MBA4wNY1lzpIH3GO6ePFmyfo7SLQXjKhuciUEWsg=qI0SiNelrTWBxay9fGjHAVUFOkzZh7btPpJcD4ws'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse50" aria-expanded="true" aria-controls="collapse50">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1704295678.png" alt="BLACK MUSTARD OIL" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED162175857946 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-04-25 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?A5zZVK1wNIrMEYxcBkOlX94qvRPhFtboj8WfHQum=AJObxlpiP08wrtWgVNGLM1eT4CXUocI259EsmnQD&order_id=ORFEED306511947203&R3OMAvax6k2KZywL8FbY0mfTIeQHzWX19VBpsUtg=A4OHTMrlVUEueYm3NyPxJWicR67QI2kBFbSptDjq'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse49" aria-expanded="true" aria-controls="collapse49">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1703997512.png" alt="SAUNF" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED306511947203 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-04-25 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?QzGBqaoEYFOhXel654uHIURZvtDLMfrsyC8g79xi=am6YtoLuHTl9XMNOifQA5BxhWvyk8K2JzZEFjG0e&order_id=ORFEED128512666775&SvYMN6yZ5wJbBVc38peanXsLqOGTxtDCIlzh4jU9=q3Egli0jr6twFcSUuPHbDTm5xfkOZKJQszy81eoI'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="true" aria-controls="collapse19">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1703999197.png" alt="KALI MIRCH " alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED128512666775 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-04-10 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?7UpZIR2qjrb9HoEhTG0AVOaDePXYS8C6vL4uxg1w=lQ6HUJbrhkgMmpDA5oRIcaZ3CNq1EsBWePjOG9wu&order_id=ORFEED213814362343&Kp0ST8bxvOYM1BRJs6nVeuLkmCGXgNZDIjlQrAtz=2fpqeWOcYojMRuyntk7s5PKzIQ4NUTSCEG08w1XL'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="true" aria-controls="collapse18">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1703951245.png" alt="KODO MILLET" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED213814362343 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-04-10 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                                                         <!-- List Item -->
                                       <h2 class="accordion-header orderproductitem"  style="cursor: pointer;" onclick="window.location.href='order-detail.php?Y8t1M6OxZgHEkTfwAhUW7bv3XN2KQJSciz5yPVps=GXnNlBobjPmkwh4OVJe9DrtuspQ1gaEMRqKTcLzy&order_id=ORFEED574400148734&bI76BaDeVAKlzCgRP5Yw8G2cQ1oUNH4EkFuW0iqJ=81iIGcjNCRLUkTbplaDWEveMKfzgS6Y0PyxqAh5F'; ">
                                                    
                                          <button class="accordion-button ksbt collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                             <div class="task">
                                                <div class="icon"><img src="http://organicsfeed.com/asset/image/product/1703998987.png" alt="LONG CLOVE" alt="basmati white rice " class="img-fluid" style="max-width:120%;"></div>
                                                <div class="name">ORFEED574400148734 </div>
                                             </div>
                                             <div class="task">
                                                 
                                                 
                                                 
                                                                                                 <div class="name">Order Placed ( 2024-04-02 ) </div>
                                             </div>
                                             
                                                      
                                                      <!--<th>Return & Refund</th>-->
                                                                                            
                                    
                                          </button>
                                       </h2>
                                       
                                       
                                   
                                   

                                 
                                 <div class="col-12">
                                    <div class="text-center cart_submit">
                                        <ul id="pagin">
         
                                      </ul>
                                       <!--<a href="javascript:;" class="btn btn-buy w-auto ">More Results</a>-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                     </div>
                    </div>
                </div>
                     <div class="tab-pane" id="account-wishlist" role="tabpanel" aria-labelledby="account-wishlist-tab">
                        <div class="myaccount-orders wishlist">
                           <div id="updateWishlist">
                              <div class="desh_wish">
                                 <h4 class="small-title"><i class="fas fa-heart"></i> My Wishlist</h4>
                              </div>
                              
                              <div class="table-responsive">
                                 <table id="example2" class="display " cellspacing="0" width="100%">
                                    <thead >
                                       <tr>
                                          <th>Products</th>
                                          <th>Product Name</th>
                                          <th style="padding-right: 98px;">Price</th>
                                          <th class="none">Availability</th>
                                          <!-- <th class="none">Action</th> -->
                                       </tr>
                                    </thead>

                                    <tbody>
                                                                              <tr>
                                          <td style="width:100px; padding: 15px;">
                                             <div class="cart-product-img"><img
                                                   src="asset/image/product/1703998987.png" alt="" class="q"
                                                   style="width:80px;"> </div>
                                          </td>
                                          <td style="padding: 15px;">LONG CLOVE</td>
                                          <td>&#8377;                                              282.5 </td>

                                                                                    <td>In Stock</td>
                                          

                                          <!-- <td>
                                                                    <a onclick="removeFromWishList(68,this.id,'https://www.organicsfeed.com/dashboard.php')" id="wishlist68" class="btn-sm btn-danger" style="background: #dc3545;border: 1px solid #dc3545;"><i class="fa fa-trash"></i></a>
                                                                </td> -->
                                       </tr>

                                                                              <tr>
                                          <td style="width:100px; padding: 15px;">
                                             <div class="cart-product-img"><img
                                                   src="asset/image/product/1704294551.png" alt="" class="q"
                                                   style="width:80px;"> </div>
                                          </td>
                                          <td style="padding: 15px;">CHIA SEED</td>
                                          <td>&#8377;                                              450 </td>

                                                                                    <td>In Stock</td>
                                          

                                          <!-- <td>
                                                                    <a onclick="removeFromWishList(81,this.id,'https://www.organicsfeed.com/dashboard.php')" id="wishlist81" class="btn-sm btn-danger" style="background: #dc3545;border: 1px solid #dc3545;"><i class="fa fa-trash"></i></a>
                                                                </td> -->
                                       </tr>

                                                                              <tr>
                                          <td style="width:100px; padding: 15px;">
                                             <div class="cart-product-img"><img
                                                   src="asset/image/product/1704294869.png" alt="" class="q"
                                                   style="width:80px;"> </div>
                                          </td>
                                          <td style="padding: 15px;">PUMPKIN SEED</td>
                                          <td>&#8377;                                              350 </td>

                                                                                    <td>In Stock</td>
                                          

                                          <!-- <td>
                                                                    <a onclick="removeFromWishList(93,this.id,'https://www.organicsfeed.com/dashboard.php')" id="wishlist93" class="btn-sm btn-danger" style="background: #dc3545;border: 1px solid #dc3545;"><i class="fa fa-trash"></i></a>
                                                                </td> -->
                                       </tr>

                                                                              <tr>
                                          <td style="width:100px; padding: 15px;">
                                             <div class="cart-product-img"><img
                                                   src="asset/image/product/1704295585.png" alt="" class="q"
                                                   style="width:80px;"> </div>
                                          </td>
                                          <td style="padding: 15px;">YELLOW MUSTURD OIL</td>
                                          <td>&#8377;                                              370 </td>

                                                                                    <td>In Stock</td>
                                          

                                          <!-- <td>
                                                                    <a onclick="removeFromWishList(123,this.id,'https://www.organicsfeed.com/dashboard.php')" id="wishlist123" class="btn-sm btn-danger" style="background: #dc3545;border: 1px solid #dc3545;"><i class="fa fa-trash"></i></a>
                                                                </td> -->
                                       </tr>

                                                                              <tr>
                                          <td style="width:100px; padding: 15px;">
                                             <div class="cart-product-img"><img
                                                   src="asset/image/product/1703953611.png" alt="" class="q"
                                                   style="width:80px;"> </div>
                                          </td>
                                          <td style="padding: 15px;">WHEAT AATA 306</td>
                                          <td>&#8377;                                              650 </td>

                                                                                    <td>In Stock</td>
                                          

                                          <!-- <td>
                                                                    <a onclick="removeFromWishList(126,this.id,'https://www.organicsfeed.com/dashboard.php')" id="wishlist126" class="btn-sm btn-danger" style="background: #dc3545;border: 1px solid #dc3545;"><i class="fa fa-trash"></i></a>
                                                                </td> -->
                                       </tr>

                                                                              <tr>
                                          <td style="width:100px; padding: 15px;">
                                             <div class="cart-product-img"><img
                                                   src="asset/image/product/17010706990.JPG" alt="" class="q"
                                                   style="width:80px;"> </div>
                                          </td>
                                          <td style="padding: 15px;">Honey </td>
                                          <td>&#8377;                                              430 </td>

                                                                                    <td>In Stock</td>
                                          

                                          <!-- <td>
                                                                    <a onclick="removeFromWishList(176,this.id,'https://www.organicsfeed.com/dashboard.php')" id="wishlist176" class="btn-sm btn-danger" style="background: #dc3545;border: 1px solid #dc3545;"><i class="fa fa-trash"></i></a>
                                                                </td> -->
                                       </tr>

                                       
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="tab-pane" id="account-address" role="tabpanel" aria-labelledby="account-address-tab">
                        <div class="addaddress">
                           <div class="myaccount-address">
                              <div id="changeAddress">
                                 <div class="desh_address">
                                    <h4 class="small-title"><i class="fas fa-map-marked-alt"></i> MY Address Book</h4>
                                 </div>

                                                                  <div class="row pt-3 pb-3">
                                    <div class="col-lg-12 col-md-12">
                                       <div class="card">
                                          <div class="card-header px-lg-3">Your Billing Details</div>
                                          <div class="card-body">
                                           
                                             <h4 class="p-0">Office</h4>
                                             <p>romsxnj, 13A blodv ck, mariju, Amini, WEST BENGAL, India - 223233</p>
                                                                                       </div>
                                       </div>
                                    </div>
                                 </div>
                                                               </div>
                           </div>

                           <div class="row">
                              <div class="col-sm-12 text-left" style="margin:10px;"><a href="javascript:void(0);" id="addNewAddressButton"
                                    class="form-button"> + Add Address</a></div>
                              <!-- edit address -->
                           </div>

                           <form id="new_address_form" class="checkout_form formSubmit" style="display:none;">

                              <input type="hidden" name="updateAddress">
                              <input type="hidden" name="shippingAddress" id="shippingAddress" value="add">
                              <input type="hidden" name="shippingAddressId" id="shippingAddressId" value="">

                              <div class="edit_address" id="add_address">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <div class="product-radio">
                                             <ul class="product-now">
                                                <li>
                                                   <input type="radio" id="newAddress1" name="newAddressType"
                                                      value="Home">
                                                   <label for="newAddress1">Home</label>
                                                </li>
                                                <li>
                                                   <input type="radio" id="newAddress2" name="newAddressType"
                                                      value="Office">
                                                   <label for="newAddress2">Office</label>
                                                </li>
                                                <li>
                                                   <input type="radio" id="newAddress3" name="newAddressType"
                                                      value="Other">
                                                   <label for="newAddress3">Other</label>
                                                </li>
                                                <div class="err_msg" id="newAddressTypeErrMsg"></div>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="ceckout-form">
                                    <!--Billing Fields Start-->
                                    <div class="billing-fields">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-fild first-name">
                                                <label>First name<span class="required">*</span></label>
                                                <input class="form-control" class="form-control" type="text"
                                                   name="newAddressFirstName" id="newAddressFirstName"
                                                   placeholder="Enter First Name">
                                                <div class="err_msg" id="newAddressFirstNameErrMsg"></div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-fild last-name">
                                                <label>Last name<span class="required">*</span></label>
                                                <input class="form-control" type="text" name="newAddressLastName"
                                                   id="newAddressLastName" placeholder="Enter Last Name">
                                                <div class="err_msg" id="newAddressLastNameErrMsg"></div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-fild billing_phone">
                                                <label>Mobile<span class="required">*</span></label>
                                                <input class="form-control" name="newAddressMobile" type="text"
                                                   id="newAddressMobile" placeholder="Mobile Number">
                                                <div class="err_msg" id="newAddressMobileErrMsg"></div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-fild email">
                                                <label>Email<span class="required">*</span></label>
                                                <input class="form-control" name="newAddressEmail" type="text"
                                                   id="newAddressEmail" placeholder="Enter Email Address">
                                                <div class="err_msg" id="newAddressEmailErrMsg"></div>
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="form-fild">
                                                <label>Alternate Mobile</label>
                                                    <input name="newAddressAlternatePhone" type="text" id="newAddressAlternatePhone" maxlength="10"  value="" placeholder=" Alternate Mobile Number "   class="form-control" >
                                                    <div class="err_msg" id="newAddressAlternatePhoneErrMsg"></div>
                                                </div>
                                            </div>
                                          <div class="col-md-12">
                                             <label>Full address<span class="required">*</span></label>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-fild billing_address_1">
                                                <input class="form-control" name="newAddressFlat"
                                                   placeholder="House number and Flat number" type="text"
                                                   id="newAddressFlat">
                                                <div class="err_msg" id="newAddressFlatErrMsg"></div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-fild">
                                                <input class="form-control" name="newAddressStreet"
                                                   placeholder="Street,Apartment etc" type="text" id="newAddressStreet">
                                                <div class="err_msg" id="newAddressStreetErrMsg"></div>
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="form-fild">
                                                <input class="form-control" name="newAddressLocality"
                                                   placeholder="Locality, unit etc. (optional)" type="text"
                                                   id="newAddressLocality">
                                                <div class="err_msg" id="newAddressLocalityErrMsg"></div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-fild country">
                                                <label for="country">country <span>*</span></label>
                                                <select class="form-control select2drop1" name="newAddressCountry"
                                                   id="newAddressCountry" onchange="getStates(this.value);">
                                                   <option value="">Please Select Country</option>

                                                                                                      <option value="1"
                                                      disabled>
                                                      Afghanistan</option>

                                                                                                      <option value="2"
                                                      disabled>
                                                      Albania</option>

                                                                                                      <option value="3"
                                                      disabled>
                                                      Algeria</option>

                                                                                                      <option value="4"
                                                      disabled>
                                                      American Samoa</option>

                                                                                                      <option value="5"
                                                      disabled>
                                                      Andorra</option>

                                                                                                      <option value="6"
                                                      disabled>
                                                      Angola</option>

                                                                                                      <option value="7"
                                                      disabled>
                                                      Anguilla</option>

                                                                                                      <option value="8"
                                                      disabled>
                                                      Antarctica</option>

                                                                                                      <option value="9"
                                                      disabled>
                                                      Antigua and Barbuda</option>

                                                                                                      <option value="10"
                                                      disabled>
                                                      Argentina</option>

                                                                                                      <option value="11"
                                                      disabled>
                                                      Armenia</option>

                                                                                                      <option value="12"
                                                      disabled>
                                                      Aruba</option>

                                                                                                      <option value="13"
                                                      disabled>
                                                      Australia</option>

                                                                                                      <option value="14"
                                                      disabled>
                                                      Austria</option>

                                                                                                      <option value="15"
                                                      disabled>
                                                      Azerbaijan</option>

                                                                                                      <option value="16"
                                                      disabled>
                                                      Bahamas</option>

                                                                                                      <option value="17"
                                                      disabled>
                                                      Bahrain</option>

                                                                                                      <option value="18"
                                                      disabled>
                                                      Bangladesh</option>

                                                                                                      <option value="19"
                                                      disabled>
                                                      Barbados</option>

                                                                                                      <option value="20"
                                                      disabled>
                                                      Belarus</option>

                                                                                                      <option value="21"
                                                      disabled>
                                                      Belgium</option>

                                                                                                      <option value="22"
                                                      disabled>
                                                      Belize</option>

                                                                                                      <option value="23"
                                                      disabled>
                                                      Benin</option>

                                                                                                      <option value="24"
                                                      disabled>
                                                      Bermuda</option>

                                                                                                      <option value="25"
                                                      disabled>
                                                      Bhutan</option>

                                                                                                      <option value="26"
                                                      disabled>
                                                      Bolivia</option>

                                                                                                      <option value="27"
                                                      disabled>
                                                      Bosnia and Herzegovina</option>

                                                                                                      <option value="28"
                                                      disabled>
                                                      Botswana</option>

                                                                                                      <option value="29"
                                                      disabled>
                                                      Bouvet Island</option>

                                                                                                      <option value="30"
                                                      disabled>
                                                      Brazil</option>

                                                                                                      <option value="31"
                                                      disabled>
                                                      British Indian Ocean Territory</option>

                                                                                                      <option value="32"
                                                      disabled>
                                                      Brunei Darussalam</option>

                                                                                                      <option value="33"
                                                      disabled>
                                                      Bulgaria</option>

                                                                                                      <option value="34"
                                                      disabled>
                                                      Burkina Faso</option>

                                                                                                      <option value="35"
                                                      disabled>
                                                      Burundi</option>

                                                                                                      <option value="36"
                                                      disabled>
                                                      Cambodia</option>

                                                                                                      <option value="37"
                                                      disabled>
                                                      Cameroon</option>

                                                                                                      <option value="38"
                                                      disabled>
                                                      Canada</option>

                                                                                                      <option value="39"
                                                      disabled>
                                                      Cape Verde</option>

                                                                                                      <option value="40"
                                                      disabled>
                                                      Cayman Islands</option>

                                                                                                      <option value="41"
                                                      disabled>
                                                      Central African Republic</option>

                                                                                                      <option value="42"
                                                      disabled>
                                                      Chad</option>

                                                                                                      <option value="43"
                                                      disabled>
                                                      Chile</option>

                                                                                                      <option value="44"
                                                      disabled>
                                                      China</option>

                                                                                                      <option value="45"
                                                      disabled>
                                                      Christmas Island</option>

                                                                                                      <option value="46"
                                                      disabled>
                                                      Cocos (Keeling) Islands</option>

                                                                                                      <option value="47"
                                                      disabled>
                                                      Colombia</option>

                                                                                                      <option value="48"
                                                      disabled>
                                                      Comoros</option>

                                                                                                      <option value="49"
                                                      disabled>
                                                      Congo</option>

                                                                                                      <option value="50"
                                                      disabled>
                                                      Cook Islands</option>

                                                                                                      <option value="51"
                                                      disabled>
                                                      Costa Rica</option>

                                                                                                      <option value="52"
                                                      disabled>
                                                      Croatia (Hrvatska)</option>

                                                                                                      <option value="53"
                                                      disabled>
                                                      Cuba</option>

                                                                                                      <option value="54"
                                                      disabled>
                                                      Cyprus</option>

                                                                                                      <option value="55"
                                                      disabled>
                                                      Czech Republic</option>

                                                                                                      <option value="56"
                                                      disabled>
                                                      Denmark</option>

                                                                                                      <option value="57"
                                                      disabled>
                                                      Djibouti</option>

                                                                                                      <option value="58"
                                                      disabled>
                                                      Dominica</option>

                                                                                                      <option value="59"
                                                      disabled>
                                                      Dominican Republic</option>

                                                                                                      <option value="60"
                                                      disabled>
                                                      East Timor</option>

                                                                                                      <option value="61"
                                                      disabled>
                                                      Ecuador</option>

                                                                                                      <option value="62"
                                                      disabled>
                                                      Egypt</option>

                                                                                                      <option value="63"
                                                      disabled>
                                                      El Salvador</option>

                                                                                                      <option value="64"
                                                      disabled>
                                                      Equatorial Guinea</option>

                                                                                                      <option value="65"
                                                      disabled>
                                                      Eritrea</option>

                                                                                                      <option value="66"
                                                      disabled>
                                                      Estonia</option>

                                                                                                      <option value="67"
                                                      disabled>
                                                      Ethiopia</option>

                                                                                                      <option value="68"
                                                      disabled>
                                                      Falkland Islands (Malvinas)</option>

                                                                                                      <option value="69"
                                                      disabled>
                                                      Faroe Islands</option>

                                                                                                      <option value="70"
                                                      disabled>
                                                      Fiji</option>

                                                                                                      <option value="71"
                                                      disabled>
                                                      Finland</option>

                                                                                                      <option value="72"
                                                      disabled>
                                                      France</option>

                                                                                                      <option value="73"
                                                      disabled>
                                                      France, Metropolitan</option>

                                                                                                      <option value="74"
                                                      disabled>
                                                      French Guiana</option>

                                                                                                      <option value="75"
                                                      disabled>
                                                      French Polynesia</option>

                                                                                                      <option value="76"
                                                      disabled>
                                                      French Southern Territories</option>

                                                                                                      <option value="77"
                                                      disabled>
                                                      Gabon</option>

                                                                                                      <option value="78"
                                                      disabled>
                                                      Gambia</option>

                                                                                                      <option value="79"
                                                      disabled>
                                                      Georgia</option>

                                                                                                      <option value="80"
                                                      disabled>
                                                      Germany</option>

                                                                                                      <option value="81"
                                                      disabled>
                                                      Ghana</option>

                                                                                                      <option value="82"
                                                      disabled>
                                                      Gibraltar</option>

                                                                                                      <option value="83"
                                                      disabled>
                                                      Guernsey</option>

                                                                                                      <option value="84"
                                                      disabled>
                                                      Greece</option>

                                                                                                      <option value="85"
                                                      disabled>
                                                      Greenland</option>

                                                                                                      <option value="86"
                                                      disabled>
                                                      Grenada</option>

                                                                                                      <option value="87"
                                                      disabled>
                                                      Guadeloupe</option>

                                                                                                      <option value="88"
                                                      disabled>
                                                      Guam</option>

                                                                                                      <option value="89"
                                                      disabled>
                                                      Guatemala</option>

                                                                                                      <option value="90"
                                                      disabled>
                                                      Guinea</option>

                                                                                                      <option value="91"
                                                      disabled>
                                                      Guinea-Bissau</option>

                                                                                                      <option value="92"
                                                      disabled>
                                                      Guyana</option>

                                                                                                      <option value="93"
                                                      disabled>
                                                      Haiti</option>

                                                                                                      <option value="94"
                                                      disabled>
                                                      Heard and Mc Donald Islands</option>

                                                                                                      <option value="95"
                                                      disabled>
                                                      Honduras</option>

                                                                                                      <option value="96"
                                                      disabled>
                                                      Hong Kong</option>

                                                                                                      <option value="97"
                                                      disabled>
                                                      Hungary</option>

                                                                                                      <option value="98"
                                                      disabled>
                                                      Iceland</option>

                                                                                                      <option value="99"
                                                      selected>
                                                      India</option>

                                                                                                      <option value="100"
                                                      disabled>
                                                      Isle of Man</option>

                                                                                                      <option value="101"
                                                      disabled>
                                                      Indonesia</option>

                                                                                                      <option value="102"
                                                      disabled>
                                                      Iran (Islamic Republic of)</option>

                                                                                                      <option value="103"
                                                      disabled>
                                                      Iraq</option>

                                                                                                      <option value="104"
                                                      disabled>
                                                      Ireland</option>

                                                                                                      <option value="105"
                                                      disabled>
                                                      Israel</option>

                                                                                                      <option value="106"
                                                      disabled>
                                                      Italy</option>

                                                                                                      <option value="107"
                                                      disabled>
                                                      Ivory Coast</option>

                                                                                                      <option value="108"
                                                      disabled>
                                                      Jersey</option>

                                                                                                      <option value="109"
                                                      disabled>
                                                      Jamaica</option>

                                                                                                      <option value="110"
                                                      disabled>
                                                      Japan</option>

                                                                                                      <option value="111"
                                                      disabled>
                                                      Jordan</option>

                                                                                                      <option value="112"
                                                      disabled>
                                                      Kazakhstan</option>

                                                                                                      <option value="113"
                                                      disabled>
                                                      Kenya</option>

                                                                                                      <option value="114"
                                                      disabled>
                                                      Kiribati</option>

                                                                                                      <option value="115"
                                                      disabled>
                                                      Korea, Democratic People's Republic of</option>

                                                                                                      <option value="116"
                                                      disabled>
                                                      Korea, Republic of</option>

                                                                                                      <option value="117"
                                                      disabled>
                                                      Kosovo</option>

                                                                                                      <option value="118"
                                                      disabled>
                                                      Kuwait</option>

                                                                                                      <option value="119"
                                                      disabled>
                                                      Kyrgyzstan</option>

                                                                                                      <option value="120"
                                                      disabled>
                                                      Lao People's Democratic Republic</option>

                                                                                                      <option value="121"
                                                      disabled>
                                                      Latvia</option>

                                                                                                      <option value="122"
                                                      disabled>
                                                      Lebanon</option>

                                                                                                      <option value="123"
                                                      disabled>
                                                      Lesotho</option>

                                                                                                      <option value="124"
                                                      disabled>
                                                      Liberia</option>

                                                                                                      <option value="125"
                                                      disabled>
                                                      Libyan Arab Jamahiriya</option>

                                                                                                      <option value="126"
                                                      disabled>
                                                      Liechtenstein</option>

                                                                                                      <option value="127"
                                                      disabled>
                                                      Lithuania</option>

                                                                                                      <option value="128"
                                                      disabled>
                                                      Luxembourg</option>

                                                                                                      <option value="129"
                                                      disabled>
                                                      Macau</option>

                                                                                                      <option value="130"
                                                      disabled>
                                                      Macedonia</option>

                                                                                                      <option value="131"
                                                      disabled>
                                                      Madagascar</option>

                                                                                                      <option value="132"
                                                      disabled>
                                                      Malawi</option>

                                                                                                      <option value="133"
                                                      disabled>
                                                      Malaysia</option>

                                                                                                      <option value="134"
                                                      disabled>
                                                      Maldives</option>

                                                                                                      <option value="135"
                                                      disabled>
                                                      Mali</option>

                                                                                                      <option value="136"
                                                      disabled>
                                                      Malta</option>

                                                                                                      <option value="137"
                                                      disabled>
                                                      Marshall Islands</option>

                                                                                                      <option value="138"
                                                      disabled>
                                                      Martinique</option>

                                                                                                      <option value="139"
                                                      disabled>
                                                      Mauritania</option>

                                                                                                      <option value="140"
                                                      disabled>
                                                      Mauritius</option>

                                                                                                      <option value="141"
                                                      disabled>
                                                      Mayotte</option>

                                                                                                      <option value="142"
                                                      disabled>
                                                      Mexico</option>

                                                                                                      <option value="143"
                                                      disabled>
                                                      Micronesia, Federated States of</option>

                                                                                                      <option value="144"
                                                      disabled>
                                                      Moldova, Republic of</option>

                                                                                                      <option value="145"
                                                      disabled>
                                                      Monaco</option>

                                                                                                      <option value="146"
                                                      disabled>
                                                      Mongolia</option>

                                                                                                      <option value="147"
                                                      disabled>
                                                      Montenegro</option>

                                                                                                      <option value="148"
                                                      disabled>
                                                      Montserrat</option>

                                                                                                      <option value="149"
                                                      disabled>
                                                      Morocco</option>

                                                                                                      <option value="150"
                                                      disabled>
                                                      Mozambique</option>

                                                                                                      <option value="151"
                                                      disabled>
                                                      Myanmar</option>

                                                                                                      <option value="152"
                                                      disabled>
                                                      Namibia</option>

                                                                                                      <option value="153"
                                                      disabled>
                                                      Nauru</option>

                                                                                                      <option value="154"
                                                      disabled>
                                                      Nepal</option>

                                                                                                      <option value="155"
                                                      disabled>
                                                      Netherlands</option>

                                                                                                      <option value="156"
                                                      disabled>
                                                      Netherlands Antilles</option>

                                                                                                      <option value="157"
                                                      disabled>
                                                      New Caledonia</option>

                                                                                                      <option value="158"
                                                      disabled>
                                                      New Zealand</option>

                                                                                                      <option value="159"
                                                      disabled>
                                                      Nicaragua</option>

                                                                                                      <option value="160"
                                                      disabled>
                                                      Niger</option>

                                                                                                      <option value="161"
                                                      disabled>
                                                      Nigeria</option>

                                                                                                      <option value="162"
                                                      disabled>
                                                      Niue</option>

                                                                                                      <option value="163"
                                                      disabled>
                                                      Norfolk Island</option>

                                                                                                      <option value="164"
                                                      disabled>
                                                      Northern Mariana Islands</option>

                                                                                                      <option value="165"
                                                      disabled>
                                                      Norway</option>

                                                                                                      <option value="166"
                                                      disabled>
                                                      Oman</option>

                                                                                                      <option value="167"
                                                      disabled>
                                                      Pakistan</option>

                                                                                                      <option value="168"
                                                      disabled>
                                                      Palau</option>

                                                                                                      <option value="169"
                                                      disabled>
                                                      Palestine</option>

                                                                                                      <option value="170"
                                                      disabled>
                                                      Panama</option>

                                                                                                      <option value="171"
                                                      disabled>
                                                      Papua New Guinea</option>

                                                                                                      <option value="172"
                                                      disabled>
                                                      Paraguay</option>

                                                                                                      <option value="173"
                                                      disabled>
                                                      Peru</option>

                                                                                                      <option value="174"
                                                      disabled>
                                                      Philippines</option>

                                                                                                      <option value="175"
                                                      disabled>
                                                      Pitcairn</option>

                                                                                                      <option value="176"
                                                      disabled>
                                                      Poland</option>

                                                                                                      <option value="177"
                                                      disabled>
                                                      Portugal</option>

                                                                                                      <option value="178"
                                                      disabled>
                                                      Puerto Rico</option>

                                                                                                      <option value="179"
                                                      disabled>
                                                      Qatar</option>

                                                                                                      <option value="180"
                                                      disabled>
                                                      Reunion</option>

                                                                                                      <option value="181"
                                                      disabled>
                                                      Romania</option>

                                                                                                      <option value="182"
                                                      disabled>
                                                      Russian Federation</option>

                                                                                                      <option value="183"
                                                      disabled>
                                                      Rwanda</option>

                                                                                                      <option value="184"
                                                      disabled>
                                                      Saint Kitts and Nevis</option>

                                                                                                      <option value="185"
                                                      disabled>
                                                      Saint Lucia</option>

                                                                                                      <option value="186"
                                                      disabled>
                                                      Saint Vincent and the Grenadines</option>

                                                                                                      <option value="187"
                                                      disabled>
                                                      Samoa</option>

                                                                                                      <option value="188"
                                                      disabled>
                                                      San Marino</option>

                                                                                                      <option value="189"
                                                      disabled>
                                                      Sao Tome and Principe</option>

                                                                                                      <option value="190"
                                                      disabled>
                                                      Saudi Arabia</option>

                                                                                                      <option value="191"
                                                      disabled>
                                                      Senegal</option>

                                                                                                      <option value="192"
                                                      disabled>
                                                      Serbia</option>

                                                                                                      <option value="193"
                                                      disabled>
                                                      Seychelles</option>

                                                                                                      <option value="194"
                                                      disabled>
                                                      Sierra Leone</option>

                                                                                                      <option value="195"
                                                      disabled>
                                                      Singapore</option>

                                                                                                      <option value="196"
                                                      disabled>
                                                      Slovakia</option>

                                                                                                      <option value="197"
                                                      disabled>
                                                      Slovenia</option>

                                                                                                      <option value="198"
                                                      disabled>
                                                      Solomon Islands</option>

                                                                                                      <option value="199"
                                                      disabled>
                                                      Somalia</option>

                                                                                                      <option value="200"
                                                      disabled>
                                                      South Africa</option>

                                                                                                      <option value="201"
                                                      disabled>
                                                      South Georgia South Sandwich Islands</option>

                                                                                                      <option value="202"
                                                      disabled>
                                                      South Sudan</option>

                                                                                                      <option value="203"
                                                      disabled>
                                                      Spain</option>

                                                                                                      <option value="204"
                                                      disabled>
                                                      Sri Lanka</option>

                                                                                                      <option value="205"
                                                      disabled>
                                                      St. Helena</option>

                                                                                                      <option value="206"
                                                      disabled>
                                                      St. Pierre and Miquelon</option>

                                                                                                      <option value="207"
                                                      disabled>
                                                      Sudan</option>

                                                                                                      <option value="208"
                                                      disabled>
                                                      Suriname</option>

                                                                                                      <option value="209"
                                                      disabled>
                                                      Svalbard and Jan Mayen Islands</option>

                                                                                                      <option value="210"
                                                      disabled>
                                                      Swaziland</option>

                                                                                                      <option value="211"
                                                      disabled>
                                                      Sweden</option>

                                                                                                      <option value="212"
                                                      disabled>
                                                      Switzerland</option>

                                                                                                      <option value="213"
                                                      disabled>
                                                      Syrian Arab Republic</option>

                                                                                                      <option value="214"
                                                      disabled>
                                                      Taiwan</option>

                                                                                                      <option value="215"
                                                      disabled>
                                                      Tajikistan</option>

                                                                                                      <option value="216"
                                                      disabled>
                                                      Tanzania, United Republic of</option>

                                                                                                      <option value="217"
                                                      disabled>
                                                      Thailand</option>

                                                                                                      <option value="218"
                                                      disabled>
                                                      Togo</option>

                                                                                                      <option value="219"
                                                      disabled>
                                                      Tokelau</option>

                                                                                                      <option value="220"
                                                      disabled>
                                                      Tonga</option>

                                                                                                      <option value="221"
                                                      disabled>
                                                      Trinidad and Tobago</option>

                                                                                                      <option value="222"
                                                      disabled>
                                                      Tunisia</option>

                                                                                                      <option value="223"
                                                      disabled>
                                                      Turkey</option>

                                                                                                      <option value="224"
                                                      disabled>
                                                      Turkmenistan</option>

                                                                                                      <option value="225"
                                                      disabled>
                                                      Turks and Caicos Islands</option>

                                                                                                      <option value="226"
                                                      disabled>
                                                      Tuvalu</option>

                                                                                                      <option value="227"
                                                      disabled>
                                                      Uganda</option>

                                                                                                      <option value="228"
                                                      disabled>
                                                      Ukraine</option>

                                                                                                      <option value="229"
                                                      disabled>
                                                      United Arab Emirates</option>

                                                                                                      <option value="230"
                                                      disabled>
                                                      United Kingdom</option>

                                                                                                      <option value="231"
                                                      disabled>
                                                      United States</option>

                                                                                                      <option value="232"
                                                      disabled>
                                                      United States minor outlying islands</option>

                                                                                                      <option value="233"
                                                      disabled>
                                                      Uruguay</option>

                                                                                                      <option value="234"
                                                      disabled>
                                                      Uzbekistan</option>

                                                                                                      <option value="235"
                                                      disabled>
                                                      Vanuatu</option>

                                                                                                      <option value="236"
                                                      disabled>
                                                      Vatican City State</option>

                                                                                                      <option value="237"
                                                      disabled>
                                                      Venezuela</option>

                                                                                                      <option value="238"
                                                      disabled>
                                                      Vietnam</option>

                                                                                                      <option value="239"
                                                      disabled>
                                                      Virgin Islands (British)</option>

                                                                                                      <option value="240"
                                                      disabled>
                                                      Virgin Islands (U.S.)</option>

                                                                                                      <option value="241"
                                                      disabled>
                                                      Wallis and Futuna Islands</option>

                                                                                                      <option value="242"
                                                      disabled>
                                                      Western Sahara</option>

                                                                                                      <option value="243"
                                                      disabled>
                                                      Yemen</option>

                                                                                                      <option value="244"
                                                      disabled>
                                                      Zaire</option>

                                                                                                      <option value="245"
                                                      disabled>
                                                      Zambia</option>

                                                                                                      <option value="246"
                                                      disabled>
                                                      Zimbabwe</option>

                                                   
                                                </select>
                                                <div class="err_msg" id="newAddressCountryErrMsg"></div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-fild state">
                                                <label>State<span>*</span></label>
                                                <select class="form-control select2drop1" name="newAddressState"
                                                   id="newAddressState">
                                                   <option value="">Please Select State</option>
                                                                                                      <option value="1">ANDAMAN AND NICOBAR ISLANDS</option>

                                                                                                      <option value="2">ANDHRA PRADESH</option>

                                                                                                      <option value="3">ARUNACHAL PRADESH</option>

                                                                                                      <option value="4">ASSAM</option>

                                                                                                      <option value="5">BIHAR</option>

                                                                                                      <option value="6">CHATTISGARH</option>

                                                                                                      <option value="7">CHANDIGARH</option>

                                                                                                      <option value="8">DAMAN AND DIU</option>

                                                                                                      <option value="9">DELHI</option>

                                                                                                      <option value="10">DADRA AND NAGAR HAVELI</option>

                                                                                                      <option value="11">GOA</option>

                                                                                                      <option value="12">GUJARAT</option>

                                                                                                      <option value="13">HIMACHAL PRADESH</option>

                                                                                                      <option value="14">HARYANA</option>

                                                                                                      <option value="15">JAMMU AND KASHMIR</option>

                                                                                                      <option value="16">JHARKHAND</option>

                                                                                                      <option value="17">KERALA</option>

                                                                                                      <option value="18">KARNATAKA</option>

                                                                                                      <option value="19">LAKSHADWEEP</option>

                                                                                                      <option value="20">MEGHALAYA</option>

                                                                                                      <option value="21">MAHARASHTRA</option>

                                                                                                      <option value="22">MANIPUR</option>

                                                                                                      <option value="23">MADHYA PRADESH</option>

                                                                                                      <option value="24">MIZORAM</option>

                                                                                                      <option value="25">NAGALAND</option>

                                                                                                      <option value="26">ORISSA</option>

                                                                                                      <option value="27">PUNJAB</option>

                                                                                                      <option value="29">RAJASTHAN</option>

                                                                                                      <option value="30">SIKKIM</option>

                                                                                                      <option value="31">TAMIL NADU</option>

                                                                                                      <option value="32">TRIPURA</option>

                                                                                                      <option value="33">UTTARAKHAND</option>

                                                                                                      <option value="34">UTTAR PRADESH</option>

                                                                                                      <option value="35">WEST BENGAL</option>

                                                                                                      <option value="36">TELANGANA</option>

                                                                                                   </select>
                                                <div class="err_msg" id="newAddressStateErrMsg"></div>
                                             </div>
                                          </div>

                                          <div class="col-md-8">
                                             <div class="form-fild billing_city">
                                                <label>Town / City<span class="required">*</span></label>
                                                <input class="form-control" name="newAddressCity" type="text"
                                                   id="newAddressCity" placeholder="Enter City Name">
                                                <div class="err_msg" id="newAddressCityErrMsg"></div>
                                             </div>
                                          </div>
                                          <div class="col-md-4">
                                             <div class="form-fild billing_postcode">
                                                <label>Postcode / ZIP<span class="required">*</span></label>
                                                <input class="form-control" name="newAddressZipCode" type="text"
                                                   id="newAddressZipCode" placeholder="Enter Zip Code">
                                                <div class="err_msg" id="newAddressZipCodeErrMsg"></div>
                                             </div>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="login-submit">
                                                <button type="submit" class="btn btn-buy w-auto">Submit</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>

                     <div class="tab-pane" id="account-details" role="tabpanel" aria-labelledby="account-details-tab">
                        <div class="myaccount-details">
                           <div class="desh_pass">
                              <h4 class="small-title"><i class="fas fa-lock"></i> Change Password</h4>
                           </div>

                           <form action="" method="POST" id="changePass" class="formSubmit">
                              <input type="hidden" name="userInfo" id="userInfo1" value="7018702315">

                              <div class="fb-form-inner">
                                 <input type="hidden" name="changePassword" id="changePassword" value="changePassword">
                              

                                 <div class="single-input">
                                    <label for="currentPassword">Current Password</label>
                                    <input type="password" name="currentPassword" onkeyup="emptyError('changePassMsg')" id="currentPassword" value=""
                                       class="currentpassword form-control" placeholder="Type Current Password" required>
                                    <div class="err_msg" id="currentPasswordErrMsg"></div>
                                 </div>



                                 <div class="single-input">
                                    <label for="account-details-newpass">New Password</label>
                                    <input type="password" name="newPassword" id="newPassword" value=""
                                       class="password form-control" placeholder="Type New Password" required>
                                    <div class="err_msg" id="newPasswordErrMsg"></div>
                                 </div>
                                 <div class="single-input">
                                    <label for="account-details-confpass">Confirm Password</label>
                                    <input type="password" name="confirmNewPassword" id="confirmNewPassword" value=""
                                       class="confirmPassword form-control" placeholder="Type Confirm Password"
                                       required>
                                    <div class="err_msg" id="confirmNewPasswordErrMsg"></div>
                                 </div>
                                 <!-- <div class="col-md-12"></div> -->
                                 <div class="col-sm-12 text-left single-input" style="margin-top: 23px;">
                                    <div class="text-center passMsg" id="changePassMsg"></div>
                                    <button type="submit" id="changePassDash" class="btn btn-buy w-auto"><span>Change
                                          Password</span></button>
                                 </div>
                              </div>
                           </form>

                           <!-- otp verification section -->
                           <div class=" user-area otpVerify" style="display:none;">
                              <div class="container">
                                 <div class="user-item">
                                    <div class="form-container text-center">
                                       <h2>OTP Verification</h2>
                                       <div class="form-inner">
                                          <form action="javascript:void(0);" id="verifyOtpFormDash" class="otp-form">
                                          <input type="hidden" name="userInfo" id="userInfo" value="7018702315">
                                          <input type="hidden" name="password" id="passInp">
                                          <input type="hidden" name="newPassword" id="cPassInp">
                                          <input type="hidden" name="otp" id="otpInp">
                                             <div class="customer-login-register">
                                                <div class="login-form">


                                                   <p>Verify your mobile number,
                                                      An OTP has been sent to your mobile number</p>

                                                   <div class="form-fild">
                                                                                                            <p><label>Enter OTP<span
                                                               class="required">*</span></label></p>
                                                      <input id="codeBox1" class="codeBox no_arrows_numInp" type="number" name="otp[]"
                                                         maxlength="1" onkeyup="onKeyUpEvent(1, event)"
                                                         onfocus="onFocusEvent(1)" />
                                                      <input id="codeBox2" class="codeBox no_arrows_numInp" type="number" name="otp[]"
                                                         maxlength="1" onkeyup="onKeyUpEvent(2, event)"
                                                         onfocus="onFocusEvent(2)" />
                                                      <input id="codeBox3" class="codeBox no_arrows_numInp" type="number" name="otp[]"
                                                         maxlength="1" onkeyup="onKeyUpEvent(3, event)"
                                                         onfocus="onFocusEvent(3)" />
                                                      <input id="codeBox4" class="codeBox no_arrows_numInp" type="number" name="otp[]"
                                                         maxlength="1" onkeyup="onKeyUpEvent(4, event)"
                                                         onfocus="onFocusEvent(4)" />
                                                   </div>
                                                   <div class="register-submit">
                                                      <button type="submit" class="form-button btn btn-buy"
                                                         id="otpsubmit" name="submit">Verify</button>
                                                   </div>

                                                   <div class="text-center" id="verifyOtpFormMsg"></div>
                                                   <div class="timerdiv"><span id="timer"></span></div>


                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end here -->

                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- FB's Account Page Area End Here -->
</main>
<!-- end here -->



<?php include('includes/footer.php') ?>