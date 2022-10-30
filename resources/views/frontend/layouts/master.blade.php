<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    @include('frontend.partials.header')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Taher Mukadam</h1>
            <p>I'm <span class="typed" data-typed-items="Engineer,Developer, Freelancer, Photographer"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        @yield("content")

    </main><!-- End #main -->

    @include('frontend.partials.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('frontend.partials.scripts')

</body>

</html>