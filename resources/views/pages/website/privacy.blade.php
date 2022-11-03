@extends('layouts.website.default')
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<style>
    .right-inner {
        position: relative;

    }

    .right-inner img {
        position: absolute;
        right: 0px;
        padding: 12px 12px;
        width: 50px;
        height: 50px;
        z-index: 999;
        top: 25px;
    }

    .form-field label:first-of-type {
        color: #3F4765 !important;
        font-size: 16px !important;
        font-weight: 500;
        margin-bottom: 0px
    }

    .number-bottom-label {
        color: #3F4765 !important;
        font-size: 10px !important;
        font-weight: normal !important;
    }

    @media screen and (max-width:576px) {

        .right-inner img {
            position: absolute;
            right: 0px;
            padding: 12px 12px;
            width: 45px;
            height: 45px;
            z-index: 999;
            top: 23px;
        }

        .form-field label:first-of-type {
            color: #3F4765 !important;
            font-size: 14px !important;
            font-weight: 500;
            margin-bottom: 0px
        }
    }

    .info-section-two {
        position: relative;
    }



    .lefts-polygon-two,
    .left-polygon-blue,
    .right-polygon-orange,
    .rights-polygon-two {
        display: none
    }

    @media screen and (min-width:768px) {
        .lefts-polygon-two {
            position: absolute;
            bottom: 0% !important;
            left: 0% !important;
            width: 13%;
            z-index: -1;
            display: block;
        }

        .rights-polygon-two {
            position: absolute;
            bottom: 0% !important;
            right: 16px;
            width: 11% !important;
            z-index: 1;
            display: block;
        }

        .left-polygon-blue {
            position: absolute;
            top: 8% !important;
            left: 0% !important;
            width: 8%;
            /* z-index: -1; */
            display: block;
        }

        .right-polygon-orange {
            position: absolute;
            top: 8px;
            right: 16px;
            width: 8%;
            /* z-index: -1; */
            display: block;
        }

    }

    .form-field textarea {
        resize: none;
        border: 1px solid #CDCCCE;
        border-radius: 5px;
        height: 250px !important;
    }

    @media screen and (max-width:767px) {
        .form-field textarea {
            height: 200px !important;
        }

        .contact-form-heading h1 {
            color: #F89822;
            font-size: 30px !important;
            font-weight: bold;
        }
    }

    @media screen and (max-width:576px) {
        .form-field textarea {
            height: 120px !important;
        }

        .contact-form-heading h1 {
            color: #F89822;
            font-size: 25px !important;
            font-weight: bold;
        }

    }



    .form-field textarea:active,
    .form-field textarea:focus {
        resize: none;
        outline: none;
        box-shadow: none;
        border: none
    }

    .contact-form-heading p {
        text-align: left !important;
        color: black !important;
        font-size: 14px !important;
        width: 100% !important;
        font-size: 18px;
    }

    .contact-form-heading h1 {
        color: #F89822;
        font-size: 40px;
        font-weight: bold;
    }

    .contact-btn {
        width: 50% !important;
    }

    .form-field input {
        padding: 0px !important;
        height: 40px !important;
        padding-right: 50px !important;
    }

    @media screen and (max-width:576px) {
        .contact-btn {
            width: 100% !important;
        }

        .form-field input {

            height: 30px !important
        }
    }

    .form-field {
        background: white;
        border-radius: 5px;
        padding: 5px 10px;
    }

    .privacy-content-item h1 {
        color: #F89822;
        font-size: 30px;
    }

    .privacy-content-item p {
        color: black;
        font-size: 22px;
    }

    @media screen and (max-width:991px) {
        .privacy-content-item h1 {
            color: #F89822;
            font-size: 25px;
        }

        .privacy-content-item p {
            color: black;
            font-size: 20px;
        }
    }

    @media screen and (max-width:767px) {
        .privacy-content-item h1 {
            color: #F89822;
            font-size: 22px;
        }

        .privacy-content-item p {
            color: black;
            font-size: 18px;
        }
    }

    @media screen and (max-width:576px) {
        .privacy-content-item h1 {
            color: #F89822;
            font-size: 20px;
        }

        .privacy-content-item p {
            color: black;
            font-size: 16px;
        }
    }
</style>
@section('content')
@include('includes.website.navbar')
<div class="container-fluid outer-wrapper">
    <div class="inner-wrapper">
        <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
        <div class="inner-wrapper-heading">
            <h1>Privacy</h1>
            <h1 class="">Notice</h1>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,32L48,58.7C96,85,192,139,288,176C384,213,480,235,576,202.7C672,171,768,85,864,85.3C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>

</div>
<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
        <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
        </filter>
    </defs>
