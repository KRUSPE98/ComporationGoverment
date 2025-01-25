<footer class="bg-dark text-white">
    <div class="container p-4">

    <section class="">

        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <section class="mb-4 text-about">
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                      repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                      eum harum corrupti dicta, aliquam sequi voluptate quas.
                    </p>
                </section>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-md-0 text-center">
                <h5 class="text-uppercase">Contenido</h5>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <div class="media-body">
                            <i class="fas fa-square"></i>
                            <a href="#">Inicio</a>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-body">
                            <i class="fas fa-square"></i>
                            <a href="#">Nosotros</a>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-body">
                            <i class="fas fa-square"></i>
                            <a href="#">Contáctanos</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-md-0 text-center m-auto mt-0">
                {{-- <section class="mb-4"> --}}
                    <div class="row">
                        <h5 class="text-uppercase">Redes Sociales</h5>
                        <p class="p-small">Siguenos en nuestras redes sociales</p>
                    </div>

                    <a class="HOVER custom-btn btn btn-floating m-3" href="#!" role="button"
                    ><span></span><i class="fab fa-facebook-f"></i
                    ></a>

                    <a class="HOVER custom-btn btn btn-floating m-3" href="#!" role="button"
                    ><span></span><i class="fab fa-twitter"></i
                    ></a>

                    <a class="HOVER custom-btn btn btn-floating m-3" href="#!" role="button"
                    ><span></span><i class="fab fa-whatsapp"></i
                    ></a>

                    <a class="HOVER custom-btn btn btn-floating m-3" href="#!" role="button"
                    ><span></span><i class="fab fa-instagram"></i
                    ></a>

                {{-- </section> --}}
            </div>

        </div>

    </section>

    </div>

    <div class="d-flex justify-content-around align-items-center p-2 custom-final-footer" style="background-color: rgba(0, 0, 0, 0.2);">
      <span>© {{ now()->year }} Copyright: IT Soluciones</span>
      <span id="seta-content">Contenido Desarrollado por: <button type="submit" class="HOVER custom-btn btn no-border no-background"><span></span><text>© Seta Solutions</text></button></span>
    </div>

</footer>

{{-- <div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col first">
                    <h5>About Corso</h5>
                    <p class="p-small">We're passionate about teaching people how to do better SEO for their online presence</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-col second">
                    <h5>Links</h5>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="terms-conditions.html">Terms & Conditions</a></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="privacy-policy.html">Privacy Policy</a></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="article-details.html">Article Details</a></div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-col fourth">
                    <h5>Social Media</h5>
                    <p class="p-small">For news & updates follow us</p>
                    <a href="#your-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="copyright-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © {{now()->year}} <a href="#">SETA Solutions</a> - All rights reserved</p>
            </div>
        </div>
    </div>
</div> --}}
@section('custom-scripts')
    <script src="{{ asset('js/footer.js?v='.time())}}"></script>
@endsection


