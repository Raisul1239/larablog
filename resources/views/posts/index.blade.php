 @extends('layouts.app')



 @section('content')



 <div class="container-fluid paddding mb-5">
     <div class="row mx-0">
         @foreach ($posts as $post )
         @if($loop->index > 4) @break @endif
         @if($loop->first)
         <div class="col-md-6 col-12 paddding animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
             <div class="fh5co_suceefh5co_height"><img style="object-fit:cover;" src="{{asset($post->photo)}}" alt="" />
                 <div class="fh5co_suceefh5co_height_position_absolute"></div>
                 <div class="fh5co_suceefh5co_height_position_absolute_font">
                     <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;Dec 31,2017
                         </a></div>
                     <div class=""><a href="{{route('postSingle', $post->id)}}" class="fh5co_good_font">{{ $post->title }} </a></div>
                 </div>
             </div>
         </div>

         <div class="col-md-6">
             <div class="row">
                 @else


                 <div class="col-md-6 col-6 paddding animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
                     <div class="fh5co_suceefh5co_height_2"><img style="object-fit:cover;" src="{{asset($post->photo)}}" alt="" />
                         <div class="fh5co_suceefh5co_height_position_absolute"></div>
                         <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                             <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;Oct
                                     28,2017 </a></div>
                             <div class=""><a href="{{route('postSingle', $post->id)}}" class="fh5co_good_font_2"> {{ $post->title }}</a></div>
                         </div>
                     </div>
                 </div>
                 <!-- Another 3 -->

                 @if($loop->last)
             </div>
         </div>
         @endif
         @endif
         @endforeach
     </div>
 </div>

 <!-- <h1>After box</h1> -->

 @endsection