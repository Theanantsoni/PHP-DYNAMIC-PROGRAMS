<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Date and Time Display</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Date and Time
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="date">Today's Date :</label>
              <input type="text" class="form-control" id="date" readonly>
            </div>
            <div class="form-group">
              <label for="time">Time Now :</label>
              <input type="text" class="form-control" id="time" readonly>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // Function to update date and time fields
    function updateDateTime() {
      var now = new Date();
      var dateField = document.getElementById('date');
      var timeField = document.getElementById('time');

      // Format date as DD-MM-YYYY
      var date = ('0' + now.getDate()).slice(-2) + '-' + ('0' + (now.getMonth() + 1)).slice(-2) + '-' + now.getFullYear();

      // Format time as HH:MM:SS
      var time = ('0' + now.getHours()).slice(-2) + ':' + ('0' + now.getMinutes()).slice(-2) + ':' + ('0' + now.getSeconds()).slice(-2);

      // Update input fields
      dateField.value = date;
      timeField.value = time;
    }

    // Call the function initially
    updateDateTime();

    // Update date and time fields every second
    setInterval(updateDateTime, 1000);
  </script>
</body>
</html>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Date and Time
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="date">Today's Date :</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="date" readonly>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="bi bi-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="time">Time Now :</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="time" readonly>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="bi bi-clock"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // Function to update date and time fields
    function updateDateTime() {
      var now = new Date();
      var dateField = document.getElementById('date');
      var timeField = document.getElementById('time');

      // Format date as DD-MM-YYYY
      var date = ('0' + now.getDate()).slice(-2) + '-' + ('0' + (now.getMonth() + 1)).slice(-2) + '-' + now.getFullYear();

      // Format time as HH:MM:SS
      var time = ('0' + now.getHours()).slice(-2) + ':' + ('0' + now.getMinutes()).slice(-2) + ':' + ('0' + now.getSeconds()).slice(-2);

      // Update input fields
      dateField.value = date;
      timeField.value = time;
    }

    // Call the function initially
    updateDateTime();

    // Update date and time fields every second
    setInterval(updateDateTime, 1000);
  </script>
</body>
</html>
