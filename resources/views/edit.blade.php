<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Project</title>
    <!--Bootstrap Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
    <h1 class="text-center mb-8">Edit Data Pegawai</h1>

    <div class="container">
        <div class="row justify-content-center">
           <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Lengkap</label>
                          <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama" value="{{ $data->nama }}">
                        </div>
                        <div class="mb-3">
                          <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                          <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                            <option selected>{{ $data->jeniskelamin }}</option>
                            <option value="cowo">cowo</option>
                            <option value="cewe">cewe</option>
                          </select>
                        </div>
                        <div class="mb-3">
                            <label for="notelpon" class="form-label">No Telpon</label>
                            <input type="number" name="notelpon" class="form-control" id="notelpon" placeholder="No Telpon" value="{{ $data->notelpon }}">
                          </div>
                          <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-warning">Edit</button>
                      </form>
                </div>
            </div>
           </div>
           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