</svg>
<div class="info-section-two container-fluid px-0 my-3 my-md-2">
    <div class="amount-section container">
        <div class="row">
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Privacy Notice</h1>
                <p>We recognise that protecting personal information is very important to you and that you have an interest in how we collect, use, store and share such information. We always respect our customers’ privacy and personal information and we take this matter very seriously. We have worked very hard to earn our customers’ trust and keeping it is our top priority. That’s why we comply with the obligations that are laid out under data protection laws.</p>
                <p>This privacy notice sets out how we, as a data controller, will use and protect your information. We will use your personal information only for the purposes and in the manner set out in this privacy notice. We recommend that you read this privacy notice carefully.</p>
                <p>Please note: you have the right to object to the processing of your personal data where that processing is carried out for our legitimate interests or for direct marketing purposes.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>About</h1>
                <p>The Applications are operated, and the Services are provided by Amin Technologies Inc t/a Amin Topup (“Amin Topup”, “we” or “us”). Amin Topup is incorporated in Delaware, United States of America with registration number 7951350, and has its registered office in Delaware, United States of America. Amin Topup is a business name of Amin Technologies Inc.
                    You can contact Amin Topup using the contact information set out below.
                    All correspondence in relation to any Amin Topup services should be sent to support@amintopup.com.
                </p>
                <p>We are currently partnered with Identity Infotech (IIT), one of the leading prime Topup aggregators of Afghanistan, for providing mobile Topup to local Afghanistan numbers using IIT’s API. Through IIT’s API, Amin Topup can provide direct and secure recharge to Etisalat Afghanistan, MTN Afghanistan, Roshan Telecom, AWCC, Afghan Telecom and Salaam Telecom.</p>
                <p>Anywhere in the world, you can simply send Topup to any phone number fast and easily.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>How can you get in the Amin?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam natus quam dicta quibusdam vel, repudiandae praesentium deleniti quia aliquid cupiditate nostrum non esse labore molestias. Sint minus molestias ex veniam.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Scope of the Amin's Privacy notice?</h1>
                <p>Personal data is information that identifies a person or can be used to identify a person. For us to provide our Services to you, we need to collect and process personal data about you. Without this information, we may not be able to provide our Services to you.</p>
                <p>This privacy notice will apply to personal data about you collected by us through the Application or otherwise. You acknowledge that you have informed any such person that their personal data may be collected and processed by Amin Topup.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>What data does Amin Topup collect?</h1>
                <p>We may collect and process the following data about you:</p>
                <p>Contact Details: name; email address; telephone number; passport or national identification details (in limited circumstances); social media identifiers;</p>
                <p>Payment Details: cardholder name; credit or debit card details (however, we only retain certain parts); chargeback information; billing address; Paypal ID; utility bill (in limited circumstances);
                    Transaction Details: transaction amount and currency;
                </p>
                <p>Electronic Identifying Details: IP address; SMS content; cookies; pixels; activity logs (e.g. user session recordings); online identifiers; device identifiers (e.g. the mobile device and/or the internet browser that you use) and geolocation data;</p>
                <p>Correspondence and Complaints: any correspondence that you choose to send to Amin Topup (including complaints); any information you provide to our customer care team; any information you publish about Amin Topup (including on the app stores);</p>
                <p>Transaction History: details of the transactions (including date and time and relevant service provider) you carry out, and your visits to the Applications.</p>
                <p>If you choose to grant the mobile applications' access to contact information through your device, we may collect this information, including names, telephone numbers, email addresses, and social media identifiers. We use this information to help us deliver the Services to your family and friends in the most efficient manner and for the other purposes listed below.
                    We also collect the mobile phone number of the person to whom you wish to send credit.
                </p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>How does Amin Topup collect your personal data?</h1>
                <p>You provide us with your data when you register for or use, our Services. We may also collect personal data about you from third parties (e.g. in the event of chargebacks or through third party direct marketing services). We also collect information about you through your use of our Applications, your visits to our Applications, your interactions with our customer care team and the transactions you carry out on our Applications. When you visit our Applications, your device and/or browser may automatically disclose certain information (such as device type, operating system, browser type, browser settings, IP address, language settings, dates and times of connection to an Application or other technical communications information), some of which may constitute personal data.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Do we carry out any automated processing of your personal data?</h1>
                <p>We use automated statistical analysis of the personal data we collect about you in order to comply with our legal obligations to detect and prevent fraud, dishonesty, and other crimes. We may use automated processing to screen for suspicious transactions or to identify transactions that may be subject to international sanctions.</p>
                <p>When we make solely automated decisions that affect you in a legal or significant way, you have the right to provide your point of view and have those decisions reviewed by a staff member.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>What happens if you do not provide us with your data?</h1>
                <p>If you do not provide us with your data or object to the use of specific personal data, we may not be able to provide the Services to you.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Who do we disclose your data to?</h1>
                <p>We share your data, where necessary, with the following recipients:
                    any third party you ask us to share it with, including friends and family];
                    mobile operators and other service providers (directly or via third parties);
                    anti-fraud service providers;
                </p>
                <p>governmental, legal, regulatory, or similar authorities, on request or, where required, including to report any actual or suspected breach of applicable law or regulation;</p>
                <p>law enforcement authorities were responding to valid requests to assist in the prevention, detection, investigation or prosecution of a criminal offense;</p>
                <p>third party payment processors;</p>
                <p>direct marketing service providers;</p>
                <p>data analytics service providers (e.g. Google Analytics);</p>
                <p>third party service providers used for the delivery of some aspects of the Services (e.g. SMS delivery, email delivery, web notifications, app notifications and phone number lookup);</p>
                <p>hosting infrastructure companies based in the EEA;</p>
                <p>legal and financial advisors, and auditors;</p>
                <p>potential purchasers or bidders.</p>
                <p>In addition, recipients of the Services may be able to view your pseudonymized contact information if requesting further Services from you. If you wish to opt out from receiving such requests for Services, you may do so at the time of receiving the request.</p>
                <p>Our Applications may, interface with third-party services that you have previously interacted with (e.g. Facebook and Google), or contain links to third-party content (e.g. service provider content). Please note that Amin Topup is not responsible for such services or content or the privacy policies associated with those services or content. We recommend you review any third party’s privacy policy before accessing such services or content.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Data Security</h1>
                <p>We have implemented appropriate technical and organizational security measures designed to protect your personal data against accidental or unlawful destruction, loss, alteration, unauthorized disclosure, unauthorized access, and other unlawful or unauthorized forms of Processing, in accordance with data protection laws.
                    You are responsible for ensuring that any personal data sent to us is sent securely.
                </p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>How long do we keep your data?</h1>
                <p>We will keep your data only for so long as is necessary to carry out the purposes set out above and to comply with any legal obligations. The criteria for determining the duration for which we retain your data are whether it is necessary:</p>
                <p>to maintain an ongoing relationship with you (e.g. to provide our Services to you or where you are lawfully included in our direct marketing lists and have not unsubscribed);
                    in connection with the purposes set out in this notice and where we have a valid legal basis; or
                    to comply with any applicable limitation period under applicable law, and a reasonable amount thereafter.
                </p>
                <p>Once the periods above have concluded, we will either:</p>
                <p>permanently delete or destroy the relevant personal data;</p>
                <p>archive your data so that it is beyond use, or anonymize the relevant personal data.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Will Amin Topup use your data for direct marketing purposes?</h1>
                <p>Where we have your consent to do so, we will use your personal data to send you information by SMS, email or app notifications relating to our products and services which may be of interest to you or similar products and services to those you have previously purchased from Amin Topup.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Your Rights</h1>
                <p>You have a right to obtain a copy of, and the right to rectify any inaccuracies in, the personal data we hold about you by making a request to us in writing. You also have the right to request erasure, restriction, portability, or object to the processing, of your personal data or not to be subject to a decision based on automated processing, including profiling. You should inform us of any changes to your data. Any requests made under this section can be made using the contact details set out below. We will respond to your request in writing, or orally if requested, as soon as practicable and in any event not more than one month after receipt of your request. In each case, these rights are subject to restrictions as laid down by law.
                    If you are unhappy with any aspect of processing or your data protection rights, please contact Amin Topup in the first instance, and we will be happy to listen to your concerns. We can be contacted as follows: support@amintopup.com
                </p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Changes to this privacy notice</h1>
                <p>We may update this privacy notice from time to time. If we make any material changes, we will notify you by posting a notice on our Applications and/or, where appropriate, sending you a notification.
                </p>
            </div>
        </div>
        <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
        <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
    </div>
