@extends('attendee/app')

@section('title')
| Contact
@endsection

@section('active_con')
class="active"
@endsection

@section('content')
<section id="inner-headline">
<div class="container">
    <div class="row">
    <div class="span4">
        <div class="inner-heading">
        <h2>Get in touch</h2>
        </div>
    </div>
    <div class="span8">
        <ul class="breadcrumb">
        <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
        <li class="active">Contact</li>
        </ul>
    </div>
    </div>
</div>
</section>

<section id="content">
<div class="container">
    <div class="row">
    <div class="span8">
        <h4>Get in touch with us by filling contact form below</h4>



        <form id="contactform" action="" method="post" role="form" class="contactForm">

        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>

        <div class="row">
            <div class="span4 field form-group">
            <input type="text" name="name" placeholder="* Enter your full name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
            </div>
            <div class="span4 field form-group">
            <input type="text" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
            </div>
            <div class="span8 margintop10 field form-group">
            <input type="text" name="subject" placeholder="Enter your subject" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
            </div>
            <div class="span8 margintop10 field form-group">
            <textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
            <div class="validation"></div>

            <p>
                <button class="btn btn-color margintop10 pull-left" type="submit">Send message</button>
                <span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
            </p>
            </div>
        </div>
        </form>
    </div>
    <div class="span4">
        <div class="clearfix"></div>
        <aside class="right-sidebar">

        <div class="widget">
            <h5 class="widgetheading">Contact information<span></span></h5>

            <ul class="contact-info">
            <li><label>Address :</label> Tinggi sekali tower Jl.Kemacetan timur<br /> Jakarta selatan - Indonesia</li>
            <li><label>Phone :</label>+62 123 456 78 / +62 123 456 79</li>
            <li><label>Fax : </label>+62 123 456 10 / +62 123 456 11</li>
            <li><label>Email : </label> info@yourdomain.com</li>
            </ul>

        </div>
        </aside>
    </div>
    </div>
</div>
</section>
@endsection
