
<div class="container">
    <div class="d-flex p-3  mt-4 justify-content-center">
        <h2> Login Siswa </h2>
    </div>
    <div class="card-body">
        <form action=<?php echo base_url('index.php/Login/loginSiswa')?> method="post" >
            <div class="form-group">
                <label class="small mb-1" for="inputEmailAddress">Username</label>
                <input class="form-control py-4" id="inputEmailAddress" type="text" name="username_siswa" autofocus>
            </div>
            <div class="form-group">
                <label class="small mb-1" for="inputPassword">Password</label>
                <input class="form-control py-4" id="inputPassword" type="password" name="pswd_siswa">
            </div>
            <?php 
            if(isset($err)){
                echo('<div>'.$err.'</div>');
            }
            ?>
            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                <input type="submit" name="submit" value="Login">
            </div>
        </form>
    </div>
</div>
