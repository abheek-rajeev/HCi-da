// Add a click event listener to the "Order Now" button
const orderNowButton = document.querySelector('.button');
orderNowButton.addEventListener('click', () => {
  alert('Your order has been placed!');
});

// Change the color of the first menu item when it's hovered over
const firstMenuItem = document.querySelector('#menu li:first-child');
firstMenuItem.addEventListener('mouseover', () => {
  firstMenuItem.style.backgroundColor = 'lightgray';
});
firstMenuItem.addEventListener('mouseout', () => {
  firstMenuItem.style.backgroundColor = 'white';
});
