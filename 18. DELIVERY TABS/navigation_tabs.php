<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Your Title Here</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <section class="design-process-section" id="process-tab">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!-- Design process steps -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs process-model more-icon-process" role="tablist">
            <li role="presentation" class="active">
              <a href="#discover" aria-controls="discover" role="tab" data-toggle="tab">
                <i class="fa fa-search" aria-hidden="true"></i>
                <p>Discover</p>
              </a>
            </li>
            <li role="presentation">
              <a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab">
                <i class="fa fa-send-o" aria-hidden="true"></i>
                <p>Strategy</p>
              </a>
            </li>
            <li role="presentation">
              <a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab">
                <i class="fa fa-qrcode" aria-hidden="true"></i>
                <p>Optimization</p>
              </a>
            </li>
            <li role="presentation">
              <a href="#content" aria-controls="content" role="tab" data-toggle="tab">
                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                <p>Content</p>
              </a>
            </li>
            <li role="presentation">
              <a href="#reporting" aria-controls="reporting" role="tab" data-toggle="tab">
                <i class="fa fa-clipboard" aria-hidden="true"></i>
                <p>Reporting</p>
              </a>
            </li>
          </ul>
          <!-- End design process steps -->
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="discover">
              <div class="design-process-content">
                <h3 class="semi-bold">Discovery</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="strategy">
              <div class="design-process-content">
                <h3 class="semi-bold">Strategy</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="optimization">
              <div class="design-process-content">
                <h3 class="semi-bold">Optimization</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="content">
              <div class="design-process-content">
                <h3 class="semi-bold">Content</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="reporting">
              <div class="design-process-content">
                <h3>Reporting</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
              </div>
            </div>
          </div>
          <!-- Back and Next buttons -->
          <div class="mt-3">
            <button class="btn btn-primary" id="backButton" disabled>Back</button>
            <button class="btn btn-primary" id="nextButton">Next</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- JavaScript libraries -->
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function() {
      var currentTab = 0;
      var $tabs = $('.nav-tabs > li');
      var $backButton = $('#backButton');
      var $nextButton = $('#nextButton');
      
      // Function to update the buttons based on the current tab
      function updateButtons() {
        if (currentTab === 0) {
          $backButton.prop('disabled', true);
        } else {
          $backButton.prop('disabled', false);
        }
        
        if (currentTab === $tabs.length - 1) {
          $nextButton.text('Finish');
        } else {
          $nextButton.text('Next');
        }
      }
      
      // Initialize the buttons
      updateButtons();
      
      // Back button click handler
      $backButton.click(function() {
        if (currentTab > 0) {
          currentTab--;
          $tabs.eq(currentTab).find('a').tab('show');
          updateButtons();
        }
      });
      
      // Next button click handler
      $nextButton.click(function() {
        if (currentTab < $tabs.length - 1) {
          currentTab++;
          $tabs.eq(currentTab).find('a').tab('show');
          updateButtons();
        } else {
          // Handle finish button action here
          // For example, submit a form or perform some final action
          alert('Process completed!');
        }
      });
    });
  </script>
</body>
</html>
