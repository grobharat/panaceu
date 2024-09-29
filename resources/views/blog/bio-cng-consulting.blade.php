{{-- Layout --}}

@extends('layoutsweb.default')

<div class="greennature-page-title-wrapper header-style-5-title-wrapper">
            <div class="greennature-page-title-overlay"></div>
            <div class="greennature-page-title-container container">
                <h1 class="greennature-page-title">Blogs</h1>
                <span class="greennature-page-caption">Compressed Biogas (CBG)</span>
            </div>
        </div>

{{-- Page Title for SEO --}}
@section('title', 'Bio CNG Consulting Services | Expert Solutions for Bio CNG Projects')

{{-- Meta Description for SEO --}}
@section('meta_description', 'Professional Bio CNG consulting services. Offering expert solutions for bio CNG project planning, EPC management, and sustainability. Contact us for more info.')

{{-- Content --}}
@section('content')

    {{-- Main Section --}}
    <section class="content-wrapper">
        <div class="container">
            {{-- Primary Header --}}
            <h1>Bio CNG Consulting Services</h1>
            
            {{-- Introductory Paragraph with Keywords --}}
            <p>
                At <strong>Panaceu</strong>, we specialize in <strong>Bio CNG consulting services</strong> designed to assist businesses in the renewable energy sector. Our team of experts offers comprehensive support for <strong>bio CNG project development</strong>, engineering, procurement, and construction (EPC) management. 
                Partner with us for sustainable energy solutions that align with global energy transition goals.
            </p>
            
            {{-- Benefits Section --}}
            <h2>Why Choose Our Bio CNG Consulting?</h2>
            <ul>
                <li><strong>Expertise in Bio CNG Projects:</strong> Our consultants bring years of experience in designing and managing bio CNG installations.</li>
                <li><strong>End-to-End Solutions:</strong> From feasibility studies to EPC management, we offer comprehensive services for bio CNG projects.</li>
                <li><strong>Sustainability Focused:</strong> Our strategies prioritize eco-friendly practices and sustainability in energy production.</li>
            </ul>

            {{-- Services Section --}}
            <h2>Our Bio CNG Services</h2>
            <ul>
                <li>Bio CNG Feasibility Studies</li>
                <li>Project Planning and Development</li>
                <li>Engineering, Procurement, and Construction (EPC) Services</li>
                <li>Government Compliance and Subsidy Assistance</li>
                <li>Operations and Maintenance Support</li>
            </ul>

            {{-- Call to Action --}}
            <h2>Contact Us Today</h2>
            <p>Interested in learning how our bio CNG consulting services can help your business? <a href="{{ url('/contact') }}">Contact us</a> for a free consultation.</p>
        </div>
    </section>

    {{-- Schema Markup for SEO --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Panaceu",
        "url": "{{ url('/') }}",
        "description": "Expert Bio CNG consulting services including EPC management, project planning, and sustainable solutions.",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1234567890",
            "contactType": "Customer Support",
            "areaServed": "Worldwide",
            "availableLanguage": "English"
        }
    }
    </script>

@endsection
