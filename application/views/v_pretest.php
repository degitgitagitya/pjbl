<?php 
    $index = 1;
?>

<div class="container">
    <h3>
        Pretest
    </h3>
    <hr>
    <form method="POST" action="<?php echo(base_url('/index.php/Pretest/addJawaban/'.$_SESSION['id_siswa']."/".$idProyek."/".$_SESSION['id_pjbl'])) ?>">
    
    <?php 
        foreach ($listPertanyaan as $data) {
            ?>
            <p>
                <span><?php echo $index++;?>.</span>
                <?php echo($data->pertanyaan)?>
            </p>
            <input name="idPertanyaan[]" type="number" hidden value="<?php echo $data->id_pertanyaan?>">
            <input name="jawaban[]" class="form-control mb-3" type="text" placeholder="Jawaban">
            <?php
        }
    ?>

    <input type="submit" class="btn btn-success">

    </form>
 
</div>
