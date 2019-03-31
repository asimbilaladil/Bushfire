<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
    <section class="banner-another ">
        <!-- Banner section Start-->
    </section>
     <!-- About section start-->
     <section class="about">
         <!-- container Start-->
         <div class="container">
             <div class="row">
                 <div class="col-md-12 col-12 heading">
                        <a href="<?php echo site_url('Emergency_Shelters'); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Emergency Shelters</a>
                        <a href="<?php echo site_url('Drinkable_Water'); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Drinkable Water</a>
                        <a href="<?php echo site_url('Fresh_Food'); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Fresh Food</a>
                 </div>
             </div>
       
         </div>
         <!-- container Ended-->
     </section>
     <!-- About section Ended-->        
    <!-- services section Start -->
    <section id="products">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">Drinkable Water</h2>
            <div class="part-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
               
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <figure>
                            <img src="<?php echo base_url("includes/assets/images/Web-Design.jpg") ?>" alt="Web Design" width="100%">
                        </figure>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12 col1">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                    </div>
                     <div class="col-lg-12 col-md-12 col-12">
                        <!--The div element for the map -->
                        <div id="map"></div>                        
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- services section Ended -->


<script>
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      var uluru = {lat: -25.344, lng: 131.036};
      // The map, centered at Uluru
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 4, center: uluru});
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAagQEfKTfr-TJTX-adxKcIk3hWZ6jDRy4&callback=initMap">
</script>    