@extends('frontend.layout')

@section('content')
<div class="container page">
    <div class="row">
        <div class="contact-page">
            <div class="col-sm-4">
                <div class="item">
                    <div class="icon">
                        <img src="{{ URL::asset('assets/images/contact/icon/icon_address.png') }}" alt="">
                    </div>
                    <span class="title">{{ trans('text.address') }}</span>
                    <p>PO Box 16122 Collins Street, Victoria<br>007 Australia</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="item">
                    <div class="icon">
                        <img src="{{ URL::asset('assets/images/contact/icon/icon_phone.png') }}" alt="">
                    </div>
                    <span class="title">{{ trans('text.phone') }}</span>
                    <p><span>Phone: 1800-900-300</span><span>Fax: 1800-900-200</span></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="item">
                    <div class="icon">
                        <img src="{{ URL::asset('assets/images/contact/icon/icon_mail.png') }}" alt="">
                    </div>
                    <span class="title">Email</span>
                    <p><span>sale@yourdomain.com</span><span>support@yourdomain.com</span></p>
                </div>
            </div>
        </div>
        <div class="page-contact-info">
            <object class="mymap-contact" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126263.60819855973!2d-84.44808690325613!3d33.735934882617194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDQ0JzQ1LjQiTiA4NMKwMjMnMzUuMyJX!5e0!3m2!1svi!2s!4v1475105845390"></object>
        </div>
        <!-- END MAP -->
    </div>
    </div>

    <div class="container">
    <div class="contact-form">
        <h2 class="about-title text-center">{{ trans('text.contact-us') }}</h2>
        <form action="contact" method="POST">
            <div class="form-group"> 
                <label>{{ trans('text.name') }}</label>                     
                <input type="text" class="form-control" id="forName" placeholder="">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="forEmail" placeholder="">
            </div>
            <div class="form-group">
                <label>{{ trans('text.content') }}</label>
                <textarea class="form-control" id="forConment" rows="8" placeholder=""></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{ trans('text.send') }}</button>
                <button type="reset" class="btn btn-default">{{ trans('text.cancel') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection