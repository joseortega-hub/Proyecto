<div class="modal fade p-md-5 p-2" id="sliderModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog sliderDiv" role="document">
        <div class="modal-content p-0 p-md-4">
            <!-- Slideshow container -->
            <div class="slideshow-container">
                <!-- Cada imagen que va a mostrar el slider-->
                <div class="mySlides ">
                    <img src="/img/restaurante/{{ $imagenes[0]->urlImg }}" style="width:100%">
                </div>

                <div class="mySlides ">
                    <img src="/img/restaurante/{{ $imagenes[1]->urlImg }}" style="width:100%">
                </div>

                <div class="mySlides ">
                    <img src="/img/restaurante/{{ $imagenes[2]->urlImg }}" style="width:100%">
                </div>

                <div class="mySlides ">
                    <img src="/img/restaurante/{{ $imagenes[3]->urlImg }}" style="width:100%">
                </div>

                <div class="mySlides ">
                    <img src="/img/restaurante/{{ $imagenes[4]->urlImg }}" style="width:100%">
                </div>

                <!-- flechas para siguiente y atras -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <!-- Circulos para ir cambiando de imagenes -->
            <div class="text-center my-3">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
            </div>
        </div>
    </div>
</div>
