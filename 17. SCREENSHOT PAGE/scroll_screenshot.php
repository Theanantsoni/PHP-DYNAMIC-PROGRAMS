<!DOCTYPE html>
<html>
<head>
    <title>Scrolling Screenshot Button</title>
    <style>
        /* Define some basic styles */
        body {
            font-family: Arial, sans-serif;
        }
        #screenshot-btn {
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <button id="screenshot-btn">Capture Scrolling Screenshot</button>

    <!-- Include the html2canvas library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

    <!-- Your JavaScript code for capturing and downloading the scrolling screenshot -->
    <script>
        document.getElementById("screenshot-btn").addEventListener("click", function() {
            html2canvas(document.body, {
                scrollY: -window.scrollY, // Capture entire page even if scrolled
            }).then(function(canvas) {
                var screenshot = canvas.toDataURL("image/png");

                // Create a temporary link element for download
                var downloadLink = document.createElement("a");
                downloadLink.href = screenshot;
                downloadLink.download = "scrolling_screenshot.png";
                downloadLink.style.display = "none";
                document.body.appendChild(downloadLink);

                // Trigger the download
                downloadLink.click();

                // Clean up the link element
                document.body.removeChild(downloadLink);
            });
        });
    </script>
</body>
</html>
