@include('frontend.includes.head')
@include('frontend.includes.header') 

<style type="text/css">
	#main {
	    margin-top: 120px;
	}
	.welcome .heading {
		font-weight: 600;
	}
	.welcome .section-title {
		padding-bottom: 10px;
	}
	.welcome .section-title p {
	    color: #4689ac;

	}
	.welcome .backdiv .back{
		width: 18%;
    padding: 12px 33px;
    font-size: 19px;
    border-radius: 50px;
       background: #ffb92c;
       border: 2px solid #ffb92c;
    color: black;
    }

</style>
<main id="main">
	<section class="welcome">
		<div class="container">
			<div class="section-title text-center" data-aos="zoom-out">
          		<p>Thank You !</p>
        	</div>
			<div class="row d-flex justify-content-center" data-aos="zoom-in">
				<div class="col-md-8">
					<div class="text-center">
						<img src="{{asset('Frontend/img/review.png')}}" style="width: 140px;" class="img-fluid">
						<h1 class="text-center heading pt-2 p-3">Hi There! Your request is in Review. You will be notified once approved.</h1>
					</div>
				</div>
				<div class="backdiv d-flex justify-content-center" data-aos="zoom-out">
					<a class="btn btn-primary back" href="{{url('/')}}">Back</a>
				</div>
			</div>
		</div>
	</section>
</main>


@include('frontend.includes.footer')
@include('frontend.includes.script')