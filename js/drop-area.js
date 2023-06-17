const dropArea = document.querySelector('#drop-area');
const pointer = document.querySelector('.pointer');
const selectFileBtn = document.querySelector('#select-btn');
const fileInput = document.querySelector('#file-input');
const uploadBtn = document.querySelector('#upload-btn');

// Submit Form
uploadBtn.addEventListener('click', () => {
    dropArea.submit();
});

// On Drag and drop functionality
// When the file gets drag on drag area
dropArea.addEventListener('dragenter', e => {
    e.preventDefault();
    dropArea.classList.add('drag-enter');
});

// When the file gets drag out
dropArea.addEventListener('dragleave', e => {
    e.preventDefault();
    dropArea.classList.remove('drag-enter');
});

// When the file gets drag out
dropArea.addEventListener('dragover', e => {
    e.preventDefault();
});

// When the file gets droped
dropArea.addEventListener('drop', e => {
    e.preventDefault();
    const file = e.dataTransfer.files[0];
    const { name } = file;

    //
    dropArea.classList.remove('drag-enter');
    // Output file name
    dropArea.querySelector('p').textContent = name;
    uploadBtn.style.display = 'unset';

    // Transfer file to file input
    fileInput.files = e.dataTransfer.files;
});

// File Input
fileInput.addEventListener('change', e => {
    // Get File Data
    const file = e.target.files[0];
    const { name, size, type } = file;

    if (!type.includes('image')) {
        window.alert('Please select an image');
        e.target.value = '';
        return;
    }

    // Output file name
    dropArea.querySelector('p').textContent = name;
    uploadBtn.style.display = 'unset';
});

// Select Btn function
selectFileBtn.addEventListener('click', () => fileInput.click());

// Dropbox Effect
const trackCursor = e => {
    const mouseX = e.clientX;
    const mouseY = e.clientY;
    const reductX = dropArea.offsetLeft;
    const reductY = dropArea.offsetTop;
    const reductDimenion = 1300 / 2;

    pointer.style.top = `${mouseY - reductY - reductDimenion}px`;
    pointer.style.left = `${mouseX - reductX - reductDimenion}px`;
};

dropArea.addEventListener('mousemove', trackCursor);
