var ranges = $('.range-init');
var flatsCount = $('#numResults');
var tmas=['all_room','floor','rooms','price'];
var data = $('.rows_c');
flatsCount.html(data.length);

ranges.ionRangeSlider({
	type: "double",
	grid: true,
	hide_min_max: true,
	grid: false,
	force_edges: true,
	onChange: function(data){
		$('.results').addClass('active');
	},
	onFinish: function (data){
		$('.results').removeClass('active');
	}
});

function filterSearch ( data ){

	var vals_from = [];
	var vals_to = [];
	var valsCheck = [];

			for( i = 0; i < tmas.length; i++ ){

					vals_from[i] = $("#"+tmas[i]+'Range').data("from");
					vals_to[i] = $("#"+tmas[i]+'Range').data("to");
		 }

		 $('.filter__checkbox:checked').each(function() {
			 valsCheck.push($(this).val());
		});

		 var data = $('.rows_c');
		 var n=0;

		 for(i=0; i<data.length; i++){

				  if( data[i].dataset.square >= vals_from[0] && data[i].dataset.square <= vals_to[0] &&
						data[i].dataset.floor >= vals_from[1] && data[i].dataset.floor <= vals_to[1] &&
						data[i].dataset.rooms >= vals_from[2] && data[i].dataset.rooms <= vals_to[2] &&
						data[i].dataset.price >= vals_from[3] && data[i].dataset.price <= vals_to[3] &&
						(  data[i].dataset.bn == valsCheck[0] ||
							 data[i].dataset.bn == valsCheck[1] ||
							 data[i].dataset.bn == valsCheck[2] ||
							 data[i].dataset.bn == valsCheck[3] )
				 ){
		 	 data[i].style.display = 'block';
			 n++;
		 	 } else {
		 	 data[i].style.display = 'none';
		 	 }
			 // console.log(n);
			 flatsCount.html(n);
		 }
	 };

	 function filterReset () {
		 var sliders = [];

		 for( i = 0; i < tmas.length; i++ ){
			 var sliders = $("#"+tmas[i]+'Range').data("ionRangeSlider");
			 sliders.reset();
		 }
		  for(i=0; i<data.length; i++){
				data[i].style.display = 'block';
			}
			flatsCount.html(data.length);

			$('.filter__checkbox:checked').prop('checked', false);
	 };

		$('#search').on("click", function () {
			filterSearch();
		});

		$('#reset').on("click", function () {
			filterReset();

		});
