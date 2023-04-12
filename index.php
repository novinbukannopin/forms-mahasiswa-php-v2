<?php
include("developers.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body class="bg-light bg-gradient">
  <div class="container my-5">
    <div class="col-sm-12 col-lg-10 col-md-8 mx-auto">
      <div class="card border-0 mb-3 p-3">
        <div class="row">
          <div class="col-6">
            <a href="" class="text-decoration-none text-success">Forms</a>
          </div>
          <div class="col-6">
            <a href="" class="text-decoration-none text-success">Tabel</a>
          </div>
        </div>
      </div>
      <div class="card border-0">
        <div class="card-header bg-success p-3">
          <h5 class="card-title text-white">Form Pendaftaran Siswa</h5>
        </div>
        <div class="card-body ">
          <form method="post" action="conn.php" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="txtname" name="txtname" />
            </div>
            <div class="mb-3">
              <label for="ttl" class="form-label">Tempat / Tanggal Lahir</label>
              <div class="row">
                <div class="col-6">
                  <input type="text" class="form-control" id="tempat_ttl" name="tempat_ttl" />
                </div>
                <div class="col-6">
                  <input type="date" class="form-control" id="tanggal_ttl" name="tanggal_ttl" />
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="agama" class="form-label">Agama</label>
              <select name="txtagama" id="txtagama" class="form-select">
                <option selected>Open to select agama</option>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="budha">Budha</option>
                <option value="Hindu">Hindu</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea id="txtalamat" name="txtalamat" cols="30" rows="3" class="form-control"></textarea>
            </div>
            <div class="mb-3">
              <label for="number" class="form-label">No. HP</label>
              <input type="tel" id="phone" name="phone" pattern="[6-9]{1}[0-9]{12-15}" title="Gunakan 62" class="form-control">
            </div>
            <div class="mb-3">
              <label for="radiocheck" class="form-label">Jenis Kelamin</label>
              <div class="row">
                <div class="w-auto">
                  <div class="form-check">
                    <input type="radio" class="form-check-input" name="radiocheck" id="male" value="male" />
                    <label for="male" class="form-check-label">Laki-laki</label>
                  </div>
                </div>
                <div class="w-auto">
                  <div class="form-check">
                    <input type="radio" class="form-check-input" name="radiocheck" id="female" value="female" />
                    <label for="female" class="form-check-label">Perempuan</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="hobischeck" class="form-label">Hobi</label>
              <div class="row">
                <div class="w-auto">
                  <input type="checkbox" class="form-check-input" name="hobischeck[]" id="membaca" value="membaca" />
                  <label for="membaca" class="form-check-label">Membaca</label>
                </div>
                <div class="w-auto">
                  <input type="checkbox" class="form-check-input" name="hobischeck[]" id="menulis" value="menulis" />
                  <label for="menulis" class="form-check-label">Menulis</label>
                </div>
                <div class="w-auto">
                  <input type="checkbox" class="form-check-input" name="hobischeck[]" id="berenang" value="berenang" />
                  <label for="berenang" class="form-check-label">Berenang</label>
                </div>
              </div>
            </div>
            <div>
              <label for="" class="form-label">Pas Foto</label>
              <input type="file" class="form-control" name="uploadFile" value="" />
            </div>
            <input type="submit" class="btn btn-primary pull-right mt-4" name="process" id="submitBtn" />
          </form>
        </div>
      </div>
      <div class="col-sm-12 col-lg-10 col-md-8 mt-5 w-auto">
        <table class="table table-striped table-bordered">
          <thead class="">
            <tr>
              <th scope="col" rowspan="2" class="align-middle text-center justify-content-center">
                Name
              </th>
              <th scope="col" colspan="2" class="text-center">Lahir</th>
              <th scope="col" rowspan="2" class="align-middle text-center">
                No. Telp
              </th>
              <th scope="col" rowspan="2" class="align-middle text-center">
                Agama
              </th>
              <th scope="col" rowspan="2" class="align-middle text-center">Jenis Kelamin</th>
              <th scope="col" rowspan="2" class="align-middle text-center">Hobi</th>
              <th scope="col" rowspan="2" class="align-middle text-center">Foto</th>
              <th scope="col" colspan="2" rowspan="2" class="align-middle text-center">Action</th>
            </tr>
            <tr>
              <th scope="col">Tempat</th>
              <th scope="col">Tanggal</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (is_array($fetchData)) {
              $sn = 1;
              foreach ($fetchData as $data) {
            ?>
                <tr class="align-middle">
                  <td scope="row" class="text-center"><?php echo $data['email'] ?? ''; ?></td>
                  <td class=""><?php echo $data['tempat_lahir'] ?? ''; ?></td>
                  <td class=""><?php echo $data['tanggal_lahir'] ?? ''; ?></td>
                  <td class="text-center"><?php echo $data['no_hp'] ?? ''; ?></td>
                  <td class="text-center">
                    <?php
                    if (
                      $data['agama'] == "Open to select agama"
                    ) {
                      echo "Tidak Beragama";
                    } else {
                      echo $data['agama'];
                    }
                    ?>
                  </td>
                  <td class="text-center"><?php echo $data['jenis_kel'] ?? ''; ?></td>
                  <td class="text-center"><?php echo $data['hobi'] ?? ''; ?></td>
                  <td class="text-center">
                    <img src="./images/<?php echo $data['foto']; ?>" class="w-50" alt="">
                  </td>
                  <td class="text-center">
                    <button class="btn btn-warning">Edit</button>
                  </td>
                  <td class="text-center">
                    <button class="btn btn-danger ">Delete</button>
                  </td>
                </tr>
              <?php
                $sn++;
              }
            } else { ?>
            <?php echo "data kosong";
            } ?>
          </tbody>
        </table>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>