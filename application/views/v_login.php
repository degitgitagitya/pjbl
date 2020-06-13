
<div class="container">
   <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card-body bg-white shadow-sm">
                <div class="d-flex p-3 justify-content-center">
                    <h3> Login Siswa </h3>
                </div>
                <form action=<?php echo base_url('index.php/Login/loginSiswa')?> method="post" >
                    <div class="form-group">
                        <label class="small mb-1" for="inputEmailAddress">Username</label>
                        <input class="form-control" id="inputEmailAddress" type="text" name="username_siswa" autofocus>
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="inputPassword">Password</label>
                        <input class="form-control" id="inputPassword" type="password" name="pswd_siswa">
                    </div>
                    <?php 
                    if(isset($err)){
                        echo('<div>'.$err.'</div>');
                    }
                    ?>
                    <input type="submit" name="submit" class="btn btn-secondary w-100 mt-3 mb-3" value="Login">
                </form>
            </div>
        </div>
   </div>
</div>
