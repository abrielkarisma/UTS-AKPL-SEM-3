<div class="container-fluid">
    <div class="row text-center">

        <?php foreach ($tanah as $tnh) : ?>
            <div class="card ml-5" style="width: 18rem;">
                <img src="<?php echo base_url().'/upload/' .$tnh->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $tnh->keterangan ?></h5>
                    <small><?php echo $tnh->pemilik ?></small>
                    <p class="card-text mb-1" ><?php echo $tnh->alamat ?></p>
                    <span class="text-success">Rp. <?php echo $tnh->harga ?></span>
                    <br>
                    <a href="#" class="btn btn-sm btn-primary">Tambah Ke Keranjang</a>
                    <a href="#" class="btn btn-sm btn-success">Details</a>
                 </div>
                </div>
            <?php endforeach; ?>
    </div>
</div>