</div>
<div class="info-section-two container-fluid px-0 ">
    <div class="info-section-two-wrapper  container ">
        <div class="row py-3">
            <div class="col-md-7 info-section-two-right  justify-content-end order-2 order-md-12">
                <div class="info-section-two-right-content pl-md-5">
                    <h1>Send money to almost anywhere in the world from </h1>
                    <p>Get the Amin Top-Up App for the fastest, easiest way to top-up any phone.</p>
                    <div class="banner-content-button d-flex justify-content-center justify-content-md-start">
                        <a href="#" class="mr-1 mr-sm-3">
                            <button class="d-flex button-1">
                                <img src="{{ asset('assets/website-images/apple.svg') }}">
                                <div class="button-inner">
                                    <span>Get It On</span>
                                    <br>
                                    <span>App Store</span>
                                </div>

                            </button>
                        </a>
                        <a href="#">
                            <button class="d-flex button-1">
                                <img src="{{ asset('assets/website-images/playstore.svg') }}">
                                <div class="button-inner">
                                    <span>Get It On</span>
                                    <br>
                                    <span>Play Store</span>
                                </div>

                            </button>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-md-5 info-section-two-left text-center py-1 py-md-4 order-1 order-md-12">
                <img class="mobile-image-left" src="{{ asset('assets/website-images/person-animated.svg') }}" alt="image">
            </div>

        </div>
    </div>
    <img class="left-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
</div>
@include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
<script>
    $('.file-upload').on('click', function(e) {
        e.preventDefault();
        $('#file-input').trigger('click');
    });
</script>
@endsection