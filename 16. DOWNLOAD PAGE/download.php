<!DOCTYPE html>
<html>
<head>
    <title>Download Page Example</title>
</head>
<body>
    <button id="downloadButton" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; cursor: pointer;">Download This Page</button>

    <script>
        document.getElementById("downloadButton").addEventListener("click", function() {
            // Get the current page's HTML content
            var htmlContent = document.documentElement.outerHTML;

            // Create a Blob containing the HTML content
            var blob = new Blob([htmlContent], { type: "text/html" });

            // Create a temporary URL for the Blob
            var url = URL.createObjectURL(blob);

            // Create a download link and trigger a click event
            var a = document.createElement("a");
            a.style.display = "none";
            a.href = url;
            a.download = "downloaded-page.html";
            document.body.appendChild(a);
            a.click();

            // Clean up resources
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        });
    </script>
</body>
</html>
