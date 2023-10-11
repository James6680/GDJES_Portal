
// try {
//     console.log(data);
//   } catch (error) {
//     console.log(error.message);
//   }

const image = new Image();
image.src = 'images/pic.png';

image.onload = function() {
  // Display the image in an HTML element
  document.body.appendChild(image);
};