<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asesorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: none;
        z-index: 9999;
      }
      .modal-dialog {
        display: flex;
        align-items: center;
        min-height: calc(100vh - 1rem);
        margin: 0; 
        max-width: 500px; 
      }

      .modal-content {
        width: 100%; 
        border-radius: 15px; 
      }

      .modal-body {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        justify-content: center; 
        text-align: center;
        background-image: url('fotospagina/tutor3.jpg'); 
        background-repeat: no-repeat; 
        background-size: cover; 
        min-height: 500px; 
        padding: 20px; 
      }

      .modal-body .text-content {
        flex-grow: 1; 
        padding: 20px; 
      }

      .modal-body p {
        position: relative;
        margin-top: 70px;
        font-size: 30px; 
        color: white; 
      }

      .modal-footer {
        justify-content: flex-end; 
        border-top: 1px solid #dee2e6; 
      }

      .btn {
        margin-left: 10px; 
      }

    </style>
  </head>
  <body>

    <!-- Overlay element -->
    <div id="overlay"></div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg"> <!-- Adjust the size of the modal if needed -->
        <div class="modal-content">
          <div class="modal-body">
            <div class="text-content">
              <h2><p>Registrarse como asesor o usuario.</p></h2>
              <p>Regístrate como usuario premium para disfrutar de los beneficios de nuestra página o como asesor y ayuda a alguien con tus conocimientos y experiencia</p>
            </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="saveChangesBtn" style="background-color: #3fa39a;">Ver Planes</button>
              <button type="button" class="btn btn-secondary" id="goToHomeBtn">Inicio</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        // Show overlay before the modal appears
        document.getElementById('overlay').style.display = 'block';

        // Use setTimeout to show the modal after 2 seconds (adjusted for testing)
        setTimeout(function() {
          var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), { backdrop: 'static' });
          myModal.show();

          // Hide overlay after the modal is displayed
          document.getElementById('overlay').style.display = 'none';
        }, 2000);

        // Handle Save Changes button click
        document.getElementById('saveChangesBtn').addEventListener('click', function() {
          var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
          myModal.hide();
           window.location.href = 'ESPpricing.php'
        });

        // Handle Home button click
        document.getElementById('goToHomeBtn').addEventListener('click', function() {
          // Redirect to index.php
          window.location.href = 'index.php';
        });
      });
    </script>
  </body>
</html>
