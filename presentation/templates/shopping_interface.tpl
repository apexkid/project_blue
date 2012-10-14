{*smarty*}

{load_presentation_object filename="shopping_interface" assign="obj"}


<div class="container">
    <div class="row-fluid">
		<div class="span3" >
			<div class="span3 clearfix" id="navbar"> {include file=$obj->dCell} </div>
			<div class="span3 id="featured 1" clearfix"></div>
			<div class="span3 id="featured 2" clearfix"></div>
			<div class="span3 id="featured 3" clearfix"></div>
		</div>
		
		<div class="span8">
			<div class="span8" id="slider">
				<div id="myCarousel" class="carousel">
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="active item"><img src="images/featured_on_slider/1.jpg" alt=""></img></div>
						<div class="item"><img src="images/featured_on_slider/2.jpg" alt=""></img></div>
					</div>
				
					<!-- Carousel nav -->
					<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div> <hr/>
			</div>
			
			<div class="span8" id="bestsellers">
				{include file=$obj->mContentsCell} <hr/>
			</div>

			<div class="span8" id="supersavers"><hr/> </div>
			<div class="span8" id="latest_arrivals"><hr/> </div>
			<div class="span8"><hr/></div>
		</div>
	</div>
</div>

    </div> <!-- /container -->
</body>
</html>