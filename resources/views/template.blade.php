<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
    </style>
  </head>
  <body>
      <div>
        <header class="container d-flex justify-content-between py-2">
          <section>
            Dharan-1 Purano, Bazar
          </section>
          <section>
            <a class="text-decoration-none text-black-50 px-1" href="" >Event</a>
            <a class="text-decoration-none text-black-50 px-1" href="">Blog</a>
            <a class="text-decoration-none text-black-50 px-1" href="">Carrer</a>
            <a class="text-decoration-none text-black-50 px-1" href="">Contact</a>
          </section>
        </header>
          <nav>
            {{-- including navbar --}}
            @include('frontend.navbar')
          </nav>
          <main>
              {{-- Creating a place to store --}}
              @yield('body')
          </main>
          <footer class="bg-dark text-white py-2">
            <div class="row container">
              <div class="col-md-4">
                <h4>ABOUT US</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nulla quae nobis beatae natus esse explicabo eum vero perferendis iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus fugit molestias culpa voluptate 
                </p>
              </div>
              <div class="col-md-4">
                <h4>QUICK LINKS</h4>
                <ul>
                  <li>Facebook</li>
                  <li>Twitter</li>
                  <li>Facebook</li>
                  <li>Twitter</li>
                </ul>
              </div>
              <div class="col-md-4">
                <h4>QUICK LINKS</h4>
                <ul>
                  <li>Facebook</li>
                  <li>Twitter</li>
                  <li>Facebook</li>
                  <li>Twitter</li>
                </ul>
              </div>
            </div>
          </footer>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  </body>
</html>