@extends('master')

@section('content')

<div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form method="post" action={{ route('posts.store') }} enctype="multipart/form-data" name="sentMessage" id="sentMessage" data-parsley-validate="">
          	{{ csrf_field() }}

            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="title" name="title">Title</label>
                <input type="text" class="form-control" placeholder="Title" id="" name="title" data-parsley-required maxlength="10">
                
              </div>
            </div>
            
            
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label for="body" name="body">body</label>
                <textarea rows="5" class="form-control" placeholder="Body" id="" name="body" data-parsley-required></textarea>
                
              </div>
            </div>

            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-lg btn-block" id="submit" name="submit">Send</button>
            </div>

          </form>
        </div>
      </div>


@stop