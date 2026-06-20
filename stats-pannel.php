<?php
// stats-panel.php
$files = [
    'total'   => 'total-visits.json',
    'daily'   => 'daily-visits.json',
    'weekly'  => 'weekly-visits.json',
    'monthly' => 'monthly-visits.json',
];

$data = [];
foreach ($files as $key => $file) {
    $data[$key] = file_exists($file) ? json_decode(file_get_contents($file), true) : null;
}

/* -------------------------------------------------
   Helper to render a table from $records
   ------------------------------------------------- */
function renderTable(string $title, ?array $records): void {
    if (!$records) {
        echo "<p><strong>$title</strong>: no data yet.</p>\n";
        return;
    }
    echo "<details open><summary>$title</summary>\n";
    echo "<table>\n<thead><tr><th>Period</th><th>IPs (hits)</th></tr></thead>\n<tbody>\n";
    foreach ($records as $period => $ips) {
        echo "<tr><td>$period</td><td>";
        foreach ($ips as $ip => $cnt) echo "$ip ($cnt) ";
        echo "</td></tr>\n";
    }
    echo "</tbody></table></details>\n";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visit Stats Panel</title>
    <style>
        body{font-family:Arial,Helvetica,sans-serif;margin:1rem;background:#f9f9f9;color:#333}
        .container{max-width:960px;margin:auto;padding:1rem;background:#fff;border-radius:8px;box-shadow:0 2px 4px #0001}
        h1{margin-top:0}
        details{margin:1rem 0}
        table{width:100%;border-collapse:collapse;font-size:.9em}
        th,td{border:1px solid #ddd;padding:.4rem}
        th{background:#f2f2f2}
        .controls{display:flex;gap:.5rem;margin-bottom:1rem}
        .btn{padding:.4rem .8rem;border:none;border-radius:4px;background:#007bff;color:#fff;cursor:pointer}
        .btn:hover{background:#0056b3}
        .dark-mode{background:#222;color:#eee}
        .dark-mode th{background:#333}
        .dark-mode td{border-color:#444}
    </style>
</head>
<body>
    <div class="container">
        <h1>Visit Statistics</h1>

        <div class="controls">
            <button class="btn" onclick="location.reload()">Refresh</button>
            <button class="btn" id="toggleDark">Toggle Dark Mode</button>
        </div>

        <?php
        $total = $data['total'] ? $data['total']['totalVisits'] : 0;
        echo "<p><strong>Total visits:</strong> $total</p>";

        renderTable('Daily Visits',   $data['daily']);
        renderTable('Weekly Visits',  $data['weekly']);
        renderTable('Monthly Visits', $data['monthly']);
        ?>
    </div>

    <script>
        const btn = document.getElementById('toggleDark');
        btn.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });
    </script>
</body>
</html>
