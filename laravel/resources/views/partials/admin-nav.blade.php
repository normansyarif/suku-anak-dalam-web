<li class="{{ Request::is('admin/home*') ? 'active' : '' }}">
  <a href="{{ route('admin.home') }}">
    <i class="nc-icon nc-bank"></i>
    <p>Beranda</p>
  </a>
</li>
<li class="{{ Request::is('admin/profil*') ? 'active' : '' }} ">
  <a href="{{ route('admin.profil') }}">
    <i class="nc-icon nc-atom"></i>
    <p>Profil</p>
  </a>
</li>
<li class="{{ Request::is('admin/sejarah*') ? 'active' : '' }} ">
  <a href="{{ route('admin.sejarah') }}">
    <i class="nc-icon nc-watch-time"></i>
    <p>Sejarah</p>
  </a>
</li>
<li class="{{ Request::is('admin/kegiatan*') ? 'active' : '' }} ">
  <a href="{{ route('admin.kegiatan') }}">
    <i class="nc-icon nc-user-run"></i>
    <p>Kegiatan</p>
  </a>
</li>
<li class="{{ Request::is('admin/editorial*') ? 'active' : '' }} ">
  <a href="{{ route('admin.editorial') }}">
    <i class="nc-icon nc-single-copy-04"></i>
    <p>Editorial</p>
  </a>
</li>
<li class="{{ Request::is('admin/galeri*') ? 'active' : '' }} ">
  <a href="{{ route('admin.galeri') }}">
    <i class="nc-icon nc-palette"></i>
    <p>Galeri</p>
  </a>
</li>
<li class="{{ Request::is('admin/mitra*') ? 'active' : '' }} ">
  <a href="{{ route('admin.mitra') }}">
    <i class="nc-icon nc-briefcase-24"></i>
    <p>Mitra Kerjasama</p>
  </a>
</li>