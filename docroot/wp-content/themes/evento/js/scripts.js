jQuery(document).ready(function($){
	$(".slicknav_icon").on("click", function(){
		$(".slicknav_nav").slideToggle();
		$(this).toggleClass("active");
	});

	$('.js-accordion').hide();
	$('.js-accordion:first').show();
	$('.event-schedule__list .event-schedule__item:first').addClass('active')

	$('.nav-link').click(function() {
		/* loại bỏ class active của tất cả li */
		$('.nav-link').removeClass('active');
		/* add class active của li được click */
		$(this).addClass('active');
		/* Xác định phần tử thứ n được click */
		var n = $('.nav-link').index(this);
		/* Ẩn tất cả .js-accordion */
		$('.js-accordion').hide();
		/* Hiển thị .js-accordion theo phần tử thứ n */
		$('.js-accordion:eq('+ n +')').fadeIn(300);
	});
	
	// accordion
	$('.accordion__title').click(function() {
		if ($(this).hasClass('is-show')) {
		$(this).removeClass('is-show');
		$(this).next().slideUp();
		} else {
		$('.accordion__title').removeClass('is-show');
		$('.accordion__title').next().slideUp();
		$(this).addClass('is-show');
		$(this).next().slideDown();
		}
	});

	$('.event-schedule__nav-wrap .event-schedule__list .event-schedule__item.inactive').each(function(index, el) {
		var tabID = el.id.split('-')[1];
		$('.accordion#' + tabID).hide();
	});

	$('.event-schedule__nav-wrap').delegate('.inactive', 'click', function(event) {
		var selectedTab = this.id.split('-')[1];
		// e.preventDefault();
		document.location.hash = selectedTab;
		$('.accordion:visible').fadeOut('fast', function() {
			$('.accordion#' + selectedTab).fadeIn('fast');
		});

		var $this = $(this);
		$this.removeClass('inactive').addClass("active");
		$this.siblings().addClass('inactive').removeClass('active');
	});

	$(".event-schedule__nav-wrap .event-schedule__list a").removeAttr("href");
	//$(".slicknav_menu a").removeAttr("href");

	// Js Video
	$('.videoLink').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});

	(function( $ ) {

		/**
		 * initMap
		 *
		 * Renders a Google Map onto the selected jQuery element
		 *
		 * @date    22/10/19
		 * @since   5.8.6
		 *
		 * @param   jQuery $el The jQuery element.
		 * @return  object The map instance.
		 */
		function initMap( $el ) {
		
			// Find marker elements within map.
			var $markers = $el.find('.marker');
		
			// Create gerenic map.
			var mapArgs = {
				zoom        : $el.data('zoom') || 16,
				mapTypeId   : google.maps.MapTypeId.ROADMAP
			};
			var map = new google.maps.Map( $el[0], mapArgs );
		
			// Add markers.
			map.markers = [];
			$markers.each(function(){
				initMarker( $(this), map );
			});
		
			// Center map based on markers.
			centerMap( map );
		
			// Return map instance.
			return map;
		}
		
		/**
		 * initMarker
		 *
		 * Creates a marker for the given jQuery element and map.
		 *
		 * @date    22/10/19
		 * @since   5.8.6
		 *
		 * @param   jQuery $el The jQuery element.
		 * @param   object The map instance.
		 * @return  object The marker instance.
		 */
		function initMarker( $marker, map ) {
		
			// Get position from marker.
			var lat = $marker.data('lat');
			var lng = $marker.data('lng');
			var latLng = {
				lat: parseFloat( lat ),
				lng: parseFloat( lng )
			};
		
			// Create marker instance.
			var marker = new google.maps.Marker({
				position : latLng,
				map: map
			});
		
			// Append to reference for later use.
			map.markers.push( marker );
		
			// If marker contains HTML, add it to an infoWindow.
			if( $marker.html() ){
		
				// Create info window.
				var infowindow = new google.maps.InfoWindow({
					content: $marker.html()
				});
		
				// Show info window when marker is clicked.
				google.maps.event.addListener(marker, 'click', function() {
					infowindow.open( map, marker );
				});
			}
		}
		
		/**
		 * centerMap
		 *
		 * Centers the map showing all markers in view.
		 *
		 * @date    22/10/19
		 * @since   5.8.6
		 *
		 * @param   object The map instance.
		 * @return  void
		 */
		function centerMap( map ) {
		
			// Create map boundaries from all map markers.
			var bounds = new google.maps.LatLngBounds();
			map.markers.forEach(function( marker ){
				bounds.extend({
					lat: marker.position.lat(),
					lng: marker.position.lng()
				});
			});
		
			// Case: Single marker.
			if( map.markers.length == 1 ){
				map.setCenter( bounds.getCenter() );
		
			// Case: Multiple markers.
			} else{
				map.fitBounds( bounds );
			}
		}
		
		// Render maps on page load.
		$(document).ready(function(){
			$('.acf-map').each(function(){
				var map = initMap( $(this) );
			});
		});
		
	}) (jQuery);
});
