@extends('frontend.layout')
@section('slider')
<div class="slide-home">
  <div class="skitter box_skitter box_skitter_large skitter-square">
    <ul>
      <li>
        <a href="#cut">
          <img src="{{ URL::asset('assets/images/slide/1.jpg') }}" />
        </a>
      </li>
      <li>
        <a href="#swapBlocks">
          <img src="{{ URL::asset('assets/images/slide/2.jpg') }}" />
        </a>
      </li>
      <li>
        <a href="#swapBarsBack">
          <img src="{{ URL::asset('assets/images/slide/3.jpg') }}" />
        </a>
      </li>
    </ul>
  </div>
</div><!-- end slide home -->
@endsection