<style>
 .btn{
   	white-space: normal !important;
}

.card-header {
  padding: .75rem 1.25rem ;
}
h5{
    display: inline-block;
}
.headio{
    font-weight: 700;
    color:#007b5e;
}
.collapsed{
    font-weight: 400;
    color: #121212;
}
</style>



<div class="container-fluid bg-gray my-md-5" id="accordion-style-1">
	<div class="container">
		<section>
			<div class="row">
				<div class="col-12">
					<h1 class="text-green mb-4 text-center">Frequently Asked Questions</h1>
				</div>
				<div class="col-sm-12 col-lg-10 mx-auto">
				    
					<div class="accordion" id="accordionExample">
                        <?php foreach($faqs as $key => $faq){ ?>
						<div class="card">
							<a class="btn btn-block  text-left <?php echo ($key != 0) ? 'collapsed' : '' ?> headio" type="button" data-toggle="collapse" data-target="#collapse_<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse_<?php echo $key; ?>">
							<div class="card-header" id="heading_<?php echo $key; ?>">
								<h6 class="mb-0">
							  <?php echo $key+1; ?>. <?php echo $faq->faq_question; ?>
						  </h6>
							</div>
							</a>

							<div id="collapse_<?php echo $key; ?>" class="collapse <?php echo ($key == 0)?'show':'' ?> fade" aria-labelledby="heading_<?php echo $key; ?>" data-parent="#accordionExample">
								<div class="card-body">
                                <?php echo $faq->faq_answer; ?>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>	
			</div>
		</section>
	</div>
</div>