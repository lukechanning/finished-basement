<!-- Let's add the Owl Carousel -->
<script src="/wp-content/themes/finished-basement/assets/components/owl.carousel/dist/owl.carousel.min.js"></script>
<script type="text/javascript">
    	jQuery('.owl-carousel').owlCarousel({
            loop:true,
            items: 1,
            center: true,
            margin:10
        });	
       jQuery('.owl-carousel-properties').owlCarousel({
            items: 4,
            margin:20,
            nav:true,
            loop: true,
            dots: false,
            lazyLoad: true,
                responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:4,
                    nav:true,
                }
            }
        });	 
</script>