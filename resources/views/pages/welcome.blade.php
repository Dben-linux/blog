@extends('main')

@section('content')  

      <div class="row">
        <div class="col-md-12">
        <div class="jumbotron">
        <h1>Welcome To My Blog!</h1>
        <p>Thank you for visiting this blog built with laravel. please read my latest post.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Latest post</a></p>
        </div>
        </div>
       </div> <!-- end of header -->


       <div class="row">
         <div class="col-md-12">
          <div class="post">
           <h1>Post Title</h1>
           <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
           Lorem Ipsum has been the indust took a galley of type and scrambled it to make 
          a type specimen book. ..</p>
          <a href="#" class="btn btn-primary">Read More</a>
          </div>

          <hr>
          <div class="post">
           <h1>Post Title</h1>
           <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
           Lorem Ipsum has been the indust took a galley of type and scrambled it to make 
          a type specimen book. ..</p>
          <a href="#" class="btn btn-primary">Read More</a>
          </div>

          <hr>
          <div class="post">
           <h1>Post Title</h1>
           <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
           Lorem Ipsum has been the indust took a galley of type and scrambled it to make 
          a type specimen book. ..</p>
          <a href="#" class="btn btn-primary">Read More</a>
          </div>
           </div>
            

           <div class="col-md-3 col-md-offset-1">
           <h1>Sidbar</h1>
           </div>
       </div>

       @endsection