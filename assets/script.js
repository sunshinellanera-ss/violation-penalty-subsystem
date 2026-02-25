const ctx = document.getElementById('monthlyChart');
if (ctx) {
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Monthly Violations',
                data: [12, 19, 8, 15, 10],
                backgroundColor: '#2563eb'
            }]
        }
    });
}
function logout() {
    window.location.href = "login.html";
}