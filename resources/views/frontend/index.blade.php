@extends('main')
@section('content')

    <section id="banner" style="background-image: url('public/images/banner.jpg');">
        <div class="content">
            <h1 style="color:white;">Human Touch, Technology Driven, Knowledge Delivered</h1>
            <!--<p>We believe in technology</p>-->
            <ul class="actions">
                <li><a href="#one" class="button scrolly">Get Started</a></li>
            </ul>
        </div>
    </section>


    <section id="main" class="wrapper">
        <div class="inner">

            <h2 id="content" class="align-center">Our Service</h2>
            <hr class="major">

            <div class="row">

                <div class="6u 12u$(small)">
                    <h3><i class="fa fa-laptop"></i> IT Training</h3>
                    <p>
                        All of our personnel consist of highly-skilled individuals who are passionate to helping your
                        company’s IT division to achieve its full potentials in this very fast-changing field.<br/><br/>
                        We designed our class modules to equip your employees not just with the necessary knowledge
                        of the subjects, but also to enable them to take both progressive and innovative measures
                        on their daily tasks - thus ensuring added-value activities across your company’s business
                        functions.
                    </p>
                </div>

                <div class="6u$ 12u$(small)">
                    <h3><i class="fa fa-group"></i> IT Consulting Service</h3>
                    <p>
                        Our Consulting Services covers the following areas :<br/>
                    <ul>
                        <li>IT Security Consultant</li>
                        <li>Software Architecture & Network Solution</li>
                        <li>Software Development</li>
                        <li>IT Outsourcing</li>
                        <li>Enterprise Resource Planning</li>
                        <li>Project Management</li>
                    </ul>
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section id="main" class="wrapper style1 special">
        <div class="inner">

            <h2 id="content" class="align-center">What our Client said about us?</h2>
            <hr class="major">

            <div class="row">

                @foreach($testimonies as $testimony)

                <div class="4u 12u$(small)">
                    <blockquote>
                        {{$testimony->testimony_content}}
                    </blockquote>
                    <footer>
                        <cite class="author">{{$testimony->testimony_name}}</cite>
                        <cite class="company">{{$testimony->testimony_position}}, {{$testimony->testimony_company}}</cite>
                    </footer>
                </div>

                @endforeach

            </div>

        </div>
    </section>


    <section id="main" class="wrapper">
        <div class="inner">

            <h2 id="content" class="align-center">Our Clients</h2>
            <hr class="major">

            <div class="row">
                <div class="2u 4u$(small)">
                    <img src="public/images/roheda.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/ibm.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/ace.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/securexcess.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/indosat.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/XL.png" width="150px">
                </div>

                <div class="2u 4u$(small)">
                    <img src="public/images/binus.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/sgu.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/ipb.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/trengginas.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/kementerianperikanan.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/embassy.png" width="150px">
                </div>

                <div class="2u 4u$(small)">
                    <img src="public/images/mandiri.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/panin.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/bankdki.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/cimb.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/danamon.png" width="150px">
                </div>
                <div class="2u 4u$(small)">
                    <img src="public/images/freeport.png" width="150px">
                </div>
            </div>

        </div>
    </section>

    <!-- Blocked section -->
    <!-- BLOCKED SECTION
    <section id="three" class="wrapper">

        <header class="align-center">
            <h1>Our Service</h1>
        </header>

        <div class="inner flex flex-3">

            <div class="flex-item box">
                <div class="image fit">

                </div>
                <div class="content">
                    <h3>IT Training</h3>
                    <p>All of our personnel consist of highly-skilled individuals who are passionate to helping your
                        company’s IT division to achieve its full potentials in this very fast-changing field.</p>
                </div>
            </div>

            <div class="flex-item box">
                <div class="image fit">
                    <img src="images/pic03.jpg" alt="" />
                </div>
                <div class="content">
                    <h3>IT Consulting Services</h3>
                    <p>
                        Our Consulting Services covers the following areas :<br/>
                        <ul>
                            <li>IT Security Consultant</li>
                            <li>Software Architecture & Network Solution</li>
                            <li>Software Development</li>
                            <li>IT Outsourcing</li>
                            <li>Enterprise Resource Planning</li>
                            <li>Project Management</li>
                        </ul>
                    </p>
                </div>
            </div>


        </div>

    </section>

    -->



@stop