const endpoint = "http://jarkom/api/tasks";

// Function to fetch data from API
const fetchData = async () => {
    try {
        const response = await fetch(endpoint);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const result = await response.json();

        // Verifikasi apakah result.tasks adalah array atau langsung array result
        const data = Array.isArray(result.tasks) ? result.tasks : (Array.isArray(result) ? result : []);
        renderData(data);
    } catch (error) {
        console.error("Fetch error:", error);
    }
};

// Function to render data into the table
const renderData = (data) => {
    const dataList = document.getElementById("dataList");
    if (!dataList) {
        console.error("Element with ID 'dataList' not found!");
        return;
    }
    dataList.innerHTML = "";

    if (!Array.isArray(data)) {
        console.error("Data is not an array:", data);
        return;
    }

    data.forEach((item, index) => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${index + 1}</td>
            <td>${item.title || "N/A"}</td>
            <td>${item.notes || "N/A"}</td>
            <td>${item.category || "N/A"}</td>
            <td>${item.deadline || "N/A"}</td>
            <td>${item.status || "N/A"}</td>
            <td>
                <button onclick="deleteTask(${item.id})" class="btn btn-success">Hapus</button>
            </td>
        `;
        dataList.appendChild(row);
    });
};

// Function to handle delete
const deleteTask = async (id) => {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        try {
            const response = await fetch(`${endpoint}/${id}`, {
                method: "DELETE",
            });
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            fetchData(); // Refresh data after deletion
            console.log(`Deleted task: ${id}`);
        } catch (error) {
            console.error("Error deleting task:", error);
        }
    }
};

// Handle form submission
document.getElementById("dataForm").addEventListener("submit", async (e) => {
    e.preventDefault();
    const id = document.getElementById("id").value;
    const method = id ? "PUT" : "POST"; // Use PUT for update
    const url = id ? `${endpoint}/${id}` : endpoint;

    const formData = new FormData(e.target);
    const jsonData = Object.fromEntries(formData.entries());

    try {
        const response = await fetch(url, {
            method,
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(jsonData),
        });

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        e.target.reset(); // Clear form after successful submission
        fetchData(); // Refresh data after submit
    } catch (error) {
        console.error("Error updating data:", error);
    }
});

// Fetch data on page load (Optional, based on your needs)
fetchData();
