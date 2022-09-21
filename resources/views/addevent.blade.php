@extends('layouts.app')

@section('content')
    <main class="page-auth">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="auth-wrapper">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h2 class="auth-section-title">Add Event</h2>
                                <p class="auth-section-subtitle">Add Daywise Event.</p>
                                <form method="POST" action="{{ route('addeventstore') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Event Name <sup>*</sup></label>
                                        <input type="text" class="form-control" id="name" name="title_name" placeholder="Event Name">
                                        @error('title_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Start Date <sup>*</sup></label>
                                        <input type="date" class="form-control" id="date" name="start" placeholder="start">
                                        @error('start')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="date">End Date <sup>*</sup></label>
                                        <input type="date" class="form-control" id="end" name="end" placeholder="end">
                                        @error('end')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary btn-auth-submit" type="submit">Add Event</button>
                                </form>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <img src="assets/images/event.png" alt="login" class="img-fluid">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection