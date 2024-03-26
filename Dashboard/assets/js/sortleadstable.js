document.addEventListener("DOMContentLoaded", function () {
    // Get the table element
    var table = document.querySelector(".table");

    // Get the table body
    var tbody = table.querySelector("tbody");

    // Get the rows from the table body
    var rows = tbody.querySelectorAll("tr");

    // Get the header cell for the "Time" column
    var timeHeader = table.querySelector(".text-center.text-uppercase.text-secondary.text-xxs.font-weight-bolder.opacity-7");

    // Initialize the sort order
    var sortOrder = 1; // 1 for ascending, -1 for descending

    // Add a button to the "Time" header
    var button = document.getElementById("buttonsort");
    
    button.addEventListener("click", function () {
    // Convert the NodeList of rows to an array
    var rowsArray = Array.from(rows);

    // Sort the array based on the timestamp in the third column
    rowsArray.sort(function (a, b) {
        var timeA = new Date(a.cells[2].textContent).getTime();
        var timeB = new Date(b.cells[2].textContent).getTime();

        return (timeA - timeB) * sortOrder;
    });

    // Remove existing rows from the table
    rowsArray.forEach(function (row) {
        tbody.removeChild(row);
    });

    // Append the sorted rows back to the table
    rowsArray.forEach(function (row) {
        tbody.appendChild(row);
    });

    // Toggle the sort order for the next click
    sortOrder *= -1;
    });

    // Append the button to the header cell
    timeHeader.appendChild(button);
});