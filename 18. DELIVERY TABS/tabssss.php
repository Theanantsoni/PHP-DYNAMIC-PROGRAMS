<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delivery Tabs with Next/Back</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <ul class="nav nav-tabs" id="deliveryTabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="standard-tab" data-toggle="tab" href="#standard" role="tab" aria-controls="standard" aria-selected="true">Standard Delivery</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="express-tab" data-toggle="tab" href="#express" role="tab" aria-controls="express" aria-selected="false">Express Delivery</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="overnight-tab" data-toggle="tab" href="#overnight" role="tab" aria-controls="overnight" aria-selected="false">Overnight Delivery</a>
    </li>
  </ul>
  <div class="tab-content" id="deliveryTabsContent">
    <div class="tab-pane fade show active" id="standard" role="tabpanel" aria-labelledby="standard-tab">
      <h3>Standard Delivery</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div class="tab-pane fade" id="express" role="tabpanel" aria-labelledby="express-tab">
      <h3>Express Delivery</h3>
      <p>Get your order quickly with our express delivery service.</p>
    </div>
    <div class="tab-pane fade" id="overnight" role="tabpanel" aria-labelledby="overnight-tab">
      <h3>Overnight Delivery</h3>
      <p>Your order will arrive the next day with overnight delivery.</p>
    </div>
  </div>
  <div class="mt-3">
    <button id="prevButton" class="btn btn-primary mr-3">Back</button>
    <button id="nextButton" class="btn btn-primary">Next</button>
  </div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
  // Initialize tab index
  var currentIndex = 0;
  var tabCount = $('#deliveryTabsContent .tab-pane').length;

  // Next button click event
  $('#nextButton').click(function() {
    currentIndex++;
    if (currentIndex >= tabCount) {
      currentIndex = tabCount - 1;
    }
    showTab(currentIndex);
  });

  // Previous button click event
  $('#prevButton').click(function() {
    currentIndex--;
    if (currentIndex < 0) {
      currentIndex = 0;
    }
    showTab(currentIndex);
  });

  // Show the tab with the given index
  function showTab(index) {
    $('#deliveryTabsContent .tab-pane').removeClass('show active');
    $('#deliveryTabsContent .tab-pane').eq(index).addClass('show active');
    $('#deliveryTabs .nav-link').removeClass('active');
    $('#deliveryTabs .nav-link').eq(index).addClass('active');
  }
});
</script>
</body>
</html>
