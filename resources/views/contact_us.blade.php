<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                
            </div>
            <div class="col-12">
                <!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Avete domande? Non esitate a contattarci direttamente. Il nostro team tornerà da te nel giro di poche ore per aiutarti.</p>

    <div class="row shadow p-4">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="{{route('invio_mail')}}" method="POST">
                @csrf
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your name">
                           
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0 ">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                           
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12 mt-3">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Description"></textarea>
                           
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class=" text-md-left mt-3 ">
                    <button type="submit" class="btn btn-outline-dark">Contattaci </button>
                </div>
                <div class="status"></div>
            </div>

            </form>

        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <span><i class="bi bi-geo-alt-fill fs-3"></i></span>
                    <p>Melfi ,  (PZ) 85025, IT</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <span><i class="bi bi-telephone-fill fs-3"></i></span>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <span><i class="bi bi-envelope-fill fs-3"></i></span>
                    <p>prova@gmail.com </p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

            </div>
        </div>
    </div>

</x-layout>