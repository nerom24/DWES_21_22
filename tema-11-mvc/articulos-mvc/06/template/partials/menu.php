<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="<?= URL ?>index">GESBANK MVC</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="<?= URL ?>index">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>

        </div>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
           
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                <li class="nav-item"><a href="<?= URL ?>login" class="nav-link active">Login</a></li>
            </ul>
        </div>
      </div>
    </div>
</nav>
