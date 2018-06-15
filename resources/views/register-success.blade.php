@extends('master')

@section('content')
   <section class="page-404 page-403">
       <div class="container">
           <div class="row">
               <div class="col-sm-12 col-md-10 col-md-offset-1">
                   <div class="content-404">
                       <div class="relative">
                           <div class="text-404"><i class="fa fa-check"></i></div>
                           <h2 class="title-404 over-404">Willkommen, {{$name}}!</h2>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
@stop