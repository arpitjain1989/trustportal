<footer class="footer footer-transparent d-print-none">
        <div class="container-xl">
          <div class="row text-center align-items-center flex-row-reverse">
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item">
                  Copyright &copy; 2023
                  <a href="#" class="link-secondary">ST</a>.
                  All rights reserved.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      
      @if (Session::has('succes'))
  <script>
  iziToast.success({
    icon: 'fa-solid fa-check',
    titleSize: '20px',
    title: 'Success',
    theme: 'light',
    animateInside: true,
    drag: true,
    timeout: 9000,
    message: '{{Session::get("succes")}}',
    position: 'topRight'
  })
  </script>
  @endif
  @if (Session::has('fail'))
<script>
  iziToast.error({
    icon: 'fa-solid fa-xmark',
    titleSize: '20px',
    title: 'fail!',
    timeout: 9000,
    message: '{{Session::get("fail")}}',
    position: 'topRight'
  })
</script>
@endif