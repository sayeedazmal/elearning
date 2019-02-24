<head>
	
<link rel="stylesheet" href="path/to/plyr.css" />
<link rel="stylesheet" href="https://cdn.plyr.io/3.5.2/plyr.css" />
<script src="https://cdn.plyr.io/3.5.2/plyr.js"></script>

</head>

<body>
	<div class="row">
		<?php 
			if(count($catchvideo) > 0){
				foreach ($catchvideo->result() as  $value) {
				?>
				<div class="col-lg-6 ">
					<div class="card">
						<div class="plyr__video-embed" id="player">
					    <iframe
					        src="<?php echo base_url("".$value->video)?>"
					        allowfullscreen
					        allowtransparency
					        allow="autoplay"
					    ></iframe>
						</div>
					</div>
				</div>

				<?php
				}
				
			}

		?>
		

	</div>
	

</body>

<script src="path/to/plyr.js"></script>
<script>
    const player = new Plyr('#player');
</script>


	