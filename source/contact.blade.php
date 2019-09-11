@extends('_layouts.master')

@section('content')
	<section class="section">

        <!-- Container -->
        <div class="container">

        	<h2 class="text-dark my-3">Contact</h2>
        	<p>Fill out the below and i'll be sure to get back to you soon!</p>
        	<form class="mt-4" name="contact" method="POST" netlify>
        		<div class="form-row mt-2">
        			<div class="form-group col-md-6">
        				<label for="inputEmail4">Name</label>
        				<input type="name" class="form-control" id="inputEmail4" placeholder="Name...">
        			</div>
        			<div class="form-group col-md-6">
        				<label for="inputPassword4">Email</label>
        				<input type="email" class="form-control" id="inputPassword4" placeholder="Email...">
        			</div>
        		</div>
        		<div class="form-group mt-2">
        			<label for="exampleFormControlTextarea1">Message</label>
        			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your message..."></textarea>
        		</div>
        		<button type="submit" class="btn btn-primary mt-2">Submit</button>
        	</form>
        </div>

    </section>

@endsection