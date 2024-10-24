function calculatePrice() {
    const floor = parseInt(document.getElementById('floor').value);
    const typePrice = parseInt(document.getElementById('type').value);
    const days = parseInt(document.getElementById('days').value);
    const discount = document.getElementById('discount').value;

    let rentalPrice = typePrice * days;

    if (floor > 5) {
        rentalPrice += 1000;
    }

    if (discount === 'member') {
        rentalPrice *= 0.9;
    } else if (discount === 'birthday') {
        rentalPrice -= 500;
    }

    rentalPrice = Math.max(rentalPrice, 0);

    document.getElementById('result').textContent = `Total Price: IDR ${rentalPrice}`;
}
