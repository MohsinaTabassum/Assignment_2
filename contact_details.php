<!-- contact_details.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Contact Details</title>
</head>

<body>
    <h1>Contact Details</h1>

    <?php
    // Include the config.php file
    require_once 'config.php';

    // Perform a MySQL query to fetch all contact details from the contact-details table
    $sql = "SELECT * FROM contact_details";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Start output buffering
        ob_start();
        ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td>
                        <?= $row['id'] ?>
                    </td>
                    <td>
                        <?= $row['name'] ?>
                    </td>
                    <td>
                        <?= $row['email'] ?>
                    </td>
                    <td>
                        <?= $row['message'] ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
        <?php
        // Capture the output buffer into a variable
        $table_html = ob_get_clean();

        // Output the captured HTML
        echo $table_html;
    } else {
        echo "No contact details found.";
    }

    // Close the database connection
    $conn->close();
    ?>

    <br>
    <a href="dashboard.php">Go back to Dashboard</a>
</body>

</html>