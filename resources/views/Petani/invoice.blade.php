<!DOCTYPE html>
<html>
<head>
  <title>Invoice</title>
  <style>
    .invoice-container {
      margin: 20px auto;
      width: 600px;
      padding: 20px;
      border: 1px solid #ccc;
    }
    .invoice-header {
      text-align: center;
    }
    .address-column {
      flex: 1;
    }
    .table-container {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    .table-container th,
    .table-container td {
      border: 1px solid #ccc;
      padding: 10px;
    }

   
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="invoice-container">
    <h3 class="invoice-header">Invoice</h3>
    <div style="display: flex;">
      <div class="address-column">
        <h5>From:</h5>
        <address>
          Farmlogs<br>
          Bandung, Jawa Barat<br>
          Phone: (123) 456-7890<br>
          Email: farmlogs@email.com
        </address>
      </div>
      <div class="address-column">
        <h5>To:</h5>
        
        <address>
        {{$invoice -> petani}}<br>
        {{$invoice -> alamat}}<br>
        Phone: {{ Auth::user()->nomor }}<br>
        Email: {{ Auth::user()->email }}

        </address>
      </div>
    </div>
    <table class="table-container">
      <thead>
        <tr>
          <th>Item</th>
          <th>Jatuh Tempo</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>ciclan</td>
          <td>{{$invoice -> jatuhtempo}}</td>
          <td>Rp. {{ number_format($invoice->dana, 0) }}</td>
        </tr>
        <tr>
          <td colspan="2" class="text-right">Subtotal:</td>
          <td>Rp. {{ number_format($invoice->dana, 0) }}</td>
        </tr>
        <tr>
          <td colspan="2" class="text-right">Bunga (2.5%):</td>
          <td>Rp. {{ number_format($invoice->dana * 0.025), 0 }}</td>
        </tr>
        <tr>
          <td colspan="2" class="text-right">Total:</td>
          <td>Rp. {{ number_format($invoice->dana + ($invoice->dana * 0.025), 0) }}</td>
        </tr>
      </tbody>
    </table>
    <br>
    <button id="print-button" class="btn btn-primary d-print-none">Print Invoice</button>
    <a href="/petani/cicilan">
        <button  class="btn btn-primary d-print-none">Kembali</button>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('print-button').addEventListener('click', function() {
            window.print();
        });
    </script>
  </div>
</body>
</html>
