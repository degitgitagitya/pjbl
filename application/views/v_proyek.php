<div class="container">
    <h3>
        Daftar Proyek
    </h3>
    <hr>
    <div class="d-flex flex-wrap">
        <?php 
            if (isset($listProyek)){
                foreach ($listProyek as $data) {
                    ?>
                    <div class="w-25 p-2">
                        <div class="shadow-sm bg-white">
                            <h5 class="font-weight-bold px-3 pt-3 pb-2">
                                <?php echo $data->nama_proyek ?>
                            </h5>
                            
                            <img src="https://www.scnsoft.com/blog-pictures/software-development-outsourcing/plan-your-project-with-your-software-development-methodology.png" class="img-fluid" alt="img-proyek">

                            <div class="mt-3 px-3 pb-3">
                                <?php echo $data->desk_proyek ?>
                            </div>
                            <div class="px-3 pb-3">
                                <a href="<?php echo base_url("index.php/Pretest/getPertanyaanByProyek/".$data->id_proyek)?>" class="btn btn-secondary w-100 text-white">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
    </div>
</div>