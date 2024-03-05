@extends('frontend.layouts.single-master')

@push('styles')
    
    <style>
        h5{
            margin-left: 20px;
        }
        ul{
            margin-left: 50px;list-style-type: square; line-height: unset;
        }
    </style>
    
@endpush

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Terms & Condition</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <!--<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
                    <!--<li class="breadcrumb-item active" aria-current="page">About</li>-->
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
              
                <h3>Terms & Condition</h3>
                <br><br>
                <h5>Introduction</h5>
                <ul>
                    <li>Clearly state the purpose of the terms and conditions.</li>
                    <li>Identify the parties involved (website owner) and users.</li>
                    <li>Explain the scope of the agreement and its applicability to all users.</li>
                </ul>   
                <h5>Acceptance of Terms</h5>
                <ul>
                    <li>Define that use of the website implies acceptance of the terms and conditions.</li>
                    <li>Explain how continued use constitutes ongoing agreement to the terms.</li>
                </ul>  
                <h5>User Rights and Responsibilities</h5>
                <ul>
                    <li>Detail user responsibilities such as accurate information provision, compliance with laws, and acceptable use.</li>
                    <li>Specify user rights regarding content usage, privacy, account access, and termination of accounts.</li>
                </ul>  
                <h5>Ownership and Intellectual Property</h5>
                <ul>
                    <li>Clarify ownership of content, trademarks, and copyrights.</li>
                    <li>Explain user permissions for content use, distribution, and restrictions.</li>
                    <li>Explain the scope of the agreement and its applicability to all users.</li>
                </ul>  
                <h5>Privacy Policy</h5>
                <ul>
                    <li>Summarize key points from the website's privacy policy, including data collection, usage, sharing, and security measures.</li>
                </ul> 
                <h5 style="margin-left: 20px">Payments, Refunds, and Billing</h5>
                <ul style="margin-left: 50px;list-style-type: square; line-height: unset;">
                    <li>Detail payment terms, refund policies, subscription specifics (if applicable), billing cycles, and user obligations regarding fees.</li>
                </ul> 
                <h5>Dispute Resolution and Legal Jurisdiction</h5>
                <ul>
                   <li>Describe how disputes will be resolved, whether through arbitration or legal jurisdiction.</li>
                   <li>Specify the governing law and jurisdiction for any legal matters.</li>
                </ul> 

                <h5>Limitation of Liability </h5>
                <ul>
                    <li>Explain limitations on the website owner's liability for damages incurred while using the site or services.</li>
                </ul>
                <h5>Changes to Terms & Conditions </h5>
                <ul>
                    <li>Explain the process for updating terms and conditions and how users will be informed.</li>
                    <li>Specify users' responsibility to review changes periodically.</li>
                </ul>
                
                <h5>Termination of Agreement </h5>
                <ul>
                    <li>Outline conditions under which the agreement may be terminated, including violations of terms or account closure.</li>
                </ul>
                <h5>Miscellaneous Clauses</h5>
                <ul>
                    <li>Include additional clauses or provisions pertinent to your website's services or user interactions.</li>
                </ul>
                <p class="about-us">Creating a comprehensive and legally sound Terms & Conditions page is crucial, and seeking legal advice from professionals experienced in internet law is highly recommended to ensure compliance with relevant laws and to protect both the website owner and users.</p>
                
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection