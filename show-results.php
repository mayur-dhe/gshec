<?php
if(!isset($_GET['token'])){
    header('Location: index.php');
    exit;
}
require 'layout/dhe/header.php';
require 'config/token.php';

$title = "Enrolment List with Excel Download";
?>
<body class="reading-pages">
<?php require 'layout/dhe/navbar.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col s6">
                <h2 class="text-center mb-4">List of Records</h2>
            </div>
            <div class="col s6">
                <h2 style="text-align: right;">
                    <button id="downloadBtn" class="btn btn-primary">Download as Excel</button>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="overflow-x: scroll;">
                <!-- Table to display the records -->
                <table class="table table-striped table-bordered" id="recordsTable">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Email ID</th>
                            <th>Work/Office Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Work Type</th>
                            <th>Name of Industry/Institution</th>
                            <th>Specify the broad area of industry/research/academics/etc. currently engaged with</th>
                            <th>Designation</th>
                            <th>CV</th>
                            <th>Profile Link</th>
                            <th>Permanent Address</th>
                            <th>Contact No</th>
                            <th>Type of Engagement with students and academic community</th>
                            <th>Frequency of visit to Goa</th>
                            <th>Local Address, if any</th>
                            <th>Name the industry/academic/institution/etc. in Goa to which professionally/academically collaborated, if any</th>
                            <th>Submitted At</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <!-- Pagination Controls -->
                <div class="pagination-container">
                    <button id="prevPage" class="btn btn-secondary">Previous</button>
                    <span id="pageInfo">Page 1</span>
                    <button id="nextPage" class="btn btn-secondary">Next</button>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script>
        let responses = [];
        let currentPage = 1;
        let totalPages = 1;
        const rowsPerPage = 10;
        let token = "<?php echo isset($_GET['token']) ? $_GET['token'] : ''; ?>";
        let fetchLastToken = '<?php echo $stored_tokens['fetch-last-token'] ?>';

        // Event listener for the download button
        document.getElementById('downloadBtn').addEventListener('click', () => {
            window.location.href = 'api/enrolScholarApi.php?type=export&token='+token;
        });
        

        // Fetch data when the page loads
        window.onload = () => {
            callApi({
                type: 'get-token',
                url: 'api/tokenApi.php?type=token&d='+fetchLastToken,
            });
            fetchData();
        };


        // Function to display the data in the table
        function populateTable(data, page = 1) {
            const rowsData = data.data;
            const totalRecords = data.totalRecords;
            const tableBody = document.querySelector('#recordsTable tbody');
            tableBody.innerHTML = '';  // Clear existing rows
            
            // Calculate the range of items to show
            const start = (page - 1) * rowsPerPage;
            let serialNumber = start + 1;  // Initialize serial number
            // Loop through the paginated data and create table rows
            rowsData.forEach(record => {
                const row = document.createElement('tr');
                // Create the first cell for the serial number
                const serialCell = document.createElement('td');
                serialCell.textContent = serialNumber++;  // Set and increment serial number
                row.appendChild(serialCell);
                // Manually define which columns to display
                const columns = [`name`, `email`, `address`, `city`, `state`, `country`, `work_type`, `work_name`, `area_of_work`, `designation`, `cv`, `profile_link`, `permanent_address`, `phone_no`, `type_of_eng`, `visit_freq`, `local_address`, `local_work`, `created_at`];
                // Loop through the columns and create table cells in the desired order
                columns.forEach(column => {
                    const cell = document.createElement('td');
                    cell.textContent = record[column] || '';  // Use the column key to fetch value
                    row.appendChild(cell);
                });
                // Append the row to the table body
                tableBody.appendChild(row);
            });

            // Update pagination info
            updatePaginationInfo(page, Math.ceil(totalRecords / rowsPerPage));
        }
        // Function to update pagination controls
        function updatePaginationInfo(page, total) {
            totalPages = total;
            document.getElementById('pageInfo').textContent = `Page ${page} of ${total}`;
            
            // Enable/disable buttons based on page
            document.getElementById('prevPage').disabled = page === 1;
            document.getElementById('nextPage').disabled = page === total;
        }
        // Event listeners for pagination buttons
        document.getElementById('prevPage').addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                fetchData();
            }
        });
        document.getElementById('nextPage').addEventListener('click', () => {
            if (currentPage < totalPages) {
                currentPage++;
                fetchData();
            }
        });

        // Fetch data from the backend API
        function fetchData() {
            callApi({
                type: 'get-data',
                url: 'api/enrolScholarApi.php?type=all&page='+currentPage+'&rowsPerPage='+rowsPerPage,
            });
        }

        // callApi({
        //     type: 'get-data',
        //     method: 'GET',
        //     url: 'api/api.php?type=all&page='+currentPage+'&rowsPerPage='+rowsPerPage,
        //     data: { key1: 'value1', key2: 'value2' },
        //     headers: {
        //                 'Content-Type': 'application/json',
        //             },
        // });
        function callApi({
            type = '',
            method = 'GET',
            url,
            data = {},
            headers = {}
        }) {
            fetch(url, {
                method: method,
                // body: JSON.stringify(data),
                // headers: headers,
            })
            .then(response => response.json())
            .then(data => {
                if(data.status == 200){
                    responses = data;
                    if (type == 'get-data') {
                        populateTable(responses, currentPage);
                    } else if (type == 'get-token') {
                        if (token != responses.data) {
                            window.location.href = 'index.php';
                        }
                    } else if (type == 'export-data') {
                        // do nothing
                    }
                } else {
                    console.log('Error fetching data:', data.message);
                }
            })
            .catch(error => console.error('Error fetching data:', error));
        }

    </script>
</body>
</html>
