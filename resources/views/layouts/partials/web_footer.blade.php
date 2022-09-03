<footer id="site-footer" class="site-footer">
  <div class="footer-bottom">
      <div class="container">
          <div class="row">
              <div class="col-md-3 col-6">
                  {{-- <h3 class="company-title">{{ $content->name }}</h3> --}}
                  <h4>{{ $content->name }}</h4>
                  <div class="about-text">{!! Str::words($content->about, 25, '') !!}</div>
              </div>
              <div class="col-md-3 col-6">
                  <h4>Company Address</h4>
                  <ul class="address">
                      <li>{{ $content->address }}</li>
                      <li><b>Phone:</b> <a href="tel:{{ $content->phone }}">{{ $content->phone }}</a></li>
                      <li><b>Email:</b> <a href="mailto:{{ $content->email }}">{{ $content->email }}</a></li>
                      <li></li>
                  </ul>
              </div>
              <div class="col-md-3 col-6">
                  <h4>Follow Us</h4>
                  <ul class="link">
                      <li><a href="{{ $content->facebook }}" target="_blank"><i class="fab fa-facebook-square me-2"></i><span>Facebook</span></a></li>
                      <li><a href="{{ $content->youtube }}" target="_blank"><i class="fab fa-youtube-square me-2"></i><span>Youtube</span></a></li>
                      <li><a href="{{ $content->instagram }}" target="_blank"><i class="fab fa-instagram-square me-2"></i><span>Instagram</span></a></li>
                      <li><a href="{{ $content->linkedin }}" target="_blank"><i class="fab fa-linkedin me-2"></i><span>LinkedIn</span></a></li>
                  </ul>
              </div>
              <div class="col-md-3 col-6">
                  <h4 class="map-title">Location on Map</h4>
                  <iframe src="{{ $map->link }}" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
          </div>
      </div>
  </div>
  {{-- <div class="footer-end">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-12">
                  <div class="copyright">
                      <p>&copy; Copyright 2022, All right reserved.</p>
                  </div>
              </div>
              <div class="col-md-6 col-12">
                  <div class="developed">
                      <p>Designed & Developed By <a href="https://www.linktechbd.com" target="_blank">Link Up Technology Ltd.</a></p>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}
</footer>