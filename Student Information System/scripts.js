document.getElementById('studentForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(event.target);
    const studentInfoDiv = document.getElementById('studentInfo');
    studentInfoDiv.innerHTML = '';

    formData.forEach((value, key) => {
        if (key !== 'photo' && key !== 'document' && key !== 'aadhaar') {
            const p = document.createElement('p');
            p.textContent = `${key.replace('_', ' ')}: ${value}`;
            studentInfoDiv.appendChild(p);
        }
    });

    // Preview uploaded photo
    const photoFile = formData.get('photo');
    const photoPreview = document.getElementById('photoPreview');
    if (photoFile) {
        const reader = new FileReader();
        reader.onload = function(e) {
            photoPreview.src = e.target.result;
            photoPreview.style.display = 'block';
        };
        reader.readAsDataURL(photoFile);
    }

    // Preview uploaded document name
    const documentFile = formData.get('document');
    const documentPreview = document.getElementById('documentPreview');
    if (documentFile) {
        documentPreview.textContent = `Document: ${documentFile.name}`;
    }

    // Preview uploaded Aadhaar name
    const aadhaarFile = formData.get('aadhaar');
    const aadhaarPreview = document.getElementById('aadhaarPreview');
    if (aadhaarFile) {
        aadhaarPreview.textContent = `Aadhaar: ${aadhaarFile.name}`;
    }

    document.getElementById('printButton').style.display = 'block';

    alert('Form submitted successfully!');
});
function printStudentInfo() { window.print();
}