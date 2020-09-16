<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/students">Students</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Student</li>
        </ol>
    </nav>
</div>
<div class="container container-box mt-4">
    <!-- Card -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['result']['nama']  ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data['result']['nim']  ?></h6>
                    <p class="card-text"><?= $data['result']['email']  ?></p>
                    <p class="card-text"><?= $data['result']['jurusan']  ?></p>
                    <button class="btn btn-outline-secondary" onclick="window.location.href='<?= BASEURL ?>/students'"> Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Card End -->
</div>