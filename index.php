<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employees</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }
  .container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }
  h1 {
  text-align: center; 
  color: #333;
  border-bottom: 5px solid #333; 
  display: inline-block; 
  padding-bottom: 15px; 
  width: 100%; 
  box-sizing: border-box; 
}
  .employee {
    background-color: #f9f9f9;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .employee-details {
    flex: 1;
  }
  .view-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 5px 10px;
    border-radius: 3px;
    cursor: pointer;
  }
</style>
</head>
<body>
<div class="container">
  <h1>Employee List</h1>
  <div id="employee-list"></div>
</div>

<script>
fetch('http://localhost/api_employees/data.php')
  .then(response => response.json())
  .then(data => {
    const employeeList = document.getElementById('employee-list');
    data.result.forEach(employee => {
      const div = document.createElement('div');
      div.classList.add('employee');
      div.innerHTML = `
        <div class="employee-details">
          <h3>${employee.name}</h3>
          <p>${employee.position}</p>
        </div>
        <button class="view-button" onclick="viewEmployee(${employee.id})">View</button>
      `;
      employeeList.appendChild(div);
    });
  });

function viewEmployee(id) {
  window.location.href = `http://localhost/api_employees/data.php`;
}
</script>
</body>
</html>
