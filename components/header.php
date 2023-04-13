<nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-4 pb-4 pr-5 pl-5">
        <a class="navbar-brand d-flex" href="./"> <img style="width:30px;" src="<?= $siteLogo ?>" alt=""> <?= $siteTitle ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($page == 'home') echo 'active' ?>">
                    <a class="nav-link" href="./?page=home">Home </a>
                </li>
                <li class="nav-item <?php if($page == 'products') echo 'active' ?>">
                    <a class="nav-link" href="./?page=products">Products</a>
                </li>
                <li class="nav-item <?php if($page == 'price') echo 'active' ?>">
                    <a class="nav-link" href="./?page=price">Price</a>
                </li>
                <li class="nav-item <?php if($page == 'about') echo 'active' ?>">
                    <a class="nav-link" href="./?page=about">About Us</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0 ml-auto">
                <button type="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn btn-outline-info my-2 my-sm-0 pr-3">Sign Up</button>

                <div id="id01" class="modal">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <form class="modal-content" action="/action_page.php">
                        <div class="container">
                            <h1>Sign Up</h1>
                            <br>
                            <p>Please fill in this form to create an account.</p>
                            <hr>
                            <input type="text" placeholder="Enter Email" name="email" required>

                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>


                            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                            <div class="clearfix">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                <button type="submit" name="save" class="signupbtn">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>

            </form>
        </div>
    </nav>