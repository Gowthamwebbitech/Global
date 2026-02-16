<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header-link.php' ?>
</head>

<body>

    <?php include 'header.php' ?>

    <section class="rs-breadcrumb-area rs-breadcrumb-one p-relative">
        <div class="rs-breadcrumb-bg" data-background="assets/images/new-images/about-banner.jpg"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-8 col-lg-8">
                    <div class="rs-breadcrumb-content-wrapper">
                        <div class="rs-breadcrumb-title-wrapper">
                            <h1 class="rs-breadcrumb-title">Gallery</h1>
                        </div>
                        <div class="rs-breadcrumb-menu">
                            <nav>
                                <ul>
                                    <li><span><a href="index.php">Home</a></span></li>
                                    <li><span>Gallery</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-section py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Our Gallery</h2>
            </div>
            <div class="row g-4">
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <img src="assets/images/new-images/about-2.jpg" class="img-fluid gallery-img rounded shadow" alt="">
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <img src="assets/images/new-images/gallery/1.jpg" class="img-fluid gallery-img rounded shadow" alt="">
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <img src="assets/images/new-images/gallery/2.jpg" class="img-fluid gallery-img rounded shadow" alt="">
                </div> 
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <img src="assets/images/new-images/gallery/3.jpg" class="img-fluid gallery-img rounded shadow" alt="">
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <img src="assets/images/new-images/gallery/4.jpg" class="img-fluid gallery-img rounded shadow" alt="">
                </div> 
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <img src="assets/images/new-images/gallery/5.jpg" class="img-fluid gallery-img rounded shadow" alt="">
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <img src="assets/images/new-images/gallery/6.jpg" class="img-fluid gallery-img rounded shadow" alt="">
                </div> 
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <img src="assets/images/new-images/gallery/7.jpg" class="img-fluid gallery-img rounded shadow" alt="">
                </div>
                <div class="col-6 col-md-4 col-lg-3 mb-3">
                    <img src="assets/images/new-images/gallery/8.jpg" class="img-fluid gallery-img rounded shadow" alt="">
                </div>  
            </div>
        </div>
    </section>

    <div class="modal fade" id="galleryModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 bg-dark position-relative">

                <button type="button"
                    class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3"
                    data-bs-dismiss="modal"></button>

                <div class="modal-body text-center position-relative">
                    <button id="prevBtn" class="btn btn-light position-absolute top-50 start-0 translate-middle-y ms-2"> ❮ </button>
                    <img src="" id="modalImage" class="img-fluid rounded">
                    <button id="nextBtn" class="btn btn-light position-absolute top-50 end-0 translate-middle-y me-2"> ❯ </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const galleryImages = document.querySelectorAll(".gallery-img");
            const modalElement = document.getElementById("galleryModal");
            const modalImage = document.getElementById("modalImage");
            const prevBtn = document.getElementById("prevBtn");
            const nextBtn = document.getElementById("nextBtn");

            const galleryModal = new bootstrap.Modal(modalElement);

            let currentIndex = 0;

            galleryImages.forEach((img, index) => {
                img.addEventListener("click", function() {
                    currentIndex = index;
                    updateImage();
                    galleryModal.show();
                });
            });

            function updateImage() {
                modalImage.src = galleryImages[currentIndex].src;
            }

            nextBtn.addEventListener("click", function() {
                currentIndex = (currentIndex + 1) % galleryImages.length;
                updateImage();
            });

            prevBtn.addEventListener("click", function() {
                currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
                updateImage();
            });

        });
    </script>



    <?php include 'footer.php' ?>

</body>

</html>