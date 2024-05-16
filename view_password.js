// Function to fetch and display passwords
function fetchPasswords() {
    fetch('get_passwords.php')
        .then(response => response.json())
        .then(data => {
            // Clear password list
            document.getElementById('passwordList').innerHTML = '';

            // Iterate over passwords and display them
            data.forEach(password => {
                const passwordItem = document.createElement('div');
                passwordItem.innerHTML = `
                    <p>Username: ${password.username}</p>
                    <p>Password: ${password.password}</p>
                `;
                document.getElementById('passwordList').appendChild(passwordItem);
            });
        })
        .catch(error => console.error('Error fetching passwords:', error));
}
window.addEventListener('load', fetchPasswords);
