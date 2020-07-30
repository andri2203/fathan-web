<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fathan MC</title>
  <!-- Boostrap -->
  <link rel="stylesheet" href="/src/css/bootstrap.min.css" />
  <!-- Bootstrap Datepicker -->
  <!-- Fontawsome -->
  <link rel="stylesheet" href="/dist/fontawesome-free/css/all.min.css" />
  <!--  -->
  <link rel="stylesheet" href="/src/css/style.css" />
  <link rel="stylesheet" href="/dist/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="/dist/timepicker/jquery.timepicker.min.css">
  <link rel="stylesheet" href="/dist/aos/css/aos.css">
</head>

<body data-spy="scroll" data-target=".fixed-top">
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600">
      <a class="navbar-brand" href="/">
        <span class="text-uppercase font-weight-bold">
          Fathan's <span class="text-danger">MC</span>
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item font-weight-bold">
            <a class="nav-link page-scroll" href="#header">Beranda</a>
          </li>
          <li class="nav-item font-weight-bolder">
            <a class="nav-link page-scroll" href="#tentang">Tentang</a>
          </li>
          <li class="nav-item font-weight-bold">
            <a class="nav-link page-scroll" href="#mc">Pembawa Acara</a>
          </li>
          <li class="nav-item font-weight-bold">
            <a class="nav-link page-scroll" href="#peringkat">Peringkat MC</a>
          </li>
          <li class="nav-item font-weight-bold">
            <a class="nav-link page-scroll" href="#kontak">Kontak</a>
          </li>
          <?php if ($session->has('id')) : ?>
            <li class="nav-item font-weight-bold account">
              <a class="nav-link" href=" <?= $session->route ?>">
                <?= $session->name ?>
              </a>
            </li>
          <?php else : ?>
            <li class="nav-item font-weight-bold signin">
              <a class="nav-link" href="/login">
                Masuk
              </a>
            </li>
            <li class="nav-item font-weight-bold signup">
              <a class="nav-link" href="/register">
                Daftar
              </a>
            </li>
          <?php endif ?>
          <li class="nav-item">
            <a href="https://wa.me/+6285362367044" class="nav-link" target="_blank" title="Whatsapp : +62 853-6236-7044"><i class="fab fa-whatsapp fa-fw"></i></a>
          </li>
          <li class="nav-item">
            <a href="https://www.instagram.com/muliafathan" class="nav-link" target="_blank" title="Instagram : @muliafathan"><i class="fab fa-instagram fa-fw"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Header Start -->
  <header id="header" class="display">
    <img src="/src/images/background.jpg" alt="" srcset="" />
    <div class="ex-header" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
      <div class="container">
        <div class="row">
          <div class="col-md-4 box-form-search">
            <h2 class="font-weight-bolder text-white mb-3">
              Cari MC yang Tersedia:
            </h2>
            <form action="/booking" role="form">
              <input type="text" value="event" name="type" hidden>
              <div class="form-box">
                <select name="search" id="jenis_acara" class="control" required>
                  <option value="">Jenis Acara Kamu...</option>
                  <?php foreach ($jenis_acara as $ja) : ?>
                    <option value="<?= $ja['id_jenis_acara'] ?>"><?= $ja['jenis_acara'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-box">
                <input type="text" name="date" id="date" class="control" placeholder="Tanggal Acara Kamu..." required />
              </div>
              <div class="form-box">
                <input type="text" name="start" id="start" class="control" placeholder="Waktu Mulai..." required />
              </div>
              <div class="form-box">
                <input type="text" name="end" id="end" class="control" placeholder="Waktu Akhir..." required />
              </div>
              <button type="submit" class="btn btn-danger w-100">
                <i class="fa fa-search fa-fh mr-2"></i>Cari
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->

  <!-- Main Content -->
  <section id="tentang" class="display content white">
    <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
      <h3 class="text-center">Tentang</h3>
    </div>
  </section>

  <section id="mc" class="display content black">
    <div class="container text-center" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
      <h3 class="text-center mb-1">Pembawa Acara</h3>
      <p class="text-center mb-2">12 Pembawa Rekomendasi dari kami</p>
      <hr class="mb-4 border-secondary">
      <div class="row">
        <?php
        $i = 1;
        $fade = 100;
        foreach ($mc as $row) : ?>
          <div class="col-md-2 col-sm-3 mb-4" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="<?= 1000 + ($fade * $i++) ?>">
            <div class="card bg-dark border-secondary">
              <?php if ($row['image'] == '') : ?>
                <img src="/src/images/default.jpg" class="card-img-top">
              <?php else : ?>
                <img src="/uploads/<?= $row['id_mc'] . '/' . $row['image'] ?>" class="card-img-top">
              <?php endif ?>
              <div class="card-body px-2 py-2">
                <h6 class="card-title mb-1"><?= $row['name'] ?></h6>
                <p class="card-text small text-justify">
                  <?php for ($j = 0; $j < count($row['promosi']); $j++) :
                    $data = $row['promosi'][$j];
                  ?>
                    <span class="badge" style="background-color: <?= $data['kode_warna'] ?>;"><?= $data['jenis_acara'] ?></span>
                  <?php endfor ?>
                </p>
              </div>
              <div class="card-footer p-0 text-center">
                <a href="/booking?mc=<?= $row['users_id'] ?>" class="btn btn-success w-100 p-1">BOOKING</a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <hr class="mt-0 border-secondary">
      <div class="row justify-content-center pb-3">
        <a href="/booking" class="btn btn-primary col-2">Lihat Semua</a>
      </div>
    </div>
    </div>
  </section>

  <section id="peringkat" class="display content white">
    <div class="container my-auto" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
      <h3 class="text-center mb-4">Peringkat MC </h3>
      <p class="small text-center">7 Top MC berdasarkan Total Acara dan Total Jam Acara yang Dibawakan</p>
      <hr>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama MC</th>
            <th>Total Acara</th>
            <th>Total Jam Acara</th>
            <th colspan="2">Total Peserta</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($peringkat_mc as $data) : ?>
            <tr data-aos="fade-left" data-aos-easing="easingIn" data-aos-duration="<?= 700 + (100 * $i) ?>">
              <td width="50"><?= $i++ ?></td>
              <td><?= $data['name'] ?></td>
              <td width="200"><?= $data['acara'] ?> Acara</td>
              <td width="200"><?= $data['jam'] ?> Jam</td>
              <td width="200"><?= $data['peserta'] ?> Orang</td>
              <td width="100"><a href="/booking?mc=<?= $data['users_id'] ?>" class="btn btn-sm btn-success w-100 p-1">BOOKING</a></td>
            </tr>
            <?php endforeach;
          if (count($peringkat_mc) != 7) :
            for ($j = count($peringkat_mc) + 1; $j <= 7; $j++) : ?>
              <tr data-aos="fade-left" data-aos-easing="easingIn" data-aos-duration="<?= 700 + (100 * $j) ?>">
                <td width="50"><?= $j ?></td>
                <td> - </td>
                <td width="200">0 Acara</td>
                <td width="200">0 Jam</td>
                <td width="200">0 Orang</td>
                <td width="100" class="text-center"> - </td>
              </tr>
          <?php endfor;
          endif; ?>
        </tbody>
      </table>
    </div>
  </section>

  <section id="kontak" class="display content black">
    <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
      <h3 class="text-center mb-5">Hubungi Kami</h3>
      <div class="row justify-content-around">
        <div class="col-md-5 col-sm-6 col-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="800">
          <div class="card bg-dark">
            <div class="card-body text-center">
              <i class="fab fa-whatsapp fa-5x"></i>
              <i class="fas fa-phone fa-4x ml-4"></i>
              <h3 class="card-title mt-2 mb-4">Whatsapp</h3>
              <h5 class="card-text"><a href="https://wa.me/+6285362367044" class="card-link" target="_blank" title="Whatsapp : +62 853-6236-7044">+62 853-6236-7044</a></h5>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-sm-6 col-12" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
          <div class="card bg-dark">
            <div class="card-body text-center">
              <i class="fab fa-instagram fa-5x"></i>
              <h3 class="card-title mb-4">Instagram</h3>
              <h5 class="card-text">
                <a href="https://www.instagram.com/muliafathan" class="card-link" target="_blank" title="Instagram : @muliafathan">@muliafathan</a>
                <a href="https://www.instagram.com/mc_fathan_bilingual" class="card-link" target="_blank" title="Instagram : @mc_fathan_bilingual">@mc_fathan_bilingual</a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Main Content -->

  <!-- Footer -->
  <footer class="footer mt-auto py-2 px-3">
    <div class="container">
      &copy; All Right Reserved
    </div>
  </footer>
  <!-- Footer -->

  <!-- Script -->
  <script src="/src/js/main.bundle.js"></script>
  <!-- date-range-picker -->
  <script src="/dist/aos/js/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>