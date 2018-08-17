@extends('layouts.app')

@section('content')
        <!-- Page Content -->
    <div class="container">

        <!-- Introduction Row -->
        <h1 class="my-4">{{$title}}
        </h1>
        <p><b>Projekt iz predmeta RWA online prodaja auta</b></p>
  
        <!-- Team Members Row -->
        <div class="row">
          <div class="col-lg-12">
            <h2 class="my-4">Our Team</h2>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="/storage/cover_images/Boći.png" alt="">
            <h3>Boris Dugandžić
              <small>Dizajner</small>
            </h3>
            <p>Drago mi je biti dio ovog uspješnog projekta 3 godine Računarstva</p>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="/storage/cover_images/Tina.png" alt="">
            <h3>Valentina Radišić
              <small>Admin</small>
            </h3>
            <p>Drago mi je biti dio ovog uspješnog projekta 3 godine Računarstva</p>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="/storage/cover_images/Masa.png" alt="">
            <h3>Marin Soldo
              <small>Prodavač</small>
            </h3>
            <p>Drago mi je biti dio ovog uspješnog projekta 3 godine Računarstva</p>
          </div>
 
  
      </div>
      <!-- /.container -->

@endsection