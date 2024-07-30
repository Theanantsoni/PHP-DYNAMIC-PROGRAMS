<!DOCTYPE html>
<html>
<head>
    <title>Screenshot Button</title>
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
        }
    </style>
</head>
<body>
    <button id="screenshot-btn">Take Screenshot</button>

    <!-- Include the html2canvas library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

    <!-- Your JavaScript code for capturing the screenshot -->
    <script>
        document.getElementById("screenshot-btn").addEventListener("click", function() {
            // Capture the entire webpage
            html2canvas(document.body).then(function(canvas) {
                // Convert the canvas to an image
                var img = canvas.toDataURL("image/jpg");

                // Create a temporary link element to download the screenshot
                var link = document.createElement("a");
                link.href = img;
                link.download = "screenshot.jpg";
                link.click();
            });
        });
    </script>
</body>
</html>
