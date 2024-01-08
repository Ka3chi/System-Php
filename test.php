<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>test</title>
</head>
<body>
<!-- The Modal -->
<div id="userModal" style="display: none;">
    <!-- Modal content -->
    <div>
        <span onclick="closeModal()" style="cursor: pointer; float: right;">&times;</span>
        <h2>Create User</h2>
        <form id="userForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <!-- Change type to "button" to prevent form submission -->
            <button type="button" onclick="createUser()">Create User</button>
        </form>
    </div>
</div>

<script>
    // JavaScript to handle modal interactions
    function openModal() {
        document.getElementById('userModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('userModal').style.display = 'none';
    }

    function createUser() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        alert('Username: ' + username + '\nPassword: ' + password);

        // You can make an AJAX request here to send data to a PHP script
        // For simplicity, I'm using a basic alert instead
    }

    // Event listener for the button to open the modal
    document.getElementById('openModalBtn').addEventListener('click', openModal);
</script>

<script src="script.js"></script>
</body>
</html>