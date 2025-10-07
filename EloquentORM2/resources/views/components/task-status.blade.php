<div class="mb-4">
    <label for="taskStatus" class="block text-gray-700 font-semibold mb-2">Filter Tasks:</label>
    <select id="taskStatus" onchange="filterStatus()" name="status" class="w-full md:w-64 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option value="all" @if ($status=='all') selected @endif>All</option>
        <option value="completed" @if ($status == 'completed') selected @endif>Completed</option>
        <option value="pending" @if ($status == 'pending') selected @endif>Pending</option>
    </select>
</div>



<script>
    function filterStatus() {
        let status = document.getElementById('taskStatus').value;

        if (status === 'all') {
            location.href = "/tasks";
        } else {
            location.href = "/tasks?status=" + status;
        }
    }
</script>
