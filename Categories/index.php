<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue.js DataTable Example</title>
    <!-- Include Bootstrap CSS -->
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Include Vue.js -->
    <!--    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>-->
    <script src="../assets/vue/vue@2.js"></script>
    <!-- Include jQuery (required by DataTables) -->
    <!--    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>-->
    <script src="../assets/js/jquery-3.6.4.min.js"></script>
    <!-- Include DataTables CSS and JS files -->
    <!--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">-->
    <link rel="stylesheet" type="text/css" href="../assets/datatables/dataTables.bootstrap4.min.css">
    <!--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>-->
    <script type="text/javascript" charset="utf8" src="../assets/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="../assets/datatables/dataTables.bootstrap4.min.js"></script>
</head>
<body>

<div id="app" class="container mt-5">
    <table id="categories-table" class="table table-bordered table-striped">
        <thead class="thead-dark">
        <tr>
<!--            <th>Id</th>-->
            <th>Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <!-- Data will be populated here -->
        </tbody>
    </table>
</div>

<script src="categories.js"></script>
</body>
</html>
