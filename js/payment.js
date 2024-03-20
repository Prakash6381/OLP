document.getElementById("paymentForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting normally
    
    // Get the entered amount
    var amount = document.getElementById("amount").value;
    
    // Redirect to payment process page with the amount
    window.location.href = "payment_process.php?amount=" + amount;
});
