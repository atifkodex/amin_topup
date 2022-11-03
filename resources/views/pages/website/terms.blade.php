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
            <h1>Terms &</h1>
            <h1 class="">Conditions</h1>
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
                <h1>Terms & Conditions</h1>
                <p>Please read these Terms carefully before accessing or using the Services and Applications. You should print a copy of these Terms for future reference.</p>
                <p>If you object to any of the terms and conditions of this Agreement or any subsequent modifications to them, or become dissatisfied with your use of the Applications or Services in any way, you may: a) discontinue your use of the Applications and/or Services; and b) close your virtual account (“Account”) by notifying us in writing by email or otherwise (see contact information below). No other remedy, legal or otherwise, is available to you save for a) and b) mentioned above.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Introduction</h1>
                <p>The provision of services by Amin Topup facilitates the purchase of prepaid mobile and/or data airtime (“Top-up”) and prepaid vouchers (“Vouchers”) (together the “Products”) (“Services”) relating to services to be provided by mobile telephone operators and other third parties through the websites <a href="www.amintopup.com">www.amintopup.com</a>, and any associated Amin Topup mobile applications, present or future (together, the “Applications”) and your use of the Applications and access to the Services are subject to your acceptance of these terms and conditions (“Agreement” or “Terms”). By using the Applications, you expressly agree to be bound by these Terms.</p>
                <p>Please read these Terms carefully before accessing or using the Services and Applications. You should print a copy of these Terms for future reference.</p>
                <p>If you object to any of the terms and conditions of this Agreement or any subsequent modifications to them, or become dissatisfied with your use of the Applications or Services in any way, you may: a) discontinue your use of the Applications and/or Services; and b) close your virtual account (“Account”) by notifying us in writing by email or otherwise (see contact information below). No other remedy, legal or otherwise, is available to you save for a) and b) mentioned above.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Information About Us</h1>
                <p>The Applications are operated, and the Services are provided by Amin Technologies Inc t/a Amin Topup (“Amin Topup”, “we” or “us”). Amin Topup is incorporated in Delaware, United States of America with registration number 7951350 and has its registered office in Delaware, United States of America. Amin Topup is a business name of Amin Technologies Inc.</p>
                <p>You can contact Amin Topup using the contact information set out at below.</p>
                <p>All correspondence in relation to any Amin Topup services should be sent to support@amintopup.com.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Registration</h1>
                <p>To use the Services, you may elect to register for an Account. You can do this by filling out the appropriate information on the registration screen on the relevant Application. Upon registration you will be given an Account. When registering you may supply personal information, including your email address or phone number. You may also choose a password.</p>
                <p>All data you provide to us as a customer will be treated in accordance with our Privacy Policy.</p>
                <p>You agree that the information supplied on registration will be truthful, accurate and complete. It is your responsibility to inform us of any changes to that information.</p>
                <p>You are entirely responsible for all activities which occur when using your email address, phone number and/or password (“Login Details”) in relation to your Account, including unauthorized use of your Account or any payment method, including debit or credit card. You must not disclose your password, whether directly or indirectly, to any third party. It is your responsibility to safeguard your password. You must notify us immediately using the contact details at Section 26 below if you become aware of any unauthorized use of your Login Details.</p>
                <p>Login Details may only be used by a single user and are not transferable.</p>
                <p>Please note that your Login Details may be used on all Applications. These Terms will apply to the use of Services on any of the Applications.</p>
                <p>If you are under 16 years of age, you represent to Amin Topup that you have obtained a parent/guardian’s consent and that your parent/guardian has reviewed and agreed to these Terms prior to using the Applications. If you are an employee of a company or other entity or are acting on behalf of a company or entity, you must be authorized to accept these Terms on behalf of that employer, company or entity.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Your data</h1>
                <p>Amin Topup will comply with all of its obligations under applicable data protection law with regard to relevant data in its possession relating to you. Data collected by us as part of the Services will be treated in accordance with our Privacy Policy. These documents set out how we use and protect the information you provide to us. We recommend that you read the Privacy Policy carefully.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Use of Services and Cost</h1>
                <p>You agree to use the Applications and Services solely in accordance with these Terms and to comply with applicable law and the provisions set out in these Terms.</p>
                <p>You may not use the Applications or Services: (i) in violation of any law, statute, rule or regulation; or (ii) in connection with any illegal, fraudulent, offensive, violent, immoral or indecent activity; or (iii) in any manner that encourages, promotes, facilitates or instructs others to engage in any illegal, fraudulent, offensive, violent, immoral, or indecent activity. The Services shall only be provided to you by Amin Topup in respect of the mobile phone operators and other service providers available on the Applications (which are subject to change and availability).</p>
                <p>You will be required to input certain information (e.g. a receive mobile phone number or email address) in respect of the Services or the Applications. It is your responsibility to ensure that you have correctly inputted the information. In the case of Top-up and Vouchers, you will then be required to select the amount of Top-up that you wish to be delivered or the value of the Voucher you wish to purchase.</p>
                <p>The total amount (inclusive of all applicable taxes and charges) that you will be required to pay will be displayed clearly on the Applications before you are asked to confirm your transaction and proceed Amin Topup with the transaction at this point is entirely optional. In the case of Top-up and Vouchers, the cost will vary depending on the amount of Top-up that you wish to send or the value of the Voucher that you wish to purchase according to the denominations displayed on the Applications. If the Top-up you purchase is to be received in a different currency to the currency of your chosen payment method, the payment amount will be subject to the applicable FX rate on the payment date and an airtime conversion fee will be applied. You may also be charged a processing fee in respect of any Product you purchase through the Amin Topup Applications. If you choose to send an optional SMS to the recipient of Top-up, an additional message fee for this may apply.</p>
                <p>Services are provided by Amin Topup upon successful payment by you. Occasionally, there may be a short delay before the relevant third party delivers the Product to the recipient. Where contact details have been provided, we will send you a confirmation email or SMS which contains details of the Services as soon as your transaction has been successfully completed. In the case of Top-up, you agree and understand that Amin Topup only acts on your authorization to send the Top-up and the relevant third party shall be solely liable to you and the recipient, where applicable, for the provision of the services related to the Top-up or Voucher. Once a Top-up is sent, it can be used immediately and therefore it cannot be refunded or removed. To avoid Products being provided to the wrong phone or email address, Amin Topup asks you to confirm, where applicable, that the recipient details you have entered are correct.</p>
                <p>You acknowledge that you will lose the right to cancel the Services once they have been fully performed by Amin Topup. Accordingly, you will have no right to request a refund under the European Union (Consumer Information, Cancellation and Other Rights) Regulations 2013. Please note that the Applications limit the number and value of Products that can be purchased or received, including over a specific time period (e.g. daily, weekly, monthly). Other limits and exclusions related to the use of the Applications and the purchase of Products may be applicable from time to time.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Your Instructions</h1>
                <p>You shall ensure that all instructions provided to Amin Topup through the Applications are accurate, complete and true. In particular, the mobile phone number or email associated to a permanent Nauta access account, to which any Top-up is to be credited must be correctly identified. You shall ensure that any instructions which are relayed back for confirmation are correct, accurate and true. All confirmed instructions are final and binding upon you. Amin Topup and/or its service providers shall bear no liability or consequences related to the provision of incorrect, inaccurate or false information by you. You are solely responsible for any consequences related to the failure to provide correct, accurate and true information or the failure to correct such inaccurate information prior to final confirmation.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Transactions Using Your Chosen Payment Method</h1>
                <p>You may purchase Products through Amin Topup’s Services using Visa, MasterCard, Diners, Discover, AMEX, or PayPal or any other payment methods available on the Applications from time to time. Any credit card, debit card or other payment method which may be used on the Applications must have a valid billing address and valid issuing bank or other payment services provider.</p>
                <p>Where you purchase Top-up using a Diners or Discover credit card or make a USD$ currency purchase using a Visa or MasterCard credit card which was issued in the United States, your payment may be processed by a payment processor for and on behalf of Amin Topup. </p>
                <p>Upon receipt of a proper and complete request from you for Services, Amin Topup will charge the payment method provided by you and will forward an electronic request to the relevant third party provider (e.g. mobile operator or issuer of Voucher) to provide the Products in the amount transferred, for the benefit of the recipient nominated by you.</p>
                <p>You authorise Amin Topup to act upon any instruction to charge the payment method provided by you through the Applications which has been transmitted using your password and/or any other authentication/identity verification process which you may require to be used in connection with the Applications. Amin Topup is not required to undertake any additional authentication or identity verification measures other than those required by applicable law or as Amin Topup deems appropriate and sufficient to protect against fraud or money laundering and to maintain the security and proper use of the Applications to comply with any internal policy. All charges concluded post successful authentication or identity verification are your sole responsibility and liability.</p>
                <p>Amin Topup shall accept liability for the non-execution or defective execution of Services purchased through the Applications, subject to your adherence with these Terms, the proper use of the Applications as instructed by Amin Topup, and the absence of any misrepresentation, fraud or negligence by you. Such liability, if incurred, shall be strictly limited to the amount of the unexecuted or defective Services.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Your Obligations</h1>
                <p>The equipment and devices necessary to access the Applications shall be provided and be maintained by you solely at your expense. If you access the Applications through a mobile device you may be charged by your mobile service provider for internet access on your device.</p>
                <p>You can download the mobile applications from the app stores free of charge. You are solely responsible for ensuring that you download any subsequent updates to the mobile applications from the relevant app store.</p>
                <p>Amin Topup reserves the right to modify equipment and software requirements as is necessary for it to continue or improve the provision of Services through the Applications.</p>
                <p>You acknowledge that compliance with these Terms is designed to minimise the risk of unauthorised use of the Applications and harm to you, Amin Topup or others, and therefore you are required to strictly adhere to these Terms. To the fullest extent permitted by law, you will be liable for any liability, loss, costs or damages to Amin Topup or any third party as a result of your failure to adhere to these Terms.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Third-Party Services</h1>
                <p>Amin Topup will not check the accuracy or completeness of the information or the suitability or quality of the products and services offered by third parties. Any Vouchers purchased through the Services will have their own terms and conditions, including Topup applicable expiry dates and any other applicable restrictions and requirements. Amin Topup advises you familiarise yourself with any such terms and conditions before purchasing any Vouchers through the Services. You must make your own inquiries with the relevant third-party supplier directly before relying on the third-party information or entering into a transaction in relation to the third-party products and services referred to on the Applications. Service providers are fully responsible for all aspects of their Products.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Withdrawal of Services</h1>
                <p>These Terms apply to every Product you purchase through the Applications.</p>
                <p>Amin Topup may disable your Account and suspend or withdraw the use of the Applications and/or the Services provided through it:</p>
                <ul>
                    <li>
                        Upon reasonable prior notice to you;
                    </li>
                    <li>
                        Immediately upon breach by you of these Terms or where Amin Topup reasonably believes you are in breach of these Terms;
                    </li>
                    <li>
                        Immediately upon your insolvency/bankruptcy or inability to pay any amounts due, whether commemorated through a legitimate formal legal petition or not, or other contractual incapacity. Amin Topup reserves the right to commence debt collection actions within the bounds of the law under these conditions;
                    </li>
                    <li>Immediately if Amin Topup reasonably believes that you have used the Applications and/or Services (a) in violation of any law, rule, statute or regulation; or (b) in connection with, or in any manner that encourages, promotes, facilitates or instructs others to engage in, any illegal, fraudulent, offensive, violent, immoral or indecent activity; or (c) in breach of any number or value limits set by Amin Topup from time to time.</li>
                </ul>
                <p>These Terms do not have a minimum or finite duration and will continue to be binding on you for so long you as you have an Account with Amin Topup. You may cease using the Applications or Services and/or close your Account at any time without reason by giving Amin Topup written notice to that effect, but without prejudice to your liability for any outstanding indebtedness on any Account or otherwise before the date of termination.</p>
                <p>Amin Topup reserves the right, acting reasonably, to refuse to process or cancel any transactions following termination of this Agreement or suspension or withdrawal of the Services. Amin Topup is not responsible for any loss you may incur as a result of any transaction not being processed as part of the Services after termination of the Agreement or after any suspension or withdrawal of the Services.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Your Contribution</h1>
                <p>Where you send Amin Topup any feedback, suggestions, ideas or other materials in relation to or via the Applications or the Services provided, you agree that Amin Topup can use, reproduce, publish, modify, adapt and transmit the communication mentioned above to others free of charge and without restriction, subject to Amin Topup’s obligations as provided under the Privacy Notice.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Variations of the Terms</h1>
                <p>Amin Topup reserves the right to modify, amend or vary these Terms for commercial or legal purposes. Any such variation shall become effective and shall be binding upon you fourteen (14) days after notice of such variation has been sent to you by any of the following means, email or by posting a message on the Applications. You shall be entitled, upon receiving notice of any alteration to these Terms, to immediately cease using the Services and/or the Applications and/or close your Account by notifying Amin Topup in writing but without prejudice to your liability for any indebtedness on any Account or any other obligation, financial, legal or otherwise that has arisen prior to the closure of your Account.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Links to other Websites</h1>
                <p>Access to and use of the Applications is at your own risk and Amin Topup does not represent or warrant that the use of the Applications or any materials downloaded from it will not cause damage to property, including but not limited to loss of data or computer virus infection.</p>
                <p>Some pages on the Applications may link to websites or applications not created or maintained by Amin Topup. You are hereby adequately notified and forewarned that when entering other websites or applications via such links, the terms and conditions, benefits, and privacy protections afforded by our Applications will not be applicable and you must make yourself aware of and become compliant with the requirements of those individual independently maintained websites or applications. Amin Topup is not liable in any way for the content, availability or use of such linked websites and you agree that you may access such links entirely at your own risk.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Notices</h1>
                <p>Save where expressly provided, any notice required to be given by you to Amin Topup in connection with these Terms shall be given in writing and sent by email to support@amintopup.com.</p>
                <p>Save where expressly provided, any notice required to be given by Amin Topup to you in connection with the subject matter of these Terms may be given by email or by posting a message on the Applications.</p>
                <p>With your permission, Amin Topup may from time to time contact you to keep you up to date about Amin Topup’s Services, including new products, campaigns and promotions. For further information please review our Privacy Policy.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Intellectual Property Rights</h1>
                <p>For the purposes of this Agreement “Intellectual Property Rights” means all copyright, patents, registered and unregistered trademarks, registered and unregistered design rights, rights in databases and topography rights and other intellectual property rights, all rights to bring an action for passing off, all rights to apply for protection in respect of any of the above rights and all other forms or protection of a similar nature or having equivalent or similar effect to any of these which may subsist anywhere in the world.</p>
                <p>You may only download, use, view, and display the Applications (and the Intellectual Property Rights therein) solely to use the Services and in accordance with the terms of this Agreement. Save for where otherwise specified, the Intellectual Property Rights in, and contents of, the Applications are owned by Amin Topup or its licensors. Reproduction, copying, modification, alteration, or adaptation of part or all of the contents of the Applications (including any graphics or trademarks) in any form is prohibited without Amin Topup’s prior consent, other than that which you are authorized by Amin Topup to print or download for personal, non-commercial use.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Suspension of Services</h1>
                <p>In the event of a disruption to, or a failure, unavailability, fault or malfunction of, or connected to, any product or system used in connection with the Applications or the Services, or where there is a real or potential security risk, Amin Topup shall be entitled, without incurring any liability to you, to temporarily suspend the relevant Services or access to the Applications or your Account for a such reasonable period as may be required to remedy, address or resolve the issue. Amin Topup may also suspend access to the Applications and/or your Account and/or Services as required for maintenance (whether emergency or planned) or upgrade work. Without prejudice to Amin Topup’s rights at Section 12 above, you further agree and acknowledge that your access to the Applications and/or your Account and/or Services may be immediately suspended where Amin Topup reasonably believes that you have used the Applications and/or Services (a) in violation of any law, rule, statute, or regulation; or (b) in connection with, or in any manner than encourages, promotes, facilitates or instructs others to engage in, any illegal, fraudulent, offensive, violent, immoral or indecent activity; or (c) in breach of any number or value limits set by Amin Topup from time to time. In the event of such suspension, Amin Topup may reinstate access to your Account and recommence providing Services to you at its sole discretion.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Force Majeure</h1>
                <p>Amin Topup shall not be liable or in breach of its obligations under this Agreement if there is any total or partial failure of performance of its duties and obligations occasioned by any act of God, fire, act of government or state or other third party, war, civil commotion, insurrection, embargo, inability to communicate with third parties for whatever reason, failure of any computer or network or settlement system, failure of or delay in any mobile phone network, prevention from or hindrance in obtaining any airtime, energy or other supplies, labour disputes of whatever nature, late or mistaken payment by an agent or any other reason (whether or not similar in kind to any of the above) beyond Amin Topup’s control.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Security, Maintenance and Availability</h1>
                <p>You agree, acknowledge, and accept that electronic communications, the internet, telephone lines or SMS-based telecommunications media may not be secure and communications via such media may be intercepted by unauthorized persons or delivered incorrectly. Consequently, Amin Topup cannot guarantee the privacy or confidentiality of communications via such media, although it will (and shall procure that its service providers will) put in place appropriate security measures to protect these methods of communications.</p>
                <p>From time to time, it may be necessary to or desirable for security reasons, maintenance (whether emergency or planned), upgrades or other reasons to:</p>
                <ul>
                    <li>Make certain or all of the Applications or Services unavailable to you; and/or</li>
                    <li>Delay implementation of any new Services; and/or</li>
                    <li>Withdraw, replace or reissue your password; and/or</li>
                    <li>Change authentication procedures or processes for accessing the Applications or the Services,</li>
                    <li>While using reasonable endeavors to minimize any inconvenience caused.</li>
                </ul>
                <p>You acknowledge and agree that these events may occur and that Amin Topup bears no liability when such events occur. Where Amin Topup changes authentication procedures for accessing the Applications or the Services therein, notwithstanding any other terms of this Agreement, Amin Topup may introduce these procedures by giving instructions to you via the Applications in respect of which such procedures are being introduced.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Agency and Assignment</h1>
                <p>You agree that you have entered into this Agreement for your own benefit and not for the benefit of another person, and that you may not subcontract or assign any of your rights or obligations under this Agreement.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Limited Liability</h1>
                <p>Amin Topup bears no responsibility for use of the Applications and/or Services in connection with any unauthorized, illegal, fraudulent, offensive, violent, immoral or indecent activity. Save as set out at Section 7 above, Amin Topup, its directors, employees, officers or agents exclude all liability and responsibility for any amount or kind of loss or damage that may result to you or a third party (including without limitation any direct, indirect, incidental, special, or consequential, exemplary or punitive loss or damage or any loss of income, money, data or goodwill) arising out of or in connection with your use of the Applications, Products or the Services. This does not limit in any way our liability for death or personal injury caused by our negligence or for any other matter which it would be illegal for us to exclude our liability.</p>
                <p>No damages other than compensatory damages, strictly limited to the amount of Top-up or other value paid in relation to Services provided through the Applications, where the fault lies solely with Amin Topup, shall be incurred by Amin Topup. No right of indemnity exists for you against Amin Topup.</p>
                <p>Furthermore, Amin Topup will incur no independent or third party or vicarious liability in relation to the failure by you to adhere to the terms and conditions contained and referenced herein or on other related and linked independently operated websites by third parties.</p>
                <p>You agree and acknowledge that the Applications and the Services and content provided through them are provided “as is”. To the fullest extent permitted by law, Amin Topup makes no warranties in relation to the use and availability of the Applications or the Services provided through them.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Governing Law</h1>
                <p>This Agreement, the Applications and the provision of Services will be governed by the laws of Ireland. If any claim or dispute arises from, out of or in connection with this Agreement and/or your use of the Applications or any Services, you agree that the courts of Ireland will have exclusive jurisdiction over all such claims or disputes, without prejudice to your rights under applicable legislation.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Severability</h1>
                <p>If, at any time, any provision of this Agreement (or any part of a provision of this Agreement) is or becomes illegal, invalid or unenforceable, that shall not affect or impair the legality, validity or enforceability of the remainder of this Agreement (including the remainder of a provision where only part thereof is or has become illegal, invalid or unenforceable).</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Waiver</h1>
                <p>Any waiver of a breach or default of any of the provisions of this Agreement shall not be construed as a waiver of any succeeding breach of the same or other provisions, nor shall any delay or omission on Amin Topup’s part to exercise or avail of any right, power or privilege operate as a waiver of any breach or default by you.</p>
            </div>
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>Customer Care & Contact Information</h1>
                <p>If you have any questions about this Agreement or any complaints or require any assistance with the Applications or the Services, we are always here to help. You can get in touch with us 24 hours a day, 365 days a year, by sending an email to support@amintopup.com. </p>
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