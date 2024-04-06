
document.getElementById("orderForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    // Generate random order number
    var orderNumber = Math.floor(Math.random() * 1000000);
    
    // Display order status
    document.getElementById("orderStatus").innerHTML = "Your order has been placed successfully. Order number: " + orderNumber;
    
    // Reset form
    document.getElementById("orderForm").reset();
  });