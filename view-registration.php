<?php
require_once 'config.php';

// Handle CSV export if requested
if (isset($_GET['export']) && $_GET['export'] === 'csv') {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="registrations.csv"');

    $output = fopen('php://output', 'w');
    fputcsv($output, ['S.No', 'First Name', 'Last Name', 'Email', 'Phone', 'Qualification', 'A+ Count (+2)', 'School', 'Guardian Name', 'Guardian Contact', 'Place']);

    $export_sql = "SELECT first_name, last_name, email, phone, qualification, aplus_count, school, guardian_name, guardian_contact, place FROM registrations ORDER BY id DESC";
    $export_result = $conn->query($export_sql);

    $serial = 1;
    while ($row = $export_result->fetch_assoc()) {
        fputcsv($output, array_merge([$serial++], $row));
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
<html lang="en" class="scroll-smooth">
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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="bg-gray-50 p-6 font-sans text-gray-800">

  <h1 class="text-3xl font-extrabold mb-8 text-center text-indigo-700">Global Career Carnival 2025 - Registrations</h1>

  <div class="flex flex-col lg:flex-row justify-center items-center gap-4 mb-6">
    <!-- Search Form -->
    <form method="GET" class="flex items-center space-x-2 w-full max-w-md">
      <input
        type="text"
        name="search"
        placeholder="Search by name or email..."
        value="<?= htmlspecialchars($search) ?>"
        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-indigo-500 focus:ring-2 focus:ring-indigo-400"
      />
      <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-5 py-2 rounded-md transition">
        Search
      </button>
    </form>

    <!-- Export CSV Button -->
    <form method="GET" action="">
      <input type="hidden" name="export" value="csv" />
      <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-2 rounded-md transition">
        Export CSV
      </button>
    </form>
  </div>

  <div class="overflow-x-auto bg-white rounded-lg shadow-md">
    <table class="min-w-full border-collapse text-left text-sm">
      <thead>
        <tr class="bg-indigo-600 text-white uppercase text-xs tracking-wider">
          <th class="py-3 px-4 sticky top-0 bg-indigo-600 z-10">#</th>
          <th class="py-3 px-4 sticky top-0 bg-indigo-600 z-10">First Name</th>
          <th class="py-3 px-4 sticky top-0 bg-indigo-600 z-10">Last Name</th>
          <th class="py-3 px-4 sticky top-0 bg-indigo-600 z-10">Email</th>
          <th class="py-3 px-4 sticky top-0 bg-indigo-600 z-10">Phone</th>
          <th class="py-3 px-4 sticky top-0 bg-indigo-600 z-10">Qualification</th>
          <th class="py-3 px-4 sticky top-0 bg-indigo-600 z-10">A+ Count (+2)</th>
          <th class="py-3 px-4 sticky top-0 bg-indigo-600 z-10">School</th>
          <th class="py-3 px-4 sticky top-0 bg-indigo-600 z-10">Guardian Name</th>
          <th class="py-3 px-4 sticky top-0 bg-indigo-600 z-10">Guardian Contact</th>
          <th class="py-3 px-4 sticky top-0 bg-indigo-600 z-10">Place</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
            $serial = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr class='border-b hover:bg-indigo-50 transition'>";
                echo "<td class='py-2 px-4 font-medium'>{$serial}</td>";
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
                $serial++;
            }
        } else {
            echo "<tr><td colspan='11' class='text-center py-6 text-gray-500'>No registrations found.</td></tr>";
        }
        $conn->close();
        ?>
      </tbody>
    </table>
  </div>

</body>
</html>
