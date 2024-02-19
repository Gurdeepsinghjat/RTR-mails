<!-- process_job.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $role = sanitizeInput($_POST["role"]);
    $location = sanitizeInput($_POST["location"]);

    // Specify the file path (replace with your desired file path)
    $filePath = "jobs_data.csv";

    // Prepare data
    $data = "$role,$location\n";

    // Append data to the file
    file_put_contents($filePath, $data, FILE_APPEND | LOCK_EX);

    // Redirect after successful insertion
    header("Location: job_form.html");
    exit();
}

function sanitizeInput($input) {
    // Implement your input sanitization logic here
    // For simplicity, you can adjust this based on your requirements
    return htmlspecialchars(trim($input));
}
?>
