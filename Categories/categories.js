// your-vue-app.js

// Mock data for demonstration
const data = [
    {id: 1, name: 'Category 1', status: 'Active'},
    {id: 2, name: 'Category 2', status: 'Inactive'},
    // Add more data as needed
];

new Vue({
    el: '#app',
    mounted() {
        // Initialize DataTable
        this.initDataTable();
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
                                <button @click="edit(${row.id})">Edit</button>
                                <button @click="delete(${row.id})">Delete</button>
                                <button @click="activate(${row.id})">${row.status === 'Active' ? 'Deactivate' : 'Activate'}</button>
                            `;
                        },
                    },
                ],
            });
        },
        edit(id) {
            // Implement edit logic
            console.log(`Edit category with ID ${id}`);
        },
        delete(id) {
            // Implement delete logic
            console.log(`Delete category with ID ${id}`);
        },
        activate(id) {
            // Implement activate/deactivate logic
            console.log(`Toggle activation for category with ID ${id}`);
        },
    },
});
