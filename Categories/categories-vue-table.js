// vue-app.js


new Vue({
    el: '#app',
    mounted() {
        // Initialize DataTable
        this.initDataTable();
        $('.edit-btn').click(function(){
            alert("Clicked");
        });
    },
    methods: {
        initDataTable() {
            const self = this;
            // DataTable initialization
            const dataTable = $('#categories-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: './Search/', // Replace with your server-side API endpoint
                    type: 'POST',
                },
                columns: [
                    // {data: 'id'},
                    {data: 'name'},
                    {data: 'status'},
                    {
                        data: null,
                        render: function (data, type, row) {
                            // Action buttons
                            return `
                                <button class="btn btn-success edit-btn" onclick="editItem(${row.id})" data-id="${row.id}">Edit</button>
                                <button class="btn btn-danger delete-btn" onclick="deleteItem(${row.id})" data-id="${row.id}">Delete</button>
                                <button class="btn btn-info activate-btn" onclick="activateItem(${row.id})" data-id="${row.id}">${row.status === 'Active' ? 'Deactivate' : 'Activate'}</button>
                            `;
                        },
                    },
                ],
            });
        },
        addNew() {
            // Implement activate/deactivate logic
            console.log(`Toggle adding new category`);
        },
    },
});
