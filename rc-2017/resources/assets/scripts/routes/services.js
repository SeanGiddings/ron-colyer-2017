export default {
  init() {
    // JavaScript to be fired on all pages
    lightGallery(document.getElementById('lightgallery-1'));
    lightGallery(document.getElementById('lightgallery-2'));
    lightGallery(document.getElementById('lightgallery-3'));
    lightGallery(document.getElementById('lightgallery-4'));
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
