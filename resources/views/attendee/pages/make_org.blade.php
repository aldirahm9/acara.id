@extends('attendee/app')

@section('title')
| Create Organization
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
        <h2>Register Your Organization</h2>
        </div>
    </div>
    <div class="span8">
        <ul class="breadcrumb">
        <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
        <li class="active">Create Organization</li>
        </ul>
    </div>
    </div>
</div>
</section>

<section id="content">
<div class="container">
    <div class="row">
    <div class="span10">
        <h4>Create New Organization</h4>
        <form class="form" method="POST" action="/make_org" enctype="multipart/form-data">
        <div class="row">
            @csrf
            <div class="span2"><label for="">Name * :</label></div>
            <div class="span8 field form-group">
                <input type="text" name="name" id="name" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required />
            </div>
            <div class="span2"><label for="">Description * :</label></div>
            <div class="span8 margintop10 field form-group">
            <textarea rows="12" name="description" id="description" class="input-block-level" data-provide="markdown" data-rule="required"></textarea>
            <div id="editor_error"> </div>
            </div>
            <div class="span2"><label for="">Logo * :</label></div>
            <div class="span8 field form-group">
            <input type="file" name="picture" id="picture"/>
            <p>
                <button class="btn btn-color margintop10 pull-left" type="submit">Submit</button>
                <span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
            </p>
            </div>
        </div>
        </form>
    </div>
    </div>
</div>
</section>
@endsection
