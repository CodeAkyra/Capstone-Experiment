const wrapper = document.querySelector('.wrapper'),
    inputs = wrapper.querySelectorAll('.form input'),
    qrImg = wrapper.querySelector('.qr-code img'),
    generateBtn = wrapper.querySelector('.form button');

generateBtn.addEventListener("click", () => {
    let qrValues = [];

    inputs.forEach((input) => {
        if (input.value) {
            qrValues.push(input.value);
        }
    });

    if (qrValues.length === 0) return;

    let qrData = qrValues.join(" ");
    qrImg.src = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${qrData}`;
    wrapper.classList.add("active");
});