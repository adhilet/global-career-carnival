<?php
require_once 'config.php';

// Handle CSV export if requested
if (isset($_GET['export']) && $_GET['export'] === 'csv') {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="registrations.csv"');

    $output = fopen('php://output', 'w');
    fputcsv($output, ['First Name', 'Last Name', 'Email', 'Phone', 'Qualification', 'School', 'Guardian Name', 'Guardian Contact', 'Place', 'A+ Count']);

    $export_sql = "SELECT first_name, last_name, email, phone, qualification, school, guardian_name, guardian_contact, place, aplus_count FROM registrations ORDER BY id DESC";
    $export_result = $conn->query($export_sql);

    while ($row = $export_result->fetch_assoc()) {
        fputcsv($output, $row);
    }
    fclose($output);
    exit;
}

// Handle search query
$search = '';
if (!empty($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $sql = "SELECT first_name, last_name, email, phone, qualification, school, guardian_name, guardian_contact, place, aplus_count
            FROM registrations
            WHERE first_name LIKE '%$search%'
               OR last_name LIKE '%$search%'
               OR email LIKE '%$search%'
            ORDER BY id DESC";
} else {
    $sql = "SELECT first_name, last_name, email, phone, qualification, school, guardian_name, guardian_contact, place, aplus_count FROM registrations ORDER BY id DESC";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registrations List</title>
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/site.webmanifest">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="bg-gray-100 p-6">

  <h1 class="text-3xl font-bold mb-6 text-center">Global Career Carnival 2025 - Registrations</h1>

  <div class="flex justify-between mb-4">
    <!-- Search Form -->
    <form method="GET" class="flex space-x-2">
      <input
        type="text"
        name="search"
        placeholder="Search by name or email..."
        value="<?= htmlspecialchars($search) ?>"
        class="border border-gray-300 rounded px-3 py-1 focus:outline-indigo-500"
      />
      <button type="submit" class="bg-indigo-600 text-white px-4 rounded hover:bg-indigo-700">Search</button>
    </form>

    <!-- Export CSV Button -->
    <form method="GET" action="" class="">
      <input type="hidden" name="export" value="csv" />
      <button type="submit" class="bg-green-600 text-white px-4 rounded hover:bg-green-700">
        Export CSV
      </button>
    </form>
  </div>

  <div class="overflow-x-auto">
    <table class="min-w-full bg-white rounded shadow-md">
      <thead>
        <tr class="bg-indigo-600 text-white text-left">
          <th class="py-2 px-4">First Name</th>
          <th class="py-2 px-4">Last Name</th>
          <th class="py-2 px-4">Email</th>
          <th class="py-2 px-4">Phone</th>
          <th class="py-2 px-4">Qualification</th>
          <th class="py-2 px-4">A+ Count (+2)</th>
          <th class="py-2 px-4">School</th>
          <th class="py-2 px-4">Guardian Name</th>
          <th class="py-2 px-4">Guardian Contact</th>
          <th class="py-2 px-4">Place</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<tr class='border-b hover:bg-indigo-50'>";
            echo "<td class='py-2 px-4'>{$row['first_name']}</td>";
            echo "<td class='py-2 px-4'>{$row['last_name']}</td>";
            echo "<td class='py-2 px-4'>{$row['email']}</td>";
            echo "<td class='py-2 px-4'>{$row['phone']}</td>";
            echo "<td class='py-2 px-4'>{$row['qualification']}</td>";
            echo "<td class='py-2 px-4'>{$row['aplus_count']}</td>";
            echo "<td class='py-2 px-4'>{$row['school']}</td>";
            echo "<td class='py-2 px-4'>{$row['guardian_name']}</td>";
            echo "<td class='py-2 px-4'>{$row['guardian_contact']}</td>";
            echo "<td class='py-2 px-4'>{$row['place']}</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='10' class='text-center py-4'>No registrations found.</td></tr>";
        }
        $conn->close();
        ?>
      </tbody>
    </table>
  </div>

</body>
</html>
