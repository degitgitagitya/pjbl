<div class="container">
    <div class="shadow-sm d-flex  p-3 mb-5 mt-4 bg-white rounded justify-content-center">	
    <h1> Pretest </h1>
    </div>
    <?php echo form_open('siswa/add_jawaban') ?>
    <?php echo $this->session->flashdata('err'); ?>
    <div class="form-group">
        <label class="mb-1" for="jwb1">Jawaban 1</label>
        <input class="form-control py-4" id="jwb1" type="text" name="jwb1" autofocus>
    </div>
    <div class="form-group">
        <label class="mb-1" for="jwb2">Jawaban 2</label>
        <input class="form-control py-4" id="jwb2" type="text" name="jwb2">
    </div>
    <div class="form-group">
        <label class="mb-1" for="jwb3">Jawaban 3</label>
        <input class="form-control py-4" id="jwb3" type="text" name="jwb3">
    </div>
    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
     <input type="submit" name="submit" value="Submit">
    </div>
</div>
