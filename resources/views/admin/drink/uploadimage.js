const imgUploadContainer = document.querySelector('#img-upload-container')
const listImgStart = document.querySelectorAll('#img-upload')
console.log(listImgStart);
imgInp.onchange = (e) => {
    listImgStart.forEach(imgStart => {
        imgStart.remove()
    })
    imgUploadContainer.innerHTML = ''
    const files = imgInp.files
    for (let i = 0; i < files.length; i++) {
        const file = files[i]
        const img = document.createElement('img')
        img.style = `
            width: 200px;
            height: 200px;
            object-fit: contain;
            margin-right: 10px;
            border-radius: 10px;
        `
        img.src = URL.createObjectURL(file)
        imgUploadContainer.appendChild(img)
    }
}
