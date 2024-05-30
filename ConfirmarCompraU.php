<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmar Compra</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      text-align: center;
      padding: 20px;
    }

    h2 {
      color: #333;
    }

    #confirmarCompraButton {
      background-color: #3fa39a;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 8px;
    }

    #confirmarCompraButton:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h2>Por favor, confirma la compra de este plan.</h2>
  

  <button id="confirmarCompraButton">Confirmar Compra</button>

  <script>
    document.getElementById('confirmarCompraButton').addEventListener('click', function() {
      window.close();
      window.opener.location.href = 'registraru.php';
    });
  </script>
</body>
</html>
