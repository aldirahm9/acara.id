@extends('attendee.app')

@section('action_org')
class="active"
@endsection

@section('content')
<section id="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="span1">
                    <div class="pricing-box-plain" hidden>
                    </div>
                </div>
                <div class="span10">
                    <div class="pricing-box-plain">
                        <h4 class="heading" style="color:steelblue">Create New Organization</h4>

                        <div class="desc">
                        <form class="form" method="POST" action="/make_org/{{ Auth::user()->id }}" enctype="multipart/form-data">
                                @csrf
                                <div class="inline">
                                    <label for="">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" value="" required placeholder="" autofocus>
                                </div>
                                <div class="inline">
                                    <label for="">Description</label>
                                    <input type="text" class="form-control" name="description" id="description" value="" required placeholder="" autofocus>
                                </div>
                                <div class="inline">
                                        <label for="">Logo</label>
                                        <input type="file" class="form-control-file" type="file" name="picture" id="picture">
                                </div>
                                <br>
                                <div>
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="span4">
                        <div class="pricing-box-plain" hidden>

                        </div>
                    </div>
            </div>
        </div>
</section>
@endsection
