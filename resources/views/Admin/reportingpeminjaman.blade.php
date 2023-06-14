<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .custom-container {
      padding-top: 5%;
    }

    .table-bordered thead {
      background-color: green;
      color: white;
    }

  </style>
  <title>Data Peminjaman</title>
</head>
<body>
  <div class="custom-container">
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title">Data Peminjaman</h1>
          <div class="table-responsive">
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Dana</th>
                    <th>Tujuan</th>
                    <th>Cicilan</th>
                    <th>Jatuh Tempo</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjaman as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->petani }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>Rp {{ number_format($item['dana'], 0, ',', '.') }}</td>
                    <td>{{ $item->tujuan }}</td>
                    <td>{{ $item->cicilan }}</td>
                    <td>{{ $item->jatuhtempo }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
          </div>
                <button id="print-button" class="btn btn-primary d-print-none">Print Data</button>
                <a href="/admin/reporting">
                    <button  class="btn btn-primary d-print-none">Kembali</button>
                </a>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            <script>
                document.getElementById('print-button').addEventListener('click', function() {
                    window.print();
                });
            </script>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
