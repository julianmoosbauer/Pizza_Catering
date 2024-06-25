function applyDiscount() {
    const discountInput = document.getElementById('discount').value;
    const priceElement = document.getElementById('price');
    const originalPrice = 399;
    const discountPrice = 499;
    
    if (discountInput === 'Stefan20') {
        priceElement.innerText = discountPrice + ' €';
        document.getElementById('order-button').onclick = function() {
            window.location.href = 'https://www.paypal.me/jul0815/' + discountPrice;
        };
    } else {
        priceElement.innerText = originalPrice + ' €';
        document.getElementById('order-button').onclick = function() {
            window.location.href = 'https://www.paypal.me/jul0851/' + originalPrice;
        };
    }
}
