<section id="gallery" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">今日甜點</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col" data-aos="zoom-in" data-aos-delay="100">
                <div class="image-container position-relative">
                    <img src="./images/gallery/cake1.webp" class="img-fluid rounded" alt="提拉米蘇">
                    <span class="badge bg-warning position-absolute top-0 start-0 m-2">NEW</span>
                </div>
            </div>

            <div class="col" data-aos="zoom-in" data-aos-delay="200">
                <div class="image-container position-relative">
                    <img src="./images/gallery/cake2.webp" class="img-fluid rounded" alt="草莓奶酪">
                </div>
            </div>

            <div class="col" data-aos="zoom-in" data-aos-delay="300">
                <div class="image-container position-relative">
                    <img src="./images/gallery/cake3.webp" class="img-fluid rounded" alt="檸檬塔">
                </div>
            </div>

        </div>
    </div>
</section>


<style>
    .image-container {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .image-container:hover {
        transform: scale(1.05) translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        filter: brightness(90%);
        transition: filter 0.3s ease;
    }

    .image-container:hover img {
        filter: brightness(100%);
    }
</style>