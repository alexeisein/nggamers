@extends('layout')

	@section('title', config('app.name'). ' | '.$user->name)

	{{Html::style('css/style.css')}}

	<style type="text/css">
		/* The Modal (background) */
		.modal {
		    display: none; /* Hidden by default */
		    position: fixed; /* Stay in place */
		    z-index: 1; /* Sit on top */
		    padding-top: 20px; /* Location of the box */
		    left: 0;
		    top: 0;
		    width: 100%; /* Full width */
		    height: 100%; /* Full height */
		    overflow: auto; /* Enable scroll if needed */
		    background-color: rgb(0,0,0); /* Fallback color */
		    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
		}

		/* Modal Content (Image) */
		.modal-content {
		    margin: auto;
		    display: block;
		    width: 80%;
		    max-width: 500px;
		}

		/* Caption of Modal Image (Image Text) - Same Width as the Image */
		#caption {
		    margin: auto;
		    display: block;
		    width: 80%;
		    text-transform: uppercase;
		    max-width: 700px;
		    text-align: center;
		    color: lightblue;
		    padding: 10px 0;
		    height: 150px;
		}

		/* Add Animation - Zoom in the Modal */
		.modal-content, #caption { 
		    -webkit-animation-name: zoom;
		    -webkit-animation-duration: 0.6s;
		    animation-name: zoom;
		    animation-duration: 0.6s;
		}

		@-webkit-keyframes zoom {
		    from {-webkit-transform:scale(0)} 
		    to {-webkit-transform:scale(1)}
		}

		@keyframes zoom {
		    from {transform:scale(0)} 
		    to {transform:scale(1)}
		}

		/* The Closebtn Button */
		.closebtn {
		    position: absolute;
		    top: 15px;
		    right: 35px;
		    color: #fff;
		    font-size: 50px;
		    font-weight: bold;
		    transition: 0.3s;
		}

		.closebtn:hover,
		.closebtn:focus {
		    color: #bbb;
		    text-decoration: none;
		    cursor: pointer;
		}

		/* 100% Image Width on Smaller Screens */
		@media only screen and (max-width: 700px){
		    .modal-content {
		        width: 100%;
		    }
		}
	</style>

	{{-- {{Html::script()}} --}}

	@section('mycontent')

		<div class="container">
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
		            <div class="panel panel-default">
		                <div class="panel-heading">
		                	<div class="pull-left"><p>{{ $user->username }} Profile</p>
		                	</div>
		                	<div class="clearfix"></div>
		                </div>

		                <div class="panel-body">
		                    <div id="imgupload">
		                    	<img src="../images/{{ $user->avatar }}" style="border-radius: 50%; width: 150px; height: 150px; border:2px solid #d9d9d9; padding: 5px;" id="profile_photo" class="pull-left" alt="{{ $user->username }}">

		                    	<p>Update profile photo</p>

		                    	{{Form::open(['method' => 'POST', 'route' => ['user.profile'], 'files' => true])}}

		                    	{{-- <div class="form-group">
		                    		{{Form::file('profile_photo', null, ['class' => 'btn btn-sm btn-default', 'id'=>'profile_photo'])}}
		                    	</div> --}}

		                    	<div class="form-group">
		                    		<input type="file" name="profile_photo" class="btn btn-sm btn-default" onchange="btnEvent()">
		                    	</div>
		                    	

		                    	<div class="form-group">
		                    		{{Form::submit('SAVE', ['class'=>'btn btn-info','id'=>'saveBtn'])}}
		                    	</div>
		                    	{{Form::close()}}
		                    </div>
		                </div>
		            </div>

		            <!-- The Image Modal -->
		<div id="myModal" class="modal">

		  <!-- The Closebtn Button -->
		  <span class="closebtn" onclick="document.getElementById('myModal').style.display='block'">&times;</span>

		  <!-- Modal Content (The Image) -->
		  <img class="modal-content" id="userimg">

		  <!-- Modal Caption (Image Text) -->
		  <div id="caption"></div>
		</div>
		        </div>
		    </div>
		</div>


		<script>
		// Get the modal
			var modal = document.getElementById('myModal');

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById('profile_photo');
			var modalImg = document.getElementById("userimg");
			var captionText = document.getElementById("caption");
			img.onclick = function(){
			    modal.style.display = "block";
			    modalImg.src = this.src;
			    captionText.innerHTML = this.alt;
			}

			// Get the <span> element that closebtns the modal
			var span = document.getElementsByClassName("closebtn")[0];

			// When the user clicks on <span> (x), closebtn the modal
			span.onclick = function() { 
			  modal.style.display = "none";
			}
		</script>

		<script src="https://unpkg.com/vue@2.2.6"></script>
		<script>

		onload =function () {
			document.getElementById('saveBtn').style.visibility = 'hidden';
		}
			function btnEvent() {
				document.getElementById('saveBtn').style.visibility = 'visible';
				
			}
			// var app = new Vue({
			// 	el: #imgupload,
			// 	data: {
					
			// 	}
			// });
		</script>
			
	@endsection



